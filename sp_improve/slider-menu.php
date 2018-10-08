<!-- Latest compiled and minified JavaScript -->
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script async src="<?php echo get_stylesheet_directory_uri() . "/dist/hammer.min.js" ?>"></script>
<script async src="<?php echo get_stylesheet_directory_uri() . "/dist/jquery.hammer.js" ?>"></script>

<script>
jQuery(function($){
  var ACTIVE_SELECTOR = '.nav-tabs > .active';

  var $jsTabs = $('.js-tabs');
  var $jsTabsLi = $('.js-tabs li');

  var $jsSwipe = $('.js-swipe');
  var $scrollContainer = $('.nav-tabs-outer');

  var tabsLiLen = $jsTabsLi.length;
  var tabsLiWid = $jsTabsLi.eq(0).width() + 2;

  //タブエリアの横幅指定
  $jsTabs.css('width',tabsLiWid * tabsLiLen);

  //スワイプイベント登録
  $jsSwipe.hammer().on('swipeleft',next);  //--------C
  $jsSwipe.hammer().on('swiperight',prev);

  function next() {
    tabManager($(ACTIVE_SELECTOR).next('li'),'next');
  }
  function prev() {
    tabManager($(ACTIVE_SELECTOR).prev('li'),'prev');
  }                                        //--------C

  // 指定されたタブをカレントし要素にスクロールする
  function tabManager($nextTarget, $action){
    $nextTarget.find('a').trigger('click');  //--------D
    if($nextTarget.index() != -1){
      $scrollContainer.scrollLeft($nextTarget.index() * tabsLiWid);  //--------E
    }else{
			if($action == 'next'){
				$scrollContainer.scrollLeft(0);  //--------E
				$('.nav-tabs > li:first-child').addClass('active');
				$('.nav-tabs > li:last-child').removeClass('active');
				$('.tab-content > div:first-child').addClass('active');
				$('.tab-content > div:last-child').removeClass('active');
			}else if($action == 'prev'){
				$scrollContainer.scrollLeft( (tabsLiLen - 1) * tabsLiWid );  //--------E
				$('.nav-tabs > li:last-child').addClass('active');
				$('.nav-tabs > li:first-child').removeClass('active');
				$('.tab-content > div:last-child').addClass('active');
				$('.tab-content > div:first-child').removeClass('active');
			}
		}
  }
});
</script>

<?php
/**
  表示するカテゴリ一覧
**/
$category = array(
  array(
    'name' => '新着',
    'href' => 'https://www.traicy.com/newarticle'
  ),
  array(
    'name' => 'セール',
    'href' => 'https://www.traicy.com/airline/sale'
  ),
  array(
    'name' => '運航情報',
    'href' => 'https://www.traicy.com/airline/route'
  ),
  array(
    'name' => '旅行情報',
    'href' => 'https://www.traicy.com/travelinformation'
  ),
  array(
    'name' => '乗り物',
    'href' => 'https://www.traicy.com/hotel'
  ),
  array(
    'name' => 'その他',
    'href' => 'https://www.traicy.com/information'
  ),
  array(
    'name' => 'リリース',
    'href' => 'http://release.traicy.com/'
  ),
  array(
    'name' => 'ランキング',
  )
);
 ?>

<div class="nav-tabs-outer">
  <ul class="nav nav-tabs js-tabs">
    <li class="active text-center"><a href="#tab1" data-toggle="tab"><?= $category[0]['name']  ?></a></li>
<?php	for ($i=2; $i<=8; $i++)  : ?><li class="text-center"><a href="#tab<?= $i ?>" data-toggle="tab"><?= $category[$i - 1]['name']  ?></a></li><?php endfor; ?>
	</ul>
</div> <!-- nav-tabs-outer -->

<div class="tab-content js-swipe">

<?php
$getNum = 6 + 1;
for($j=0;$j<6;$j++) :
	//カテゴリの選択
	if($j==0)	$tmp = array(0);
	else if($j==1)	$tmp = array(82);
	else if($j==2)	$tmp = array(1844);
	else if($j==3)	$tmp = array(2287);
	else if($j==4)	$tmp = array(213,870,243,7,242);
	else if($j==5)	$tmp = array(760,272,606,443,1,8939,8481,159,92,8461,1399);
	//カテゴリに合う記事をデータベースから引っ張ってくる
	$get_posts_args = array(
		'category' => $tmp,
		'numberposts' => $getNum,
		'order' => 'DESC',
	);
	$article = get_posts( $get_posts_args );
