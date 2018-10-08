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

<?php /*front-pageにいないときに実行 */ ?>
<ul class="hide_u600"><?php if (!is_home()) get_template_part('compe-box-pc'); ?></ul>

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
</div><!-- #page -->

<?php
/* 記事のシェアボタンのjs */

// シェアボタンは記事を読み終わってから押されることが多いと思うので
// レンダリング後に読み込み
?>
<script src="<?= get_stylesheet_directory_uri() . "/js/share-buttons.js" ?>"></script>
<script>objectFitImages('');</script>

<!--<div id='mail-magazine-toaster'>-->
<!--    <div class="cancel"><span class="css-cancel"></span></div>-->
<!--    <form class="pure-form" action="https://talk.traicy.com/users/new" method="get">-->
<!--        <fieldset>-->
<!--            <legend>-->
<!--                <p class='title'>メールマガジンを登録する</p>-->
<!--                <div class='content'>-->
<!--                    <p class='mail-icon'>-->
<!--                        <i class="fa fa-envelope-o" aria-hidden="true"></i>-->
<!--                    </p>-->
<!--                    <p class='desc'>-->
<!--                        ・選りすぐりのデイリーニュース<br />-->
<!--                        ・メルマガ限定クーポン<br />-->
<!--                        ・激安セール開催の案内<br />-->
<!--                    </p>-->
<!--                </div>-->
<!--            </legend>-->
<!--            <input type="email" placeholder="Email" name="email">-->
<!--            <button type="submit" class="pure-button pure-button-primary" onclick="__gaTracker('send','event','mail-magazine','click', 1, 1);">登録</button>-->
<!--            <p class='caution'>※ メルマガ配信の登録はトライシートークからとなります</p>-->
<!--        </fieldset>-->
<!--    </form>-->
<!--</div>-->
<!--<script>-->
<!--    jQuery(function() {-->
<!--        /*🍪*/-->
<!--        var mode = true;-->
<!--        document.cookie.split(";").forEach(function(val,index,ar){-->
<!--            val = val.trim();-->
<!--            if (val === "mail_magazine_footer_cancel=true") {-->
<!--                mode = false;-->
<!--            }-->
<!--        });-->
<!--        if ( mode ) {-->
<!--            setTimeout(function(){-->
<!--                $("#mail-magazine-toaster").fadeIn("slow");-->
<!--            }, 3000);-->
<!--        }-->
<!---->
<!--        $('div.cancel').click(function(){-->
<!--            $("#mail-magazine-toaster").hide();-->
<!--            document.cookie = 'mail_magazine_footer_cancel=true; max-age=864000';-->
<!--        });-->
<!--    });-->
<!--</script>-->
</body>
</html>
