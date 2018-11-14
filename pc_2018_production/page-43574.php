<?php get_header(); ?>
    <div class="under-header-wrapper">
        <div class="content-box-row">
            <div class="center-contents">
                <div id="primary" class="site-content">
                    <div id="content" role="main">
                        <?php get_template_part('form'); ?>
                        <?php get_template_part('compensation'); ?>
                        <ul class="hide_o600">
                            <?php get_template_part('compe-box-sp'); ?>
                        </ul>
                    </div>
                </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>