<?php global $myAmp ?>

<html ⚡>
<head>
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <?php //require('favicon.php'); ?>

  <!-- AMP metaタグ 参考：　https://q-az.net/amp-wordpress-without-plugin/　-->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <!-- AMP canonical 参考：　https://q-az.net/amp-wordpress-without-plugin/　-->
  <?php $canonical_url = get_permalink(); ?>

  <link rel="canonical" href="<?php echo $canonical_url; ?>" />

  <!-- AMP Boilerplate Code -->
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

  <!-- サイドバー -->
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

  <!-- ampページのスタイル -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style amp-custom>
html {
  font-family: Helvetica, Arial, sans-serif;
  text-rendering: optimizeLegibility;
}
.clear {
  clear:both;
}
article {
  width: 100%;
}

/* ----- header start ----- */
.hideSpan {
  display: none;
}
header#masthead {
  height: 60px;
  width: 100%;
  margin-bottom: 5px;
}
#site-navigation {
  display: flex;
  flex-direction: row;
}
#headerLogoBox {
  width: 30%;
  padding-top: 5px;
  text-align: center;
}
.header_logo {
  line-height: 100%;
}
#headerMenuBox {
  width: 70%;
  display: flex;
  justify-content: space-around;
  padding-top: 6px;
}
#headerMenuBox > li {
  list-style-type: none;
  display: inline-block;
  width: 100%;
  margin : 0;
  text-align: center;
  position: relative;
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
  bottom: 5px;
  left: 0px;
  height: 20px;
  width: 100%;
  color: #54A0E6;
}
.menuText > span{
  font-size: calc(2vw);
  line-height: 20px
  text-decoration: none;
}
amp-sidebar {
  box-sizing: border-box;
  width: 100%;
  padding-left: 10px;
  /* border-left: 3px solid gray; */
}
#toHome {
  float: left;
  margin: 5px 0 5px 0;
  color: #666666;
  font-size: 28px;
}
#closeSidebar {
  float: right;
  margin: 5px 5px 0 0;
  color: gray;
  font-size: 28px;
}
amp-sidebar > ul {
  padding-left: 15px;
}
amp-sidebar > ul > li{
  list-style-type: none;
  margin-top: 10px;
}
amp-sidebar > ul > ul > li{
  list-style-type: square
}
amp-sidebar i:after {
  content: "\00a0\00a0";
}
/* ----- header start ----- */

/* ----- #main start ----- */
.entry-header{
  padding: 10px 5px 2px;
  background-color: #ECEFF1;
}
.entry-title {
  font-size: 22px;
  margin: 20px 0 5px;
}
.entry-content a{
  color : black;
  text-decoration : bold;
}
.entry-content .content-img {
  width: 100%;
  text-align: center;
}
.img-center {
  text-align: center;
}
#breadcrumb {
  float: right;
  padding-right: 10px;
  font-size: 14px;
}
._breadcrumb {
  display:table-cell;
}
#breadcrumb, #breadcrumb a {
  color: #333;
  text-decoration: none;
}
.date.updated > p{
  float: right;
  margin: 0 0 10px;
  padding: 0 5px;
  width: auto;
  height: auto;
}

.share_buttons {
  box-sizing: border-box;
  width: calc(100% - 20px);
  height: 35px;
  min-height: 30px;
  margin: 10px 10px 5px;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}
.sns_icon {
  margin: 0px;
  box-sizing: border-box;
  width: calc(100% / 5 - 4px);
  text-align: center;
}
.sns_icon amp-img {
  width:  30px;
  height: 30px;
  box-sizing: border-box;
  display: inline-block;
  position: relative;
  border-radius: 3px;
  top: 16px;
  margin: 1px 1px;
  padding: 0;
  -webkit-transform: translateY(-50%); /* Safari用 */
  transform: translateY(-50%);
}
.sns_icon.google {
  background-color: #E02F2F;
}
.sns_icon.line {
  background-color: #00B900;
}
.sns_icon.hatena {
  background-color: #00A4DE;
}
.sns_icon.twitter {
  background-color: #1DA1F2;
}
.sns_icon.facebook {
  background-color: #3B5998;
}
/* SNSシェアボタン 終わり*/

.entry-content {
  padding: 0px 10px;
  font-size:16px;
  line-height : 20px;
  letter-spacing : 0.8px;
  color: #666666;
}

.entry-content > p{
  text-indent : 1em;
}

.entry-content p > a > img{
  display : block;
  margin : auto;
  height : 200px;
}

.sponsor{
  font-size : 10px;
  display : block;
  margin : 10px 0px 15px;
}

