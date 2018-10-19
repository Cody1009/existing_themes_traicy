

<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="static-page-container-common">

                <p class="static-page-title-text" style="text-align:center;">トラベルメディア「Traicy」では、広告掲載のクライアント様とお取り扱いいただ<br>ける広告代理店様を募集しております。</p>

                <p class="static-page-body-bold">純広告</p>
                <div class="black-horizontal-devider"></div>
                <p class="static-page-body-text">【PC】ロゴ横（728×90px）、サイドバー（300×250px／300×600px）、記事下（300×250px）</p>
                <p class="static-page-body-text">【SP】メニュー下（320×50px／320×100px）</p>

                <p class="static-page-body-bold">記事広告</p>
                <div class="black-horizontal-devider"></div>
                <p class="static-page-body-text">・掲載保証1ヶ月</p>
                <p class="static-page-body-text">・PV保証オプション有り</p>

                <p class="static-page-body-bold">会見書き起こし</p>
                <div class="black-horizontal-devider"></div>
                <p class="static-page-body-text">・掲載保証1ヶ月</p>
                <p class="static-page-body-text">・PV保証オプション有り</p>

                <p class="static-page-body-bold">ブロガーネットワークタイアップ</p>
                <div class="black-horizontal-devider"></div>
                <p class="static-page-body-text">価格応相談</p>

                <p class="static-page-body-bold">その他</p>
                <div class="black-horizontal-devider"></div>
                <p class="static-page-body-text">・男女比は6:4</p>
                <p class="static-page-body-text">・ユーザーは35〜44歳が約4割と最も多く、ユーザーの8割が44歳以下</p>
                <p class="static-page-body-text">・デバイス比は、モバイル65：PC30：タブレット5</p>
						<br><br>
                <p class="static-page-body-text"> 詳しくは<a class="static-page-anchor-style" href="https://www.traicy.com/contact">お問い合わせ</a>ください。</p>
            </div>
            <!-- お知らせ -->
            <?php get_template_part('compe-box-pc'); ?>
            <!-- banner ad -->
            <div class="ad-banner-center" style="margin-top: 30px;">
                <?php get_template_part('ad-banner-730-90'); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>