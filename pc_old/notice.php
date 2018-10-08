<div class="information-container">
    <div class="info-title-row">
        <p class="info-title-en">INFORMATION</p>
        <p class="info-title-ja">トライシーからのお知らせ</p>
    </div>

    <?php
    $termId = get_category_by_slug('information')->term_id;
    $catArchiveUrl = get_term_link($termId, 'category'); //カテゴリーアーカイブのURL
    $args = array(
        'numberposts' => 5,
        'cat' => $termId
    );
    $customPosts = get_posts($args);
    if ($customPosts) :
        foreach ($customPosts as $post) :
            setup_postdata($post);
            ?>
            <a class="info-content" href="<?php the_permalink(); ?>">
                 <?php echo get_the_date(); ?>  <?php the_title(); ?>
            </a>
        <?php
        endforeach;
    endif;
    ?>
</div>

