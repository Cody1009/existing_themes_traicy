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

<!-- シェアボタンfacebookいいね用 -->
<div id="fb-root"></div>
<script async>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <!-- シェアボタンfacebookいいね用 -->

<!-- font-awesome -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/font-awesome/css/font-awesome.min.css" ?>">
<!-- font-awesome -->

</head>


<body <?php body_class(); ?>>

<div id="header" class="hide_u600">
	<div class="header_text">
		<a href="/"><div>traicy</div></a>
		<a href="http://www.hotelers.jp/"><div>Hotelers</div></a>
		<a href="http://www.guesthousetoday.jp/"><div>GuesthouseToday</div></a>
		<a href="http://www.extrain.info/"><div>EX-TRAIN</div></a>
		<a href="http://www.traicy.com.tw/"><div>Traicy Taiwan</div></a>
	</div>
	<div class="social-icon">
		<a class="side-twitter" href="https://twitter.com/traicycom" target="_blank"><span class="icon-twitter"></span></a>
		<a class="side-facebook" href="https://www.facebook.com/traicycom" target="_blank"><span class="icon-facebook"></span></a>
		<a class="side-rss" href="http://newsformat.jp/hd/traicy/http://www.traicy.com/feed" target="_blank"><span class="icon-rss"></span></a>
		<a class="side-feedly" href="https://feedly.com/i/subscription/feed%2Fhttp%3A%2F%2Fwww.traicy.com%2Findex.rdf" target="_blank"><span class="icon-feedly"></span></a>
		<a class="side-google-plus" href="https://plus.google.com/116492855879080319968/" target="_blank"><span class="icon-google-plus"></span></a>
		<a class="side-line" href="http://line.me/ti/p/%40traicy" target="_blank"><span class="icon-line"></span></a>
</div>

 <!-- 検索枠 -->
 <form id="siteSearch" method="get" action="<?php echo home_url('/'); ?>">
     <input type="text" id="siteSearchForm" name="s" placeholder="検索">
     <div id="siteSearchButton"><i class="fa fa-search" aria-hidden="true"></i></div>
   </form>
 </form>
<div class="both"></div>
<script>
 /* 検索ボタンのアニメーション */
 $("#siteSearchForm")
   .focusin(function(e) {
     $(this).animate({width: "170px"}, 'normal', 'swing');
     $("#siteSearchButton").animate({left: "170px"}, 'normal', 'swing');
     $(this).attr('placeholder','トライシーの記事を検索');
   });
   // .focusout(function(e) {
   //   $(this).animate({width: "50px"}, 'slow', 'swing');
   //   $("#siteSearchButton").animate({left: "50px"}, 'fast', 'swing');
   //   $(this).attr('placeholder','検索');
   // });

  $("#siteSearchButton").on("click", function(e){
    if ($("#siteSearchForm").val() != ""){
      $("#siteSearch").submit();
    }
    $("#siteSearchForm").css("width", "170px");
  });
</script>
<style>
#siteSearchButton {
  top: 0px;
}
#siteSearchButton > i{
  line-height: 25px;
}
</style>
 <!-- 検索枠 終わり -->
</div><!-- #header -->


<div itemscope itemtype="http://schema.org/Article" id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="title_bar" style="height: calc(91px + 20px);">

		<a href="<?php echo esc_url( home_url( '/' ) );?>"><img class="header_logo hide_u600" src="<?php get_stylesheet_directory_uri() ;?>/images/logo.gif"></a>

<!-- 広告 -->
<?php //get_template_part('ad-header'); ?>
<!-- 広告 -->

</div> <!-- title_bar -->

<?php /*
ヘッダーのメニュー部分
 */?>
<ul class="hide_u600">
		<nav id="site-navigation" class="main-navigation hide_u600 PC_nav" role="navigation">
			<span class="sp_right">
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</span><!-- .sp_right -->
		</nav><!-- #site-navigation -->
</ul>
	</header><!-- #masthead -->

<script src="//tun.glam.jp/app/gcontents.js" charset="utf-8"></script>
<div style="width : 900px; margin : 0 auto">
 <script>
	insertContent('2000000009','', {'device':'pc','redirect':'https://www.traicy.com'});
</script>
</div>

<?php
	/**
	 * footer
	 */ ?>

	<footer id="colophon" role="contentinfo">
	<div class="footerContent">
		<div style="height : 20px; background:white;"></div>
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
