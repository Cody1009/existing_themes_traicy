<?php

/**
 * スタイルの読み込み
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	$imp = get_stylesheet_directory_uri();
	$imp .=  '/css/';
	$mtime = filemtime(get_stylesheet_directory() . '/css/main.css');
	wp_enqueue_style( 'parent-style', $imp . 'style_parent.css' );
	wp_enqueue_style( 'child-style',  $imp . 'main.css', array('parent-style'), $mtime);
}

/**
 * feedのみwpautopを適用させない
 */
if (is_feed()) {
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
}

/**
 * 続きを読むの文字数
 */
function custom_excerpt_length( $length ) {
	return 120;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * 文末の[…]を変更する
 */
function new_excerpt_more($more) {
	return '  ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


// FeedWordPress用のexcerpt用の処理
function excerpt_for_feedwordpress($postExcerpt) {
	$excerptLength = custom_excerpt_length('');
	$decodedExcerpt = strip_tags(html_entity_decode($postExcerpt, ENT_QUOTES, 'UTF-8'));
	if (mb_strlen($decodedExcerpt) <= $excerptLength) {
		return $decodedExcerpt;
	}
	return mb_substr($decodedExcerpt, 0, $excerptLength) . new_excerpt_more('');
}
add_filter('get_the_excerpt', 'excerpt_for_feedwordpress');


/**
 * フッターにウィジェットエリアを作る
 */

// 親テーマの関数をremoveする関数
function remove_twentytwelve_widgets_init() {
	remove_action('widgets_init', 'twentytwelve_widgets_init');
}

// 上記の関数をWordPressのinitに登録
add_action('init','remove_twentytwelve_widgets_init');

// カスタマイズした関数を有効化する
//add_action('widgets_init','twentytwelve_widgets_init_child');

function pj($data) {
	print_r(json_encode($data));
	exit;
}
// リリースカテゴリーのものはFeedに含めない
add_action('pre_get_posts', 'filter_for_feed');
function filter_for_feed($query) {
	if (!$query->is_feed() && !$query->is_home()) {
		return;
	}
	$filterCatSlug = 'release';
	$catData = get_category_by_slug($filterCatSlug);
	$filterCatId = sprintf('-%d', $catData->cat_ID);
	$query->set('cat', $filterCatId);
	return $query;
}

/**
 * リリースカテゴリーの記事のリンクの表示を置換
 * これに加えてRedirectionプラグインで"/release/(.*)$"へのアクセスを"/archives/$1"へ
 * リダイレクト(307 Path Through)させることで、擬似的にリリースカテゴリーのみパーマリンクをカスタムしている
 */
add_filter('post_link', 'replacePermalinkForRelease', 10, 2);
function replacePermalinkForRelease($permalink, $post) {
	$categories = array_filter(
		wp_get_post_categories($post->ID),
		function($c) {
			$cat = get_category($c);
			return ($cat->slug === 'release');
		}
	);
	if (empty($categories)) {
		return $permalink;
	}
	return _formatReleasePostLink($permalink);
}
// リリースカテゴリーの記事のリンクの表示を置換
function _formatReleasePostLink($link, $before = 'archives', $after = 'release') {
	$fmtLink = function($str) { return sprintf('/%s/', $str); };
	return str_replace($fmtLink($before), $fmtLink($after), $link);
}


#---------------------------------------------------------------
# RSSフィード(feed)の配信
#
#   フィードを追加するときは以下の$all_feedsに名前を追加して下さい
#
#   各要素に登録した名前を基に
#     www.traicy.com?feed=<フィードの名前>
#   が要求されたとき
#     <テーマディレクトリ>/feeds/feed-<フィードの名前>.php
#   を返すように設定します
#---------------------------------------------------------------
$all_feeds = array(
  "facebook",
  "feedly",
  "gunosy",
  "livedoor",
  "mapion",
  "mixi",
  "navitime-plat",
  "newspass",
  "skyticket",
  "smartnews",
  "starthome",
  "yomerumo",
  "gunosy-v3",
  "line",
	"korea",
	"ameba"
);

foreach($all_feeds as $feed_name){
  add_action("do_feed_{$feed_name}", "load_feed_template", 10, 2);
}
function load_feed_template($is_comment_feed, $feed_name) {
  $feed_template = "wp-content/feeds/feed-{$feed_name}.php";
  load_template( $feed_template );
}

//画像アップエラー対策
add_filter('upload_post_params', 'custom_upload_post_params');
function custom_upload_post_params( $post_params )
{
	$post_params["short"]=0;
	$post_params["fetch"]=1;
	return $post_params;
}
//ヘッダーからwpバージョン削除
remove_action('wp_head', 'wp_generator');

//ヘッダーからEditURI を削除
remove_action('wp_head', 'rsd_link');

//ヘッダーからwlwmanifest を削除
remove_action('wp_head', 'wlwmanifest_link');

// アドセンスを非表示にする記事かどうかを判定する
function is_NoAdsense(){
	// カテゴリごと
	$category = get_the_category();
	$cat_id = $category[0]->cat_ID;
	if ($cat_id == 7786) {
		return true;
	}
	return false;
}

/* jsを非同期にする
if (!(is_admin() )) {
function add_async_to_enqueue_script( $url ) {
		if ( FALSE === strpos( $url, '.js' ) ) return $url;
		if ( strpos( $url, 'jquery.min.js' ) ) return $url;
		return "$url' async charset='UTF-8";
}
add_filter( 'clean_url', 'add_async_to_enqueue_script', 11, 1 );
}
 */

/* 記事ページ内ページャー制御 */

function custom_wp_link_pages() {

	$defaults = array(
		'before' => '<div class="page-numbers">',
		'after' => '</div>',
		'link_before' => '',
		'link_after' => '',
		'next_or_number' => 'number',
		'separator' => ' ',
		'nextpagelink' => __( '次のページ »' ),
		'previouspagelink' => __( '« 前のページ' ),
		'pagelink' => '<span class="numbers">%</span>',
		'echo' => 1
	);
	return $defaults;
}
add_filter( 'wp_link_pages_args', 'custom_wp_link_pages');


/* ページャー以降の本文もfeedに読み込ませる　http://unguis.cre8or.jp/web/1279 */
function ftf_full_text_for_feeds($content) {
	if (!is_feed()) return $content;
	global $post;
	$content = $post->post_content;
	return $content;
}
add_filter( 'the_content', 'ftf_full_text_for_feeds', -100);

/**
 * スラッグの自動生成
 */
add_action('transition_post_status', 'triming_slug', 10, 3);
function triming_slug($new_status, $old_status, $post){
	if ($new_status === 'publish' && $old_status !== 'publish') {
		$now = new DateTime();
		$newpost = array();
		// ここでスラッグを指定
		$newpost['post_name'] = $now->format('Ymd') . $post->ID;
		$newpost['ID'] = $post->ID;
		wp_update_post($newpost);
	}
}

/* 続きを読む */

remove_filter( 'the_excerpt', 'wpautop' );

/*wp_social_bookmarkingのプラグインを除去　鎌田寛　20160628*/
function wp_sb_light(){
	$options = wp_social_bookmarking_light_options();
	$out = wp_social_bookmarking_light_output( $options['services'], get_permalink(), get_the_title() );
	echo $out;
}

//ここから 固定ページにphpを読み込ませるための関数
function Include_my_php($params = array()) {
	extract(shortcode_atts(array(
		'file' => 'default'
	), $params));
	ob_start();
	include(get_theme_root() . '/' . get_template() . "/$file.php");
	return ob_get_clean();
}

add_shortcode('myphp', 'Include_my_php');
//ここまで

/**
 * titleを削る
 */
function shortingTitle($input, $max){
	if(mb_strlen($input) > $max)	echo mb_substr($input,0,$max),'...';
	else	echo($input);
}

/**
 * トップページに謎の空白ができてしまう現象を対処する
 */
add_filter( 'show_admin_bar', '__return_false' );


// パンくずリスト
function breadcrumb($do_echo = true){
	global $post;
	$str ='';
	if(!is_home()&&!is_admin()){
		$str.= '<div id="breadcrumb" class="cf"><div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;">';
		$str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i>
Traicy</span></a>&nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;</div>';
		if(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a>&nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;</div>';
				}
			}
			$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a>&nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;</div>';
		} elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a>&nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;</div>';
				}
			}
		} elseif(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a>&nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;</div>';
				}
			}
			$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a></div>';
		} else{
			$str.='<div>'. wp_title('', false) .'</div>';
		}
		$str.='</div>';
    }

    if ($do_echo) {
      echo $str;
    } else {
      return $str;
    }
}

