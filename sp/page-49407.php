<?php //mode-media-template-only-pc ?>

<?php

/**
*
*	今後，あまりこういうことはないかもしれませんが，一応，但し書き．
* page-46133はmode-media-templateです．
* $_GET値から自動的に広告配信をしてくれます．
* このとき，ヘッダーおよびフッターには広告を掲載してはいけません．
* header.phpの内容をそのままコピーして使用することは避けてください．
*
**/

 ?>



<?php global $myAmp ?>
<?php global $is_valid_post_date ?>

<!--[if IE 7]>
	<html class="ie ie7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
	<html class="ie ie8" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if !(IE 7) & !(IE 8)]>
	<html <?php language_attributes(); ?>>
	<!<![endif]-->

<html lang="ja">
	<head prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- ファビコン用 -->
	<link rel="shortcut icon" href="https://www.traicy.com/images/icons/favicon.ico" />
<!-- ファビコン用 -->

<!-- Facebook Instant Articles用 -->
	<meta property="fb:pages" content="135009769909270" />
	<meta property="fb:use_automatic_ad_placement" content="true">
<!-- Facebook Instant Articles用 -->

	<!-- icon用cssの読み込み -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/icomoon/icomoon.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php if( is_single() ): ?>
	<?php if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>
			<link rel="alternate" hreflang="ja" href="<?php the_permalink(); ?>">
			<?php if( $is_valid_post_date): ?>
				<?php # AMPのurlをgoogleに通知 ?>
				<link rel="amphtml" hreflang="ja" href="<?php echo get_permalink() . "?amp=1" ?>">
			<?php endif ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php elseif( is_home() ): ?>
		<link rel="alternate" hreflang="ja" href="<?php echo home_url(); ?>">
<?php endif; ?>


	<link rel="alternate" type="application/rss+xml" title="トラベルメディア
	「Traicy（トライシー）」 &raquo; フィード"
	href="http://newsformat.jp/hd/traicy/http://www.traicy.com/feed" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script async defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php wp_head(); ?>


<!-- font-awesome -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/font-awesome/css/font-awesome.min.css" ?>">
<!-- font-awesome -->


<!-- フローティングバナー -->
<script src='https://www.googletagservices.com/tag/js/gpt.js'>
  googletag.pubads().defineOutOfPagePassback('/35741869/Mediaagency_Traicy').display();
</script>
<!-- フローティングバナー -->

 </head>


<body <?php body_class(); ?>>

<style>
.fa{
	font-size : 36px;
	color : var(--bar-color);
	margin : auto 0;
}
</style>
<div itemscope itemtype="http://schema.org/Article" id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
       <nav id="site-navigation" class="hide_o600 main-navigation fixed" role="navigation">
         <div id="traicyLogo">
           <a href="<?php echo esc_url( home_url( '/' ) );?>"><img class="header_logo" src="<?php get_stylesheet_directory_uri() ;?>/images/logo.gif"></a>
          </div>
          <div id="menuIcons">
            <li><a href="https://www.traicy.com/wifi"><i class="fa fa-wifi"></i></a></li>
            <li><a href="http://airticket.traicy.com/"><i class="fa fa-plane"></i></a></li>
            <li><a href="http://h.accesstrade.net/sp/cc?rk=0100kmfy00ada9"><i class="fa fa-car"></i></a></li>
            <li><a href="https://www.traicy.com/category"><i class="fa fa-bars"></i></a></li>
          </div>
          <div class="both"></div>
				</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
</div>

<script src="//tun.glam.jp/app/gcontents.js" charset="utf-8"></script>
<script>
	insertContent('2000000009','', {'device':'pc','redirect':'https://www.traicy.com/'});
</script>


<?php
	/**
	 * footer
	 */ ?>

	<footer id="colophon" role="contentinfo">
	<div class="footerContent">
		<div class="site-info">
			<div class="about_traicy">
					<center>
						<span class="parent">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ma.gif">
					<ul class="about">
						<li><a href="https://www.traicy.com/information">お知らせ</a></li>
						<li><a href="https://www.traicy.com/kiyaku">利用規約</a></li>
						<li><a href="https://www.traicy.com/article_provide">配信先一覧</a></li>
						<li><a href="https://www.traicy.com/writer">ライター一覧</a></li>
						<li><a href="https://www.traicy.com/ad">広告掲載</a></li>
						<li><a href="https://www.traicy.com/traicybloggernetwork">ブロガーネットワーク登録</a></li>
						<li><a href="https://www.traicy.com/mailmag">メルマガ登録</a></li>
						<li><a href="http://line.me/ti/p/%40traicy">LINE登録</a></li>
						<li><a href="https://www.traicy.com/wanted">採用情報</a></li>
						<li><a href="https://www.traicy.com/about#company">運営会社情報</a></li>
						<li><a href="https://www.traicy.com/contact">お問い合わせ</a></li>
					</ul>
					</center>
			</div><!-- .about_traicy -->
		</div><!-- .site-info -->
	</div><!-- footerContent -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
