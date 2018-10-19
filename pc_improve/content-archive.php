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

<div id="article-card-content-archive">
    <a href="<?php the_permalink(); ?>">
        <div class="article-image">
            <?php
            if (has_post_thumbnail($id)) {
                echo '<img  class = "article-image"  src="', get_the_post_thumbnail_url($id, array(268, 180)), '">';
            } else {
                echo '<img  class = "article-image" src="' . get_stylesheet_directory_uri() . '/images/dummy_600_400.jpg">';
            }
            ?>
        </div>
        <div class="article-card-title-content-archive">
            <?php echo $post->post_title; ?>
        </div>
    </a>
</div>

<?php wp_reset_query(); ?>
