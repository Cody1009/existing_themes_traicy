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
<?php else: //AMPでない場合-------------------------------------?>
<?php // {{{ ?>
			<header class="entry-header">
<?php if ( ! post_password_required() && ! is_attachment() && ! is_single()) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>

<?php //記事が存在するかをチェック?>
<?php if ( is_single() ) : ?>

<div class="breadAndCat">
<?php breadcrumb(); ?>
<?php $tmp = get_the_category( '' ); ?>
<?php foreach($tmp as $item) : ?>
						<span class="category hide_u600"><a href="<?php echo get_category_link( $item -> cat_ID ); ?>"><?php echo $item -> name; ?></a></span>
<?php endforeach; ?>
</div>

<?php	//タイトルを表示 ?>
				<h1 itemprop="name" class="entry-title" itemprop="headline"><abbr itemprop="headline"> <?php the_title(); ?></abbr></h1>
				<div class="date updated">
					<p>
<?php	//記事の更新日時を表示	?>
						<span itemprop="datePublished" content="',the_time('Y-n-jTg:i'),'"><?php the_time('Y年n月j日 g:i a'); ?></span>
<?php	//著者情報 ?>
<?php echo '<a href="',get_author_posts_url( get_the_author_meta( 'ID' ) ), '" title="',get_the_author(),'" class="vcard author"><span class="fn" itemprop="author" itemscope itemtype="http://schema.org/Person">',get_the_author(),'</span></a>'; ?>
					</p>
				</div>
<?php else : ?>
				<h1 class="entry-title">
<?php echo '<a href="',the_permalink(),'" rel="bookmark">',the_title(),'</a>'; ?>
				</h1>
<?php endif; ?>
			</header>

<?php if( is_single() ) : ?>
			<div class="entry-content">

<?php
	/**
	 * 中平作成のphpを使用して，SNSのマークをそれぞれ挿入
	 */ ?>
<?php include "share-buttons.php"; ?>
<?php
// セール情報の場合はGoogleカレンダーに追加するボタンを表示
$startTime = strtotime(get_post_meta($id, 'CampaignStart' ,true));
$endTime   = strtotime(get_post_meta($id, 'CampaignEnd' ,true));

if ($startTime && $endTime):
  // google カレンダーのリンク用
  $baseUrl = "https://www.google.com/calendar/event?action=TEMPLATE&";
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
			<div class="next-title"><a href="<?= the_permalink(); ?>">最初のページに戻る　<?= $titles[ 0 ]; ?></a></div>
		<?php endif; ?>
	<?php } ?>

<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>

<?php if(get_the_author_id() == '28' || get_the_author_id() == '38') : ?>
<h2><?php the_author_nickname(); ?></h2>
<div class="description">
	<div class="authordesc"><?php the_author_meta('description'); ?></div>
	<div class="image"><?= get_avatar( get_the_author_id(), 85 ); ?></div>
</div>
<?php endif; ?>

<?php	/**
	 * 広告挿入
 */ ?>
				<span class="sponsor">スポンサーリンク</span>
<?php	if(!is_NoAdsense())	get_template_part('ad-336-280-bottom'); ?>
			</div> <!-- entry-content -->
<?php /**
 * 記事下
 */ ?>
<?php get_template_part('bottom-article-pc'); ?>

<br>
<!-- 航空会社一覧 -->
<div class="airline_tags">
	<strong>■航空会社一覧</strong>
	<br>
	<br>
	<?php include('airline-tag-short.php'); ?>
</div>
<!-- 航空会社一覧 -->

<footer class="entry-meta tag_box">
	<?php the_tags('<p>タグ : ',' ','</p>'); ?>
</footer>

<?php
	/**
	 * 中平作成のphpを使用して，SNSのマークをそれぞれ挿入
	 */ ?>
<?php get_template_part('share-buttons'); ?>

<!-- popinタグ（レコメンド） -->
<?php /**
	 * popinのレコメンドが挿入される
	 * divのほうでjsを読み込んでくれている
 */ ?>
<div id="_popIn_recommend"></div>
	<script type="text/javascript">
	(function() {
		var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.charset = "utf-8"; pa.async = true;
		pa.src = window.location.protocol + "//api.popin.cc/searchbox/traicy.js";
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
	})();
	</script>
<!-- popinタグ（レコメンド） -->

<?php //ほとんど起きない条件 ?>
<?php else : ?>
		<div class="entry-summary" itemprop="headline">
			<?php the_excerpt(); ?>
		</div>
<?php endif; ?>


		<?php //}}} ?>
	<?php endif; //AMP分岐終わり-------------------------------------?>
</article><!-- #post -->
