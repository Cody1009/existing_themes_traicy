<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">
                    <?php if (have_posts()) : ?>
                    <header class="tag-famous-description-header">

                        <div class="tag-article-header-description"><!-- タグページの装飾{{{ -->
                            <?php $tag_description = tag_description(); ?>
                            <?php if (!empty($tag_description)): ?>
                                <p class="tag-article-header-title"><?php single_tag_title(); ?></p>
                                <?php echo $tag_description; ?>
                            <?php endif; ?>


                        </div><!-- タグページの装飾}}} -->
                    </header><!-- .archive-header -->



                    <script>
                        $(function() {
                            //クリックした時の動作
                            $('#famoustag-tab-menu > li').click(function() {
                                var index = $('#famoustag-tab-menu > li').index(this);
                                //全てのtabの非表示を有効
                                $('#famoustag-tab-box > div').addClass('passive')
                                //現在のtabの非表示を無効
                                $('#famoustag-tab-box > div').eq(index).removeClass('passive');

                                //全てのtab listのマークを無効
                                $('#famoustag-tab-menu > li').removeClass('active');
                                //現在のtab listをマーク
                                $(this).addClass('active')
                            });
                        });

                        $(function() {
                            $('#traicytag_include_talk a').click(function() {
                                return ga('send', {
                                    hitType: 'event',
                                    eventCategory: 'traicytag-include-talk',
                                    eventAction: 'click',
                                    eventLabel: 'BoW-by-page-keyword'
                                });
                            });
                        });

                    </script>
                    <div class="headline-row">
                        <div class="headline-left">
                            <p class="headline-en">
                                NEWS
                            </p>
                            <p class="headline-ja">
                                <?php printf(single_tag_title('', false)); ?>の記事一覧
                            </p>
                        </div>
                        <!-- タブメニュー -->
                        <ul class="headline-right" id="famoustag-tab-menu">
                            <li class="active">新着一覧</li>
                            <li>人気記事</li>
                            <li>セール</li>
                        </ul>
                    </div>

                    <div id="famoustag"> <!-- famoustag{{{ -->

                        <div id="famoustag-tab-box"> <!-- {{{ -->
                            <div class="famous-tag-articles-row"> <!-- {{{ -->
                                <?php
                                $count = 0;
                                while (have_posts()) : the_post();
                                    get_template_part('content-archive');
                                    $count++;
                                endwhile;

                                $t = $count % 3;
                                for ($i = 0; $i < (3 - $t); $i++) {
                                    echo "<div class='catCards' style='background:none;'></div>";
                                }
                                ?>
                                <?php if (function_exists('wp_pagenavi')) {
                                    wp_pagenavi();
                                } ?>
                                <?php endif?>
                            </div> <!-- }}} -->

                            <?php
                            $args = array(
                                // PV集計期間（daily, weekly, monthly, all から選べます）
                                'range' => 'all',
                                // PV数順で並び替え（comments を指定するとコメント順になります）
                                'order_by' => 'views',
                                // post OR page
                                'post_type' => 'post',
                                // 表示数
                                'limit' => 18,
                                // 日付
                                'stats_date' => 1,
                                'stats_date_format' => 'F j 日',
                                // HTMLのwrapper　開始タグ
                                'wpp_start' => '<div class="passive famous-tag-articles-row">',
                                // HTMLのwrapper　終了タグ
                                'wpp_end' => '</div>',
                                // サムネイル画像の幅
                                'thumbnail_width' => '268',
                                'thumbnail_height' => '180',
                                'excerpt_length' => 80,
                                // タグ絞込
                                'taxonomy' => 'post_tag',
                                'term_id' => $wp_query->query_vars['tag_id'],
                                // HTML部分
                                'post_html' => '
<div id="article-card-content-archive">
<a href="{url}"> 
<div class="article-image">
	{thumb_img}
</div>
 <div class="article-card-title-content-archive">
{text_title}			
</div>
</a>
</div>'
                            );
                            wpp_get_mostpopular($args);
                            ?>
                            <div class="famous-tag-articles-row passive"> <!-- tagかつセール{{{ -->
                                <?php
                                $count = 0;
                                $my_query = new WP_Query(array(
                                    'tax_query' => array(
                                        'post_type' => 'post',
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => array('sale'),
                                        ),
                                        array(
                                            'taxonomy' => 'post_tag',
                                            'field' => 'term_id',
                                            'terms' => array($wp_query->query_vars['tag_id'])))
                                ));
                                if (have_posts()) :
                                    while ($my_query->have_posts()) : $my_query->the_post();
                                        ?>
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
                                    <?php
                                    endwhile;
                                else:
                                    echo "<p>none</p>";
                                endif;
                                wp_reset_query();
                                ?>
                            </div> <!-- }}} -->

                        </div> <!-- }}} -->
                    </div> <!-- famoustag}}} -->
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



