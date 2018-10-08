<?php /* boxを生成する関数 */ ?>
<?php
	$dir = get_stylesheet_directory_uri();
	$pos = strpos($dir, "_");
	if ( substr($dir, $pos+1) == "improve" ) {
		$json = get_option( 'traicyTalkDevelopment' );
	} else {
		$json = get_option( 'traicyTalkProduction' );
	}
	$num_display = 10;
?>

<?php /* modal window templates */ ?>
<?php get_template_part( 'traicy-talk-modal' ); ?>

<div class="slider">
	<?php generate_box( $json['new_arrival'], "Traicy Talk （新着投稿）" ); ?>
	<?php generate_box( $json['unanswered'] , "Traicy Talk（未回答）" ); ?>
	<?php generate_box( $json['answered']   , "Traicy Talk（回答有）" ); ?>
</div>
