<?php //wifiFormのやつ ?>

<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<!-- <div class="container"> -->
  <div id="searchWifi">
    <form action="wifiResult" method="post">
      <!-- 試験的にデータはハードコーディングの状態 -->
      <!-- エリア： -->
      <!-- <select name="example" size="3" multiple> ～ </select> -->
      <p>国名：</p>
      <select name="country" size=1>
      <!-- {{{ -->
        <option value="1">アギガン島</option>
        <option value="2">アスンシオン島</option>
        <option value="3">アグリハン島</option>
        <option value="4">アナタハン島</option>
        <option value="5">アラマガン島</option>
        <option value="6">アメリカ</option>
        <option value="7">アラスカ</option>
        <option value="8">アメリカ領バージン諸島</option>
        <option value="9">アルーバ</option>
        <option value="10">アルゼンチン</option>
        <option value="11">アンギラ</option>
        <option value="12">アンティグア・バーブーダ</option>
        <option value="13">イギリス領ケイマン諸島</option>
        <option value="14">イギリス領タークス・カイコス</option>
        <option value="15">イギリス領バージン諸島</option>
        <option value="16">イギリス領バミューダ</option>
        <option value="17">イースター島</option>
        <option value="18">ウルグアイ</option>
        <option value="19">エクアドル</option>
        <option value="20">エルサルバドル</option>
        <option value="21">オランダ領アンティル諸島</option>
        <option value="22">ガイアナ</option>
        <option value="23">カナダ</option>
        <option value="24">カリブ諸島</option>
        <option value="25">キューバ</option>
        <option value="26">キュラソー島（オランダ領アンティル）</option>
        <option value="27">グアテマラ</option>
        <option value="28">グアデルーペ</option>
        <option value="29">グアム</option>
        <option value="30">ググアン島</option>
        <option value="31">グレナダ</option>
        <option value="32">コスタリカ</option>
        <option value="33">コロンビア</option>
        <option value="34">サイパン</option>
        <option value="35">サバ島</option>
        <option value="36">サリガン島</option>
        <option value="37">サン・バルテルミー島</option>
        <option value="38">サンピエール島/ミクロン島</option>
        <option value="39">サンマルタン（フランス領）</option>
        <option value="40">ジャマイカ</option>
        <option value="41">シント・マールテン（オランダ領）or セントマーチン島</option>
        <option value="42">スリナム</option>
        <option value="43">セントクリストファー・ネイビス</option>
        <option value="44">セントビンセント・グレナディーン島</option>
        <option value="45">セントユースタティウス島</option>
        <option value="46">セントルシア</option>
        <option value="47">チリ</option>
        <option value="48">テニアン</option>
        <option value="49">ドミニカ</option>
        <option value="50">ドミニカ共和国</option>
        <option value="51">トリニダード・ドバゴ</option>
        <option value="52">ニカラグア</option>
        <option value="53">ハイチ</option>
        <option value="54">パガン島</option>
        <option value="55">バハロス</option>
        <option value="56">バハマ</option>
        <option value="57">パナマ</option>
        <option value="59">パラグアイ</option>
        <option value="60">バルバドス</option>
        <option value="61">ハワイ</option>
        <option value="62">プエルトリコ</option>
        <option value="63">ブラジル</option>
        <option value="64">フランス領　ギアナ</option>
        <option value="65">ベネズエラ</option>
        <option value="66">ベリーズ</option>
        <option value="67">ペルー</option>
        <option value="68">ボネール島（オランダ領）</option>
        <option value="69">ボリビア</option>
        <option value="70">ホンジュラス</option>
        <option value="71">マウグ島</option>
        <option value="72">マリーガラント島</option>
        <option value="73">マルティニーク</option>
        <option value="74">メキシコ</option>
        <option value="75">メディニラ島</option>
        <option value="76">モンセラット</option>
        <option value="77">ロタ</option>
        <option value="78">アメリカ領サモア</option>
        <option value="79">オーストラリア</option>
        <option value="80">クック諸島</option>
        <option value="81">サモア独立国</option>
        <option value="82">トンガ</option>
        <option value="83">ナウル共和国</option>
        <option value="84">ニューカレドニア</option>
        <option value="85">ニュージーランド</option>
        <option value="86">パプアニューギニア</option>
        <option value="87">バヌアツ</option>
        <option value="88">パラオ共和国</option>
        <option value="89">フィジー諸島</option>
        <option value="90">フランス領ポリネシア（タヒチ含）</option>
        <option value="91">インド</option>
        <option value="92">インドネシア（バリ島以外の全域）</option>
        <option value="93">インドネシア（バリ島）</option>
        <option value="94">韓国</option>
        <option value="95">カンボジア</option>
        <option value="96">クリスマス島</option>
        <option value="97">シンガポール</option>
        <option value="98">スリランカ</option>
        <option value="99">タイ</option>
        <option value="100">台湾</option>
        <option value="101">タジキスタン</option>
        <option value="102">中国</option>
        <option value="103">トルクメニスタン</option>
        <option value="105">ネパール</option>
        <option value="106">パキスタン</option>
        <option value="107">バングラデシュ</option>
        <option value="108">東ティモール民主主義共和国</option>
        <option value="109">フィリピン</option>
        <option value="110">ブータン</option>
        <option value="111">ブルネイ</option>
        <option value="112">ベトナム</option>
        <option value="113">香港</option>
        <option value="114">マカオ</option>
        <option value="115">マレーシア（マレー半島主要都市）</option>
        <option value="116">マレーシア（ボルネオ島及び全域）</option>
        <option value="117">ミャンマー</option>
        <option value="118">モルディブ</option>
        <option value="119">モンゴル（ウランバートル）</option>
        <option value="120">モンゴル（首都及び全域）</option>
        <option value="121">ラオス</option>
        <option value="122">アフガニスタン</option>
        <option value="123">アラブ首長国連邦</option>
        <option value="124">イエメン</option>
        <option value="125">イスラエル</option>
        <option value="126">イラク</option>
        <option value="127">イラン</option>
        <option value="128">オマーン</option>
        <option value="129">カタール</option>
        <option value="130">クウェート</option>
        <option value="131">サウジアラビア</option>
        <option value="132">シリア</option>
        <option value="133">バーレーン</option>
        <option value="134">パレスチナ自治区</option>
        <option value="135">ヨルダン</option>
        <option value="136">レバノン</option>
        <option value="137">アイスランド</option>
        <option value="138">アイルランド</option>
        <option value="139">アゼルバイジャン</option>
        <option value="140">アゾレス諸島</option>
        <option value="141">アルバニア</option>
        <option value="142">アルメニア</option>
        <option value="143">アンドラ</option>
        <option value="144">イギリス</option>
        <option value="145">イギリス領ガーンジー島</option>
        <option value="146">イギリス領ジブラルタル</option>
        <option value="147">イギリス領ジャージー島</option>
        <option value="148">イギリス領マン島</option>
        <option value="149">イタリア</option>
        <option value="150">ウクライナ</option>
        <option value="151">ウズベキスタン</option>
        <option value="152">エストニア</option>
        <option value="153">オーストリア</option>
        <option value="154">オーランド諸島</option>
        <option value="155">オランダ</option>
        <option value="156">カザフスタン</option>
        <option value="157">カナリア諸島</option>
        <option value="158">北キプロストルコ共和国</option>
        <option value="159">キプロス</option>
        <option value="160">ギリシャ</option>
        <option value="161">キルギス共和国</option>
        <option value="162">グリーンランド</option>
        <option value="163">グルジア</option>
        <option value="164">クロアチア</option>
        <option value="165">コソボ共和国</option>
        <option value="166">サンマリノ</option>
        <option value="167">スイス</option>
        <option value="168">スウェーデン</option>
        <option value="169">スバールバル諸島</option>
        <option value="170">スペイン</option>
        <option value="171">スペイン　バレアレス諸島</option>
        <option value="172">スロバキア</option>
        <option value="173">スロベニア</option>
        <option value="174">セルビア共和国</option>
        <option value="175">チェコ</option>
        <option value="176">デンマーク</option>
        <option value="177">デンマーク領フェロー諸島</option>
        <option value="178">ドイツ</option>
        <option value="179">トルコ</option>
        <option value="180">ノルウェー</option>
        <option value="181">バチカン</option>
        <option value="182">ハンガリー</option>
        <option value="183">フィンランド</option>
        <option value="184">フランス</option>
        <option value="185">フランス領西インド諸島</option>
        <option value="186">ブルガリア</option>
        <option value="187">ベラルーシ</option>
        <option value="188">ベルギー</option>
        <option value="189">ポーランド</option>
        <option value="190">ボスニアヘルツェゴビナ</option>
        <option value="191">ポルトガル</option>
        <option value="192">マケドニア</option>
        <option value="193">マデイラ諸島</option>
        <option value="194">マルタ</option>
        <option value="195">モナコ</option>
        <option value="196">モルドバ</option>
        <option value="197">モンテネグロ共和国</option>
        <option value="198">ラトビア</option>
        <option value="199">リトアニア</option>
        <option value="200">リヒテンシュタイン</option>
        <option value="201">ルーマニア</option>
        <option value="202">ルクセンブルク</option>
        <option value="203">ロシア</option>
        <option value="204">アセンション島</option>
        <option value="205">アルジェリア</option>
        <option value="206">アンゴラ共和国</option>
        <option value="207">ウガンダ</option>
        <option value="208">エジプト</option>
        <option value="209">エチオピア</option>
        <option value="210">ガーナ</option>
        <option value="211">カーボヴェルデ</option>
        <option value="212">ガボン</option>
        <option value="213">カメルーン</option>
        <option value="214">ガンビア</option>
        <option value="215">ギニア</option>
        <option value="216">ギニアビサウ共和国</option>
        <option value="217">ケニア</option>
        <option value="218">コートジボアール</option>
        <option value="219">コンゴ共和国</option>
        <option value="220">コンゴ民主共和国</option>
        <option value="221">サントメ・プリンシペ</option>
        <option value="222">ザンジバル</option>
        <option value="223">ザンビア</option>
        <option value="224">シエラレオネ</option>
        <option value="225">ジブチ</option>
        <option value="226">ジンバブエ</option>
        <option value="227">スーダン</option>
        <option value="228">スワジランド</option>
        <option value="229">セーシェル共和国</option>
        <option value="230">赤道ギニア共和国</option>
        <option value="231">セネガル</option>
        <option value="232">タンザニア</option>
        <option value="233">チャド</option>
        <option value="234">チュニジア</option>
        <option value="235">中央アフリカ共和国</option>
        <option value="236">トーゴ</option>
        <option value="237">ナイジェリア</option>
        <option value="238">ナミビア</option>
        <option value="239">西サハラ</option>
        <option value="240">ニジェール</option>
        <option value="241">フランス領レユニオン</option>
        <option value="242">ブルキナファソ</option>
        <option value="243">ブルンジ</option>
        <option value="244">ベナン共和国</option>
        <option value="245">ボツワナ</option>
        <option value="246">マダガスカル</option>
        <option value="247">マヨット島</option>
        <option value="248">マラウイ</option>
        <option value="249">マリ</option>
        <option value="250">南アフリカ共和国</option>
        <option value="251">モーリシャス</option>
        <option value="252">モーリタニア</option>
        <option value="253">モザンビーク</option>
        <option value="254">モロッコ</option>
        <option value="255">リビア</option>
        <option value="256">リベリア共和国</option>
        <option value="257">ルワンダ</option>
        <option value="258">レソト王国</option>
      <!-- }}} -->
      </select>
      <p>利用日数：</p>
      <input type="text" name="use_days" size="30" value="" placeholder="半角数字で入力して下さい"/>
      <p>補償一覧：</p>
      <select name="compensationType" size=1>
      <!-- {{{ -->
        <option value="7001">なし</option>
        <option value="7002">全額補償</option>
        <option value="7003">一部補償</option>
      <!-- }}} -->
      </select>
      <p>受取場所：</p>
      <select name="receipt" size=1>
        <!-- {{{ -->
        <option value="1">成田空港</option>
        <option value="2">羽田空港</option>
        <option value="3">関西国際空港</option>
        <option value="4">中部国際空港</option>
        <option value="5">福岡国際空港</option>
        <option value="6">新千歳空港</option>
        <option value="7">現地オフィス</option>
        <option value="8">宅配</option>
        <!-- }}} -->
      </select>
      <p>返却場所：</p>
      <select name="return" size=1>
        <!-- {{{ -->
        <option value="1">成田空港</option>
        <option value="2">羽田空港</option>
        <option value="3">関西国際空港</option>
        <option value="4">中部国際空港</option>
        <option value="5">福岡国際空港</option>
        <option value="6">新千歳空港</option>
        <option value="7">現地オフィス</option>
        <option value="8">宅配</option>
        <!-- }}} -->
      </select>
      <br>
      <br>
      <input type="submit" value="検索" />
    </form>
  </div>
<script src="http://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script>
</script>
<!-- </div> -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
