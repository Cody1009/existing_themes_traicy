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
<head>
	<style>
	</style>
</head>


<div class="catCards ">
<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('medium'); ?>
	   <h1><?php echo $post -> post_title; ?></h1>
		<p><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
</a>
</div>

<?php wp_reset_query(); ?>
