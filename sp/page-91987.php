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

<meta name="viewport" content="width=device-width, initial-scale=0.5">
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
<link rel="stylesheet" id="sp-lp.css" href="https://www.traicy.com/wp-content/themes/sp/css/sp-lp.css?ver=4.9.4" type="text/css" media="all">
	<meta name="twitter:card" content="summary_large_image" />
	<meta property="og:url"           content="https://www.traicy.com/app-lp" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="トライシー、お得な旅を実現するスマホアプリを発表 事前登録はこちら" />
  <meta property="og:description"   content="お得な航空券セールが「探せる」「分かる」「買える」スマホアプリが2018年度冬リリース予定。事前登録でアプリを体験しよう。" />
  <meta property="og:image"         content="https://www.traicy.com/wp-content/uploads/2018/09/app_lp.jpg" />
	
	
</head>

<div class="container">
  <div class="sp-logo">
		<img src="https://www.traicy.com/wp-content/uploads/2018/09/logo.svg"/>
  </div>

  <div class="sp-top">
    <p class="sp-head-text">
      お得な旅は、
      <br>
      トライシー。
    </p>
    <div class="sp-top-app">
			<img src="https://www.traicy.com/wp-content/uploads/2018/09/new_top_app.png"/>
    </div>
    <p class="sp-title">
      お得な航空券セールが「探せる」
      <br>
      「分かる」「買える」スマホアプリが

      2018年度冬登場予定。事前登録で
      <br>
      いち早くアプリを体験しよう。
    </p>
    <div class="sp-btn">
      <a href="https://goo.gl/forms/njiOOrinXeeYBJue2" target=”_blank”  class="button-anchor"></a>
      <p class="sp-btn-text">無料で事前登録する</p>
    </div>
  </div>

  <p class="sp-feat-text">トライシーアプリの特徴</p>

  <div class="sp-find">
    <p class="sp-common-title">
      お得なセールが
      <br>
      <span class="sp-common-span">探せる!</span>
    </p>
    <p class="sp-common-body">
      掲載航空会社100社以上。
      <br>
      日本に就航する全ての航空会社のセールが
      <br>
      探せる。
    </p>
  </div>

  <div class="sp-detect">
    <p class="sp-common-title">
      お得なセールが
      <br>
      <span class="sp-common-span">わかる!</span>
    </p>
    <p class="sp-common-body">
      編集部が毎日のセールの中からお得なセールを厳選。
      <br>
      「得」印がついているから、
      もう迷わない。
    </p>
    <div class="sp-img-wrapper">
      <div class="sp-app-img">
			<img src="https://www.traicy.com/wp-content/uploads/2018/09/new_detect_app.svg"/>
      </div>
    </div>

  </div>

  <div class="sp-buy">
    <p class="sp-common-title">
      お得なセールが
      <br>
      <span class="sp-common-span">買える!</span>
    </p>
    <p class="sp-common-body">
      買いたいセールの開始・終了時刻をお知らせ。
      売り切れる前に、セールが買える。
    </p>
    <div class="sp-img-wrapper">
      <div class="sp-app-img">
			<img src="https://www.traicy.com/wp-content/uploads/2018/09/buy-sales.png"/>
      </div>
    </div>
  </div>
  <div class="btn-container">
    <div class="sp-btn">
      <a href="https://goo.gl/forms/njiOOrinXeeYBJue2"  target=”_blank” class="button-anchor"></a>
      <p class="sp-btn-text">無料で事前登録する</p>
    </div>
    <p class="sp-bottom-text">
      登録メールアドレスにアプリの最新情報をお届けします。
    </p>
	  
	  <div class="share-text-row">
      <p class="sp-feat-bottom-text">
        SNSでシェア
      </p>
      <div class="party-image"><img src="https://www.traicy.com/wp-content/uploads/2018/09/party_cracker.svg"/></div>
    </div>
	  
	  <div class="icons-row">
      <div class="icon"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.traicy.com/app-lp/" target=”_blank” class="share-anchor">
        <img src="https://www.traicy.com/wp-content/uploads/2018/09/facebook_icon.svg"/>
      </a></div>		  
      <div class="icon"><a href="https://social-plugins.line.me/lineit/share?url=https://www.traicy.com/app-lp/" target=”_blank” class="share-anchor">
		  <img src="https://www.traicy.com/wp-content/uploads/2018/09/line_icon.svg"/>
		  </a></div>  
		<div class="icon"><a href="http://twitter.com/share?url=https://www.traicy.com/app-lp/&text=%23トライシー" hreflang="ja" data-lang="ja" target=”_blank” class="share-anchor">
        <img src="https://www.traicy.com/wp-content/uploads/2018/09/twitter_icon.svg"/>
      </a></div>
    </div>
	  
  </div>
</div>