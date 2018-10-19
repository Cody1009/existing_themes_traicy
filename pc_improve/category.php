<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">

                    <?php if (have_posts()) : ?>
                        <div class="category-articles-header">
                            <p class="category-articles-header-title"><i class="fa fa-tags category-articles-header-tag fa-large" aria-hidden="true"></i><?php printf('<span class="category-articles-title-emphasis">' . single_cat_title('', false) . '</span>'. 'の記事一覧'); ?></p>

                            <?php if (category_description()) : // Show an optional category description ?>
                                <div class="archive-meta"><?php echo category_description(); ?></div>
                            <?php endif; ?>
                        </div><!-- .archive-header -->

                        <div class="category-articles-result">

                            <?php $count = 0; ?>
                            <?php
                            while (have_posts()) : the_post();
                                get_template_part('content-archive');
                                $count++;
                                ?>
                                <?php if ($count % 6 == 3 && $count != 18) : ?>
                                    <div style="width: 100%; margin : 10px auto;">
                                        <?php get_template_part('ad-336-280-top'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php
                            endwhile;
                            ?>

                            <?php
                            $t = $count % 3;
                            for ($i = 0; $i < (3 - $t); $i++) {
                                echo "<div class='catCards' style='background:none;'></div>";
                            }
                            ?>

                            <div class="wp-pagenavi-container">
                                <?php if (function_exists('wp_pagenavi')) {
                                    wp_pagenavi();
                                } ?>
                            </div>


                        </div>

                    <?php else : ?>
                        <?php get_template_part('content', 'none'); ?>
                    <?php endif; ?>

                    <!-- banner ad -->
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
