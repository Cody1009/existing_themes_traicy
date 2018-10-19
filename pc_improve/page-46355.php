<?php get_header(); ?>
<?php //サイト上部 ?>
    <div class="under-header-wrapper">
        <div class="content-box-row">
            <div class="center-contents">
                <div id="application-page">
                    <center>
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfdwsw0hp6zE8RBaazq3PvCyGfyRZdZNy8Hmfp4M9qjiVw52g/viewform?embedded=true"
                                width="95%" height="1600px;" frameborder="0" marginheight="0" marginwidth="0">
                            読み込んでいます...
                        </iframe>
                    </center>
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