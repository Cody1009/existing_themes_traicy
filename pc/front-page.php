<?php get_header(); ?>
<?php //サイト上部 ?>
<?php get_template_part('desktop-lp-banner'); ?>
<?php get_template_part('compe-box-pc'); ?>
<div style="margin-bottom: 20px"></div>

<div id="primary" class="site-content">
    <div id="content" role="main">
        <!-- ad st -->
        <?php get_template_part('ad-336-280-top'); ?>
        <!-- ad en -->

        <?php/**
         * キャンペーン情報
         */ ?>
        <?php get_template_part('campaign-infomation'); ?>

        <!-- ad st -->
        <?php get_template_part('ad-336-280-bottom'); ?>
        <!-- ad en -->

        <div class="fackMargin"></div>

        <!-- お知らせ -->
        <?php get_template_part('notice'); ?>
        <!-- お知らせ -->

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
