<div id="topic">
	<h2 class="main_category">ー お知らせ ー</h2>
	<ul class="contents information">
<?php
	$termId = get_category_by_slug('information')->term_id;
	$catArchiveUrl = get_term_link($termId , 'category'); //カテゴリーアーカイブのURL
	$args = array(
		'numberposts' => 5,
		'cat'=> $termId
	);
	$customPosts = get_posts($args);
	if($customPosts) :
		foreach($customPosts as $post) :
			setup_postdata( $post );
?>
		<a href="<?php the_permalink(); ?>">
			<span class="notice-date"><?php echo get_the_date(); ?></span>
			<li class="notice"><?php the_title(); ?> </li>
		</a>
<?php
		endforeach;
	endif;
?>
	</ul>
</div> <!-- topic -->