.page-numbers {
  text-align: center;
}
.page-numbers a span, .page-numbers span {
  padding: 6px 9px;
  border-radius: 3px;
  text-decoration: none;
  font-size: 12px;
}

.page-numbers span {
  color: #fff;
  background: -webkit-gradient(linear,0 0,0 100%, color-stop(.02,#9F9F9F), color-stop(.02,#6C6C6C), color-stop(1,#525252));
}

.page-numbers a {
  text-decoration: none;
}

.page-numbers a span {
  color: #707070;
  background: #FFF;
  -webkit-border-radius: 3px;
  border: 1px solid #DCDCDC;
}

/* ----- #main end ----- */

/* ----- footer start ----- */
#content .tag_box > p{
  padding : 0;
  margin-top : 20px;
  padding-bottom : 10px;
  display : block;
  width : 100%;
  text-align : right;
  box-sizing : border-box;
}
.tag_box a{
  padding: 3px 5px 3px 5px;
  color: #fff;
  background : #3261AB;
  border-radius: 5px;
  margin-right: 5px;
  text-decoration: none;
  line-height : 20px;
  height : auto;
  width : auto;
  box-sizing : border-box;
}

/* #attractive_info */
#attractive_info {
  box-sizing: border-box;
  width: 100%;
  margin-top: 10px;
}
#attractive_info .title {
  width: 100%;
  color: white;
  font-size: 16px;
  font-weight: bold;
  line-height: 1.1;
  padding: 8px;
  background-color: green;
}
#attractive_info .content {
  width: 100%;
  padding: 10px 10px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
}
amp-ad[type="popin"] {
  margin-top: 10px;
}
/* ----- footer end ----- */

  </style>

  <!-- AMP Json -->
  <!-- "headline": "<?php //bloginfo('description'); ?>"-->
  <?php // {{{ ?>
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "headline": "<?php the_title(); ?>",
    "mainEntityOfPage":{
      "@type":"WebPage",
      "@id":"<?php the_permalink(); ?>"
    },
    "image": {
      "@type": "ImageObject",
      "url": "<?php the_post_thumbnail_url('medium'); ?>",
      "height": 600,
      "width": 400
    },
    "datePublished":"<?php echo get_the_date('c'); ?>",
    "dateModified": "<?php the_modified_date('c'); ?>",
    "author": {
      "@type": "Person",
      "name": "<?php $author=get_the_author(); echo $author==''?'Traicy編集部':$author; ?>"
    },
     "publisher": {
      "@type": "Organization",
      "name": "<?php wp_title(); ?>",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.traicy.com/images/logo.gif",
        "width": 273
      }
    },
    "description": "<?php bloginfo('description'); ?>"
  }
  </script>
  <?php // }}} ?>
  <!-- AMP Json -->

  <!-- AMP ライブラリ -->
  <script async src="https://cdn.ampproject.org/v0.js"></script>

  <!-- AMP ライブラリ -->

  <!-- AMPページの存在をクローラに通知 -->
  <link rel="amphtml" href="<?php echo $canonical_url.'?amp=1'; ?>">
  <!-- AMPページの存在をクローラに通知 -->

  <!-- AMP用の広告スクリプト -->
  <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
  <!-- AMP用の広告スクリプト -->

  <!-- アナリティクス用のスクリプト -->
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <!-- アナリティクス用のスクリプト -->
</head>

