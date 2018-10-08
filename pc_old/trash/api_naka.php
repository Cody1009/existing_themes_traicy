<?php
function print_xml($xml) {
  $dom = new DOMDocument('1.0', 'utf-8');
  $node = $dom->importNode(dom_import_simplexml($xml), true);
  $dom->appendChild($node);
  $dom->preserveWhiteSpace = false;
  $dom->formatOutput = true;
  $xml_string = $dom->saveXML();
  echo $xml_string;
}

$base_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&";
// $param = array(
//     "country"          => $_POST['country'],
//     "use_days"         => $_POST['use_days'],
//     "compensationType" => $_POST['compensationType'],
//     "receipt"          => $_POST['receipt'],
//     "return"           => $_POST['return']
// );
$param = array(
    "country"          => "6",
    "use_days"         => "1",
    "compensationType" => "7001",
    "receipt"          => "1",
    "return"           => "1"
);
$url = $base_url . http_build_query($param);
$check_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&country=6&use_days=1&compensationType=7001&receipt=1&return=1";

// echo var_dump($param);
// echo var_dump($url);

// https://blog.manabusakai.com/2013/02/file-get-contents-status-code/
$context = stream_context_create(array(
    'http' => array('ignore_errors' => true)
));
$response = file_get_contents($url, false, $context);
if(!strpos($http_response_header[0], '200')) {
  // 例外処理
  echo "<br><span style='color: red; font-weight: bold;'>API Error</span><br>";
  return;
}

$xml = new SimpleXMLElement($response);
echo "<br>";
$serviceId = array();
foreach($xml -> serviceList -> service as $itemValue){
  echo "<div class='wifiItem'>";
    echo "<div class='wifiTitle'>";
      echo "{$itemValue -> serviceName}";
    echo "</div>";

    echo "<div class='leftSide'>";
      echo "<a href={$itemValue -> detailUrl}><img src={$itemValue -> serviceLogo}></a>";
    echo "</div>";

    echo "<div class='rightSide'>";
      echo "<table border='1'>";
      echo "<tr>";
        echo "<th>通信/レンタル費</th>";
        echo "<th>補償制度名称</th>";
        echo "<th>補償制度費</th>";
        echo "<th>補償制度コメント</th>";
        echo "<th>回線</th>";
        echo "<th>お申込み</th>";
      echo "</tr>";
      echo "<tr>";
        echo "<td>{$itemValue -> rentalFee}</td>";
        echo "<td>{$itemValue -> compensationName}</td>";
        echo "<td>{$itemValue -> compensationFee}</td>";
        echo "<td>{$itemValue -> compensationComment}</td>";
        echo "<td>{$itemValue -> lineType}</td>";  
        echo "<td><a href='{$itemValue -> applyUrl}'>こちら</a></td>";
      echo "</tr>";
      echo "</table>";
    echo "</div>";
    echo "<div class='clear'></div>";
  echo "</div>";
}
#print_r($serviceId);
?>
