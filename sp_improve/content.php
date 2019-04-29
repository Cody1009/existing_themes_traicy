<!-- ad st -->
<!-- スマフォ版 -->
<div class="sp_ad">
	<center>
<script async defer src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Traicy-New-Top-ArticleFooter-left -->
	<ins class="adsbygoogle"
		style="display:inline-block;width:320px;height:50px"
		data-ad-client="ca-pub-3121993718200907"
		data-ad-slot="7111125932"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
	</center>
</div>
<!-- スマフォ版 -->
<!-- ad en -->


<?php global $myAmp; ?>
<?php
echo '<article  id="post-',the_ID(),'"',post_class(),'>';
if( is_sticky() && is_home() && !is_paged() ){
	echo '<div class="featured-post">';
	_e( 'Featured post', 'twentytwelve' );
	echo '<div>';
}
?>
<?php if($myAmp): //AMPの場合-------------------------------------?>
  <?php include('content-amp.php'); ?>
	</article><!-- #post -->
<?php else: //AMPでない場合-------------------------------------?>
<?php // {{{ ?>
			
				<div class="entry-header-table">
					<?php if ( ! post_password_required() && ! is_attachment() && ! is_single()) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>

<?php //記事が存在するかをチェック?>
<?php if ( is_single() ) : ?>

<?php breadcrumb(); ?>
					
				</div>
				
<?php if( is_single() ) : ?>


			<div class="entry-content">
				
				<div class="entry-header" >


<?php	//タイトルを表示 ?>
				<h1 itemprop="name" class="entry-title" itemprop="headline"><abbr itemprop="headline"> <?php the_title(); ?></abbr></h1>
		
				
<?php	//更新日時と著者名を表示 ?>	
			<div class="article-info">
				<div class="update-date">
					<p>
<?php	//記事の更新日時を表示	?>
						<span itemprop="datePublished" content="',the_time('Y-n-jTg:i'),'"><?php the_time('Y年n月j日 g:i a'); ?></span>
					</p>	
				</div>
				
				<div class="author-name">
					<p>
					<?php	//著者情報 ?>
<?php echo '<a href="',get_author_posts_url( get_the_author_meta( 'ID' ) ), '" title="',get_the_author(),'" class="vcard author"><span class="fn" itemprop="author" itemscope itemtype="http://schema.org/Person">',get_the_author(),'</span></a>'; ?>		
					</p>
				</div>
				</div>
				
				
<?php else : ?>
				<h1 class="entry-title">
<?php echo '<a href="',the_permalink(),'" rel="bookmark">',the_title(),'</a>'; ?>
				</h1>
<?php endif; ?>
			</div>



<?php /**
	* 記事の表示　*/ ?>
<?php the_content( __( '<span class="meta-nav"></span>', 'twentytwelve' ) ); ?>



<?php /**
	ページを区切る方法
 */ ?>
 <?php
 	//現在のページ数の取得
 	$titles = [ get_post_meta($post->ID, 'nextPage1', true), get_post_meta($post->ID, 'nextPage2', true), get_post_meta($post->ID, 'nextPage3', true), get_post_meta($post->ID, 'nextPage4', true) ];
 	$pages = get_page_number();
 	if( $pages[0] != $pages[1] ) { ?>
 		<?php if ( $titles[ (int)$pages[0] ] ) : ?>
 			<div class="next-title"><a href="<?= the_permalink(); ?>/<?= (int)$pages[0] + 1 ?>">次ページ　<?= $titles[ (int)$pages[0] ]; ?></a></div>
 		<?php endif; ?>
 	<?php	} else { ?>
 		<?php if ( $titles[ (int)$pages[1] - 2 ] ) : ?>
 			<div class="next-title"><a href="<?= the_permalink(); ?>/<?= (int)$pages[1]-1 ?>">前ページ　<?= $titles[ (int)$pages[1] - 2 ]; ?></a></div>
 		<?php endif; ?>
 	<?php } ?>
<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>

			</div> <!-- entry-content -->



<?php
	/**
	 * 中平作成のphpを使用して，SNSのマークをそれぞれ挿入
	 */ ?>
<?php get_template_part('share-buttons'); ?>

<?php
// セール情報の場合はGoogleカレンダーに追加するボタンを表示
$startTime = strtotime(get_post_meta($id, 'CampaignStart' ,true));
$endTime   = strtotime(get_post_meta($id, 'CampaignEnd' ,true));

if ($startTime && $endTime):
  // google カレンダーのリンク用
  $baseUrl = "https://www.google.com/calendar/gp?pli=1#~calendar:view=e&bm=1&action=TEMPLATE&";
  $params = array(
    "text" => $post->post_title,
    "dates" => date('Ymd',  $startTime) . "/" . date('Ymd',  $endTime),
    "details" => $post->guid
  );
  $gcalenderUrl = $baseUrl . http_build_query($params);
?>

<div class="addGcalender singlePage">
  <a href="<?php echo $gcalenderUrl; ?>">
    <button><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>&nbsp;Googleカレンダーに追加</button>
  </a>
</div>
<?php else: ?>
<div style="height: 10px;"></div>
<?php endif; ?>


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



<?php /**
 * wifi価格比較を挿入
 */ ?>
<?php
	get_template_part('bottom-article-fix');
?>

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

<!-- イベントキャンペーン -->
<?php get_template_part('campaign-information-sp'); ?>

<?php //ほとんど起きない条件 ?>
<?php else : ?>
		<div class="entry-summary" itemprop="headline">
			<?php the_excerpt(); ?> <!-- amp -->
		</div>
<?php endif; ?>


		<?php //}}} ?>





<?php endif; //AMP分岐終わり-------------------------------------?>
<?php get_footer(); ?>
