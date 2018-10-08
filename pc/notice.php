

<div id="topic" class="hide_u600">
	<h2 class="main_category">お知らせ</h2>
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
			<li class="active">
				<div class="title4" ><?php the_title(); ?> ( <?php echo get_the_date(); ?> ) </div>
			</li>
		</a>
<?php
		endforeach;
	endif;
?>
	</ul>
</div> <!-- topic -->

