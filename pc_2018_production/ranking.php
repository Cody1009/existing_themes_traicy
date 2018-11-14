<?php
// エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
//ini_set('display_errors',1);
?>


<?php
$args = array(
    // PV集計期間（daily, weekly, monthly, all から選べます）
    'range' => 'daily',
    // PV数順で並び替え（comments を指定するとコメント順になります）
    'order_by' => 'views',
    // post OR page
    'post_type' => 'post',
    // 表示数
    'limit' => 5,
    // 日付
    'stats_date' => 1,
    'stats_date_format' => 'F j 日',
    // HTMLのwrapper　開始タグ
    'wpp_start' => ' <div class="popular-articles">',
    // HTMLのwrapper　終了タグ
    'wpp_end' => '</div>',
    // サムネイル画像の幅
    'thumbnail_width' => '110',
    // サムネイル画像の高さ
    'thumbnail_height' => '80',
    // HTML部分
    'post_html' => '
	<article class="small-popular-article">
    <a href="{url}" class="small-popular-article-photo">
        <div class="popularity-tag"></div>
         {thumb_img}
    </a>
    <a href="{url}" class="small-popular-article-text">
        {text_title}
    </a>
   </article>'

);
if (!is_single($post)) {
    echo '<p class="headline-ja"  style="margin-top: 30px;">人気記事</p>';
    wpp_get_mostpopular($args);
} else {
    $categories = get_the_category();
    echo '<span class="headline-ja" style="margin-top: 30px;">' . $categories[0]->cat_name . 'の人気記事</span>';
    $args['cat'] = $categories[0]->term_id;
    wpp_get_mostpopular($args);
}
?>

<?php get_template_part('ad-sidebar'); ?><!-- ランキング -->

<?php
if (is_single($post)) {
    unset($args['cat']);
    echo '<span class="headline-ja" style="margin-top: 30px;">人気記事</span>';
    wpp_get_mostpopular($args);
}
?>
