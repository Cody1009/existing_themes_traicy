<?php
class isUniqueArrayFunction{
    // 配列内の全ての値が一意かチェックする
    function isUniqueArray($target_array){    
        $unique_array = array_unique($target_array);
        $alignedUnique = array_values($unique_array);
        return $alignedUnique;
    }
}
?>

<?php
    // エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
    ini_set('display_errors',1);

    $base_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&";
    
    /*$param = array(
        "country" => "$_POST['country']",
        "use_days" => 1,
        "compensationType" => "$_POST['compensationType']",
        "receipt" => "$_POST['receiptStep']",
        "return" => 1
    );
    $param = array(
        "country" => 6,
        "use_days" => 1,
        "compensationType" => 7001,
        "receipt" => 1,
        "return" => 1
    );*/
    //$url = $base_url . http_build_query($param);
    $url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/search/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V&country=6&use_days=1&compensationType=7001&receipt=1&return=1";
        
    //xmlエラーを吐き出すとき
    $file = file_get_contents($url);
    $xml = preg_replace('/&(?=[a-z_0-9]+=)/m','&amp;',$file);
    $xmlData = simplexml_load_string($xml);

    /* 以下は，Xmlの中身を見たいときにコメントアウトを外してください．
    ini_set('xdebug.var_display_max_children', -1);
    ini_set('xdebug.var_display_max_data', -1);
    ini_set('xdebug.var_display_max_depth', -1);
    var_dump($xmlData);
    */
       
    echo '<div id = "content" role = "main">';
		foreach($xmlData -> serviceList -> service as $itemValue){
        $result[] = (string)$itemValue->serviceName;
    }
/*    print_r($result);
echo '<br/>';*/
    $obj = new isUniqueArrayFunction;
    $copyResult = $obj -> isUniqueArray($result);
/*    print_r($copyResult);
echo '<br/>';*/
?>

<!-- コンテンツ -->
<article itemscope itemtype="http://schema.org/Article">

<ul>
<li class = "line2c">
<div class = "new-entry">
<div class="new-entry-content right title">
<span class="hide_u600">

<div itemprop="articleBody">
<section>
<p>森の工房は、木々のあふれる森の中にあります。森の入口から細い小道を通り、森の奥に進んでください。しばらく</p>
</section>
<section>
<p>森の工房では、春、夏、秋、冬と、四季折々の自然を楽しむことができます。<br />
</p>
</section>
<section>
<p>工房のまわりにはいろいろな動物たちが棲んでいます。キツネ、タヌキ、イタチ、ウサギ、リス、シカ、イノシ</p>
</section>
<section>
<p>工房のまわりにはいろいろな動物たちが棲んでいます。キツネ、タヌキ、イタチ、ウサギ、リス、シカ、イノシ</p>
</section>
<section>
<p>工房のまわりにはいろいろな動物たち、シカ、イノシ</p>
</section>
</div>

</span>
</div>
</div>
</li>
</ul>

</article>

<?php
		for($i=0; $i<count($copyResult);$i++){
			echo '<div class = "both">サービス会社名 : '.$copyResult[$i].'</div>';
			//echo '<div class = "both">''</div>';
				$count = 0;
			foreach($xmlData -> serviceList -> service as $itemValue){
				if($copyResult[$i] === (string)$itemValue->serviceName){
					echo '<ul>';
          	echo '<li class = "line2c">';
          		echo '<a href="'.$itemValue -> detailUrl.'">';
								echo '<div class = "new-entry">';
									/*if($count == 0){
          					echo '<div class="new-entry-thumb left">';
            				echo '<img src="'.$itemValue -> serviceLogo.'">';
										echo '</div>';
								}*/
					//echo '<div class="new-entry-content right title">';
										echo '<span class="hide_u600">';
						echo '<div itemprop="articleBody">';
						echo '<section><p>通信/レンタル費 : '.$itemValue -> rentalFee.'</p></section><br>';
											echo '<section><p>補償制度名称 : '.$itemValue -> compensationName.'</p></section><br>';
											echo '<section><p>補償制度費 : '.$itemValue -> compensationFee.'</p></section><br>';		
											echo '<section><p>補償制度コメント : '.$itemValue -> compensationComment.'</p></section><br>';		
											echo '<section><p>回線 : '.$itemValue -> lineType.'</p></section><br>';
											echo '</div>';
											echo '</span>';
						//echo '</div>';
         				echo '</div>';
          		echo '</a>';
          	echo '</li>';
					echo '</ul>';
					$count = $count + 1;
				}

        }
    }
            
    echo '</div>';
?>
