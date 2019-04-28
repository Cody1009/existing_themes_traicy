<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">

                    <div id="topic" style="margin-bottom:30px;">
                        <h2 class="static-page-body-bold" style="margin-left:20px;">航空会社一覧</h2>
                        <ul class="airline_tag">
                            <?php
                            if (have_posts())
                                echo get_post(get_the_id())->post_content;
                            ?>
                        </ul>
                    </div> <!-- topic -->

                    <div class="ad-banner-center">
                        <?php get_template_part('ad-banner-730-90'); ?>
                    </div>

                    <!-- お知らせ -->
                    <?php get_template_part('notice'); ?>
                    <!-- banner ad -->
                    <div class="ad-banner-center">
                        <?php get_template_part('ad-banner-730-90'); ?>
                    </div>
                </div><!-- #content -->
            </div><!-- #primary -->
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>

