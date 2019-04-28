<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">
                    <?php the_post() ?>

                    <div class="category-articles-header">
                        <!-- 	NEW ENTRY?		 -->
                        <p class="category-articles-header-title">
                            <i class="fa fa-newspaper-o category-articles-header-tag fa-large"
                               aria-hidden="true"></i><?php printf(the_title() . '一覧'); ?>
                        </p>
                        <?php if (category_description()) : // Show an optional category description ?>
                            <div class="archive-meta"><?php echo category_description(); ?></div>
                        <?php endif; ?>
                    </div><!-- .archive-header -->

                    <?php
                    $args = array(
                        'posts_per_page' => 18,
                        'order' => 'DSC',
                        'paged' => $paged
                    );
                    query_posts($args);
                    $count = 0;
                    ?>

                    <div class="category-articles-result">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div id="article-card-content-archive">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="article-image">
                                        <?php
                                        if (has_post_thumbnail($id)) {
                                            echo '<img  class = "article-image"  src="', get_the_post_thumbnail_url($id, array(268, 180)), '">';
                                        } else {
                                            echo '<img  class = "article-image" src="' . get_stylesheet_directory_uri() . '/images/dummy_600_400.jpg">';
                                        }
                                        ?>
                                    </div>
                                    <div class="article-card-title-content-archive">
                                        <?php echo $post->post_title; ?>
                                    </div>
                                </a>
                            </div>
                            <?php $count++; ?>
                            <?php
                            if ($count % 6 == 3 && $count !== 18) : ?>

                                <div style="width: 100%; margin : 10px auto;">
                                    <?php get_template_part('ad-336-280-top'); ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; endif; ?>

                        <?php if ($count % 3 == 1) : ?>
                            <?php for ($i = 0; $i < 2; $i++) : ?>
                                <div class="catCards">
                                    <a href="<?php the_permalink(); ?>">
                                        <h1> 空記事</h1>
                                        <img src="<?php get_stylesheet_directory_uri(); ?>/images/logo.gif">
                                        <p> 空記事</p>
                                        <a>
                                </div>
                            <?php endfor; ?>
                        <?php elseif ($count % 3 == 2) : ?>
                            <div class="catCards">
                                <a href="<?php the_permalink(); ?>">
                                    <h1> 空記事</h1>
                                    <img src="<?php get_stylesheet_directory_uri(); ?>/images/logo.gif">
                                    <p> 空記事</p>
                                    <a>
                            </div>
                        <?php endif; ?>

                        <?php if (function_exists('wp_pagenavi')) {
                            wp_pagenavi();
                        } ?>

                    </div>

                    <?php wp_reset_query(); ?>

                </div>
            </div><!-- #primary -->
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
