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


    <!-- icon用cssの読み込み -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/icomoon/icomoon.css">

   <meta name="viewport" content="1024, maximum-scale=1,initial-scale=1">

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

 <link rel="stylesheet" id="desktop-lp.css" href="https://www.traicy.com/wp-content/themes/pc_improve/css/desktop-lp.css?ver=4.9.4" type="text/css" media="all">
<meta name="twitter:card" content="summary_large_image" />
	<meta property="og:url"           content="https://www.traicy.com/app-lp" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="トライシー、お得な旅を実現するスマホアプリを発表 事前登録はこちら" />
  <meta property="og:description"   content="お得な航空券セールが「探せる」「分かる」「買える」スマホアプリが2018年度冬リリース予定。事前登録でアプリを体験しよう。" />
  <meta property="og:image"         content="https://www.traicy.com/wp-content/uploads/2018/09/app_lp.jpg" />
</head>
<div class="page-container">
  <div class="logo">

	  <img  src="https://www.traicy.com/wp-content/uploads/2018/09/logo.svg">
    <a href="https://www.traicy.com/" class="button-anchor"></a>
  </div>
  <div class="section-top">
    <div class="section-top-background">
		<img  src="https://www.traicy.com/wp-content/uploads/2018/09/top-background.png">
    </div>
    <div class="section-top-desc">
      <p class="section-top-title">
        お得な旅は、
        <br>
        トライシー。
      </p>
      <p class="section-top-small">
        お得な航空券セールが「探せる」「分かる」「買える」、
        <br>
        スマホアプリが2018年度冬登場予定。事前登録でいち早く
        <br>
        アプリを体験しよう。
      </p>
      <div class="section-top-button">
        <a href="https://goo.gl/forms/njiOOrinXeeYBJue2" target=”_blank” class="button-anchor"></a>
        <p class="section-top-button-text">無料で事前登録する</p>
      </div>
    </div>
    <div class="section-top-app-image">
		<img  src="https://www.traicy.com/wp-content/uploads/2018/09/top-app.png">
    </div>
  </div>
  <p class="app-feat-text">トライシーアプリの特徴</p>
  <div class="search-section">
    <p class="common-section-title">
      お得なセールが
      <br>
      <span class="common-section-span">探せる!</span>
    </p>
    <p class="common-section-body">
      掲載航空会社100社以上。
      <br>
      日本に就航する全ての航空会社のセールが探せる。
    </p>
  </div>

  <div class="detect-section">
    <div class="detect-app-image">
			<img  src="https://www.traicy.com/wp-content/uploads/2018/09/detect-sale.png">
    </div>
    <div class="detect-section-desc">
      <p class="common-section-title">
        お得なセールが
        <br>
        <span class="common-section-span">わかる!</span>
      </p>
      <p class="common-section-body">
        編集部が毎日のセールの中からお得なセールを厳選。
        <br>
        「得」印がついているから、もう迷わない。
      </p>
    </div>
  </div>

  <div class="buy-section">
    <div class="buy-section-desc">
      <p class="common-section-title">
        お得なセールが
        <br>
        <span class="common-section-span">買える!</span>
      </p>
      <p class="common-section-body">
        買いたいセールの開始・終了時刻をお知らせ。
        <br>
        売り切れる前に、セールが買えるようになります。
      </p>
    </div>
    <div class="buy-app-image">
			<img  src="https://www.traicy.com/wp-content/uploads/2018/09/buy-sales.png">
    </div>
  </div>

  <div class="bottom-button">
    <a href="https://goo.gl/forms/njiOOrinXeeYBJue2" target=”_blank” class="button-anchor"></a>
    <p class="bottom-button-text">無料で事前登録する</p>
  </div>
  <p class="bottom-promote-text">
    登録メールアドレスにアプリの
    <br>
    最新情報をお届けします。
  </p>
	<div class="share-text-row-dt" >
    <p class="app-feat-text-bottom">SNSでシェア</p>
    <div class="party-image-dt">
      <img src="https://www.traicy.com/wp-content/uploads/2018/09/party_cracker.svg" >
    </div>
  </div>

  <div class="icons-container">
    <div class="icon-row">
      <div class="icon"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.traicy.com/app-lp" target=”_blank” class="share-anchor">
        <img src="https://www.traicy.com/wp-content/uploads/2018/09/facebook_icon.svg" >
      </a></div>
      <div class="icon"><a href="https://social-plugins.line.me/lineit/share?url=https://www.traicy.com/app-lp" target=”_blank” class="share-anchor">
        <img src="https://www.traicy.com/wp-content/uploads/2018/09/line_icon.svg" >
      </a></div>
      <div class="icon"><a href="http://twitter.com/share?url=https://www.traicy.com/app-lp" target=”_blank” class="share-anchor">
        <img src="https://www.traicy.com/wp-content/uploads/2018/09/twitter_icon.svg" >
      </a></div>
    </div>
  </div>
	
</div>