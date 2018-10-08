<?php
	get_template_part('sp-lp-banner');
?>

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

<?php
	get_template_part('front-traicy-talk');
?>
<?php get_template_part('campaign-information-sp'); ?>

<?php
	$options = get_option( 'wifiDaily' );
?>


<h1 class="kakakuwifi">Wi-Fi価格比較</h1>
<div id="wifiFrontContainer">

<?php $end = count($options);
for($i=0;$i<($end-1);$i++) : ?>

<?php if($i==0)	: ?>
	<div class="left">
<?php elseif($i==3): ?>
	<div class="right">
<?php endif; ?>

<?php

$params = array();
switch ($i) {
	case 0:
		$params = [ 'china', '中国', 102, 85 ];
		break;
	case 1:
		$params = [ 'korea', '韓国', 94, 78 ];
		break;
	case 2:
		$params = [ 'usa', 'アメリカ', 6, 0 ];
		break;
	case 3:
		$params = [ 'taiwan', '台湾', 100, 83 ];
		break;
	case 4:
		$params = [ 'thai', 'タイ', 113, 82 ];
		break;
	case 5:
		$params = [ 'usa', 'ハワイ', 61, 50 ];
		break;
	default:
		break;
}
?>
	<a href=<?= $options[$i][1]; ?> style="height:60px">
			<div id="national">
				<div id="wifiFrontImg">
					<img src="<?= get_stylesheet_directory_uri() , '/images/national-flag/' , $params[0] , '.png'; ?>">
		 		</div> <!-- wifiFrontImg -->
				<div id="wifiFrontInfo">
					<h2><?= $params[1]; ?>	</h2>
			 	<div class="cost"><?= $options[$i][0]; ?>円/日</div>
				</div> <!-- wifiFrontInfo -->
				<div class="guide"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
			</div> <!-- wifiFrontInfo -->
		</a>
<?php if($i==2 || $i==5)	: ?>
</div> <!-- right or left -->
<?php endif; ?>
<?php endfor; ?>
	<div style="background: white;
    height: 30px;
    padding: 10px;">
		<a href="https://www.traicy.com/wifi" style="display: block;
    text-align: center;
    background: var(--bar-color);
    color: #fff!important;
    padding: 5px 5px;
    width: 40%;
    font-weight: 400;
    border-radius: 4px;
    text-indent: 0;
    margin: 0 auto;">
			Wi-Fi価格比較を見る
		</a>
	</div>
</div> <!-- wifiFrontContainer -->

<!-- 航空会社 -->
<div id="topic">
	<h2 class="main_category">航空会社</h2>
	<div class="airline_tags">
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