//プラグインのサンプルと違い適当なフックがないので、
//Sample_Cronクラスが存在しなかったらWP-Cronイベントを削除します
if (! class_exists("kakakuAPI")){
	wp_clear_scheduled_hook('daily_kakakuApi_event');
} else {
	new kakakuAPI;
}

class kakakuAPI{
	function __construct(){
		add_action('wp', array($this, 'set_kakakuApi_cron'));
		add_action('daily_kakakuApi_event', array($this, 'daily_kakakuApi_action'));
	}

	function set_kakakuApi_cron() {
		// イベントが未登録なら登録する
		if(! wp_next_scheduled('daily_kakakuApi_event')){
			wp_schedule_event(time(), 'daily', 'daily_kakakuApi_event');
		}
	}
	function daily_kakakuApi_action() {
		define( 'WIFI_DAILY', 'wifiDaily' );

		$contries = [102,94,6,100,113,61];
		$base_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&";
		$param = array(
		  "country" => 0,
		  "use_days" => 1,
		  "compensationType" => 7001,
		  "receipt" => 1,
		  "return" => 1
		);
		// var_dump($param);
		$options = [];
		foreach ($contries as $countryId) {
		  $param["country"] = $countryId;
		  // var_dump( $param );
		  $url = $base_url . http_build_query($param);
		  $file = file_get_contents($url);
		  $xml = preg_replace('/&(?=[a-z_0-9]+=)/m','&amp;',$file);
		  $xmlData = simplexml_load_string($xml);
		  $tmp = (array)($xmlData -> serviceList -> service[0] -> rentalFee);
		  array_push( $options , $tmp[0]);
		}
		array_push( $options, date('Y/m/d H:i:s') );
		update_option( WIFI_DAILY, $options );
	}
}

