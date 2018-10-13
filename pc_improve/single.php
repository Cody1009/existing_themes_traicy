<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">
                    <?php //著者情報と画像の処理 ?>
                    <?php if (!$myAmp) : ?>
                        <meta itemprop="description"
                              content="<?php echo get_post_meta($post->ID, _yoast_wpseo_metadesc, true); ?><?php $myExcerpt = get_the_excerpt();
                              if ($myExcerpt != '') {
                                  echo htmlspecialchars($myExcerpt, ENT_QUOTES);
                              } ?>"/>
                        <meta itemprop="image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                    <?php endif; ?>

                    <?php while (have_posts()) {
                        the_post();
                        /* get_post_format()は投稿フォーマットを返す関数　content.phpのほうで記事の表示は行っている */
                        get_template_part('content', get_post_format());
                    } ?>

                    <?php get_template_part('talk-wifi-ticket-container'); ?>
                    <!-- popinタグ（レコメンド） -->
                    <?php /**
                     * popinのレコメンドが挿入される
                     * divのほうでjsを読み込んでくれている
                     */ ?>
                    <div id="_popIn_recommend"></div>
                    <script type="text/javascript">
                        (function () {
                            var pa = document.createElement('script');
                            pa.type = 'text/javascript';
                            pa.charset = "utf-8";
                            pa.async = true;
                            pa.src = window.location.protocol + "//api.popin.cc/searchbox/traicy.js";
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(pa, s);
                        })();
                    </script>
                    <!-- popinタグ（レコメンド） -->
                    <div class="ad-banner-center">
                        <?php get_template_part('ad-banner-730-90'); ?>
                    </div>

                    <?php get_template_part('compe-box-pc'); ?>

                    <div class="ad-banner-center" style="margin-top: 40px;">
                        <?php get_template_part('ad-banner-730-90'); ?>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
