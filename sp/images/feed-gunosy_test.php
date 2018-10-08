<?php header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true) ?>
<?php
/* Template Name: feed-gunosy */
?>
<?php echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>' ?>

<rss version="2.0" xmlns:gnf="http://assets.gunosy.com/media/gnf" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
	<title>トラベルメディア「Traicy」</title>
	<link>https://www.traicy.com/</link>
  <description>航空・鉄道・ホテルなど旅行情報をお送りするメディア。</description>
  <image>
    <url>/images/logo_280x280.png</url>
    <title>トラベルメディア「Traicy」</title>
    <link>https://www.traicy.com/</link>
  </image>
	<language>ja</language>
	<copyright>Copyright 2016 TRAICY JAPAN</copyright>
	<lastBuildDate><?php echo mysql2date('Y-m-d\TH:i:s+09:00', get_lastpostmodified(), false); ?></lastBuildDate>

  <?php $more = 1 ?>
  <?php query_posts("posts_per_page=30&amp;category_name=''"); ?>
  <?php while (have_posts()) : the_post(); ?>
    <item>
      <title><?php the_title_rss() ?></title>
      <link><?php the_permalink_rss() ?></link>
      <guid><?php echo $post->ID ?></guid>
      <gnf:keyword><?php single_tag_title(); ?></gnf:keyword>
      <description></description>
      <content:encoded>
        <?php echo atom_get_content(get_the_content()) ?>
      </content:encoded>
      <media:status state="<?php atom_get_status() ?>" />
      <pubDate><?php echo get_post_time('Y-m-d\TH:i:s+09:00'); ?></pubDate>
    </item>
  <?php endwhile ; ?>

</channel>
</rss>

<?php
function atom_get_revision($post_id) {
	$defaults = array( 
		'post_parent' => $post_id,
		'post_type'   => 'revision', 
		'numberposts' => -1,
		'post_status' => 'any'
	);

  if ($child = count(get_children($defaults)){
    return $child - 1;
  } else {
    return 0;
  }
}

function atom_get_status($post_id) {
	$child_count = atom_get_revision($post_id);
  if ($child_count > 0){
    return 'active';
  } else {
    return 'deleted';
  }
}

function atom_get_category() {
	$category = get_the_category();
	$ret = '';
	for($i = 0; $i < count($category); $i++){
		$ret .= '<category term ="tag" label="' . $category[$i]->name . '" />
		';
		if($i == 3) break;
	}
	return $ret;
}

function atom_get_related($post_id) {
	$yarpp_related = yarpp_get_related(NULL, $post_id);
	$ret = '';
	for($i = 0; $i < count($yarpp_related); $i++){
		$ret .= '

<ldnfeed:rel><ldnfeed:rel_link>' . get_permalink($yarpp_related[$i]->ID) . '</ldnfeed:rel_link><ldnfeed:rel_subject>' . htmlspecialchars(get_the_title($yarpp_related[$i]->ID)) . '" </ldnfeed:rel_subject></ldnfeed:rel>';
		if ($i == 2) break;
	}
	return $ret;
}

function atom_get_content($ret) {
	$ret = preg_replace("/\[caption.+\/caption\][(\n|\s)]+/", '', $ret);
	$ret = preg_replace("/\[caption.+\/caption\]/", '', $ret);
	$ret = preg_replace("/<br clear=\"all\" \/>[(\n|\s)]+/", '', $ret);
	$ret = nl2br($ret);
	return $ret;
}

function atom_get_summary($summary) {
	$ret = strip_tags($summary);
	return $ret;
}

?>
