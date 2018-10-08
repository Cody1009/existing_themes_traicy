<section id="primary" class="site-content">
	<div id="content" role="main">

	<?php if ( have_posts() ) : ?>
		<header class="archive-header">

			<div class="tag-description"><!-- タグページの装飾{{{ -->
				<?php $tag_description = tag_description();?>
				<?php if( !empty($tag_description) ): ?>
					<h2><?php single_tag_title(); ?></h2>
					<div><?php echo $tag_description;?></div>
				<?php endif; ?>
			</div><!-- タグページの装飾}}} -->

			<h1 class="archive-title"><?php printf(single_tag_title( '', false ) ); ?></h1>
		</header><!-- .archive-header -->

		<div id="famoustag"> <!-- famoustag{{{ -->
			<ul id="famoustag-tab-menu">
			  <li class="active">新着一覧</li>
			  <li>人気記事</li>
			  <li>セール</li>
			</ul>

			<div id="famoustag-tab-box"> <!-- {{{ -->
				<div class="allCategory"> <!-- {{{ -->
					<?php
						$count = 0;
						while ( have_posts() ) : the_post();
							get_template_part( 'content-archive' );
							$count++;
						endwhile;

						$t = $count % 3;
						for( $i=0; $i<(3-$t); $i++ ) {
							echo "<div class='catCards' style='background:none;'></div>";
						}
					 ?>
					<?php	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				</div> <!-- }}} -->

<?php
$args=array(
	// PV集計期間（daily, weekly, monthly, all から選べます）
	'range' => 'all',
	// PV数順で並び替え（comments を指定するとコメント順になります）
	'order_by' => 'views',
	// post OR page
	'post_type' => 'post',
	// 表示数
	'limit' => 18,
	// 日付
	'stats_date' => 1,
	'stats_date_format' => 'F j 日',
	// HTMLのwrapper　開始タグ
	'wpp_start' => '<div class="passive allCategory">',
	// HTMLのwrapper　終了タグ
	'wpp_end' => '</div>',
	// サムネイル画像の幅
	'thumbnail_width' => '200',
	'excerpt_length' => 80,
	// タグ絞込
	'taxonomy' => 'post_tag',
	'term_id' => $wp_query->query_vars['tag_id'],
	// HTML部分
	'post_html' => '
	<div class="catCards">
		<a href="{url}">
			<h1>{text_title}</h1>
			{thumb_img}
			<p>{summary}</p>
		</a>
	</div>'
);
wpp_get_mostpopular($args);
?>
				<div class="allCategory passive"> <!-- tagかつセール{{{ -->
<?php
$count = 0;
$my_query = new WP_Query(array(
	'tax_query' => array(
		'post_type' => 'post',
		'relation' => 'AND',
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array( 'sale' ),
		),
		array(
			'taxonomy' => 'post_tag',
			'field' => 'term_id',
			'terms' => array($wp_query->query_vars['tag_id'])))
		));
if ( have_posts() ) :
	while ( $my_query->have_posts() ) : $my_query->the_post();
?>
<div class="catCards ">
<a href="<?php the_permalink(); ?>">
		<h1><?php echo $post -> post_title; ?></h1>
		<?php the_post_thumbnail('medium'); ?>
		<p><?php echo mb_substr(strip_tags($post-> post_content),0,150).'...'; ?></p>
</a>
</div>
<?php
endwhile;
else:
	echo "<p>none</p>";
endif;
wp_reset_query();
?>
				</div> <!-- }}} -->

			</div> <!-- }}} -->
		</div> <!-- famoustag}}} -->

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

<script>
$(function() {
	//クリックした時の動作
	$('#famoustag-tab-menu > li').click(function() {
		var index = $('#famoustag-tab-menu > li').index(this);
		//全てのtabの非表示を有効
		$('#famoustag-tab-box > div').addClass('passive')
		//現在のtabの非表示を無効
		$('#famoustag-tab-box > div').eq(index).removeClass('passive');

		//全てのtab listのマークを無効
		$('#famoustag-tab-menu > li').removeClass('active');
		//現在のtab listをマーク
		$(this).addClass('active')
	});
});

$(function() {
	$('#traicytag_include_talk a').click(function() {
  	return ga('send', {
    	hitType: 'event',
    	eventCategory: 'traicytag-include-talk',
    	eventAction: 'click',
    	eventLabel: 'BoW-by-page-keyword'
  	});
	});
});

</script>
