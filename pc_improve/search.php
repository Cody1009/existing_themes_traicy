
<?php //サイト上部 ?>
<?php get_header(); ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">
            <div id="primary" class="site-content">
                <div id="content" role="main">
                    <div class="static-breadcrumb-row">
                        <a class="static-breadcrumb-anchor" href="https://www.traicy.com/">ホーム</a>
                        <i class="fa fa-angle-right static-breadcrumb-angle" aria-hidden="true"></i>
                        <p class="static-breadcrumb-text">検索</p>
                    </div>
                    <div class="search-result-header-container">
                        <p class="search-result-header-title"><i class="fa fa-search fa-large search-result-icon" aria-hidden="true"></i><span class="search-result-emphasis"><?php the_search_query(); ?></span> の検索結果</p>
                    </div><!-- .archive-header -->
                    <div class="headline-left" style="margin-bottom: 20px;">
                        <p class="headline-en">
                            Search
                        </p>
                        <p class="headline-ja">
                            検索結果の記事一覧
                        </p>
                    </div>

                    <?php if ( have_posts() && get_search_query()) : ?>
                        <div class="search-result-articles-container">

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

                        <!-- 検索ワードに該当する記事がない場合の処理-->
                    <?php else: ?>
                        <!-- 検索ワードを出力-->
                        <div class = "no_result">
                            <div class = "result">
                                <br><h1>見つかりません</h1>
                                <ul style="list-style:none;"><li>ご指定の検索条件(<?php the_search_query(); ?>)に合う投稿がありませんでした。他のキーワードでもう一度検索してみてください。</li></ul>
                                <br>
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
