<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf('<span class="catpage">' . single_cat_title( '', false ) . '</span>'.'の記事一覧' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<div class="allCategory">

<?php $count = 0; ?>
	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'content-archive' );
			$count++;
			if($count % 4 == 2): ?>
					<span class="sponsor">スポンサーリンク</span>
					<!--広告-->
					<div class="sponsorCard">
						<?php get_template_part('ad-336-280-bottom') ?>
					</div>
			 <?php endif;
		endwhile;
	?>

<?php	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>
