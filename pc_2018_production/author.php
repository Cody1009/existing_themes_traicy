<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">

                    <div class="author-articles-header">
                        <i class="fa fa-pencil fa-2x author-article-pen-icon" aria-hidden="true"></i><h1 class="author-articles-title"><span class="author-name-title"><?php the_author(); ?></span> の記事一覧</h1>
                    </div><!-- .archive-header -->

                    <?php if ( have_posts()) : ?>
                        <div class="author-articles-container">

                            <?php
                            $count = 0;
                            while ( have_posts() ) : the_post();
                                get_template_part( 'content-archive' );
                                $count++;
                            endwhile;
                            ?>

                            <?php
                            $t = $count % 3;
                            for( $i=0; $i<(3-$t); $i++ ) {
                                echo "<div class='catCards' style='background:none;'></div>";
                            }
                            ?>
                            <div class="wp-pagenavi-container">
                            <?php	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                            </div>
                        </div>

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


