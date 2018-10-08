<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="catCards ">
<a href="<?php the_permalink(); ?>">
		<h1><?php echo $post -> post_title; ?></h1>
		<?php the_post_thumbnail('medium'); ?>
		<p><?php echo mb_substr(strip_tags($post-> post_content),0,150).'...'; ?></p>
</a>
</div>

<?php wp_reset_query(); ?>
