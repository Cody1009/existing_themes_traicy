<?php
/**
 * Template Name: mailmagazine_title
 * API for mail magazine.
*/
$args=array(
	'range' => 'daily',
	'order_by' => 'views',
	'post_type' => 'post',
	'limit' => 1,
	'stats_date' => 0,
	'wpp_start' => '<ul>',
	'wpp_end' => '</ul>',
	'title_by_words' => 1,
	'title_length' => 20,
	// HTML部分
	'post_html' => '{text_title}'
);
wpp_get_mostpopular($args);
?>
