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
		<?php /*get_template_part('form');*/ ?>
    <?php get_template_part('wifiarticle'); ?>
  </div><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>
