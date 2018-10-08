<?php
/**
 * The template for displaying Contact page
 */

get_header(); ?>

<style>
#inquiryPage {
  width: calc(100% - 300px);
  float : left;
  height : auto;
}

@media screen and (max-width : 600px){ /* スマホ */
#inquiryPage {
  width: 100%;
  float : left;
  height : auto;
  margin: 20px 0;
}
}
</style>

<div id="inquiryPage">
  <center>
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf-eZ1qkr4seTZqLi21iuBhBy5IY_jDpNT7rMih0Hzxa6c0IQ/viewform?embedded=true" width="95%" height="1400px;"frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>
  </center>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
