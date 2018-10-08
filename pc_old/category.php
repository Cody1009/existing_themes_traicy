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
?>
<?php if( $count % 6 == 3 && $count != 18) : ?>
	<div style="width: 100%; margin : 10px auto;">
		<?php get_template_part( 'ad-336-280-top' ); ?>
	</div>
<?php endif; ?>
<?php
		endwhile;
	?>

	<?php
		$t = $count % 3;
		for( $i=0; $i<(3-$t); $i++ ) {
			echo "<div class='catCards' style='background:none;'></div>";
		}
	 ?>

<?php	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
