<?php
/**
  香港エクスプレス航空とのタイアップページ
**/
?>

<?php
  /* 変数宣言 */
  $image = get_stylesheet_directory_uri() . '/../../UO/img/';
  $css = get_stylesheet_directory_uri() . '/../../UO/css/';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
<meta name="description" content="航空・鉄道・ホテルなど旅行情報をお送りするメディア。">
<meta name="keywords" content="航空ニュース,鉄道ニュース,ホテル業界ニュース,新路線">
<title>トラベルメディア「Traicy（トライシー）」 - </title>
<link rel="shortcut icon" href="https://www.traicy.com/images/favicon-32x32.png">
<link rel="stylesheet" type="text/css" href="<?= $css ?>index.css">
</head>

<body>
<div class="content-wrap">
	<div class="page-campaign content">
		<header class="header">
			<h1>
				<a href="https://www.traicy.com">
					<img class="logo" src="<?= $image ?>logo.png" width="173" height="70" alt="Traicy トラベルメディア「Traicy（トライシー）」">
				</a>
			</h1>
		</header>
		<main class="main">
			<div class="hero">
				<img class="main-visual" src="<?= $image ?>main-visual.jpg" width="960" height="421" alt="HK express 香港のLCC航空会社">
				<img class="caption" src="<?= $image ?>caption.png" width="149" height="154" alt="世界で最も安全なLCCトップ10に選ばれました ※AirlineRaatings.com 2017年度版評価">
				<p class="description">香港エクスプレスは、香港発、かつ唯一の格安航空会社(LCC)です。<br>格安運賃の提供と定時運航をモットーに、香港やその周辺諸国の市場に航空競争をもたらしました。</p>
			</div>
			<div class="features">
				<ul class="inner">
					<li class="feature">
						<h2 class="headline">機材</h2>
						<img class="img" src="<?= $image ?>feature-equipment.jpg" width="292" height="196" alt="機材">
						<p class="description">香港エクスプレスは現在、エアバスA320、A320N、A321で運航しています。ネットワークの拡大に伴い、2018年までには同機材をさらに30機まで増やす計画があります。<br>■座席数（全てエコノミークラス） <br>A320：174/180席 <br>A320N：188席 <br>A321：230席</p>
					</li>
					<li class="feature">
						<h2 class="headline">ネットワーク</h2>
						<img class="img" src="<?= $image ?>feature-network.jpg" width="292" height="196" alt="機材">
						<p class="description">2013年10月27日から、香港エクスプレスはどんどんネットワークを拡大していきました。2017年1月現在では、タイ、中国、台湾、日本、韓国、ベトナム、カンボジア、フィリピン、ミャンマー、サイパンへ就航しています。</p>
					</li>
					<li class="feature">
						<h2 class="headline">サービス</h2>
						<img class="img" src="<?= $image ?>feature-service.jpg" width="292" height="196" alt="サービス">
						<p class="description">香港エクスプレスの多言語対応クルーは、最高水準の国際的安全基準を満たすべく訓練され、お客様がご期待される水準のサービス、正確な定時発着パフォーマンス、そして安全性を提供します。また、日本人のお客様により快適なフライトをお過ごしいただけるように、現在、日本路線では各便に最低1名の日本人クルーが乗務するべく、日本人クルーの採用を進めています。
					</li>
				</ul>
			</div>
			<div class="action">
				<a class="button" href="http://www.hkexpress.com/ja">予約はこちら</a>
			</div>
			<div class="advertise">
				<img class="lotte-dutyfree" src="<?= $image ?>lotte-dutyfree.jpg" width="896" height="159" alt="LOTTE DUTY FREE">
			</div>
		</main>
	</div>
</div>
</body>
</html>
