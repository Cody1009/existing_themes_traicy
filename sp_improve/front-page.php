<?php
	get_template_part('sp-lp-banner');
?>

<?php get_header(); ?>

<!-- ad st -->
<!-- スマフォ版 -->
<div class="sp_ad">
	<center>
<script async defer src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Traicy-New-Top-ArticleFooter-left -->
	<ins class="adsbygoogle"
		style="display:inline-block;width:320px;height:50px"
		data-ad-client="ca-pub-3121993718200907"
		data-ad-slot="7111125932"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
	</center>
</div>
<!-- スマフォ版 -->
<!-- ad en -->

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
	get_template_part('front-traicy-talk-fix');
?>
<?php get_template_part('campaign-information-sp'); ?>

<?php
	$options = get_option( 'wifiDaily' );
?>


<h2 class="main_category">ー Wi-Fi価格比較 ー</h2>
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
			</div> <!-- #national -->
		</a>
<?php if($i==2 || $i==5)	: ?>
</div> <!-- right or left -->
<?php endif; ?>
<?php endfor; ?>
	<div class="blue-btn-wrapper">
  <a class="blue-btn" href="https://www.traicy.com/wifi">もっと見る
   <i class="fas fa-angle-right"></i>
  </a>
</div>
</div> <!-- wifiFrontContainer -->

<!-- 航空会社 -->
<div id="topic">
	<h2 class="main_category">ー 航空会社 ー</h2>
	<div class="airline_tags">
		<?php include('airline-tag-short.php'); ?>
	</div>
	<div class="blue-btn-wrapper">
  <a class="blue-btn" href="https://www.traicy.com/airline-tags">もっと見る
   <i class="fas fa-angle-right"></i>
  </a>
</div>
</div>
<!-- 航空会社 -->
<!-- 採用情報　-->
	<h2 class="main_category">ー 採用情報 ー</h2>
<div class="recruit-info" >
<div class="recruit-card">
	<a href="https://www.traicy.com/wanted"></a>
	
		<div class="recruit-section-top">
			<p class="recruit-top-text">デザイナー・エンジニア<br>募集中</p>
        </div>
		<div class="recruit-section-center">
            <p class="recruit-center-text">言語: PHP/Ruby</p><br>
            <p class="recruit-center-text">雇用: アルバイト・インターン</p><br>
            <p class="recruit-center-text">時給: 1000円~</p>
        </div>
		<div class="recruit-section-bottom">
            <img class="sidebar-comp-logo" src="/images/logo.gif">
        </div>
	
</div>	
</div>
<!-- 採用情報 -->	
<!-- お知らせ -->
<?php get_template_part('notice'); ?>



	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
