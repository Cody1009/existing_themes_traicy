(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

$(document).ready(function(){
  setShareEvent(".facebook a", "facebook", $(".facebook").href);
  setShareEvent(".twitter a", "twitter", $(".twitter").href);
  setShareEvent(".google a", "google", $(".google").href);
  setShareEvent(".hatena a", "hatena", $(".hatena").href);
  setShareEvent(".line a", "line", $(".line").href);
});

/*
 *  シェアボタン押下時にGoogleアナリティクスへイベントを送信する
 *  @param selector イベントを付与するセレクタ
 *  @param snsName SNSの名前（Googleアナリティクス上の表示に使われる）
 *  @param shareUrl シェア対象のURL（Googleアナリティクス上の表示に使われる）
 */
function setShareEvent(selector, snsName, shareUrl) {
  $(selector).on('click', function(e){
    var current = $(this);
    // Googleアナリティクスにイベント送信
    // 'share'の文字列は任意に変えてもよい（Googleアナリティクス上の表示文字列として使われる）
    // 'nonInteraction' : 1にしないと、直帰率がおかしくなる（イベント発行したユーザーは直帰扱いでなくなる）ので注意
    ga('send', 'social', snsName, 'share', shareUrl, {
      'nonInteraction': 1
    });
    
    // 別ウィンドウでで開く
    window.open(current.prop("href"), 'subwin','width=600, height=500, resizable=yes, scrollbars=yes"');
    e.stopPropagation();
    return false;
  }); 
}
