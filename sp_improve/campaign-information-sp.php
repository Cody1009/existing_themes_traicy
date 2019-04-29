<?php
	//キャンペーン情報
?>

<script>
jQuery(function($){
  $('#campaign-tab-menu > li').on('click', function(){
    if($(this).not('active')){
      $(this).addClass('active').siblings('li').removeClass('active');
      var index = $('#campaign-tab-menu > li').index(this);
      $('#campaign-tab-box > div').eq(index).addClass('active').siblings('div').removeClass('active');
    }
  });
});
</script>

<?php
/**
  これから開催
*/
$today = date( 'Ymd' );
?>

<h1 id="campaignHead">ー イベント・キャンペーン情報 ー</h1>

<!-- タブメニュー -->
<ul id="campaign-tab-menu">
  <li  class="active">開催中</li>
  <li>これから開催</li>
  <li>もうすぐ終了</li>
</ul>

<!-- タブの中身 -->
<div id="campaign-tab-box">

<?php
$args = array(
	'numberposts' => -1,
	'orderby' => 'date',
	'post_status' => 'publish',
	'relation'=>'AND',
	//'order' => 'DESC',
	'meta_query' => array(
		array(
			'key'=>'CampaignStart',
			'value'=> $today,
			'compare' => '<=',
			'type' => 'DATETIME'
		),
		array(
			'key'=>'CampaignEnd',
			'value' => $today,
			'compare' => '>=',
			'type'=>'DATETIME'
		),
	),
);
$posts = get_posts($args);

$con = array();
$expire = array();
foreach ($posts as $item) {
  $id = $item -> ID;
  $endTime   = strtotime(get_post_meta($id, 'CampaignEnd' ,true));

  // $countE = 0; $countC = 0;
  if( ( ( $endTime - strtotime( $today ) ) / ( 60 * 60 * 24 ) < 3 ) ) {
    array_push( $expire, $item );
  } else {
    array_push( $con, $item );
  }
}

$args = array(
	'numberposts' => -1,
	'orderby' => 'date',
	'post_status' => 'publish',
	'meta_query' => array(
		array(
			'key'=>'CampaignStart',
			'value'=> $today,
			'compare' => '>=',
			'type' => 'DATETIME'
		)
	),
);
$posts = get_posts($args);
?>
  <div class="active">
    <?php output_campaign( $con ); ?>
  </div>
  <div>
    <?php output_campaign( $posts ); ?>
  </div>
  <div>
    <?php output_campaign( $expire ); ?>
  </div>
</div>


<?php function output_campaign( $posts ) { ?>
  <div id="campaign">
<?php if( count( $posts ) != 0 ) { ?>
<?php  foreach($posts as $item) : $id = $item -> ID; ?>
    <a href="<?php echo $item -> guid; ?>" id = "aCampaign">
      <div id="campaignContents">
        <div id="campaginContentsRight">
          <div id="campaignTitle">
  <?php shortingTitle($item -> post_title,75); ?>
          </div>
                  <div id="campaignDate">
                      <?php
                        $startTime = strtotime(get_post_meta($id, 'CampaignStart' ,true));
                        $endTime   = strtotime(get_post_meta($id, 'CampaignEnd' ,true));

                        // google カレンダーのリンク用
                        $baseUrl = "https://www.google.com/calendar/event?action=TEMPLATE&";
                        $params = array(
                          "text" => $item -> post_title,
                          "dates" => date('Ymd',  $startTime) . "/" . date('Ymd',  $endTime),
                          "details" => $item -> guid
                        );

                        $gcalenderUrl = $baseUrl . http_build_query($params);
                      ?>
                      <span>
                        期間 :
                        <?php echo str_replace('<br>', '', date('n月j日',  $startTime)); ?>
                        〜
                        <?php echo str_replace('<br>', '', date('n月j日',  $endTime)); ?>
                        &nbsp;
                      </span>
                      <object class="addGcalender"><a href="<?php echo $gcalenderUrl; ?>" >
                        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                      </a></object>
          </div>
        </div>
        <div id="campaignImg">
  <?php
    if(has_post_thumbnail($id)){
      echo '<img src="' , get_the_post_thumbnail_url( $id , array(100,100) ) ,'">';
    }else{
      echo '<img src="'.get_stylesheet_directory_uri().'/images/dummy_600_400.jpg">';
    }
  ?>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
<?php } else { ?>
  <a id="aCampaign">
    <div id="campaignContents" style="font-size:15px; line-height: 60px; text-align: center;">
      キャンペーン情報がありません。
    </div>
  </a>
<?php } ?>
</div> <!-- campaign -->

<?php } ?>
<div class="blue-btn-wrapper">
  <a class="blue-btn" href="https://www.traicy.com/airline-tags">
  	もっと見る <i class="fas fa-angle-right"></i>
  </a>
</div>
