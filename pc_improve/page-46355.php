<?php
/**
 * The template for displaying Application apge
 */

get_header(); ?>

<style>
#applicationPage {
  width: calc(100% - 300px);
  float : left;
  height : auto;
}

@media screen and (max-width : 600px){ /* スマホ */
#applicationPage {
  width: 100%;
  float : left;
  height : auto;
  margin-bottom: 20px;
}
}
</style>

<div id="applicationPage" >
  <center>
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfdwsw0hp6zE8RBaazq3PvCyGfyRZdZNy8Hmfp4M9qjiVw52g/viewform?embedded=true" width="95%" height="1600px;" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます...</iframe>
  </center>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
