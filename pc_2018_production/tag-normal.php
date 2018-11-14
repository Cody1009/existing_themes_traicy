<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">

                    <?php if (have_posts()) : ?>
                        <div class="tag-articles-header">
                            <!-- タグページの装飾はここだよ! -->
                            <div class="tag-article-header-description">
                                <p class="tag-article-header-title"><i
                                            class="fa fa-tags category-articles-header-tag fa-large"
                                            aria-hidden="true"></i><?php printf(single_tag_title('', false) . 'の記事一覧'); ?>
                                </p>
                                <?php $tag_description = tag_description(); ?>
                                <?php if (!empty($tag_description)): ?>

                                    <?php echo $tag_description; ?>

                                <?php endif; ?>
                            </div>
                            <!-- タグページの装飾はここまでだよ! -->
                        </div>


                        <div class="category-articles-result">

                            <?php
                            $count = 0;
                            while (have_posts()) : the_post();
                                get_template_part('content-archive');
                                $count++;
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

                    <?php
                    $tag = get_the_tags();
                    $slug = $tag[0]->slug;

                    $traicy_talk = get_option("traicy_talk");
                    $thres = $traicy_talk[$slug];
                    ?>
                    <?php if ($thres != NULL) : ?>
                        <h2 class="main_category" style="margin-bottom: 10px;">Traicy Talkと関連のあるページ</h2>
                        <div class="allCategory">
                            <div id="traicytag_include_talk">
                                <?php
                                foreach ($thres as $thre) {
                                    generate_catCards("https://talk.traicy.com/thres/" . $thre[0]["id"], $thre[0]["title"], $thre[0]["thumb"]["url"], $thre[0]["content"]);
                                }
                                ?>
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


