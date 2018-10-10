<?php
/*
Template Name: new-entry
 */
?>
<?php get_header() ?>

<section id="primary" class="site-content">
	<div id="content" role="main">
		<?php the_post() ?>

		<header class="archive-header">
			<h1 class="archive-title"><?php printf( the_title() .'一覧' ); ?></h1>
			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
		</header><!-- .archive-header -->

<?php
$args = array(
	'posts_per_page' => 18,
	'order'=> 'DSC',
	'paged' => $paged
);
query_posts( $args );
$count = 0;
?>

		<div class="allCategory">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="catCards ">
				<a href="<?php the_permalink(); ?>">
					<h1><?php echo $post -> post_title; ?></h1>
					<?php the_post_thumbnail('thumnail'); ?>
					<p><?php echo mb_substr(strip_tags($post-> post_content),0,150).'...'; ?></p>
				</a>
			</div>
			<?php $count++; ?>
			<?php
				if( $count % 6 == 3 && $count !== 18 ) : ?>
				<div style="height : 10px; width : 100%;"></div>
					<div style="padding-left : 10px;">
				<?php	get_template_part( 'ad-336-280-top' ); ?>
					</div>
				<div style="height : 10px; width : 100%;"></div>
				<?php endif; ?>
		<?php endwhile; endif; ?>

<?php if( $count % 3 == 1) : ?>
<?php for( $i = 0; $i < 2; $i++) : ?>
		                    <div class="catCards" >
		                        <a href = "<?php the_permalink(); ?>" >
		                            <h1 > 空記事</h1 >
		                            <img src = "<?php get_stylesheet_directory_uri() ;?>/images/logo.gif" >
		                            <p > 空記事</p >
		                            <a >
		                    </div >
<?php endfor; ?>
<?php elseif( $count % 3 == 2 ) : ?>
	<div class="catCards" >
			<a href = "<?php the_permalink(); ?>" >
					<h1 > 空記事</h1 >
					<img src = "<?php get_stylesheet_directory_uri() ;?>/images/logo.gif" >
					<p > 空記事</p >
					<a >
	</div >
<?php endif; ?>

		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }?>

		</div>

		<?php wp_reset_query(); ?>

	</div><!-- #content -->
</section><!-- #primary -->

<?php get_sidebar() ?>
<?php get_footer() ?>
