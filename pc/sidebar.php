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
<div id="sidebar" class="hide_u770" style="float:right;">
	<div id="scroll">

<?php get_template_part('ranking');?><!-- ランキング -->

<!-- 広告開始　-->
<?php if(!is_NoAdsense()) : ?>
<script type='text/javascript'>
	document.MAX_ct0 ='';
	var m3_u = (location.protocol=='https:'?'https://cas.criteo.com/delivery/ajs.php?':'http://cas.criteo.com/delivery/ajs.php?');
	var m3_r = Math.floor(Math.random()*99999999999);
	document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
	document.write ("zoneid=421708");document.write("&amp;nodis=1");
	document.write ('&amp;cb=' + m3_r);
	if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
	document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
	document.write ("&amp;loc=" + escape(window.location).substring(0,1600));
	if (document.context) document.write ("&context=" + escape(document.context));
	if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
		document.write ("&amp;ct0=" + escape(document.MAX_ct0));
	}
	if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
	var publisherurl = "%%SITE%%";
	var macro = "%%SI" + "TE%%";
	if (publisherurl !== macro) document.write ("&amp;publisherurl="+publisherurl);
	document.write ("'></scr"+"ipt>");
</script>
<?php endif; ?>
<!-- /広告 -->

<!-- /jetstar 
<a href="http://click.linksynergy.com/fs-bin/click?id=kM9LSlTF5U8&offerid=483790.20&type=4&subid=0"><IMG alt="Jetstar" border="0" src="https://www.jetstar.com/_/media/images/japan-and-korea/japan/RakutenAffiliate2017/RakutenAffiliate_300x250_20161028.gif"></a><IMG border="0" width="1" height="1" src="https://ad.linksynergy.com/fs-bin/show?id=kM9LSlTF5U8&bids=483790.20&type=4&subid=0">
 /jetstar end -->

<?php /** twitter等のアイコン
<div id="topic" >
	<h2 class="main_category">Follow me!</h2>
	<div class="social-icon">
		<a class="side-twitter" href="https://twitter.com/traicycom" target="_blank"><i class="icon-twitter"></i>twitter</a>
		<a class="side-facebook" href="https://www.facebook.com/traicycom" target="_blank"><i class="icon-facebook"></i>facebook</a>
		<a class="side-rss" href="https://www.traicy.com/feed" target="_blank"><i class="icon-rss"></i>RSS</a>
		<a class="side-feedly" href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttps%3A%2F%2Fwww.traicy.com%2Ffeed" target="_blank"><i class="icon-feedly"></i>feedly</a>
		<a class="side-google-plus" href="https://plus.google.com/116492855879080319968/" target="_blank"><i class="icon-google-plus"></i>google+</a>
		<a class="side-line" href="http://line.me/ti/p/%40traicy" target="_blank"><i class="icon-line"></i>Line</a>
	</div>
</div>
 */ ?>

<?php /*メインウィジェット　検索ボックスのみ
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?><!-- /メインウィジェット１ -->
 */ ?>

<?php if(!is_home()) : ?>
<?php get_template_part('campaign-information-side'); ?><!-- キャンペーン情報 -->
<?php endif; ?>


	</div><!-- #scroll -->

</div><!-- #sidebar -->
