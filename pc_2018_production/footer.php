<?php
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



<div class="footer-wrapper">
<footer id="colophon" class="footer" role="contentinfo">
    <ul class="footer-menu-row">
        <li><a class="footer-menu" href="https://www.traicy.com/information">お知らせ</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/kiyaku">利用規約</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/article_provide">配信先一覧</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/writer">ライター一覧</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/ad">広告掲載</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/traicybloggernetwork">ブロガーネットワーク登録</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://talk.traicy.com/users/new">メルマガ登録</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="http://line.me/ti/p/%40traicy">LINE登録</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/wanted">採用情報</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/about#company">運営会社情報</a></li>
        <p class="divider">|</p>
        <li><a class="footer-menu" href="https://www.traicy.com/contact">お問い合わせ</a></li>
    </ul>
    <p class="copyright">
        Copyright(c) traicy, Inc. All rights reserved.
    </p>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php
/* 記事のシェアボタンのjs */
// シェアボタンは記事を読み終わってから押されることが多いと思うので
// レンダリング後に読み込み
?>
<script src="<?= get_stylesheet_directory_uri() . "/js/share-buttons.js" ?>"></script>
<script>objectFitImages('');</script>
</body>
</html>

