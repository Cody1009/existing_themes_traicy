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
	<div class="modal-container" style="max-height:100%; overflow: scroll;">
		<div class="modal-body">
			<div class="modal-thre">
				<div class="modal-title" id="jstitle"></div>
				<div class="content" id="jscontent"></div>
			</div>
			<div class="form-group">
				<form action="https://talk.traicy.com/responses/create_anonymously" method="post" name="talk_response" id="form_post">
					<label class="form-label">Traicy Talkへ回答する <span id="response_error" style="font-size: 0.9em; color: #ea352d; margin-left: 30px;"></span></label>
					<textarea class="form-input" placeholder="TraicyTalkへ回答する。" name="content" id="response_textarea"></textarea>
					<input type="hidden" name="thre_id" value="">
					<input type="hidden" name="check_login" value="1">
					<div class="bottom">
						<a class="btn close-modal">閉じる</a>
						<a class="btn" id="jshref" target="_blank">回答を見る</a>
            <?php //<button type="submit" class="btn">今すぐ回答</button> ?>
						<button type="submit" class="btn">今すぐ回答</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
