<?php global $myAmp ?>
<?php global $is_valid_post_date ?>

<!-- [if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]>
<html <?php language_attributes(); ?>>
<!<![endif] -->

<html lang="ja">

<head prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- ファビコン用 -->
  <?php //require('favicon.php'); ?>
<!-- ファビコン用 -->

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="alternate" type="application/rss+xml" title="トラベルメディア「Traicy（トライシー）」 &raquo; フィード"	href="http://newsformat.jp/hd/traicy/http://www.traicy.com/feed" />

<!-- Facebook Instant Articles用 -->
<meta property="fb:pages" content="135009769909270" />
<meta property="fb:use_automatic_ad_placement" content="true">
<meta property="fb:app_id" content="507196812629338" />
<!-- Facebook Instant Articles用 -->

<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php if( is_single() ):
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>
			<link rel="alternate" hreflang="ja" href="<?php the_permalink(); ?>">
			<?php if( $is_valid_post_date):
				// AMPのurlをgoogleに通知 ?>
				<link rel="amphtml" hreflang="ja" href="<?php echo get_permalink() . "?amp=1" ?>">
			<?php endif;
		endwhile;
	endif;
elseif( is_home() ): ?>
	<link rel="alternate" hreflang="ja" href="<?php echo home_url(); ?>">
<?php endif; ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7RHSS4');</script>
<!-- End Google Tag Manager -->


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script async defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

<!-- font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- font-awesome -->

<!-- DFPタグ start -->
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/2691324/Traicy_SP_popin-1', [[300, 250], [320, 480], [300, 100], [250, 250], [336, 280]], 'div-gpt-ad-1504010222397-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- DFPタグ end -->

<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhcrs8OtO4'});
</script>
<!-- End User Heat Tag -->

<!--  object-fit -->
<script src="<?= get_stylesheet_directory_uri(); ?>/js/ofi.min.js"></script>

</head>

<body <?php body_class(); ?> >

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7RHSS4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<style>
/* headerのスタイルは少量しかないので直接記述。*/
#site-navigation {
	width: 100%;
	text-align: center;
	box-sizing: border-box;
	height: 60px;
	padding: 5px 5px;
}
#site-navigation .header_logo{
	height: 100%;
	margin: 0 auto;
}
#traicyLogo {
	width: 100px;
	height: 50px;
	float: left;
}
#menuIcons {
  float: left;
  width: calc(100% - 110px);
  display: flex;
  height: 50px;
  margin: 2px 5px 0px;
  justify-content: space-around;
}
#menuIcons > li {
  list-style-type: none;
  display: inline-block;
  position: relative;
  height: 50px;
  width: 100%;
  margin : 0;
  text-align: center;
}
.menuIcon {
  display: inline-block;
  position: absolute;
  top: 0px;
  left: 0px;
  height: 35px;
  width: 100%;
}
.menuIcon > i {
  font-size: 28px;
  color: #54A0E6;
  line-height: 35px;
}
.menuText {
  display: inline-block;
  position: absolute;
  bottom: 0px;
  left: 0px;
  height: 20px;
  width: 100%;
}
.menuText > span{
  font-size: calc(6px + 1vw);
  line-height: 20px
  text-decoration: none;
}

.fa-large:before{
	font-size : calc(10vw);
	color : var(--bar-color);
}
#search-form {
	padding: 12px 8px;
	margin: 0 auto;
	display: none;
}
#search-form form {
	width: 100%;
	display: table;
	table-layout: fixed;
	font-size: 14px;
}
#search-form input[type=text] {
	display: table-cell;
	width: 100%;
	height: 38px;
	padding: 10px;
	box-sizing: border-box;
	border-radius: 0;
	-webkit-appearance: none;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
	font-size: 16px;
}

#search-form .search-button {
	display: table-cell;
	vertical-align: top;
	width: 20%;
}
#search-form .search-button input[type="submit"] {
	width: 100%;
	height: 38px;
	font-weight: bold;
	color: white;
	border: none;
	background: #54A0E6;
	padding: 0;
	border-radius: 0;
	-webkit-appearance: none;
	border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
#search-form .search-keyword {
	list-style: none;
	padding: 0;
	margin: 12px auto 0;
}
#search-form .search-keyword li {
	display: inline-block;
	margin: 8px;
	font-size: 12px;
}
</style>

<script type="text/javascript">
	jQuery(function() {
		$("#search_btn").on("click",function(){
			$(this).toggleClass("active");
			$("#search-form").fadeToggle("fast");
		});
});
</script>

<div itemscope itemtype="http://schema.org/Article" id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <nav id="site-navigation" class="main-navigation fixed" role="navigation">
      <div id="traicyLogo">
        <a href="<?php echo esc_url( home_url( '/' ) );?>"><img class="header_logo" src="<?php get_stylesheet_directory_uri() ;?>/images/logo.gif"></a>
      </div>
      <div id="menuIcons">
        <li>
          <a href="https://www.traicy.com/wifi">
            <div class="menuIcon">
              <i class="fa fa-wifi"></i>
            </div>
            <div class="menuText">
              <span>海外Wi-Fi</span>
            </div>
          </a>
        </li>
        <li>
          <a href="https://talk.traicy.com/">
            <div class="menuIcon">
              <i class="fa fa-plane"></i>
            </div>
            <div class="menuText">
              <span>投稿サイト</span>
            </div>
          </a>
        </li>
        <li id="search_btn">
            <div class="menuIcon">
              <i class="fa  fa-search"></i>
            </div>
            <div class="menuText">
              <span>検索</span>
            </div>
        </li>
        <li>
          <a href="https://www.traicy.com/category">
            <div class="menuIcon">
              <i class="fa fa-bars"></i>
            </div>
            <div class="menuText">
              <span>カテゴリ</span>
            </div>
          </a>
        </li>
      </div>
      <div class="both"></div>
    </nav><!-- #site-navigation -->

		<div id="search-form">
			<form name="myForm" id="siteSearch" method="get" action="<?php echo home_url('/'); ?>">
		    <input type="text" name="s" id="sitem" placeholder="Traicyの記事を検索する">
		    <div class="search-button"><input type="submit" value="検索"></div>
		  </form>
		</div>

<!-- 広告 -->
<?php get_template_part('ad-header'); ?>
<!-- 広告 -->

	</header><!-- #masthead -->

	<div id="main" class="wrapper">


		<!-- オーバーレイ広告 -->
<?php
/*
		<div id='div-gpt-ad-1486883877243-0' style='height:50px; width:320px;'>
		<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1486883877243-0'); });
		</script>
*/
?>
		</div>
