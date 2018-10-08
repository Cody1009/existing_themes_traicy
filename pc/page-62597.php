<?php
/**
  API for mail magazine.
*/

$posts = get_posts(
  array(
    'posts_per_page' => -1,
    'date_query' =>
      array(
        'year' => date('Y'),
        'month' => date('m'),
        'day' => date('j'),
      ),
    )
);

$categories = array();
if( !empty( $posts ) ) {
  foreach( $posts as $post ) {
    setup_postdata( $post );
    $post_cat=get_the_category();
    $key=$post_cat[0]->cat_ID;
    $cat_name = get_cat_name($key);

    if (array_key_exists($cat_name, $categories)) {
      array_push($categories[$cat_name], [get_the_title() => get_permalink()]);
    } else {
      $categories[$cat_name]["0"] = array(get_the_title() => get_permalink());
    }
  }
}

header("Content-Type: application/json; charset=utf-8");
echo json_encode($categories);

//     $slackApiKey = "xoxp-143281501555-150027482292-200285949671-0fb41c88b38bc57ae446397a2b1021ec";
