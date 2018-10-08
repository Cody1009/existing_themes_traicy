<?php/**
* TraicyTalkの販促
*/ ?>

<?php
	$thres = get_option( 'traicyTalkProduction' );
	$date = new DateTime();

	if ($thres != false) :
?>
<ul>
	<div id="traicyTalk">
		<h1>TraicyTalk - 旅行専用 Q&A サイト - </h1>
		<ul id="thres">
			<li class="thre">
				回答募集中の投稿
			</li>
			<li class="thre campaign">
				<a href="https://talk.traicy.com/campaign"><span>Amazon</span>(c)券 プレゼント こちらから!!</a>
			</li>

			<?php foreach ($thres as $thre) : ?>
				<li class="thre">
					<?php if ( $date->diff( new DateTime( $thre['updated_at'] ) )->format('%a') < 3 ) : ?>
						<span class="update_icon">U</span>
					<?php endif; ?>
					<?php if ( $date->diff( new DateTime( $thre['created_at'] ) )->format('%a') < 3 ) : ?>
						<span class="new_icon">N</span>
					<?php endif; ?>
					<a href="https://talk.traicy.com/thres/<?= $thre['id'] ?>" target="_blank" onclick="__gaTracker('send','event','jump_talk','click', '<?= $thre['id'] ?>', 1);"><?= $thre['title'] ?></a>
				</li>
			<?php endforeach; ?>
			<li class="thre">
				<a href="https://talk.traicy.com/" class="btn">Traicy Talkを見る</a>
			</li>
		</ul>
	</div>
</ul>

<?php endif; ?>
