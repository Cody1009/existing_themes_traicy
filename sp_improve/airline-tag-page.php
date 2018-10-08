<?php
 // Template Name:airline-tags
 // 航空会社一覧の固定ページ
get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<div id="topic">
			<h2 class="main_category">航空会社一覧</h2>
			<ul class="airline_tag">
<?php
if(have_posts())
	echo get_post(get_the_id())->post_content;
?>
			</ul>
		</div> <!-- topic -->
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
