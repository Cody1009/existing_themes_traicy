<?php
  $thres = get_option( 'traicyTalkProduction' );
  $date = new DateTime();

  if ($thres != false) :
?>

<h3><a href="https://talk.traicy.com">Traicy Talk の最新投稿 一覧</a></h3>
<ul id="article-thres">
  <li class="article-thre campaign">
    <a href="https://talk.traicy.com/campaign" target="_blank"><span>Amazon</span>(c) ギフト券 プレゼント中！</a>
  </li>
  <?php foreach ($thres as $thre) : ?>
    <li class="article-thre">
      <?php if ( $date->diff( new DateTime( $thre['updated_at'] ) )->format('%a') < 3 ) : ?>
        <span class="article-update_icon">U</span>
      <?php endif; ?>
      <?php if ( $date->diff( new DateTime( $thre['created_at'] ) )->format('%a') < 3 ) : ?>
        <span class="article-new_icon">N</span>
      <?php endif; ?>
      <a href="https://talk.traicy.com/thres/<?= $thre['id'] ?>" target="_blank"><?= $thre['title'] ?></a>
    </li>
  <?php endforeach; ?>
</ul>

<?php endif; ?>
