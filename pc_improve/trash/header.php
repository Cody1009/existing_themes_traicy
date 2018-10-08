<?php
//print '<pre>';print_r(get_option( 'rewrite_rules' ));print '</pre>';
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
   <!-- AMPチェック 参考：　https://q-az.net/amp-wordpress-without-plugin/　-->
  <?php
  global $myAmp;
  $myAmp = false;
  $string = $post->post_content;
  
  $amp_start_date = new DateTime('2016-11-01'); // ampに対応した時期
  $post_date = date_create_from_format('Y-m-d H:i:s', $post->post_date);

  # 通常記事(header_normal.php)でampの存在をクローラに知らせるのにまた使うのでglobal
  global $is_valid_post_date;
  $is_valid_post_date = $post_date > $amp_start_date;

  if(isset($_GET["amp"]) && $_GET['amp'] === '1' && is_single() && $is_valid_post_date){
    $myAmp = true;
  }
  
  if($myAmp){
    include "header-amp.php";
  } else {
    include "header-normal.php";
  }
?>
