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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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

<script type="text/javascript">
	jQuery(function() {
        $("#nav-open-button").on("click",function(){
            $("#header-nav").fadeIn();
        });
        $("#nav-close-button").on("click",function(){
            $("#header-nav").fadeOut();
        });
        
		$("#search_btn").on("click",function(){
			$("#search-container").fadeIn();
		});
		$("#search-close-button").on("click",function(){
			$("#search-container").fadeOut();
		});
		
});
</script>

<div itemscope itemtype="http://schema.org/Article" id="page" class="hfeed site">

  <header class="flex">
        <div class="navigation-logo-wrapper flex">
            <a href="https://www.traicy.com/"><img style="width: 100px;" src="https://www.traicy.com/images/logo.gif" alt=""></a>
        </div>
        <div class="navigation-items">
            <ul class="flex">
                <li id="search_btn">
                    <span class="navigation-icon">
                        <i class="fas fa-search"></i>
                    </span>
                    <span class="navigation-title">
                        探す
                    </span>
                </li>
                <li>
					<a href="https://talk.traicy.com/" title="">
						<span class="navigation-icon">
							<i class="fas fa-comment-dots"></i>
						</span>
						<span class="navigation-title">
							コミュニティ
						</span>
					</a>
                </li>
                <li id="headerSignInBtn" class="navigation-register-btn-wrapper">
                    <span class="navigation-register-btn">
                        会員登録<br>
                        ログイン
                    </span>
                </li>
                <li id="nav-open-button">
                    <span class="navigation-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="navigation-title">
                        メニュー
                    </span>
                </li>
            </ul>
        </div>
	  

        <div id="header-nav">

            <div id="nav-close-button">
                <span class="navigation-icon">
                    <i class="far fa-times-circle"></i>
                </span>
                <span class="navigation-title">
                    とじる
                </span>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-plane-departure"></i> 航空
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">マイレージ</a></span>
                    <span class="nav-small-title"><a href="" title="">空港</a></span>
                    <span class="nav-small-title"><a href="" title="">新路線・増減便・運休</a></span>
                    <span class="nav-small-title"><a href="" title="">セール・特別運賃</a></span>
                    <span class="nav-small-title"><a href="" title="">機内食</a></span>
                    <span class="nav-small-title"><a href="" title="">機材</a></span>
                    <span class="nav-small-title"><a href="" title="">航空会社一覧</a></span>
                </div>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-subway"></i> 鉄道
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">割引きっぷ</a></span>
                </div>
            </div>
            
            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-bus-alt"></i> バス
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">空港バス</a></span>
                </div>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-bed"></i> ホテル
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">ホステル・バックパッカーズ</a></span>
                    <span class="nav-small-title"><a href="" title="">民泊</a></span>
                </div>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-building"></i> 旅行会社
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-credit-card"></i> クレカ
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-car"></i> 自動車
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">道路</a></span>
                    <span class="nav-small-title"><a href="" title="">レンタカー・カーシェア</a></span>
                </div>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-columns"></i> コラム
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">おもしろ</a></span>
                </div>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-book"></i> 本
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-comments"></i> 一問一答
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-newspaper"></i> リリース
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-globe-asia"></i> 旅行情報
                    </h3>
                </a>
                <div class="nav-small-titles">
                    <span class="nav-small-title"><a href="" title="">安全情報</a></span>
                    <span class="nav-small-title"><a href="" title="">旅グッズ</a></span>
                    <span class="nav-small-title"><a href="" title="">出入国・ビザ</a></span>
                    <span class="nav-small-title"><a href="" title="">通信</a></span>
                    <span class="nav-small-title"><a href="" title="">調査結果</a></span>
                </div>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-chart-area"></i> IR
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-comment"></i> トーク(掲示板)
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-plane-departure"></i> 航空券比較
                    </h3>
                </a>
            </div>

            <div class="nav-category">
                <a href="" title="">
                    <h3 class="nav-large-title">
                        <i class="fas fa-wifi"></i> 海外WI-FI比較
                    </h3>
                </a>
            </div>
        </div>

        <style>

        #header-nav {
            display: none;
            position: fixed;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100vw;
            padding: 24px 16px;
            z-index: 5000;
            background-color: white;
            font-weight: 600;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch
        }

        #nav-close-button, #search-close-button {
            position: fixed;
            top: 16px;
            right: 16px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .nav-category:nth-last-of-type(1) {
            margin-bottom: 80px;
        }

        .nav-category {
            padding-top: 24px;
        }

        .nav-large-title {
            border-radius: 4px;
            background-color: #245ba7;
            color: white;
            display: inline-block;
            font-size: 20px;
            padding: 8px 12px;
        }

        .nav-small-titles {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;  
            flex-wrap: wrap;
            padding: 20px 8px;
        }

        .nav-small-titles > span:nth-last-of-type(1) {
          border-right: 0px white solid!important;
        }

        .nav-small-title {
            margin: 16px 0px;
            padding: 0px 10px;
            color: #245ba7;
            font-weight: 600;
            border-right: 2px gray solid;
        }

        </style>

        <div id="search-container">
            <div id="search-close-button">
                <span class="navigation-icon">
                    <i class="far fa-times-circle"></i>
                </span>
                <span class="navigation-title">
                    とじる
                </span>
            </div>
            <div id="search-form">
                <form name="myForm" id="siteSearch" method="get" action="<?php echo home_url('/'); ?>">
                    <input type="text" name="s" id="sitem" placeholder="Traicyの記事を検索する">
                    <div class="search-button"><input type="submit" value="検索"></div>
                </form>
            </div>
        </div>

        <style type="text/css" media="screen">
            #search-container {
                display: none;
                position: fixed;
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100vw;
                padding: 24px 16px;
                z-index: 5000;
                background-color: white;
                font-weight: 600;
            }
        </style>

    </header>

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
