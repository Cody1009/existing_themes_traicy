<?php
// エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
	//ini_set('display_errors',1);
?>


<?php
$args=array(
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
	'wpp_start' => '<div class="ranking">',
	// HTMLのwrapper　終了タグ
	'wpp_end' => '</div>',
	// サムネイル画像の幅
	'thumbnail_width' => '120',
	// サムネイル画像の高さ
	'thumbnail_height' => '80',
	// HTML部分
	'post_html' => '
	<article class="item">
	<a href="{url}">
	<div class="titleLeft"><div>
	{text_title}
	<br>
	<div>{date}</div>
	</div></div>
	<div class="thumbRight">{thumb_img}</div>
	</a>
	</article>'
);
if(!is_single( $post )){
	echo '<span class="rankingTitle">人気記事</span>';
	wpp_get_mostpopular($args);
}else{
	$categories=get_the_category();
	echo '<span class="rankingTitle">'.$categories[0]->cat_name.'の人気記事</span>';
	$args['cat']=$categories[0]->term_id;
	wpp_get_mostpopular($args);
}
?>

<?php get_template_part('ad-sidebar');?><!-- ランキング -->

<?php
if(is_single( $post )){
	unset($args['cat']);
	echo '<span class="rankingTitle">人気記事</span>';
	wpp_get_mostpopular($args);
}
?>
