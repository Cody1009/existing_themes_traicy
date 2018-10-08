<?php
	// 配列内の全ての値が一意かチェックする
	function isUniqueArray($target_array){
		$unique_array = array_unique($target_array);
		$alignedUnique = array_values($unique_array);
		return $alignedUnique;
	}
?>

<?php
/**
 * タブメニューを作成時に必要
 */ ?>
<script type="text/javascript">
jQuery(function() {
	 $('#wifiCompeTab > li').click(function() {
		 var tabnum = $('#wifiCompeTab > li').index(this);
		 $('.wifiContentCompe .show').css('display','none');
		 $('.wifiContentCompe .show').eq(tabnum).css('display','block');
		 $('#wifiCompeTab > li').removeClass('select');
		 $(this).addClass('select')
	 });
 });
</script>

<?php
if(isset($_POST['country'])) :
?>

<?php
	// エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
	//ini_set('display_errors',1);
	$base_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&";
	$param = array(
		"country" => $_POST['country'],
		"use_days" => $_POST['use_days'],
		"compensationType" => $_POST['compensationType'],
		"receipt" => $_POST['receipt'],
		"return" => $_POST['returnPlace']
	);
	$url = $base_url . http_build_query($param);

	$file = file_get_contents($url);
	$xml = preg_replace('/&(?=[a-z_0-9]+=)/m','&amp;',$file);
	$xmlData = simplexml_load_string($xml);

		/* 以下は，Xmlの中身を見たいときにコメントアウトを外してください．
		ini_set('xdebug.var_display_max_children', -1);
		ini_set('xdebug.var_display_max_data', -1);
		ini_set('xdebug.var_display_max_depth', -1);
		var_dump($xmlData);
		 */
?>

<?php

	foreach($xmlData -> serviceList -> service as $item){
		switch ($item -> lineComment) {
			case '1GB/日':
				$item -> lineComment = '1000MB/日';
				break;
			case 'レンタル期間中2GB':
				$item -> lineComment = '2000MB/日';
				break;
			case '非公開':
				$item -> lineComment = '100000MB/日';
				break;
			case '無制限':
				$item -> lineComment = '10000MB/日';
				break;
			default:
				break;
		}
		$items[] = $item;
		$lineComment[] = (string)$item -> lineComment;
	}

	$uniqueLineComment = isUniqueArray($lineComment);

//容量別の最安
	foreach($uniqueLineComment as $lineCommentItem){
		$min = (int)1e10;
		for($i=0; $i<count($items); $i++)	if(((string)$items[$i] -> lineComment === (string)$lineCommentItem) && ($min > (int)$items[$i] -> rentalFee))	$min = (int)$items[$i] -> rentalFee;
		for($i=0; $i<count($items); $i++)	if(((string)$items[$i] -> lineComment === (string)$lineCommentItem) && ($min === (int)$items[$i] -> rentalFee))	$lowest[] = $i;
	}
//容量別で最大の件数を取得
	for($i=0;$i<count($uniqueLineComment);$i++)	foreach($items as $item)	if((string)$item -> lineComment === (string)$uniqueLineComment[$i])	$tmp[$i] += 1;
	$max = max($tmp);
?>

<?php
foreach ($items as $item) {
switch ($item -> lineComment) {
	case '1000MB/日':
		$item -> lineComment = '1GB/日';
		break;
	case '2000MB/日':
		$item -> lineComment = '2GB/日';
		break;
	case '100000MB/日':
		$item -> lineComment = '非公開';
		break;
	case '10000MB/日':
		$item -> lineComment = '無制限';
		break;
	default:
		break;
}
}
?>

<h1 class="wifiTitle"><?php echo $xmlData -> parameter -> areaName; ?>　容量別　最安価格</h1>

<div class="rankingTop">
<?php	for($i=0;$i<count($lowest);$i++) : ?>
	<div class="capasity"
<?php
	switch ((string)$items[$lowest[$i]] -> lineComment) {
		case '200MB/日':
			echo " style='background : #ffa8d3;'";
			break;
		case '250MB/日':
			echo " style='background : rgba(232,132,107,1);'";
			break;
		case '500MB/日':
			echo " style='background : rgba(22,124,128,1);'";
			break;
		case '700MB/日':
			echo " style='background : rgba(229,75,75,1);'";
			break;
		case '非公開' :
			echo " style='background : rgba(22,82,142,1);'";
			break;
		case '1GB/日' :
			echo " style='background : rgba(0,130,200,1);'";
			break;
		case '2GB/日' :
			echo " style='background : #ffa2c7;'";
			break;
		case '無制限' :
			echo " style='background : #ff8800;'";
			break;
		default :
			echo " style='background : var(--bar-color);'";
			break;
	}
