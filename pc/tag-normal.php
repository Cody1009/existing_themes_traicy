	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
<!-- タグページの装飾はここだよ! -->
				<div class="tag-description">
					<?php $tag_description = tag_description();?>
					<?php if( !empty($tag_description) ): ?>
						<h2><?php single_tag_title(); ?></h2>
						<div><?php echo $tag_description;?></div>
					<?php endif; ?>
				</div>
<!-- タグページの装飾はここまでだよ! -->
				<h1 class="archive-title"><?php printf(single_tag_title( '', false ).'の記事一覧' ); ?></h1>

			</header><!-- .archive-header -->


<div class="allCategory">

	<?php
		$count = 0;
		while ( have_posts() ) : the_post();
			get_template_part( 'content-archive' );
			$count++;
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

		<?php
			$tag = get_the_tags();
			$slug = $tag[0]->slug;

			$traicy_talk = get_option( "traicy_talk" );
			$thres = $traicy_talk[ $slug ];
		?>
<?php if ( $thres != NULL ) : ?>
		<h2 class="main_category" style="margin-bottom: 10px;">Traicy Talkと関連のあるページ</h2>
		<div class="allCategory">
			<div id="traicytag_include_talk">
		<?php
				foreach ($thres as $thre) {
					generate_catCards( "https://talk.traicy.com/thres/".$thre[0]["id"], $thre[0]["title"], $thre[0]["thumb"]["url"], $thre[0]["content"] );
				}
?>
			</div>
		</div>
<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->