<body <?php body_class(); ?>>
  <!--サイドバー用のコンテンツ -->
  <?php //{{{ ?>
  <amp-sidebar id="sidebar" layout="nodisplay" side="right">
    <div id="toHome">
      <a href="/">
      <i class="fa fa-home" aria-hidden="true"></i>
      </a>
    </div>
    <div id="closeSidebar">
      <i class="fa fa-times-circle" aria-hidden="true" on="tap:sidebar.close" role="button" tabindex="0"></i>
    </div>
    <div class="clear"></div>

    <h3>Traicy カテゴリ 一覧</h3>
    <ul>
      <li><i class="fa fa-plane" aria-hidden="true"></i><a href="https://www.traicy.com/airline">航空</a></li>
      <ul>
        <li><i class="fa fa-star" aria-hidden="true"></i><a href="https://www.traicy.com/mileage">マイレージ</a></li>
        <li><i class="fa fa-fighter-jet" aria-hidden="true"></i><a href="https://www.traicy.com/airport">空港</a></li>
        <li><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="https://www.traicy.com/route">新路線・増減便・運休</a></li>
        <li><i class="fa fa-cart-arrow-down" aria-hidden="true"></i><a href="https://www.traicy.com/sale">セール・特別運賃</a></li>
      </ul>

      <li><i class="fa fa-train" aria-hidden="true"></i><a href="https://www.traicy.com/railway">鉄道</a></li>
      <ul>
        <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="https://www.traicy.com/discount_ticket">割引きっぷ</a></li>
        <li><i class="fa fa-comment" aria-hidden="true"></i><a href="https://www.traicy.com/train_report">乗車レポート（鉄道）</a></li>
      </ul>

      <li><i class="fa fa-bed" aria-hidden="true"></i><a href="https://www.traicy.com/hotel">ホテル</a></li>
      <li><i class="fa fa-file-text-o" aria-hidden="true"></i><a href="https://www.traicy.com/column">コラム</a></li>
      <li><i class="fa fa-user" aria-hidden="true"></i><a href="https://www.traicy.com/funny">おもしろ</a></li>
      <li><i class="fa fa-book" aria-hidden="true"></i><a href="https://www.traicy.com/book">本</a></li>
      <li><i class="fa fa-globe" aria-hidden="true"></i><a href="https://www.traicy.com/travelinformation">旅行情報</a></li>
      <li><i class="fa fa-comments" aria-hidden="true"></i><a href="https://www.traicy.com/qa">一問一答・会見書き起こし</a></li>
      <li><i class="fa fa-newspaper-o" aria-hidden="true"></i><a href="http://release.traicy.com/">リリース</a></li>
      <li><i class="fa fa-bus" aria-hidden="true"></i><a href="https://www.traicy.com/bus">バス</a></li>
      <ul>
        <li><i class="fa fa-bus" aria-hidden="true"></i><a href="https://www.traicy.com/limousinebus">リムジンバス</a></li>
        <li><i class="fa fa-bus" aria-hidden="true"></i><a href="https://www.traicy.com/bus/bus_report">乗車レポート（バス）</a></li>
      </ul>

      <li><i class="fa fa-building" aria-hidden="true"></i><a href="https://www.traicy.com/tour">旅行会社</a></li>
      <ul>
          <li><i class="fa fa-h-square" aria-hidden="true"></i><a href="https://www.traicy.com/tour">Guesthouse TODAY</a></li>
      </ul>

      <li><i class="fa fa-credit-card" aria-hidden="true"></i><a href="https://www.traicy.com/creditcard">クレジットカード</a></li>

      <li><i class="fa fa-car" aria-hidden="true"></i><a href="https://www.traicy.com/car">自動車</a></li>
      <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i><a href="https://www.traicy.com/car/rent_a_car">レンタカー・カーシェア</a></li>
        <li><i class="fa fa-road" aria-hidden="true"></i><a href="https://www.traicy.com/car/road">道路</a></li>
      </ul>
    </ul>
  </amp-sidebar>
  <?php //}}} ?>
  <!-- サイドバー用のコンテンツ 終わり -->

  <div itemscope itemtype="http://schema.org/Article" id="page" class="hfeed site">

  <header id="masthead" class="site-header" role="banner">
  <span class="hideSpan" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><?php // {{{ ?>
     <span itemprop="name"><?php wp_title(); ?></span>
     <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
       <span itemprop="url" itemtype="https://schema.org/ImageObject">https://www.traicy.com/images/logo.gif</span>
     </span>
  </span>
  <?php //}}} ?>

  <nav id="site-navigation" class="hide_o600 main-navigation fixed" role="navigation">
    <div id="headerLogoBox">
     <a href="<?php echo esc_url( home_url( '/' ) );?>">
      <amp-img class="header_logo" height="50" width="92.844" src="<?php get_stylesheet_directory_uri() ;?>/images/logo.gif">
     </a>
     <!-- <p class="amp_traicy_desc">航空・鉄道・ホテルなど旅行情報を<br>お送りするメディア。</p> -->
    </div>
    <div id="headerMenuBox">
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
        <a href="http://airticket.traicy.com/">
          <div class="menuIcon">
            <i class="fa fa-plane"></i>
          </div>
          <div class="menuText">
            <span>航空券</span>
          </div>
        </a>
      </li>
      <li>
        <a href="http://h.accesstrade.net/sp/cc?rk=0100kmfy00ada9">
          <div class="menuIcon">
            <i class="fa fa-car"></i>
          </div>
          <div class="menuText">
            <span>レンタカー</span>
          </div>
        </a>
      </li>
      <li on="tap:sidebar.toggle" role="button" tabindex="0">
        <div class="menuIcon">
          <i class="fa fa-bars"></i>
        </div>
        <div class="menuText">
          <span>カテゴリ</span>
        </div>
        <a href="https://www.traicy.com/category">
        </a>
      </li>
    </div>
  </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="main" class="wrapper">
