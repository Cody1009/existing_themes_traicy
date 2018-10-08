<?php get_header(); ?>
<?php //サイト上部 ?>
<?php get_template_part('desktop-lp-banner'); ?>
<?php get_template_part('compe-box-pc'); ?>

<div style="height:20px;"></div>

<div id="primary" class="site-content">
	<div id="content" role="main">
	<!-- ad st -->
	<?php get_template_part('ad-336-280-top'); ?>
	<!-- ad en -->

	<div class="fackMargin"></div>

	<?php/* キャンペーン情報*/ ?>
	<?php get_template_part('campaign-infomation'); ?>

	<!-- ad st -->
	<?php get_template_part('ad-336-280-bottom-front'); ?>
	<!-- ad en -->

	<!-- 航空会社 -->
	<div id="topic" style="margin-top: 30px;">
		<h2 class="main_category">航空会社の記事一覧（タグページ）</h2>
		<div class="airline_tags">
			<?php include('airline-tag-short.php'); ?>
		</div>
	</div>
	<!-- 航空会社 -->

	<div class="fackMargin"></div>

	<!-- お知らせ -->
	<?php get_template_part('notice'); ?>
	<!-- お知らせ -->

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
