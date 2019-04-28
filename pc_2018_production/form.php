<?php
# APIを叩いてマスタデータを取得
#{{{
$xmlstr = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<master>
<country>
<item id="6" defaultDays="7">アメリカ</item>
<item id="7" defaultDays="5">アラスカ</item>
<item id="9" defaultDays="5">アルーバ</item>
<item id="10" defaultDays="7">アルゼンチン</item>
<item id="11" defaultDays="5">アンギラ</item>
<item id="12" defaultDays="5">アンティグア・バーブーダ</item>
<item id="13" defaultDays="5">イギリス領ケイマン諸島</item>
<item id="14" defaultDays="5">イギリス領タークス・カイコス</item>
<item id="15" defaultDays="5">イギリス領バージン諸島</item>
<item id="16" defaultDays="5">イギリス領バミューダ</item>
<item id="17" defaultDays="5">イースター島</item>
<item id="18" defaultDays="5">ウルグアイ</item>
<item id="19" defaultDays="5">エクアドル</item>
<item id="20" defaultDays="5">エルサルバドル</item>
<item id="21" defaultDays="5">オランダ領アンティル諸島</item>
<item id="22" defaultDays="5">ガイアナ</item>
<item id="23" defaultDays="7">カナダ</item>
<item id="26" defaultDays="5">キュラソー島（オランダ領アンティル）</item>
<item id="27" defaultDays="5">グアテマラ</item>
<item id="28" defaultDays="5">グアデルーペ</item>
<item id="29" defaultDays="4">グアム</item>
<item id="31" defaultDays="5">グレナダ</item>
<item id="32" defaultDays="5">コスタリカ</item>
<item id="33" defaultDays="5">コロンビア</item>
<item id="34" defaultDays="4">サイパン</item>
<item id="37" defaultDays="5">サン・バルテルミー島</item>
<item id="39" defaultDays="5">サンマルタン（フランス領）</item>
<item id="40" defaultDays="7">ジャマイカ</item>
<item id="41" defaultDays="5">シント・マールテン（オランダ領）or セントマーチン島</item>
<item id="42" defaultDays="5">スリナム</item>
<item id="43" defaultDays="5">セントクリストファー・ネイビス</item>
<item id="44" defaultDays="5">セントビンセント・グレナディーン島</item>
<item id="45" defaultDays="5">セントユースタティウス島</item>
<item id="46" defaultDays="5">セントルシア</item>
<item id="47" defaultDays="7">チリ</item>
<item id="48" defaultDays="4">テニアン</item>
<item id="49" defaultDays="5">ドミニカ</item>
<item id="50" defaultDays="5">ドミニカ共和国</item>
<item id="51" defaultDays="5">トリニダード・ドバゴ</item>
<item id="52" defaultDays="5">ニカラグア</item>
<item id="53" defaultDays="5">ハイチ</item>
<item id="56" defaultDays="5">バハマ</item>
<item id="57" defaultDays="5">パナマ</item>
<item id="59" defaultDays="5">パラグアイ</item>
<item id="60" defaultDays="5">バルバドス</item>
<item id="61" defaultDays="5">ハワイ</item>
<item id="62" defaultDays="5">プエルトリコ</item>
<item id="63" defaultDays="8">ブラジル</item>
<item id="64" defaultDays="5">フランス領　ギアナ</item>
<item id="65" defaultDays="5">ベネズエラ</item>
<item id="66" defaultDays="5">ベリーズ</item>
<item id="67" defaultDays="7">ペルー</item>
<item id="68" defaultDays="5">ボネール島（オランダ領）</item>
<item id="69" defaultDays="7">ボリビア</item>
<item id="70" defaultDays="5">ホンジュラス</item>
<item id="73" defaultDays="5">マルティニーク</item>
<item id="74" defaultDays="8">メキシコ</item>
<item id="76" defaultDays="5">モンセラット</item>
<item id="77" defaultDays="4">ロタ</item>
<item id="78" defaultDays="5">アメリカ領サモア</item>
<item id="79" defaultDays="6">オーストラリア</item>
<item id="81" defaultDays="5">サモア独立国</item>
<item id="82" defaultDays="5">トンガ</item>
<item id="83" defaultDays="5">ナウル共和国</item>
<item id="84" defaultDays="5">ニューカレドニア</item>
<item id="85" defaultDays="8">ニュージーランド</item>
<item id="86" defaultDays="5">パプアニューギニア</item>
<item id="87" defaultDays="5">バヌアツ</item>
<item id="89" defaultDays="5">フィジー諸島</item>
<item id="90" defaultDays="5">フランス領ポリネシア（タヒチ含）</item>
<item id="91" defaultDays="5">インド</item>
<item id="92" defaultDays="5">インドネシア（バリ島以外の全域）</item>
<item id="93" defaultDays="5">バリ島</item>
<item id="94" defaultDays="3">韓国</item>
<item id="95" defaultDays="5">カンボジア</item>
<item id="97" defaultDays="5">シンガポール</item>
<item id="98" defaultDays="3">スリランカ</item>
<item id="99" defaultDays="5">タイ</item>
<item id="100" defaultDays="4">台湾</item>
<item id="101" defaultDays="3">タジキスタン</item>
<item id="102" defaultDays="3">中国</item>
<item id="105" defaultDays="3">ネパール</item>
<item id="106" defaultDays="3">パキスタン</item>
<item id="107" defaultDays="3">バングラデシュ</item>
<item id="108" defaultDays="3">東ティモール民主主義共和国</item>
<item id="109" defaultDays="5">フィリピン</item>
<item id="110" defaultDays="3">ブータン</item>
<item id="111" defaultDays="3">ブルネイ</item>
<item id="112" defaultDays="5">ベトナム</item>
<item id="113" defaultDays="4">香港</item>
<item id="114" defaultDays="5">マカオ</item>
<item id="115" defaultDays="5">マレーシア（主要都市）</item>
<item id="116" defaultDays="6">マレーシア（ボルネオ島及び全域）</item>
<item id="117" defaultDays="3">ミャンマー</item>
<item id="118" defaultDays="8">モルディブ</item>
<item id="119" defaultDays="5">モンゴル（ウランバートル）</item>
<item id="120" defaultDays="5">モンゴル（首都及び全域）</item>
<item id="121" defaultDays="5">ラオス</item>
<item id="122" defaultDays="7">アフガニスタン</item>
<item id="123" defaultDays="7">アラブ首長国連邦</item>
<item id="124" defaultDays="7">イエメン</item>
<item id="125" defaultDays="7">イスラエル</item>
<item id="126" defaultDays="7">イラク</item>
<item id="128" defaultDays="7">オマーン</item>
<item id="129" defaultDays="6">カタール</item>
<item id="130" defaultDays="7">クウェート</item>
<item id="131" defaultDays="7">サウジアラビア</item>
<item id="133" defaultDays="7">バーレーン</item>
<item id="134" defaultDays="7">パレスチナ自治区</item>
<item id="135" defaultDays="6">ヨルダン</item>
<item id="137" defaultDays="7">アイスランド</item>
<item id="138" defaultDays="7">アイルランド</item>
<item id="139" defaultDays="7">アゼルバイジャン</item>
<item id="141" defaultDays="7">アルバニア</item>
<item id="142" defaultDays="7">アルメニア</item>
<item id="143" defaultDays="7">アンドラ</item>
<item id="144" defaultDays="7">イギリス</item>
<item id="145" defaultDays="5">イギリス領ガーンジー島</item>
<item id="146" defaultDays="5">イギリス領ジブラルタル</item>
<item id="147" defaultDays="5">イギリス領ジャージー島</item>
<item id="148" defaultDays="5">イギリス領マン島</item>
<item id="149" defaultDays="8">イタリア</item>
<item id="150" defaultDays="5">ウクライナ</item>
<item id="151" defaultDays="5">ウズベキスタン</item>
<item id="152" defaultDays="5">エストニア</item>
<item id="153" defaultDays="6">オーストリア</item>
<item id="154" defaultDays="5">オーランド諸島</item>
<item id="155" defaultDays="7">オランダ</item>
<item id="156" defaultDays="5">カザフスタン</item>
<item id="157" defaultDays="5">カナリア諸島</item>
<item id="159" defaultDays="5">キプロス</item>
<item id="160" defaultDays="7">ギリシャ</item>
<item id="161" defaultDays="5">キルギス共和国</item>
<item id="162" defaultDays="5">グリーンランド</item>
<item id="163" defaultDays="5">ジョージア(グルジア)</item>
<item id="164" defaultDays="7">クロアチア</item>
<item id="165" defaultDays="5">コソボ共和国</item>
<item id="166" defaultDays="5">サンマリノ</item>
<item id="167" defaultDays="7">スイス</item>
<item id="168" defaultDays="7">スウェーデン</item>
<item id="169" defaultDays="5">スバールバル諸島</item>
<item id="170" defaultDays="8">スペイン</item>
<item id="171" defaultDays="5">スペイン　バレアレス諸島</item>
<item id="172" defaultDays="7">スロバキア</item>
<item id="173" defaultDays="5">スロベニア</item>
<item id="174" defaultDays="5">セルビア共和国</item>
<item id="175" defaultDays="7">チェコ</item>
<item id="176" defaultDays="5">デンマーク</item>
<item id="177" defaultDays="5">デンマーク領フェロー諸島</item>
<item id="178" defaultDays="8">ドイツ</item>
<item id="179" defaultDays="8">トルコ</item>
<item id="180" defaultDays="5">ノルウェー</item>
<item id="181" defaultDays="5">バチカン</item>
<item id="182" defaultDays="5">ハンガリー</item>
<item id="183" defaultDays="8">フィンランド</item>
<item id="184" defaultDays="7">フランス</item>
<item id="185" defaultDays="5">フランス領西インド諸島</item>
<item id="186" defaultDays="5">ブルガリア</item>
<item id="187" defaultDays="5">ベラルーシ</item>
<item id="188" defaultDays="7">ベルギー</item>
<item id="189" defaultDays="8">ポーランド</item>
<item id="190" defaultDays="5">ボスニアヘルツェゴビナ</item>
<item id="191" defaultDays="8">ポルトガル</item>
<item id="192" defaultDays="5">マケドニア</item>
<item id="193" defaultDays="5">マデイラ諸島</item>
<item id="194" defaultDays="5">マルタ</item>
<item id="195" defaultDays="8">モナコ</item>
<item id="196" defaultDays="5">モルドバ</item>
<item id="197" defaultDays="5">モンテネグロ共和国</item>
<item id="198" defaultDays="5">ラトビア</item>
<item id="199" defaultDays="5">リトアニア</item>
<item id="200" defaultDays="5">リヒテンシュタイン</item>
<item id="201" defaultDays="8">ルーマニア</item>
<item id="202" defaultDays="8">ルクセンブルク</item>
<item id="203" defaultDays="7">ロシア</item>
<item id="205" defaultDays="5">アルジェリア</item>
<item id="206" defaultDays="5">アンゴラ共和国</item>
<item id="207" defaultDays="5">ウガンダ</item>
<item id="208" defaultDays="7">エジプト</item>
<item id="210" defaultDays="5">ガーナ</item>
<item id="212" defaultDays="5">ガボン</item>
<item id="213" defaultDays="5">カメルーン</item>
<item id="214" defaultDays="5">ガンビア</item>
<item id="215" defaultDays="5">ギニア</item>
<item id="216" defaultDays="5">ギニアビサウ共和国</item>
<item id="217" defaultDays="5">ケニア</item>
<item id="218" defaultDays="5">コートジボアール</item>
<item id="219" defaultDays="5">コンゴ共和国</item>
<item id="220" defaultDays="5">コンゴ民主共和国</item>
<item id="222" defaultDays="5">ザンジバル</item>
<item id="223" defaultDays="5">ザンビア</item>
<item id="224" defaultDays="5">シエラレオネ</item>
<item id="226" defaultDays="5">ジンバブエ</item>
<item id="228" defaultDays="5">スワジランド</item>
<item id="229" defaultDays="5">セーシェル共和国</item>
<item id="230" defaultDays="5">赤道ギニア共和国</item>
<item id="231" defaultDays="5">セネガル</item>
<item id="232" defaultDays="5">タンザニア</item>
<item id="233" defaultDays="5">チャド</item>
<item id="236" defaultDays="5">トーゴ</item>
<item id="237" defaultDays="5">ナイジェリア</item>
<item id="238" defaultDays="5">ナミビア</item>
<item id="239" defaultDays="5">西サハラ</item>
<item id="240" defaultDays="5">ニジェール</item>
<item id="241" defaultDays="5">フランス領レユニオン</item>
<item id="242" defaultDays="5">ブルキナファソ</item>
<item id="244" defaultDays="5">ベナン共和国</item>
<item id="245" defaultDays="5">ボツワナ</item>
<item id="246" defaultDays="8">マダガスカル</item>
<item id="247" defaultDays="5">マヨット島</item>
<item id="248" defaultDays="5">マラウイ</item>
<item id="249" defaultDays="5">マリ</item>
<item id="250" defaultDays="8">南アフリカ共和国</item>
<item id="252" defaultDays="5">モーリタニア</item>
<item id="253" defaultDays="5">モザンビーク</item>
<item id="254" defaultDays="8">モロッコ</item>
<item id="256" defaultDays="5">リベリア共和国</item>
<item id="257" defaultDays="5">ルワンダ</item>
<item id="258" defaultDays="5">レソト王国</item>
</country>
<countryGroup>
<item id="97">ヨーロッパ周遊</item>
<item id="98">アジア周遊</item>
<item id="99">世界周遊</item>
<item id="100">アメリカ大陸周遊</item>
</countryGroup>
<compensationType>
<item id="7001">なし</item>
<item id="7002">一部補償</item>
<item id="7003">全額補償</item>
</compensationType>
<receiptStep>
<item id="1">成田空港</item>
<item id="2">羽田空港</item>
<item id="3">関西国際空港</item>
<item id="4">中部国際空港</item>
<item id="5">福岡国際空港</item>
<item id="6">新千歳空港</item>
<item id="7">伊丹空港</item>
<item id="8">宅配</item>
<item id="9">小松空港</item>
<item id="10">那覇空港</item>
<item id="11">博多港</item>
<item id="12">新潟空港</item>
<item id="13">静岡空港</item>
<item id="21">現地オフィス</item>
<item id="22">現地空港</item>
<item id="23">国内オフィス</item>
</receiptStep>
</master>
XML;
#}}}
$target_url = "http://api.kakaku.com/mobile_data/world-wifi/api/searchXml/ver2/master/?key=NRWMVEUQG9NN335KVMGGACZE8BCT9C4V";
$xml = simplexml_load_file($target_url);
// エラーが隠蔽されるので注意（改良）が必要
if (!$xml) {
    $xml = simplexml_load_string($xmlstr);
}
global $isCompeBox;
?>

