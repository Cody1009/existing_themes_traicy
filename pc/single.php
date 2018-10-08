<?php get_header(); ?>

<?php global $myAmp; ?>


	<div id="primary" class="site-content">
		<div id="content" role="main" >

<?php //著者情報と画像の処理 ?>
<?php if(!$myAmp) : ?>
			<meta itemprop="description" content="<?php echo get_post_meta($post->ID, _yoast_wpseo_metadesc, true); ?><?php $myExcerpt = get_the_excerpt(); if ($myExcerpt != '') {echo htmlspecialchars($myExcerpt, ENT_QUOTES);} ?>" />
			<meta itemprop="image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
<?php endif;?>

<?php while ( have_posts() ){
	the_post();
	/* get_post_format()は投稿フォーマットを返す関数　content.phpのほうで記事の表示は行っている */
	get_template_part( 'content', get_post_format() );
} ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php if(!$myAmp): ?>
	<?php get_sidebar(); ?>
  <?php get_footer(); ?>
<?php endif; ?>
