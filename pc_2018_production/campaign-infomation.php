<?php
//キャンペーン情報
?>

<script>
    jQuery(function ($) {
        $('#campaign-tab-menu > li').on('click', function () {
            if ($(this).not('active')) {
                $(this).addClass('active').siblings('li').removeClass('active');
                var index = $('#campaign-tab-menu > li').index(this);
                $('#campaign-tab-box > div').eq(index).addClass('active').siblings('div').removeClass('active');
            }
        });
    });
</script>

<?php
/**
 * これから開催
 */
$today = date('Ymd');
?>
<div id="event_campaign">

    <div class="headline-row">
        <div class="headline-left">
            <p class="headline-en">
                EVENT・CAMPAIGN
            </p>
            <p class="headline-ja">
                イベント・キャンペーン情報
            </p>
        </div>
        <!-- タブメニュー -->
        <ul class="headline-right" id="campaign-tab-menu">
            <li class="active">開催中</li>
            <li>もうすぐ終了</li>
        </ul>
    </div>

    <!-- タブの中身 -->
    <div id="campaign-tab-box">

        <?php
        $args = array(
            'numberposts' => -1,
            'orderby' => 'date',
            'post_status' => 'publish',
            'relation' => 'AND',
            //'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key' => 'CampaignStart',
                    'value' => $today,
                    'compare' => '<=',
                    'type' => 'DATETIME'
                ),
                array(
                    'key' => 'CampaignEnd',
                    'value' => $today,
                    'compare' => '>=',
                    'type' => 'DATETIME'
                ),
            ),
        );
        $posts = get_posts($args);

        $con = array();
        $expire = array();
        foreach ($posts as $item) {
            $id = $item->ID;
            $endTime = strtotime(get_post_meta($id, 'CampaignEnd', true));

            // $countE = 0; $countC = 0;
            if ((($endTime - strtotime($today)) / (60 * 60 * 24) < 3)) {
                array_push($expire, $item);
            } else {
                array_push($con, $item);
            }
        }

        $args = array(
            'numberposts' => -1,
            'orderby' => 'date',
            'post_status' => 'publish',
            'meta_query' => array(
                array(
                    'key' => 'CampaignStart',
                    'value' => $today,
                    'compare' => '>=',
                    'type' => 'DATETIME'
                )
            ),
        );
        $posts = get_posts($args);
        ?>
        <div class="active">
            <?php output_campaign_current_articles($con); ?>
        </div>
        <div>
            <?php output_campaign_ending_articles($expire); ?>
        </div>
    </div>


    <?php function output_campaign_current_articles($posts)
    { ?>
        <div id="campaign">
            <?php if (count($posts) != 0) { ?>
                <?php
                $count = 0;
                foreach ($posts as $item) : $id = $item->ID;
                    $count++;
                    if ($count == 3) {
                        get_template_part('ad_traicy_newpc_top_recommend_1');
                        $count++;
                    } elseif ($count == 7) {
                        get_template_part('ad_traicy_newpc_top_recommend_2');
                        $count++;
                    } elseif ($count == 20) {
                        get_template_part('ad_traicy_newpc_top_recommend_3');
                        $count++;
                    }

                    ?>
                    <a href="<?php echo $item->guid; ?>" id="aCampaign">
                        <div id="article-card">

                            <div class="article-image">
                                <?php
                                if (has_post_thumbnail($id)) {
                                    echo '<img  class = "article-image"  src="', get_the_post_thumbnail_url($id, array(268, 180)), '">';
                                } else {
                                    echo '<img  class = "article-image" src="' . get_stylesheet_directory_uri() . '/images/dummy_600_400.jpg">';
                                }
                                ?>
                            </div>
                            <div class="article-description">
                                <div class="article-card-title">
                                    <?php shortingTitle($item->post_title, 75); ?>
                                </div>
                                <div class="article-info-row">
                                    <?php
                                    $startTime = strtotime(get_post_meta($id, 'CampaignStart', true));
                                    $endTime = strtotime(get_post_meta($id, 'CampaignEnd', true));

                                    // google カレンダーのリンク用
                                    $baseUrl = "https://www.google.com/calendar/event?action=TEMPLATE&";
                                    $params = array(
                                        "text" => $item->post_title,
                                        "dates" => date('Ymd', $startTime) . "/" . date('Ymd', $endTime),
                                        "details" => $item->guid
                                    );

                                    $gcalenderUrl = $baseUrl . http_build_query($params);
                                    ?>
                                    <p class="date-text">
                                        <?php echo str_replace('<br>', '', date('n月j日', $startTime)); ?>
                                        〜
                                        <?php echo str_replace('<br>', '', date('n月j日', $endTime)); ?>

                                    </p>
                                    <object class="addGcalender"><a href="<?php echo $gcalenderUrl; ?>">
                                            <i class="fa fa-calendar-plus-o calender-icon" aria-hidden="true"></i>
                                        </a></object>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php } else { ?>
                <a id="aCampaign">
                    <div id="campaignContents" style="font-size:15px; line-height: 60px; text-align: center;">
                        キャンペーン情報がありません。
                    </div>
                </a>
            <?php } ?>
            <div class="tag-attempt-container">
                <div class="arrow-attempt">
                    <i class="fa fa-angle-right yellow-angle"></i><a href="/airline-tags" class="attempt-text">イベント・キャンペーン情報をもっと見る</a>
                </div>
            </div>
        </div> <!-- campaign -->

    <?php } ?>
    <?php function output_campaign_ending_articles($posts)
    { ?>
        <div id="campaign">
            <?php if (count($posts) != 0) { ?>
                <?php
                $count = 0;
                foreach ($posts as $item) : $id = $item->ID;
                    $count++;
//                     if ($count == 3) {
					
// //                         get_template_part('ad_traicy_newpc_article_336_280_1');
//                         $count++;
//                     } elseif ($count == 7) {
						
// //                         get_template_part('ad_traicy_newpc_top_recommend_5');
//                         $count++;
//                     } elseif ($count == 20) {
						
// //                         get_template_part('ad_traicy_newpc_top_recommend_6');
//                         $count++;
//                     }

                    ?>
                    <a href="<?php echo $item->guid; ?>" id="aCampaign">
                        <div id="article-card">

                            <div class="article-image">
                                <?php
                                if (has_post_thumbnail($id)) {
                                    echo '<img  class = "article-image"  src="', get_the_post_thumbnail_url($id, array(268, 180)), '">';
                                } else {
                                    echo '<img  class = "article-image" src="' . get_stylesheet_directory_uri() . '/images/dummy_600_400.jpg">';
                                }
                                ?>
                            </div>
                            <div class="article-description">
                                <div class="article-card-title">
                                    <?php shortingTitle($item->post_title, 75); ?>
                                </div>
                                <div class="article-info-row">
                                    <?php
                                    $startTime = strtotime(get_post_meta($id, 'CampaignStart', true));
                                    $endTime = strtotime(get_post_meta($id, 'CampaignEnd', true));

                                    // google カレンダーのリンク用
                                    $baseUrl = "https://www.google.com/calendar/event?action=TEMPLATE&";
                                    $params = array(
                                        "text" => $item->post_title,
                                        "dates" => date('Ymd', $startTime) . "/" . date('Ymd', $endTime),
                                        "details" => $item->guid
                                    );

                                    $gcalenderUrl = $baseUrl . http_build_query($params);
                                    ?>
                                    <p class="date-text">
                                        <?php echo str_replace('<br>', '', date('n月j日', $startTime)); ?>
                                        〜
                                        <?php echo str_replace('<br>', '', date('n月j日', $endTime)); ?>

                                    </p>
                                    <object class="addGcalender"><a href="<?php echo $gcalenderUrl; ?>">
                                            <i class="fa fa-calendar-plus-o calender-icon" aria-hidden="true"></i>
                                        </a></object>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php } else { ?>
                <a id="aCampaign">
                    <div id="campaignContents" style="font-size:15px; line-height: 60px; text-align: center;">
                        キャンペーン情報がありません。
                    </div>
                </a>
            <?php } ?>
            <div class="tag-attempt-container">
                <div class="arrow-attempt">
                    <i class="fa fa-angle-right yellow-angle"></i><a href="/airline-tags" class="attempt-text">イベント・キャンペーン情報をもっと見る</a>
                </div>
            </div>
        </div> <!-- campaign -->

    <?php } ?>

</div>