?>

<?php if( $j == 0 ) : ?>
<div class="tab-pane active" id="tab1">
<?php else : ?>
<div class="tab-pane" id="tab<?= $j+1 ?>">
<?php endif; ?>



<?php for($i=0;$i<$getNum;$i++) : ?>
  <?php if( $i == (int)($getNum/2) && $j == 0 ) : ?>
    <div id="compeOld" class="yahoo_ad">
        <!--  Yahooの広告 -->
        <script type="text/javascript" language="JavaScript">
        yads_ad_ds = '52929_194770';
        </script>
        <script type="text/javascript" language="JavaScript" src="//yads.c.yimg.jp/js/yads.js"></script>
    </div>
  <?php endif; ?>
	<a href="<?php echo $article[$i] -> guid; ?>" id="aCompe">
		<div id="compeOld">
			<div id="compeImgLeft">
<?php
if(has_post_thumbnail($article[$i] -> ID)){
	if($i==0)
		echo get_the_post_thumbnail($article[$i] -> ID, 'large');
	else
		echo get_the_post_thumbnail($article[$i] -> ID, 'thumbnail');
}else{
  echo '<img src="'.get_stylesheet_directory_uri().'/images/dummy_600_400.jpg">';
}
?>
			</div> <!-- compeImgLeft -->
			<div id="compeArticleRight"><?php echo $article[$i] -> post_title; ?></div>
    </div> <!-- old -->
	</a>
<?php endfor; ?>
<script>
jQuery($(document).ready(function(){
  $('.yahoo_ad > div > div > a').css('background', 'white');
  $('.yahoo_ad > div > div > a dl dt:first-child').css('color', 'var(--main-title-color)');
}));
</script>

<div class="continue">
  <a href='<?= $category[$j]['href'] ?>'><div class="arrow"></div><div>続きを見る</div></a>
</div>
</div> <!-- tab-pane -->

<?php endfor; ?>

<?php
/**
 * feedを読み込む
 */ ?>
<?php
//$url = "http://release.traicy.com/wp-content/json/release.json";
$url = "/var/www/release/wp-content/json/release.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$json = json_decode($json,true);
?>


<div class="tab-pane" id="tab7">

<?php for($i=0;$i<$getNum;$i++) : ?>
	<a href="<?php echo $json[$i]['permalink']; ?>" id="aCompe">
		<div id="compeOld">
			<div id="compeImgLeft">
<?php
if($i==0)
	echo '<img src="'.$json[$i]['img_large'].'">';
else
	echo '<img src="'.$json[$i]['img_thumbnail'].'">';
?>
			</div>
			<div id="compeArticleRight"><?php echo mb_substr(strip_tags($json[$i]['title']),0,60).'...'; ?></div>
		</div>
	</a>
<?php endfor; ?>
<?php //記事の表示 ?>

<div class="continue">
  <a href='http://release.traicy.com/newarticle'><div class="arrow"></div><div>続きを見る</div></a>
</div>
</div> <!-- tab-pane -->

<?php // ランキングの表示 ?>
<?php
$args=array(
	// PV集計期間（daily, weekly, monthly, all から選べます）
	'range' => 'daily',
	// PV数順で並び替え（comments を指定するとコメント順になります）
	'order_by' => 'views',
	// post OR page 
	'post_type' => 'post',
	// 表示数
	'limit' => 7,
	// HTMLのwrapper　開始タグ
	'wpp_start' => '<div class="tab-pane" id="tab8">',
	// HTMLのwrapper　終了タグ
	'wpp_end' => '</div>',
	// サムネイル画像の幅
	'thumbnail_width' => '300',
	// サムネイル画像の高さ
	'thumbnail_height' => '0',
	// HTML部分
	'post_html' => '
	<a href="{url}" id="aCompe">
		<div id="compeOld">
			<div id="compeImgLeft">
				{thumb_img}
			</div>
			<div id="compeArticleRight">{text_title}</div>
		</div>
	</a>'
);
	wpp_get_mostpopular($args);
?>
</div> <!-- tab-content -->
