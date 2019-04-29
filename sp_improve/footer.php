<?
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

<?php /*front-pageにいないときに実行 */ ?>

<!-- AD 広告 -->
<?php if(!is_NoAdsense()) : ?>
  <center>
    <script async defer src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle my_adslot"
    style="display:block"
    data-ad-client="ca-pub-3121993718200907"
    data-ad-slot="6481590338"
    data-ad-region="Traicy-footer"
    data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </center>
<?php endif; ?>
<!-- AD 広告 -->
	
  <footer>
   <div class="footer">
    <div class="footer-container">
      <div class="footer-info">
        <a href="https://www.traicy.com/information">お知らせ</a>
        <a>|</a>
        <a href="https://www.traicy.com/kiyaku">利用規約</a>
        <a>|</a>
        <a href="https://www.traicy.com/article_provide">配信先一覧</a>
        <a>|</a>
        <a href="https://www.traicy.com/writer">ライター一覧</a><br>
        <a href="https://www.traicy.com/ad">広告掲載</a>
        <a>|</a>
        <a href="https://www.traicy.com/traicybloggernetwork">ブロガーネットワーク登録</a>
        <a>|</a>
        <a href="https://talk.traicy.com/users/new">メルマガ登録</a><br>
        <a href="http://line.me/ti/p/%40traicy">LINE登録</a>
        <a>|</a>
        <a href="https://www.traicy.com/wanted">採用情報</a>
        <a>|</a>
        <a href="https://www.traicy.com/about#company">運営会社情報</a>
        <a>|</a>
        <a href="https://www.traicy.com/contact">お問い合わせ</a>


      </div>
      <div class="copyright">
        <a class="copyright-banner">
          Copyright(c) traicy, Inc. All rights reserved.
        </a>
      </div>
    </div>

  </div>


<?php
  /* 記事のシェアボタンのjs */
  // シェアボタンは記事を読み終わってから押されることが多いと思うので
  // レンダリング後に読み込み
?>
<script src="<?= get_stylesheet_directory_uri() . "/js/share-buttons.js" ?>"></script>
<script>objectFitImages('');</script>


</body>
</html>

<?php wp_footer(); ?>