<?php if (is_page("43574")): ?>
<?php if ($isCompeBox): ?>
<div id="searchWifi" class="top">
    <div class="wifi-title-container-compebox">
        <h2 class="wifi-search-title">海外Wi-Fiのレンタル価格を一斉比較！</h2>
    </div>

    <?php else: ?>
    <div id="searchWifi" class="page">
        <div class="wifi-search-title-compensation-container">
            <h2 class="wifi-search-title-compensation">海外WI-FI比較 検索</h2>
        </div>
        <?php endif; ?>
        <?php else: ?>
            <div class="wifi-title-container-compebox">
                <h2 class="wifi-search-title">海外Wifiのレンタル価格を一斉比較！</h2>
            </div>
        <?php endif; ?>

        <div class="form_container">
            <form id="wifi_form" action="https://www.traicy.com/wifi" method="post">
                <div class="item">
                    <div class="item-title">国名</div>
                    <input id="countryNameText" class="item-input-text" type="text" name="country_name"
                           value="<?php echo isset($_POST['country_name']) ? $_POST['country_name'] : ""; ?>"
                           autocomplete="off" placeholder="入力してください">
                    <div id="suggest" style="display: none"></div> <!-- 補完候補を表示するエリア -->
                    <input id="countryHide" type="text" name="country" value="">
                    <p id="errorMsg"><i class="fa fa-exclamation-circle fa-red" aria-hidden="true"></i> 国名が無効です</p>
                </div>
                <div class="item">
                    <div class="item-title">利用日数</div>
                    <select class="item-input-drop" name="use_days" size=1>
                        <?php
                        for ($i = 1; $i <= 27; $i++) {
                            if ($i != $_POST[use_days]) {
                                echo "<option value='{$i}'>{$i}日</option>";
                            } else {
                                echo "<option value='{$i}' selected>{$i}日</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="item">
                    <div class="item-title">受取場所</div>
                    <select class="item-input-drop" name="receipt" size=1>
                        <?php
                        foreach ($xml->receiptStep->item as $item) {
                            if ($item['id'] != $_POST[receipt]) {
                                echo "<option value='{$item['id']}'>{$item[0]}</option>";
                            } else {
                                echo "<option value='{$item['id']}' selected>{$item[0]}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="item">
                    <div class="item-title">返却場所</div>
                    <select class="item-input-drop" name="returnPlace" size=1>
                        <?php
                        foreach ($xml->receiptStep->item as $item) {
                            if ($item['id'] != $_POST[returnPlace]) {
                                echo "<option value='{$item['id']}'>{$item[0]}</option>";
                            } else {
                                echo "<option value='{$item['id']}' selected>{$item[0]}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="item">
                    <div class="item-title">補償制度</div>
                    <select class="item-input-drop" name="compensationType" size=1>
                        <?php
                        foreach ($xml->compensationType->item as $item) {
                            if ($item['id'] != $_POST[compensationType]) {
                                echo "<option value='{$item['id']}'>{$item[0]}</option>";
                            } else {
                                echo "<option value='{$item['id']}' selected>{$item[0]}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </form>
            <div class="wifi-search-btn-container">
                <div id="searchButton"> 検索する</div>
            </div>

        </div>
<!--   div id="search  wifiの  closingタグを入れると壊れる。 talk-wifi-ticket-contaiinerのwrapping divで対応 -->
    <script>
        <?php
        $country_names_str = "";
        foreach ($xml->country->item as $item) {
            $country_names_str .= "'{$item[0]}': {$item['id']},";
        }
        ?>

        var countries = {<?php echo $country_names_str ?>};

        function startSuggest() {
            // オプション
            new Suggest.Local(
                "countryNameText",    // 入力のエレメントID
                "suggest", // 補完候補を表示するエリアのID
                Object.keys(countries),      // 補完候補の検索対象となる配列
                {dispMax: 20, interval: 1000, prefix: false, highlight: true, dispAllKey: true}
            );
        };

        startSuggest();
        // window.addEventListener ? window.addEventListener('load', startSuggest, false) : window.attachEvent('onload', startSuggest);

        $("#countryNameText").focus(function () {
            $("#suggest").css("width", $(this).outerWidth() - 2);
        });

        // submit時の処理
        $("#searchButton").on("click", function (e) {
            var country_name = $("#countryNameText").val();

            // もし国名が無効の場合はエラーを表示
            var country_id = countries[country_name];
            if (country_id === undefined) {
                // エラーを表示
                $("#countryNameText").css("border", "2px solid #E43A3A");
                $("#errorMsg").css("display", "block");
            } else {
                // countryNameに入力された国のidをセットして送信
                $("#countryHide").val(country_id);
                $('#wifi_form').submit();
            }
        });

        // submitボタン押すと凹む処理
        // $("#searchButton").on("mousedown", function (e) {
        //     $(this).addClass("pushed");
        // });
        // $("#searchButton").on("mouseup", function (e) {
        //     $(this).removeClass("pushed");
        // });

    </script>

