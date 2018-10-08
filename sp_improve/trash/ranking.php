<?php
// エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
	//ini_set('display_errors',1);
?>

<?php
	$categoryArticle = get_the_category();
$tmp = $categoryArticle[0] -> cat_ID;
$tmp = 0;
	if($tmp == 1433){
		$category = array(1433);
		echo '<span class="rankingTitle">アクセスランキング(航空)</span>';
	}else if($tmp == 82){
		$category = array(82);
		echo '<span class="rankingTitle">アクセスランキング(セール)</span>';
		
	}else if($tmp == 1844){
		$category = array(1844);
		echo '<span class="rankingTitle">アクセスランキング(運行情報)</span>';

	}else if(($tmp == 213) or ($tmp == 870) or ($tmp == 243) or ($tmp == 7) or ($tmp == 242)){
		$category = array(213,870,243,7,242);
		echo '<span class="rankingTitle">アクセスランキング(乗り物)</span>';

	}else{
		$category = array(0);
		echo '<span class="rankingTitle">アクセスランキング</span>';
	}
?>

<ul class="hide_u600">
<div class="ranking">

<?php /*
<?php if(function_exists('sga_ranking_get_date')) : ?>

<?php
if( is_home() ){
		$args = array(
		'display_count' => 5,
		'period'        => 0,
		'post_type'     => 'post',
	);
}else{
	$category = get_the_category();
	$args = array(
		'display_count' => 5,
		'period'        => 0,
		'post_type'     => 'post',
		'category__in'  => $category[0] -> name,
	);
}
	$ranking_data = sga_ranking_get_date($args);
?>

<?php for($i=1;$i<=5;$i++) : ?>
<?php $post = get_post($ranking_data[$i-1]); ?>
	<div class="item">
			<div class="rank">
				<?php echo $i; ?>
			</div>
		<a href =" <?php the_permalink($post); ?> ">
			<div class="titleLeft">
				<div>
<?php shortingTitle(get_the_title($post), 60); ?>
					<br>
<div><?php the_time('n月j日（D）'); ?></div>
				</div>
			</div>
			<div class="thumbRight">
<?php
if( has_post_thumbnail($post) ) {
	the_post_thumbnail('thumbnail',$post);
}else {
	echo '<img src="'.get_stylesheet_directory_uri().'/images/dummy_600_400.jpg">';
}
?>
			</div>
		</a> <!-- the_permalink($post) -->
	</div>
<?php endfor; ?>

<?php else : ?>

<?php
/* ここから下は
 * パソコン用のサイドバー用のランキングボックス
 */ ?>

<?php
	$posts = wmp_get_popular( array( 'limit' => 5, 'post_type' => 'post', 'range' => 'daily' ) );

	$i = 0;
	if ( count( $posts ) > 0 ): foreach ( $posts as $post ): setup_postdata( $post );
		$i++;
?>
	<article class="item">
		<a href =" <?php the_permalink(); ?> ">
			<div class="titleLeft">
				<div>
<?php shortingTitle(get_the_title(), 60); ?>
					<br>
<div><?php the_time('n月j日（D）'); ?></div>
				</div>
			</div>
			<div class="thumbRight">
<?php
if( has_post_thumbnail() ) {
	the_post_thumbnail('thumbnail');
}else {
	echo '<img src="'.get_stylesheet_directory_uri().'/images/dummy_600_400.jpg">';
}
?>
<?php if($i == 1) : ?>
			<div class="rank" style = "background : rgba(255, 88, 196, 0.9);">
				<?php echo $i; ?>
			</div>
<?php elseif($i == 2) : ?>
			<div class="rank" style = "background: rgba(245, 171, 31, 0.9);">
				<?php echo $i; ?>
			</div>
<?php elseif($i == 3) : ?>
			<div class="rank" style = "background: rgba(255, 121, 37, 0.9)">
				<?php echo $i; ?>
			</div>
<?php else : ?>
			<div class="rank">
				<?php echo $i; ?>
			</div>
<?php endif; ?>
			</div>
		</a>
	</article> <!-- item -->
<?php
	endforeach; endif; wp_reset_postdata();
?>

</div> <!-- ranking -->
</ul> <!-- hide_u600 -->

