<?php get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
<!-- top -->
<?php get_template_part('slider-menu'); ?>
<!-- top -->

<!-- ad st -->
<!-- スマフォ版 -->
<div class="sp_ad">
	<center>
<script async defer src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Traicy-New-Top-ArticleFooter-left -->
	<ins class="adsbygoogle"
		style="display:inline-block;width:300px;height:250px"
		data-ad-client="ca-pub-3121993718200907"
		data-ad-slot="7111125932"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
	</center>
</div>
<!-- スマフォ版 -->
<!-- ad en -->

<!-- <?php
	get_template_part('front-traicy-talk');
?> -->
<?php get_template_part('campaign-information-sp'); ?>

<?php
	$options = get_option( 'wifiDaily' );
?>

<!-- 航空会社 -->
<div id="topic">
	<h2 class="main_category">航空会社</h2>
	<div class="airline_tags" style="background: white;">
		<?php include('airline-tag-short.php'); ?>
	</div>
</div>
<!-- 航空会社 -->
<!-- お知らせ -->
<?php get_template_part('notice'); ?>

<?php
	get_template_part('follow_traicy');
?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
