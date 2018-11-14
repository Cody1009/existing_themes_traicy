<script type="text/javascript">
    jQuery(function() {
        $('#form_post').submit(function(){
            if ( $('#response_textarea').val().length == 0 ) {
                $('#response_error').text("テキストエリアに入力がありませんでした。");
                return false;
            } else {
                $("#form_post > .bottom > button").prop("disabled", true);
                return true;
            }
        })
    });
</script>

<div class="modal modal-sm">
    <div class="modal-overlay"></div>
    <div class="modal-container" >
        <a class="close-modal"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></a>
        <div class="modal-body">
            <div class="modal-thre">
                <div class="modal-question-title-row">
                    <i class="fa fa-question fa-2x modal-question-icon" aria-hidden="true"></i>
                    <div class="modal-title" id="jstitle"></div>
                </div>

                <div class="content" id="jscontent"></div>
            </div>
            <div class="form-group">
                <form action="https://talk.traicy.com/responses/create_anonymously" method="post" name="talk_response" id="form_post">

                    <textarea class="modal-form-input" placeholder="質問に回答しよう" name="content" id="response_textarea"></textarea>
                    <input type="hidden" name="thre_id" value="">
                    <input type="hidden" name="check_login" value="1">
                    <div class="modal-form-bottom">
                        <button type="submit" class="submit-answer-btn">
                            回答する
                        </button>
                        <a class="see-answer-anchor" id="jshref" target="_blank">他の回答を見る</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
