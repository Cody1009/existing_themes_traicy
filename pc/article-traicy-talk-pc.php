<?php
  $dir = get_stylesheet_directory_uri();
  $pos = strpos($dir, "_");
  if ( substr($dir, $pos+1) == "improve" ) {
    $json = get_option( 'traicyTalkDevelopment' );
  } else {
    $json = get_option( 'traicyTalkProduction' );
  }

  $date = new DateTime();
?>

<div id="article-thres" class="slider">
	<?php generate_box( array_slice( $json['new_arrival'], 0, 6 ), "Traicy Talk （新着投稿）" ); ?>
	<?php generate_box( array_slice( $json['unanswered'], 0, 6 ) , "Traicy Talk（未回答）" ); ?>
	<?php generate_box( array_slice( $json['answered'], 0, 6 ) , "Traicy Talk（回答有）" ); ?>
</div>
