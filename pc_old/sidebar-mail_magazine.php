<script src="<?= get_stylesheet_directory_uri() . "/js/form.min.js" ?>"></script>

<p class="headline-ja">メールマガジンを登録する</p>

<div class="sidebar-mail-register">
    <p class="mail-register-text">Traicyのメルマガでは以下の情報などをお届けしています。</p>
    <p class="mail-register-description">
        ・選りすぐりのデイリーニュース
    </p>
    <p class="mail-register-description">
        ・メルマガ限定クーポン
    </p>
    <p class="mail-register-description">
        ・激安セール開催の案内
    </p>
    <form class="mail-input-container" action="https://talk.traicy.com/users/new" method="get" target="_blank">
        <input type="email" name="email" class="mail-register-input" title="mail-register" placeholder="メールアドレス">
        <button type="submit" class="mail-register-button"
                onclick="console.log('a');__gaTracker('send','event','mail-magazine','click', 2, 1);">登録
        </button>
    </form>

    <p class="mail-register-text">お持ちのアカウントで登録する</p>
    <div class="sns-logos-row">
        <!--        TODO: replace these icons with circular one if needed-->
        <a href="https://talk.traicy.com/auth/twitter/create"><i
                    class="fa  fa-3x fa-twitter-square mail-register-twitter"></i></a>
        <a href="https://talk.traicy.com/auth/facebook/create"><i
                    class="fa  fa-3x fa-facebook-square mail-register-facebook"></i></a>
        <a href="https://talk.traicy.com/auth/google/create"><i class="fa fa-3x fa-google-plus mail-register-google"></i></a>
        <a href="https://talk.traicy.com/auth/yahoojp/create"><i class="fa fa-3x fa-yahoo mail-register-yahoo"></i></a>
    </div>
</div>