?>
> <?php //左にある">"は必要なやつです． ?>
		<a class="special" href="<?php echo $items[$lowest[$i]] -> applyUrl;?>" target="_blank">
			<div class="lineComment">
				<?php echo $items[$lowest[$i]] -> lineComment; ?>
			</div>
			<div class="wifiImg">
				<img src = "<?php echo $items[$lowest[$i]] -> serviceLogo; ?>">
			</div>
			<div class="rentalFee"><?php echo ((double)( $items[$lowest[$i]] -> rentalFee) / (double)($_POST['use_days'])); ?> 円/日</div>
		</a>
	</div>
<?php	endfor; ?> <!-- capasity -->
</div> <!-- rankingTop -->

<span><p class="titleTabCompasion">容量別 価格比較</p></span>

<?php
	$arr1 = $arr2 = $uniqueLineComment;
	usort($arr1, "strcmp");
	usort($arr2, "strnatcmp");
	$uniqueLineComment = $arr2;
?>
<?php
for($i=0;$i<count($uniqueLineComment);$i++){
	switch ($uniqueLineComment[$i]) {
		case '1000MB/日':
			$uniqueLineComment[$i] = '1GB/日';
			break;
		case '2000MB/日':
			$uniqueLineComment[$i] = '2GB/日';
			break;
		case '100000MB/日':
			$uniqueLineComment[$i] = '非公開';
			break;
		case '10000MB/日':
			$uniqueLineComment[$i] = '無制限';
			break;
		default:
			break;
	}
}
?>
<div id="wifiCompe" style="height : <?php echo $max*70+30+30; ?>px ;">
	<ul id="wifiCompeTab">
<?php $tmp = 0; ?>
<?php foreach($uniqueLineComment as $item) : ?>
		<?php if($tmp !== 0) : ?>
			<li style="width : <?php echo ('calc(100%/'.count($uniqueLineComment).');'); ?>"><?php echo $item; ?></li>
		<?php else : ?>
			<li style="width : <?php echo ('calc(100%/'.count($uniqueLineComment).');'); ?>" class="select"><?php echo $item; ?></li>
		<?php endif; ?>
		<?php $tmp++; ?>
<?php	endforeach; ?>
	</ul>
	<div class="wifiContentCompe">
		<div>
<?php for($i=0;$i<count($uniqueLineComment);$i++) : ?>
<?php if($i == 0) : ?>
			<div class="show" style="display: block;">
<?php else : ?>
			<div class="show articleHide">
<?php endif; ?>
				<ul>
	<?php foreach($items as $item) : ?>
		<?php if((string)$item -> lineComment === (string)$uniqueLineComment[$i]) : ?>
					<li class="wifiContent">
						<a href="<?php echo $item -> applyUrl; ?>" class="special" target="_blank">
							<div class="wifiImgLeft">
								<img src="<?php echo $item -> serviceLogo; ?>">
							</div>
							<div class="wifiTitleRight">
								<div class ="costHikaku">
<?php
								if((string)$itemValue -> kakakuCampaignFlg === "1"){
									echo '<p class = "atitle">',$item -> serviceName,'&nbsp;&nbsp;',$item -> planName,'&nbsp;&nbsp;<span class ="kakaku">価格.com限定価格!!&nbsp;&nbsp;',($item -> lineType) == "3G" ? "3G" : "",'</span></p>';
								}else{
									echo '<p class = "atitle">'.$item -> serviceName.'&nbsp;&nbsp;&nbsp;'.$item -> planName.'&nbsp;&nbsp;<span class = "kakaku">',($item -> lineType) == "3G" ? "3G" : "",'</span></p>';
								}
?>
								</div>
								<p class = "fee"><span class = "perCost">料金&nbsp;:&nbsp;</span><?php echo (double)$item -> rentalFee / (double)$_POST['use_days']; ?>&nbsp;<span class = "perCost">円&nbsp;(1日あたり)</span>
							</div>
						</a>
					</li>
		<?php endif; ?>
	<?php endforeach; ?>
				</ul>
			</div>
<?php endfor; ?>
		</div>
	</div> <!-- wifiContentCompe -->
</div> <!-- wifiCompe -->

<?php endif; ?>
