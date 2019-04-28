<?php get_header(); ?>
<?php //サイト上部 ?>
    <div class="under-header-wrapper">
        <div class="content-box-row">
            <div class="center-contents">
                <div id="static-page-container-common">
                    <center>
                       <div style="width:100%;height:1200px;overflow:auto;-webkit-overflow-scrolling:touch;"><iframe src="https://tayori.com/form/88d01a60c8fdbd52ddf41feeed079a2d1c4b20e6" width="100%" height="100%"></iframe></div>
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