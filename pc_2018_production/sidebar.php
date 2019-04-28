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
<!-- 	ad-card-sidebar  -->
	 <?php get_template_part('ad_traicy_newpc_top_300_250_1'); ?>
		<div style="margin: 20px 0px">
			 <?php get_template_part('ad_traicy_newpc_top_300_250_2'); ?>
		</div>
	
	
    <?php get_template_part('ranking'); ?>
	
	<div style="margin: 20px 0px">
    <?php get_template_part('ad_traicy_newpc_top_300_650_3'); ?>
</div>
	
	<?php get_template_part('sidebar-tags'); ?> 	
	<div style="margin: 20px 0px">
    <?php get_template_part('ad_traicy_newpc_top_300_250_4'); ?>
</div>
	
    <?php
    get_template_part('sidebar-mail_magazine');
    ?>
	<div style="margin: 20px 0px">
    <?php get_template_part('ad_traicy_newpc_top_300_250_5'); ?>
</div>
</div><!-- #sidebar -->
