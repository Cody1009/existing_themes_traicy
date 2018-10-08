<?php/**
* TraicyTalkの販促
*/ ?>

<script>
jQuery(function($){
  $('#traicy-talk-tab-menu > li').on('click', function(){
    if($(this).not('active')){
      $(this).addClass('active').siblings('li').removeClass('active');
      var index = $('#traicy-talk-tab-menu > li').index(this);
      $('#traicy-talk-tab-box > div').eq(index).addClass('active').siblings('div').removeClass('active');
    }
  });
});
</script>

<?php
	$json = get_option( 'traicyTalkProduction' );
?>

<?php function generate_box( $thres ) { ?>
	<?php $date = new DateTime(); ?>
<div id="traicyTalk">
	<ul id="thres">
		<?php foreach ($thres as $thre) : ?>
			<li class="thre mod">
				<?php if ( $date->diff( new DateTime( $thre['updated_at'] ) )->format('%a') < 3 ) : ?>
					<span class="update_icon">U</span>
				<?php endif; ?>
				<?php if ( $date->diff( new DateTime( $thre['created_at'] ) )->format('%a') < 3 ) : ?>
					<span class="new_icon">N</span>
				<?php endif; ?>
				<a href="https://talk.traicy.com/thres/<?= $thre['id'] ?>"><?= $thre['title'] ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php } ?>

<h1 id="campaignHead" style="margin-top: 20px;">Traicy Talk</h1>
<ul id="traicy-talk-tab-menu">
  <li class="active">新着投稿</li>
  <li>未回答</li>
  <li>回答有</li>
</ul>

<div id="traicy-talk-tab-box">
	<div class="active"><?php generate_box($json['new_arrival']); ?></div>
	<div><?php generate_box($json['unanswered']); ?></div>
	<div><?php generate_box($json['answered']); ?></div>
</div>
