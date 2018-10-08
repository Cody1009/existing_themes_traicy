
<!-- シェアボタンfacebookいいね用 -->
<?php
  $article_url  = get_the_permalink();
  $article_desc = get_the_title();

  $hatena_url   = "https://b.hatena.ne.jp/add?mode=confirm&url=" . $article_url . "&title=" . urlencode($article_desc);
  $twitter_url  = "http://twitter.com/intent/tweet?text=" . urlencode($article_desc) . "&amp;url=" . $article_url . "&amp;";
  $facebook_url = "https://www.facebook.com/sharer/sharer.php?u=" . $article_url . "&t=" . urlencode($article_desc) ;
  $google_url   = "https://plus.google.com/share?url=" . $article_url;
  $line_url     = "http://line.me/R/msg/text/?" . urlencode($article_desc) . " " . $article_url;
?>

<div class="share_buttons">
  <div class="sns_icon facebook">
    <a href='<?php echo $facebook_url; ?>' target="_blank" title="Facebookでシェア"><amp-img src="https://www.traicy.com/images/facebook.png" width="30" height="30"></a>
  </div>

  <div class="sns_icon google">
    <a href='<?php echo $google_url; ?>' target="_blank" title="Google+で共有"><amp-img src="https://www.traicy.com/images/google.png" width="30" height="30"></a>
  </div>

  <div class="sns_icon line">
    <a href='<?php echo $line_url; ?>' target="_blank" title="LINEに送る"><amp-img src="https://www.traicy.com/images/line.png" width="30" height="30"></a>
  </div>

  <div class="sns_icon hatena">
    <a href='<?php echo $hatena_url; ?>' target="_blank" title="はてなブックマークに登録"><amp-img src="https://www.traicy.com/images/hatena.svg" width="30" height="30"></a>
  </div>

  <div class="sns_icon twitter">
    <a href='<?php echo $twitter_url; ?>' target="_blank" title="twitterでシェア"><amp-img src="https://www.traicy.com/images/twitter.png" width="30" height="30"></a>
  </div>
</div>
