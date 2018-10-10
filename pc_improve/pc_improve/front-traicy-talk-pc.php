<?php /* boxを生成する関数 */ ?>
<?php
$dir = get_stylesheet_directory_uri();
$pos = strpos($dir, "_");
if ( substr($dir, $pos+1) != "improve" ) {
    $json = get_option( 'traicyTalkDevelopment' );
} else {
    $json = get_option( 'traicyTalkProduction' );
}
?>
<script type="text/javascript">
    jQuery(function () {
        $('#talk-tab-left > li').click(function () {
            var tabnum = $('#talk-tab-left > li').index(this);
            $('.show-talk-content').css('display', 'none');
            $('.show-talk-content').eq(tabnum).css('display', 'block');
            $('#talk-tab-left > li').removeClass('select');
            $(this).addClass('select')
        });
    });
</script>

<?php /* modal window templates */ ?>
<?php get_template_part( 'traicy-talk-modal' ); ?>

<div class="tabs-row-talk">
    <ul id="talk-tab-left">
        <li class="tab-title">Traicy Talk</li>
<!-- 	implement tab system when we have more resources.	 -->
<!--         <li class="traicy-talk-tab select">新着</li>
        <li class="traicy-talk-tab">未回答</li>
        <li class="traicy-talk-tab">回答済み</li> -->
    </ul>
    <div class="arrow-attempt-row-talk">
        <i class="fa fa-angle-right yellow-angle"></i>
        <a href="https://talk.traicy.com/" class="attempt-text-talk"> TraicyTalkをもっと見る</a>
    </div>
</div>
<div class="slider">
    <?php generate_box( $json['new_arrival'], "Traicy Talk （新着投稿）" ); ?>
    <?php generate_box( $json['unanswered'] , "Traicy Talk（未回答）" ); ?>
    <?php generate_box( $json['answered']   , "Traicy Talk（回答有）" ); ?>
</div>