add_action('future_to_publish', 'add_revision');
add_action('publish_post', 'add_revision');
add_action('trash_post', 'delete_revision');
/**
 * 記事の投稿時，revision値を付与
 * feedで使用
 */
function add_revision($post_id){
  if( !add_post_meta($post_id , '_revision' , 0 , true) ){
    $num = get_post_meta( $post_id , '_revision');
    update_post_meta($post_id , '_revision' , (int)$num[0] + 1);
  }
}
function delete_revision($post_id){
  update_post_meta($post_id, '_revision' , -1);
}

//現在のページ数の取得
function get_page_number() {
    global $pages, $page, $numpages;
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
    return [ $paged, $numpages ];
}

// 検索ページから固定ページの削除
function my_posts_per_page($query) {
  if( is_search() ) {
    $query->set( 'post_type', array('post', 'news') );
  }
}
add_action( 'pre_get_posts', 'my_posts_per_page' );

function my_posy_search($search) {
  if(is_search()) {
    // post_type='news'も検索結果に含める
    $search .= " AND (post_type = 'post' OR post_type='news')";
  }
  return $search;
}
add_filter('posts_search', 'my_posy_search');

/**
 *  * 画像のURLからattachemnt_idを取得する
 *  *
 *  * @param string $url 画像のURL
 *  * @return int attachment_id
 *  */
function get_attachment_id($url)
{
	  global $wpdb;
		$sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
		preg_match('/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches);
		$post_name = $matches[1];
		return (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
}

function generate_catCards( $link, $title, $thumb, $content ) {
  echo '<div class="catCards">';
  echo '<a href="' . $link . '">';
  echo '<h1>' . $title . '</h1>';
  if ( $thumb == NULL ) {
    $thumb = "https://www.traicy.com/images/traicy_talk.jpg";
  }
  echo '<img width="200" height="133" src="' . $thumb . '" class="attachment-medium size-medium wp-post-image" />';
  echo '<p>' . $content . '</p>';
  echo '</a>';
  echo '</div>';
}
