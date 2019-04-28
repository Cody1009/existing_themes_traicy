<?php get_header(); ?>
<!-- Wifi 検索結果ページ --> 
<?php //サイト上部 ?>
<div class="under-header-wrapper">
    <div class="content-box-row">
        <div class="center-contents">


            <div id="content" role="main">

                <?php get_template_part('form'); ?>
				
                <?php get_template_part('compensation'); ?>
			       </div>   


            </div><!-- #content -->
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
