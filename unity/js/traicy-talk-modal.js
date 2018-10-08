jQuery(function() {
	function AutoLink(str, onclick) {
		var regexp_url = /((h?)(ttps?:\/\/[a-zA-Z0-9.\-_@:/~?%&;=+#',()*!]+))/g; // ']))/;
		var regexp_makeLink = function(all, url, h, href) {
				return '<a href="h' + href + '" target="_blank" onclick="' + onclick + '">' + url + ' </a>';
		}
		return str.replace(regexp_url, regexp_makeLink);
	}

	$(".close-modal").on("click", function() {
	  $(this).closest('.modal').removeClass('active');
	});
	$(".modal-overlay").on("click", function() {
	  $(this).closest('.modal').removeClass('active');
	});

	$("li.thre.mod").on("click", function() {
		$('.modal').addClass('active');

		title = $(this).children('a').text();
		thre_id = $(this).children('div.thre_id').text();
		var oc = "__gaTracker('send','event','jump_talk','click','"+ thre_id + "','1');";
		title = '<a href="https://talk.traicy.com/thres/' + thre_id + '" target="_blank" onclick=' + oc + ' >' + title + '</a>';

		$('#response_error').text('');

		content = AutoLink($(this).children('div.content').text().replace(/\\n/g, "\n"), onclick);

		$('#jshref').attr("href", "https://talk.traicy.com/thres/" + thre_id)
		$('#jstitle').html(title);
		$('#jscontent').html('<p>'+content.replace(/\r|\n|\r\n/g, '<br>')+'</p>');
		var x = document.talk_response.thre_id;
		x.value = thre_id;
	});
});
