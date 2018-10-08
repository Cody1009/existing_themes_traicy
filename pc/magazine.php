<?php
/**
 * Template Name: mailmagazine
 * API for mail magazine.
*/
date_default_timezone_set('Asia/Tokyo');
$d="now";
$num="0";
if(isset($_GET["num"])) $num=$_GET["num"];
if(isset($_GET["date"])) $d=$_GET["date"];

$that_time=strtotime($d);
$post_date=strtotime($d." -1 day");
// title set
$title=date('Y年m月d日',$that_time)."号 ／ ".$num."号";
//echo date('Y年m月d日 G:i',$that_time)."<br>";
//echo date('Y年m月d日 G:i',$post_date);
?>
<html>
  <head>
    <!-- This is a simple example template that you can edit to create your own custom templates -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Facebook sharing information tags -->
		<meta property="og:title" content="<?= $title; ?>">

  <title><?= $title; ?></title>

<!--css{{{-->
<style type="text/css">
		body{
			font-family:"Helvetica Neue", Helvetica, "ヒラギノ角ゴ ProN W3",
				"Hiragino Kaku Gothic ProN", "メイリオ", Meiryo, sans-serif;
			width:100% !important;
			-webkit-text-size-adjust:none;
			margin:0;
			padding:0;
			background-color: #FAFAFA;
		}
		pre{
			font-family:"Helvetica Neue", Helvetica, "ヒラギノ角ゴ ProN W3",
				"Hiragino Kaku Gothic ProN", "メイリオ", Meiryo, sans-serif;
		}
		h1,.h1,h2,.h2,h3,.h3,h4,.h4{
			color:#202020;
			display:block;
			font-size:30px;
			font-weight:normal;
			line-height:1.4;
			margin:1em 0 10px 0;
			text-align:left;
		}
		h2,.h2{
			font-size:22px;
			font-weight:bold;
			border-bottom:dotted 1px #CCCCCC;
		}
		h3,.h3,h4,.h4{
			font-size:20px;
			font-weight:bold;
		}
		a{
		color: #336699;font-weight: normal;text-decoration: underline;
		}

		div#number{
			color: #505050;
			font-size: 10px;
			line-height: 100%;
			text-align: left;
		}
		div#foot_text{
			color: #707070;
			font-size: 12px;
			line-height: 1.4;
			text-align: center;
		}
		table#backgroundTable{
			margin: 0;
			padding: 0;
			height: 100%;
			width: 100%;
			border: 0;
		}
		table#templatePreheader{
			background-color: #FAFAFA;
		}
		table.rankingTable{
			padding: 0;
			counter-reset: rank-counter;
		}
		table.rankingTable tbody tr td{
			vertical-align: top;
			padding: 0;
		}
		table.rankingTable tbody tr td:first-child {
			width: 1em;
		}
		table.rankingTable strong{
			background-color: #54A0E6;
			color: #fff;
			font-size: .85em;
			font-weight: normal;
			padding: 1px 3px;
			margin-right: 5px;
			border-radius: 2px;
		}
		table.rankingTable tbody tr td.ranking:first-child{
			width: 3em;
		}
		td.ranking:after{
			content: counter(rank-counter, decimal)'位';
			counter-increment: rank-counter;
		}
		div.mine{
			text-align: right;
		}
</style>
<!--css}}}-->
</head>

<body>
  <center>
    <table id="backgroundTable" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">
          <!-- // Begin Template Preheader \ -->
          <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">
            <tr>
              <td valign="top" class="preheaderContent">
                <!-- // Begin Module: Standard Preheader \ -->
                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                  <tr>
                    <td valign="top">
                      <div id="number"><p><?= $title; ?></p></div>
                    </td>
                  </tr>
                </table>
                <!-- // End Module: Standard Preheader \ -->
                </td>
              </tr>
            </table>
            <!-- // End Template Preheader \ -->
            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border: 1px solid #DDDDDD;background-color: #FFFFFF;">
              <tr>
                <td align="center" valign="top">
                  <!-- // Begin Template Body \ -->
                  <table border="0" cellpadding="10" cellspacing="0" width="600" id="templateBody">
                    <tr>
                      <td valign="top" class="bodyContent" style="background-color: #FFFFFF;">
                        <!-- // Begin Module: Standard Content \ -->
                        <table border="0" cellpadding="10" cellspacing="0" width="100%">
                          <tr>
                            <td valign="top">


<?php
/* text */
if(have_posts()){
	the_post();
	the_content();
}?>

<h2>アクセスランキング</h2>
<?php
$args=array(
	'range' => 'daily',
	'order_by' => 'views',
	'post_type' => 'post',
	'limit' => 8,
	'stats_date' => 0,
	'wpp_start' => '<table class="rankingTable"><tbody>',
	'wpp_end' => '</tbody></table>',
	// HTML部分
	'post_html' => '
	<tr>
		<td class="ranking">・</td>
		<td><a href="{url}?utm_source=newsletter&utm_medium=mail&utm_campaign=1010" rel="nofollow noopener" target="_blank">{text_title}</a></td>
	</tr>'
);
wpp_get_mostpopular($args);
?>

