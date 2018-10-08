<?php
$apiKey = "tr779613263267438815356055478926";
$countries = array(
  'アメリカ' => 'US',
  '韓国' => 'KR',
  '中国' => 'CN',
  'カナダ' => 'CA',
  'インド' => 'IN',
  'インドネシア' => 'ID',
  'タイ' => 'TH',
  '台湾' => 'TW',
  'フィリピン' => 'PH',
  'ベトナム' => 'VN',
  'マレーシア' => 'MY',
  'イギリス' => 'UK',
  'イタリア' => 'IT',
  'オーストラリア' => 'AU',
  'スペイン' => 'ES',
  'ドイツ' => 'DE',
  'フランス' => 'FR',
  '香港' => 'HK',
  'グアム' => 'GU',
);

$month = date('m');
$options = array();
foreach ($countries as $name => $code) {
  $url = "http://partners.api.skyscanner.net/apiservices/browseroutes/v1.0/JP/JPY/ja-JP/JP-sky/" . $code . "-sky/anytime/anytime?apiKey=" . $apiKey;

  /**
    skyscannerのAPIからデータを取得
  */
  $json = file_get_contents($url);
  $result = json_decode($json,true);

  /**
  最安価格を算出し、最安日の出発日と帰国日を取得
  **/
  $plans = array();
  foreach ($result['Quotes'] as $value) {
    $plans = $plans + array( $value['QuoteId'] => $value['MinPrice'] );
  }
  asort($plans);
  $index = key(array_slice($plans, 0, 1, true)) - 1;
  $departure = substr( $result['Quotes'][$index]['OutboundLeg']['DepartureDate'] , 0, 10 );
  $return = substr( $result['Quotes'][$index]['InboundLeg']['DepartureDate'], 0, 10 );

  /**
  最安価格を検索できるリンクを発行
  **/
  $lowestURL = "http://partners.api.skyscanner.net/apiservices/referral/v1.0/JP/JPY/ja-JP/JP-sky/" . $code . "-sky/" . $departure . "/" . $return . "/?apiKey=" . $apiKey;

  /**
    カスタムフィールドに値を格納するための配列を作成
  */
  $options[$name] = array( current(array_slice($plans, 0, 1, true)), $lowestURL );
}
update_option( "skyscanner", $options );
