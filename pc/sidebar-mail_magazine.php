<script src="<?= get_stylesheet_directory_uri() . "/js/form.min.js" ?>"></script>

<div class="follow-us">
  <section class="mod-body">
    <div class="follow-us-header">
        <h3>メールマガジンを登録する</h3>
    </div>

    <div class="email">
      <div class="follow-us-form-desc">
        <p>Traicyのメルマガでは、</p>
        <p>・選りすぐりのデイリーニュース</p>
        <p>・メルマガ限定クーポン</p>
        <p>・激安セール開催の案内</p>
        <p>をお届けします。</p>
      </div>
    </div>
    <form class="pure-form" action="https://talk.traicy.com/users/new" method="get" target="_blank">
      <fieldset>
        <legend>メールアドレスで登録する</legend>
        <input type="email" placeholder="Email" name="email">
        <button type="submit" class="pure-button pure-button-primary" onclick="console.log('a');__gaTracker('send','event','mail-magazine','click', 2, 1);">登録</button>
      </fieldset>
    </form>

    <div id="oauth_signup" >
      <legend>お持ちのアカウントで登録する</legend>
      <div class="snsbtn3">
        <div>
          <a href="https://talk.traicy.com/auth/google/create" class="btn-go"><i class="fa fa-google"></i>Google</a>
          <a href="https://talk.traicy.com/auth/facebook/create" class="btn-fb"><i class="fa fa-facebook-square"></i>Facebook</a>
        </div>
        <div>
          <a href="https://talk.traicy.com/auth/twitter/create" class="btn-tw"><i class="fa fa-twitter"></i>Twitter</a>
          <a href="https://talk.traicy.com/auth/yahoojp/create" class="btn-yh"><i class="fa fa-yahoo"></i>Yahoo</a>
        </div>
      </div>
    </div>
  </section>
  <div class="mod-footer"></div>
</div>
