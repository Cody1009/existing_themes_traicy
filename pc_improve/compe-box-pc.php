<?php
/**
 * タブメニューを作成時に必要
 */ ?>
<script type="text/javascript">
    jQuery(function() {
        $('#articleTabTab > li').click(function() {
            var tabnum = $('#articleTabTab > li').index(this);
            $('.content .show').css('display','none');
            $('.content .show').eq(tabnum).css('display','block');
            $('#articleTabTab > li').removeClass('select');
            $(this).addClass('select')
        });
    });
</script>
<script type="text/javascript">
    jQuery(function() {
        $('#variationCompeTab > li').click(function() {
            var tabnum = $('#variationCompeTab > li').index(this);
            $('.contentCompe .show').css('display','none');
            $('.contentCompe .show').eq(tabnum).css('display','block');
            $('#variationCompeTab > li').removeClass('select');
            $(this).addClass('select')
        });
    });
</script>


<?php
// エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
	//ini_set('display_errors',1);
?>

<!-- トップページ表示 -->
	<div class="clearfix compeBox">
		<div class="topArticle">

<?php //一つのタブに表示させる記事数 ?>
<?php $getNum = 6 + 1; ?>

			<div id="articleTab">
				<ul id="articleTabTab">
					<li class="select"> 新着 </li>
					<li> セール </li>
					<li> 運航情報 </li>
					<li> 旅行情報 </li>
					<li> 乗り物<br>コラム </li>
					<li> その他 </li>
					<li> リリース </li>
				</ul>
				<div class="content">
<?php
/**
 * 同じ処理をfor文によって実装．
 * 違うのはカテゴリの参照のみ
 */?>
<?php for($j=0;$j<6;$j++) : ?>
<?php
if($j==0)	$tmp = array(0);
else if($j==1)	$tmp = array(82);
else if($j==2)	$tmp = array(1844);
else if($j==3)	$tmp = array(2287);
else if($j==4)	$tmp = array(213,870,243,7,242);
else if($j==5)	$tmp = array(760,272,606,443,1,8939,8481,159,92,8461,1399);
?>
<?php if($j==0) { ?>
					<div class="show">
<?php }else{ ?>
					<div class="show articleHide">
<?php } ?>
						<div class="articleLeft">
							<ul>

<?php
$get_posts_args = array(
	'category' => $tmp,
	'numberposts' => $getNum,
	'order' => 'DESC',
);
$article = get_posts( $get_posts_args );
for($i=1;$i<$getNum;$i++) : ?>
								<a href = " <?php echo $article[$i] -> guid; ?> ">
									<li><?php shortingTitle($article[$i] -> post_title , 55); ?></li>
								</a>
<?php endfor; ?>
							</ul>
						</div>
						<div class="articleRight">
							<a href = "<?php echo $article[0] -> guid;?>">
								<div class = "articleRightImage">
<?php
$id = $article[0] -> ID;
if(has_post_thumbnail($id)) {
	echo get_the_post_thumbnail($id, 'medium');
}else{
	echo (string)$id . '<img src="'.get_stylesheet_directory_uri().'/images/dummy_600_400.jpg">';
} ?>
								</div>
								<div class ="articleRightText">
<?php echo shortingTitle($article[0] -> post_title, 45); ?>
								</div>
							</a>
						</div> <!-- articleRight-->
						<div class="articleBottom" align="bottom">
<?php if($j == 0){ ?>
							<a href="https://www.traicy.com/newarticle" title="カテゴリー名">もっと見る</a>
<?php }else{ ?>
							<a href="<?php echo(esc_url( get_category_link($tmp[0]))); ?>" title="カテゴリー名">もっと見る</a>
<?php } ?>
						</div> <!-- articleBottom -->
					</div> <!-- show or show articleHide -->
<?php endfor;?>

<?php /*リリースのページだけ別処理*/　?>



					<div class="show articleHide">
<?php
//$url = "http://release.traicy.com/wp-content/json/release.json";
$url = "/var/www/release/wp-content/json/release.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$json = json_decode($json,true);
?>
						<div class="articleLeft">
							<ul>
<?php
for($i=1;$i<$getNum;$i++){
?>
								<a href = " <?php echo $json[$i]['permalink']; ?> ">
									<li><?php shortingTitle($json[$i]['title'] , 45); ?> </li>
								</a>
<?php } ?>
							</ul>
						</div>

						<div class="articleRight">
							<a href = " <?php echo $json[0]['permalink']; ?> ">
								<div class = "articleRightImage">
<?php echo '<img src="'.$json[0]['img_medium'].'">'; ?>
								</div>
								<div class ="articleRightText">
<?php echo shortingTitle($json[0]['title'], 40); ?>
								</div>
							</a>
						</div> <!-- articleRight-->



						<div class="articleBottom" align="bottom">
							<a href="http://release.traicy.com/" title="カテゴリー名">もっと見る</a>
						</div> <!-- articleBottom -->


					</div> <!-- show articleHide -->





				</div> <!-- content -->
			</div> <!-- articleTab -->

		</div> <!-- topArticle -->

<div class="topCompe">
  <div id="variationCompe">
    <ul id="variationCompeTab">
      <li class="talk select">Talk</li>
      <li class="wifi">Wi-fi</li>
      <li class="ticket">航空券</li>
    </ul>
    <div class="contentCompe">
      <div class="show compeTraicyTalk">
        <?php
          get_template_part('front-traicy-talk-pc');
          echo '</div>';
          global $isCompeBox;
          $isCompeBox = true;
        ?>
      <div class="show articleHide wifi" style="display: none;"><?php get_template_part('form'); ?></div>
      <?php $isCompeBox = false; ?>
      <div class="show articleHide ticket" style="display: none;"><a href="http://airticket.traicy.com/" target="_blank">Traicy × Skyscanner</a></div>
    </div>
  </div>
</div> <!-- topComepe -->

</div> <!-- compeBox -->
