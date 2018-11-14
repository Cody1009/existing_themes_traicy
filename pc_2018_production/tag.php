<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php
$term = get_queried_object();
/* tagの数が100以上だったら別の表示をする */
if($term->count>100){
	require('tag-famous.php');
}else{
	require('tag-normal.php');
}
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
