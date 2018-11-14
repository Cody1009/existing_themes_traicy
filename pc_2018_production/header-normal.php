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
    <title><?php wp_title('|', true, 'right'); ?></title>

    <!-- ファビコン用 -->
    <?php //require('favicon.php'); ?>
    <!-- ファビコン用 -->

    <!-- Facebook Instant Articles用 -->
    <meta property="fb:pages" content="135009769909270"/>
    <meta property="fb:use_automatic_ad_placement" content="true">
    <meta property="fb:app_id" content="507196812629338"/>
    <!-- Facebook Instant Articles用 -->

    <!-- icon用cssの読み込み -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/icomoon/icomoon.css">

   <meta name="viewport" content="width=1300, maximum-scale=1,initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <?php if (is_single()): ?>
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <link rel="alternate" hreflang="ja" href="<?php the_permalink(); ?>">
                <?php if ($is_valid_post_date): ?>
                    <?php # AMPのurlをgoogleに通知 ?>
                    <link rel="amphtml" hreflang="ja" href="<?php echo get_permalink() . "?amp=1" ?>">
                <?php endif ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php elseif (is_home()): ?>
        <link rel="alternate" hreflang="ja" href="<?php echo home_url(); ?>">
    <?php endif; ?>


    <link rel="alternate" type="application/rss+xml" title="トラベルメディア
	「Traicy（トライシー）」 &raquo; フィード"
          href="http://newsformat.jp/hd/traicy/http://www.traicy.com/feed"/>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script async defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->


    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7RHSS4');</script>
    <!-- End Google Tag Manager -->

    <!-- シェアボタンfacebookいいね用 -->
    <div id="fb-root"></div>
    <script async>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- シェアボタンfacebookいいね用 -->

    <!-- wifi検索のサジェスト用ライブラリ -->
    <script src="<?php echo get_stylesheet_directory_uri() . "/js/suggest.js"; ?>"></script>
    <!-- wifi検索のサジェスト用ライブラリ -->

    <!-- font-awesome -->
    <link rel="stylesheet"
          href="<?php echo get_stylesheet_directory_uri() . "/font-awesome/css/font-awesome.min.css" ?>">
    <!-- font-awesome -->

    <!-- User Heat Tag -->
    <script type="text/javascript">
        (function (add, cla) {
            window['UserHeatTag'] = cla;
            window[cla] = window[cla] || function () {
                (window[cla].q = window[cla].q || []).push(arguments)
            }, window[cla].l = 1 * new Date();
            var ul = document.createElement('script');
            var tag = document.getElementsByTagName('script')[0];
            ul.async = 1;
            ul.src = add;
            tag.parentNode.insertBefore(ul, tag);
        })('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');
        _uhtracker({id: 'uhcrs8OtO4'});
    </script>
    <!-- End User Heat Tag -->

    <!-- DFP start -->
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>

    <script>
        googletag.cmd.push(function () {
            googletag.defineSlot('/2691324/Traicy_PC_left-1', [[300, 250], [336, 280]], 'div-gpt-ad-1504069108433-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });
    </script>
    <!-- DFP end -->

    <script src="<?= get_stylesheet_directory_uri() . "/js/ofi.min.js" ?>"></script>


    <script src="<?= get_stylesheet_directory_uri() . "/js/traicy-talk-modal.js" ?>"></script>

    <!--  slider menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?= get_stylesheet_directory_uri() . "/js/jquery.bxslider.min.js" ?>"></script>
    <script>
        $(document).ready(function () {
            $('.slider').bxSlider({
                auto: true,
                pause: 10000,
                pager: false,
                controls: false,
                keyboardEnabled: true,
            });
        });
    </script>

</head>


<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7RHSS4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="header-wrapper">
	

<header class="header" itemscope itemtype="http://schema.org/Article">
    <div class="Row">
        <div class="compLogo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="header_logo hide_u600" src="<?php get_stylesheet_directory_uri(); ?>/images/logo.gif">
            </a>
        </div>
        <div class="barAndAdvertize">
            <div class="barItemsRow">
                <div class="searchContainer">
                    <form id="siteSearch" method="get" action="<?php echo home_url('/'); ?>">
                        <input type="text" id="siteSearchForm" name="s" class="searchInput">
                        <button type="submit" id="siteSearchButton" class="searchIconButton">
                            <i class="fa fa-search searchIcon"></i>
                        </button>
                    </form>
                    <div class="both"></div>
                    <script>
                        $("#siteSearchButton").on("click", function (e) {
                            if ($("#siteSearchForm").val() !== "") {
                                $("#siteSearch").submit();
                            }
                        });
                    </script>
                </div>


               <div class="social-icons">
                        <a class="social-icon" href="https://twitter.com/traicycom" target="_blank"><span
                                    class="icon-twitter"></span></a>
                        <a class="social-icon" href="https://www.facebook.com/traicycom" target="_blank"><span
                                    class="icon-facebook"></span></a>
                        <a class="social-icon" href="http://www.traicy.com/feed" target="_blank"><span
                                    class="icon-rss"></span></a>
                        <a class="social-icon"
                           href="https://feedly.com/i/subscription/feed%2Fhttp%3A%2F%2Fwww.traicy.com%2Ffeed"
                           target="_blank"><span class="icon-feedly"></span></a>
                        <a class="social-icon" href="https://plus.google.com/116492855879080319968/"
                           target="_blank"><span class="icon-google-plus"></span></a>
                        <a class="social-icon" href="http://line.me/ti/p/%40traicy" target="_blank"><span
                                    class="icon-line"></span></a>
                    </div>
                <a href="https://talk.traicy.com/signup" target="_blank" class="loginButton">
                    ログイン/新規会員登録
                </a>
            </div>
<!-- 	ad-header.php		 -->
            <div class="banner-advertizement-top"><?php get_template_part('ad-header'); ?></div>
        </div>
        <ul class="menu-items-wrapper">
            <nav id="site-navigation" class="main-navigation PC_nav" role="navigation">
<!--				<a class="assistive-text" href="#content"-->
<!--                   title="--><?php //esc_attr_e('Skip to content', 'twentytwelve'); ?><!--">--><?php //_e('Skip to content', 'twentytwelve'); ?><!--</a>-->
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_class' => 'dynamic-container')); ?>
            </nav>
        </ul>
    </div>
	</header>
		</div>
<div id="main" class="wrapper">
