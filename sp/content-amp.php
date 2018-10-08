  <!-- 広告 -->
  <center>
    <amp-ad
        type="adsense"
        width="300"
        height="100"
        data-ad-client="ca-pub-3121993718200907"
        data-ad-slot="6481590338"
    ></amp-ad>
  </center>
  <!-- 広告 -->

  <header class="entry-header">
  <!-- メタ情報  -->
  <span class="hideSpan" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
    <span class="hideSpan" itemprop="url"><?php the_post_thumbnail_url('medium'); ?></span>
    <span class="hideSpan" itemprop="width">400</span>
    <span class="hideSpan" itemprop="height">600</span>
    <span class="hideSpan" itemprop="mainEntityOfPage"><?php the_permalink(); ?></span>
    <span class="hideSpan" itemprop="datePublished"><?php echo get_the_time('c') ?></span>
    <span class="hideSpan" itemprop="dateModified"><?php echo get_the_modified_time('c') ?></span>
  </span>

  <!-- パンくずリスト -->
  <?php $breadcrumbDom = breadcrumb(false); ?>
  <?php
    // ごめんなさい！
    echo preg_replace('/style=".*?"/', 'class="_breadcrumb"', $breadcrumbDom);
  ?>
  <div class="clear"></div>
  <!-- パンくずリスト -->

  <h1 itemprop="name" class="entry-title" itemprop="headline"><abbr itemprop='headline'><?php the_title(); ?></abbr></h1>

  <div class="date updated">
    <p>
      <?php the_time('Y年n月j日 g:i a'); ?>
      <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ));?>" title="<?php get_the_author() ?>" class="vcard author">
        <span class="fn" itemprop="author" itemscope itemtype="http://schema.org/Person">
          <span itemprop="name"><?php echo get_the_author(); ?></span>
        </span>
      </a>
    </p>
    <div class="clear"></div>
  </div><!-- .date -->

  <!-- シェアボタン -->
  <?php include("share-buttons-amp.php"); ?>
  <!-- シェアボタン -->

  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
		// 記事本文
    $content = apply_filters( 'the_content', get_the_content() );
    $content = str_replace( ']]>', ']]&gt;', $content );
		$content = preg_replace( "/\<p\>(.*<img)/", "<p class='img-center'>$1", $content );

		// 正規表現で記事本文から全てのimgタグを抜き出す
		$img_tag_regex = "/<img.*?src=(\"|\')(.*?)(\"|\').*?>/";
		preg_match_all($img_tag_regex, $content, $matches);

		// 各imgタグをamp-imgタグに変換
		for ($i=0; $i<count($matches[0]); $i++) {
			$image_tag 	= $matches[0][$i];
			$image_link = $matches[2][$i];

			// 画像urlからattachment idを取得
			if ($i==0) {
				// これまたurl->idの抽出が上手く行かない時があるので
				// 付け焼刃的にサムネイル画像だけは専用関数使っとく
				$attachment_id = (int)get_post_thumbnail_id($post->ID);
			} else {
				$attachment_id = get_attachment_id($image_link);
			}

			// attachment idを使って画像の縦横比を取得
			$image_info = wp_get_attachment_image_src($attachment_id, 'full');
			$width = $image_info[1];
			$height = $image_info[2];
			
			// amp-imgタグに置き換える
			$new_height = 200; // 高さを200pxで固定
			$new_width = (int)($width / $height * $new_height);
			$amp_image_tag = "<amp-img width='". $new_width ."' height='" . $new_height . "' layout='responsive' src='" . $image_link . "'></amp-img>";
			$content = str_replace($image_tag, $amp_image_tag , $content );
		}

    // SNSのshareボタンを消す処理
    // wordpressプラグインなのでif (!$myAmp)が書けないと思ったので追加
    $content = preg_replace("/(<div class='wp_social_bookmarking_light'>.*?)<p>/", "<p>", $content);

    echo $content;
    ?>

    <?php wp_link_pages(); ?>

    <span class="sponsor">スポンサーリンク</span>

    <!-- ad st -->
    <center>
      <amp-ad
        type="adsense"
        width="300"
        height="250"
        data-ad-client="ca-pub-3121993718200907"
        data-ad-slot="6481590338"
      ></amp-ad>
    </center>
    <!-- ad end -->
    <amp-analytics type="googleanalytics" id="analytics1">
      <script type="application/json">
      {
        "vars": {
          "account": "UA-24526458-1"
        },
        "triggers": {
          "trackPageview": {
            "on": "visible",
            "request": "pageview"
          }
        }
      }
      </script>
    </amp-analytics>
  </div><!-- .entry-content -->

  <footer>
    <!-- タグ -->
    <div class="entry-meta tag_box">
      <?php the_tags('<p>タグ : ',' ','</p>'); ?>
    </div>
    <!-- タグ -->

    <!-- シェアボタン -->
    <?php include("share-buttons-amp.php"); ?>
    <!-- シェアボタン -->

    <!-- popin -->
    <center>
      <amp-ad
        type="popin"
        width=300
        height=568
        layout=responsive
        heights="(min-width:1907px) 39%, (min-width:1200px) 46%, (min-width:780px) 64%, (min-width:480px) 98%, (min-width:460px) 167%, 196%"
        data-mediaid="traicy_amp"
      ></amp-ad>
    </center>
    <!-- popin -->
  </footer><!-- .entry-meta -->
