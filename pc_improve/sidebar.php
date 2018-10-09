<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="right-contents">
	 <?php get_template_part('ad-card-sidebar'); ?>
	
    <?php get_template_part('ranking'); ?><!-- ランキング -->

<!--　タグ一覧 	 --> 

	<?php get_template_part('sidebar-tags'); ?> 	

	 
    <!--  採用情報カード	 -->
    <div class="sidebar-recruit-card">
        <a href="https://www.traicy.com/wanted" class="recruit-anchor"></a>
        <div class="recruit-section-top">
            <p class="recruit-top-text">デザイナ・エンジニア募集中</p>
        </div>
        <div class="recruit-section-center">
            <p class="recruit-center-text">言語: PHP/Ruby</p>
            <p class="recruit-center-text">雇用: アルバイト・インターン</p>
            <p class="recruit-center-text">時給: 1000円~</p>
        </div>
        <div class="recruit-section-bottom">
            <img class="sidebar-comp-logo" src="<?php get_stylesheet_directory_uri(); ?>/images/logo.gif">
        </div>
    </div>

<!--    <?php if (!is_home()) : ?>
        <?php get_template_part('campaign-information-side'); ?>
    <?php endif; ?> 
 -->
    <?php
    get_template_part('sidebar-mail_magazine');
    ?>
</div><!-- #sidebar -->
