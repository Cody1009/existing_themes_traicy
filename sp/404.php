<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">

		<article id="post-0" class="post error404 no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title">
					このページは存在しません．Traicyのトップページに遷移致します．<br>
					　お問い合わせの場合は，下記からよろしくお願い申し上げます．<br>
					　いつも，Traicyをご利用して頂き，誠にありがとうございます．<br><br>
					お問い合わせ先 : <a href="https://www.traicy.com/contact" style="color : red;">リンク</a>
				</h1>
			</header>

			<img class="header_logo hide_u600" src="<?php get_stylesheet_directory_uri() ;?>/images/logo.gif">
		</article><!-- #post-0 -->
	</div><!-- #content -->
</div><!-- #primary -->

<script>
$(window).load(function() {
	setTimeout(function(){
    window.location.href = '/';
  }, 5000);
});
</script>

<?php get_footer(); ?>