<?php
$posts = get_posts( array(
	'posts_per_page' => -1,
	'date_query' => array(
		'inclusive' => true,
		'after' => array(
			'year' => date('Y',$post_date),
			'month' => date('m',$post_date),
			'day' => date('j',$post_date),
		),
		'before' => array(
			'year' => date('Y',$that_time),
			'month' => date('m',$that_time),
			'day' => date('j',$that_time),
		)
	)
));

$categories = array();
if( !empty( $posts ) ) {
  foreach( $posts as $post ) {
		if($post_date>strtotime(get_the_time("Y/m/j G:i")))continue;
		if($that_time<strtotime(get_the_time("Y/m/j G:i")))continue;
    setup_postdata( $post );
    $post_cat=get_the_category();
    $key=$post_cat[0]->cat_ID;
    $cat_name = get_cat_name($key);

    if (array_key_exists($cat_name, $categories)) {
      array_push($categories[$cat_name], [get_the_title() => get_permalink()]);
    } else {
      $categories[$cat_name]["0"] = array(get_the_title() => get_permalink());
    }
  }
}
foreach (array_keys($categories) as &$cat){
	echo "<h2>".$cat."</h2>\n";
	echo "<table class=\"rankingTable\"><tbody>\n";
	foreach ($categories[$cat] as &$article){
		echo "<tr><td>・</td><td>";
		echo "<a href=\"".$article[array_keys($article)[0]]."?utm_source=newsletter&utm_medium=mail&utm_campaign=1010\" rel=\"nofollow noopener\" target=\"_blank\">".array_keys($article)[0]."</a>";
		echo "</td></tr>";
	}
	echo "</tbody></table>\n";
}
?>

<h2>Traicy Talk</h2>
<table class="rankingTable"><tbody>
<?php
  $thres = json_decode(file_get_contents('https://talk.traicy.com/api/v1/thres_www'));
  foreach ($thres as $thre) {
    echo "<tr><td>・</td><td>";
    if (strtotime('-3 day') < strtotime($thre->updated_at)) {
      echo '<strong style="background-color: #54A0E6;color: #fff;font-size: .85em;font-weight: normal;padding: 1px 3px;margin-right: 5px;border-radius: 2px;">new!</strong>';
    }
    echo "<a href=\"https://talk.traicy.com/thres/".$thre->id."?utm_source=newsletter&utm_medium=mail&utm_campaign=1010\" rel=\"nofollow noopener\" target=\"_blank\">".$thre->title."</a>";
    echo "</td></tr>";
  }
 ?>
</tbody></table>

<hr>
<div class="mine"><a href="<?php echo "https://www.traicy.com".$_SERVER["REQUEST_URI"];?>">>> ブラウザで見る</a></div>

</div>
                            </td>
                          </tr>
                        </table>
                        <!-- // End Module: Standard Content \ -->

                      </td>
                    </tr>
                  </table>
                  <!-- // End Template Body \ -->
                </td>
              </tr>
              <tr>
                <td align="center" valign="top">
                  <!-- // Begin Template Footer \ -->
                  <table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter" style="background-color: #FDFDFD;border-top: 0;">
                    <tr>
                      <td valign="top" class="footerContent">

                        <!-- // Begin Module: Standard Footer \ -->
                        <table border="0" cellpadding="10" cellspacing="0" width="100%">
                          <tr>
                            <td colspan="2" valign="middle" id="social" style="background-color: #FAFAFA;border: 1px solid #F5F5F5;">
                              <div id="foot_text">
                                <a href="https://twitter.com/traicycom">Twitterでフォロー</a> | <a href="https://www.facebook.com/traicycom">Facebookページ</a> | <a href="http://line.me/ti/p/%40traicy">LINEで登録</a> | <a href="https://talk.traicy.com/user_setting">Traicyメルマガの購読を解除</a>
                              </div>
                            </td>
                          </tr>
                        </table>
                        <!-- // End Module: Standard Footer \ -->

                      </td>
                    </tr>
                  </table>
                  <!-- // End Template Footer \ -->
                </td>
              </tr>
            </table>
            <br>
          </td>
        </tr>
      </table>
    </center>
  <!-- //Google Analytics閲覧用 -->
  <img src="https://www.google-analytics.com/collect?v=1&t=event&tid=UA-24526458-1&cid=3212bb6a-e4d5-4dfe-a19e-8bee4d6aae40&ec=email&ea=open" height="1" width="1" /></body>
</html>
<?php

//header("Content-Type: application/json; charset=utf-8");
//echo json_encode($categories);
