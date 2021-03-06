<?php
#{{{
$country = array(
	"アメリカ" => 6,
	"韓国" => 94,
	"中国" => 102,
	"カナダ" => 23,
	"インド" => 91,
	"インドネシア（バリ島以外の全域）" => 92,
	"インドネシア（バリ島）" => 93,
	"タイ" => 99,
	"台湾" => 100,
	"フィリピン" => 109,
	"ベトナム" => 112,
	"マレーシア（マレー半島主要都市）" => 115,
	"マレーシア（ボルネオ島及び全域）" => 116,
	"イギリス" => 144,
	"イタリア" => 149,
	"オーストラリア" => 79,
	"スペイン" => 170,
	"ドイツ" => 178,
	"フランス" => 184,
	"香港" => 113,
	"ハワイ" => 61,
	"グアム" => 29,
	"選択肢なし" => 0,
);
#}}}

// カスタムフィールドから選択された国名を取得
$country_id_list = [6, 94, 102, 23, 91, 92, 93, 99, 100, 109, 112, 115, 116, 144, 149, 79, 170, 184, 113, 61, 29];
$country_name = get_post_meta($post->ID, 'countryName', true);
$country_id = $country[$country_name];
if( $country_id == 0 )	$country_id = $country_id_list[ rand( 0, count($country_id_list)-1 )];

$param = array(
	"country" => $country_id,
	"use_days" => 1,
	"compensationType" => 7001,
	"receipt" => 1,
	"return" => 1
);
//	価格のapiにアクセス
$base_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&";
$url = $base_url . http_build_query($param);
$file = file_get_contents($url);
$xml = preg_replace('/&(?=[a-z_0-9]+=)/m','&amp;',$file);
$xmlData = simplexml_load_string($xml);
// 一旦jsonに変換してから配列化
$json = json_encode($xmlData);
$wifi_data = json_decode($json, TRUE);
// 名前と最低価格を取得
$countryName = $wifi_data['parameter']['areaName'];
$lowest = $wifi_data['serviceList']['service'][0];

?>

<?php

 ?>

<a class="floating_banner" href="<?= $lowest['detailUrl']; ?>" target="_blank">
  <div class="image">
    <img src="<?= str_replace("http:","https:",$lowest['serviceLogo']); ?>" class="object-fit-img" />
  </div>

  <div class="content">
    <h3><?= resizeTitle($countryName); ?></h3>
    <p>海外Wi-Fiが最安</p>
    <p class="fee"><?= $lowest['rentalFee']; ?><span>円/日</span></p>
  </div>

  <span class="apply square_btn" >申し込み</span>
</a>
