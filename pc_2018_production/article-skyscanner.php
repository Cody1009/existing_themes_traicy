<?php
/**
 * カスタムフィールドの値を用いてskyscannerの値を取得
 */
$skyscanner = get_option('skyscanner');
/**
 * 記事に関連のある国名を取得
 */
$name_list = ['アメリカ', '韓国', '中国', 'カナダ', 'インド', 'インドネシア', 'タイ', '台湾', 'フィリピン', 'ベトナム', 'マレーシア', 'イギリス', 'イタリア', 'オーストラリア', 'スペイン', 'ドイツ', 'フランス', '香港', 'グアム'];

$country_name = get_post_meta($post->ID, 'countryName', true);

switch ($country_name) {
    case 'インドネシア（バリ島以外の全域）':
        $country_name = "インドネシア";
        break;
    case 'インドネシア（バリ島）':
        $country_name = "インドネシア";
        break;
    case 'マレーシア（マレー半島主要都市）':
        $country_name = "マレーシア";
        break;
    case 'マレーシア（ボルネオ島及び全域）':
        $country_name = "マレーシア";
        break;
    case 'ハワイ':
        $country_name = "アメリカ";
        break;
    default:
        break;
}
if ($country_name == "選択肢なし" || $country_name == "") {
    $index = rand(0, count($name_list) - 1);
    $country = current(array_slice($skyscanner, $index, 1, true));
    $country_name = $name_list[$index];
} else {
    $country = $skyscanner[$country_name];
}
?>




<div class="bottom-comparison-price">
		<a href="<?= $lowest['detailUrl']; ?>">
         <p class="bottom-country"><?= $country_name ?>行き<br>航空券</p>
            	<div class="bottom-price">
						<p class="bottom-lawest-price"><span><?= number_format($country[0]); ?></span> 円</p>
            <div class="bottom-image imageSkyscanner">
                <img src="/images/skyscanner.png"  class="object-fit-img"/>
            </div>
					</div>
		 </a>
      </div>


