<?php
define( 'WIFI_DAILY', 'wifiDaily' );

$contries = [102,94,6,100,113,61];
$base_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&";
$param = array(
  "country" => 0,
  "use_days" => 1,
  "compensationType" => 7001,
  "receipt" => 1,
  "return" => 1
);
// var_dump($param);
$options = [];
foreach ($contries as $countryId) {
  $param["country"] = $countryId;
  // var_dump( $param );
  $url = $base_url . http_build_query($param);
  $file = file_get_contents($url);
  $xml = preg_replace('/&(?=[a-z_0-9]+=)/m','&amp;',$file);
  $xmlData = simplexml_load_string($xml);
  $tmp = (array)($xmlData -> serviceList -> service[0] -> rentalFee);
  array_push( $options , $tmp[0]);
}
array_push( $options, date('Y/m/d H:i:s') );
// add_option( WIFI_DAILY , $options );
