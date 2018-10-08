<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

<?php /*front-pageにいないときに実行 */ ?>
<div class="fackMargin"></div>
<ul class="hide_u600"><?php	if( !is_home() )	get_template_part('compe-box-pc'); ?></ul>
<div class="fackMargin"></div>

	<footer id="colophon" role="contentinfo">
	<div class="footerContent">
		<!-- AD 広告 -->
		<?php if(!is_NoAdsense()) : ?>
		<center>
		<script async defer src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle my_adslot"
				 style="display:block"
				 data-ad-client="ca-pub-3121993718200907"
				 data-ad-slot="6481590338"
				 data-ad-region="Traicy-footer"
				 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</center>
		<?php endif; ?>
		<!-- AD 広告 -->


		<div class="site-info">
			<div class="about_traicy" >
				<span class="parent">
					<ul class="about">
						<li><a href="https://www.traicy.com/information">お知らせ</a></li>
						<li><a href="https://www.traicy.com/kiyaku">利用規約</a></li>
						<li><a href="https://www.traicy.com/article_provide">配信先一覧</a></li>
						<li><a href="https://www.traicy.com/writer">ライター一覧</a></li>
						<li><a href="https://www.traicy.com/ad">広告掲載</a></li>
						<li><a href="https://www.traicy.com/traicybloggernetwork">ブロガーネットワーク登録</a></li>
						<li><a href="https://talk.traicy.com/users/new">メルマガ登録</a></li>
						<li><a href="http://line.me/ti/p/%40traicy">LINE登録</a></li>
						<li><a href="https://www.traicy.com/wanted">採用情報</a></li>
						<li><a href="https://www.traicy.com/about#company">運営会社情報</a></li>
						<li><a href="https://www.traicy.com/contact">お問い合わせ</a></li>
					</ul>
				</span>
			</div><!-- .about_traicy -->
		</div><!-- .site-info -->
	</div><!-- footerContent -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
  /* 記事のシェアボタンのjs */

  // シェアボタンは記事を読み終わってから押されることが多いと思うので
  // レンダリング後に読み込み
?>
<script src="<?= get_stylesheet_directory_uri() . "/js/share-buttons.js" ?>"></script>
<script>objectFitImages('');</script>

<div id='mail-magazine-toaster'>
	<div class="cancel"><span class="css-cancel"></span></div>
	<form class="pure-form" action="https://talk.traicy.com/users/new" method="get">
		<fieldset>
			<legend>
				<p class='title'>メールマガジンを登録する</p>
				<div class='content'>
					<p class='mail-icon'>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</p>
					<p class='desc'>
					・選りすぐりのデイリーニュース<br />
					・メルマガ限定クーポン<br />
					・激安セール開催の案内<br />
					</p>
				</div>
      </legend>
			<input type="email" placeholder="Email" name="email">
			<button type="submit" class="pure-button pure-button-primary" onclick="__gaTracker('send','event','mail-magazine','click', 1, 1);">登録</button>
			<p class='caution'>※ メルマガ配信の登録はトライシートークからとなります</p>
		</fieldset>
	</form>
</div>
<script>
jQuery(function() {
	/*🍪*/
	var mode = true;
	document.cookie.split(";").forEach(function(val,index,ar){
		val = val.trim();
		if (val === "mail_magazine_footer_cancel=true") {
			mode = false;
		}
	});
	if ( mode ) {
		setTimeout(function(){
			$("#mail-magazine-toaster").fadeIn("slow");
		}, 3000);
	}

	$('div.cancel').click(function(){
		$("#mail-magazine-toaster").hide();
		document.cookie = 'mail_magazine_footer_cancel=true; max-age=864000';
	});
});
</script>
</body>
</html>
