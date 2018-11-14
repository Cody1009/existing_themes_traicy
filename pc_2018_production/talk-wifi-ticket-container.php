<script type="text/javascript">
    jQuery(function () {
        $('#category-tab-items > li').click(function () {
            var tabnum = $('#category-tab-items > li').index(this);
            $('.tab-content .show').css('display', 'none');
            $('.tab-content .show').eq(tabnum).css('display', 'block');
            $('#category-tab-items > li').removeClass('select');
            $(this).addClass('select')
        });
    });
</script>


<div class="talk-wifi-ticket-container">

    <ul id="category-tab-items">
        <li class="category-tab-item-text select">旅行好きが集まるコミュニティ！トライシートーク</li>
        <li class="category-tab-item-text">Wi-fi</li>
        <li class="category-tab-item-text">航空券</li>
    </ul>
    <div class="tab-content">
        <div class="show compeTraicyTalk">
            <?php
            get_template_part('front-traicy-talk-pc-fix');
            echo '</div>';
            global $isCompeBox;
            $isCompeBox = true;
            ?>
            <div class="show articleHide wifi" style="display: none;"><?php get_template_part('form'); ?></div>

            <div class="show articleHide ticket" style="display: none;">
                <div class="skyscanner-top-container">
                    <a href="http://airticket.traicy.com/" class="skyscanner-top-anchor" target="_blank">
                        <i class="fa fa-angle-right fa-skyscanner-angle fa-large" aria-hidden="true"></i>
                        Traicy × Skyscannerで航空券を検索する
                    </a>
                </div>

            </div>

        </div>
    </div>


    <!-- apparently there is no closing tag but this is fine. -->
