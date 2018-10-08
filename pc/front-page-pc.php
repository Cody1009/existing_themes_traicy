

<?php //サイト上部 ?>
<?php get_template_part('compe-box-pc'); ?>
<div class="fackMargin"></div>

<div id="primary" class="site-content">
	<div id="content" role="main">	
<?php //600px以下の場合表示終了 ?>

<!-- ad st -->
<?php get_template_part('ad-336-280-top'); ?>
<!-- ad en -->

<?php/**
* キャンペーン情報
 */ ?>
	<div class="fackMargin"></div>
<?php get_template_part('campaign-infomation'); ?>
	<div class="fackMargin"></div>

<!-- ad st -->
<?php get_template_part('ad-336-280-bottom'); ?>
<!-- ad en -->

	<div class="fackMargin"></div>
<!-- お知らせ -->
<?php get_template_part('notice'); ?>
<!-- お知らせ -->

	</div><!-- #content -->
</div><!-- #primary -->

