<?php get_header(); ?>
<?php //サイト上部 ?>
<div class="under-header-wrapper">
	<div class="content-box-row">
	<div class="center-contents">
		<?php get_template_part('desktop-lp-banner'); ?>
		<?php get_template_part('compe-box-pc'); ?>
		<div id="primary" class="site-content">
    	<div id="content" role="main">
       		
        <?php/* キャンペーン情報*/ ?>
        <?php get_template_part('campaign-infomation'); ?>
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
