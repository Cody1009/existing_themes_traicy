<!-- 広告開始　-->
<!-- ad-sidebar -->
<?php if(!is_NoAdsense()) : ?>
<script type='text/javascript'>
	document.MAX_ct0 ='';
	var m3_u = (location.protocol=='https:'?'https://cas.criteo.com/delivery/ajs.php?':'http://cas.criteo.com/delivery/ajs.php?');
	var m3_r = Math.floor(Math.random()*99999999999);
	document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
	document.write ("zoneid=421708");document.write("&amp;nodis=1");
	document.write ('&amp;cb=' + m3_r);
	if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
	document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
	document.write ("&amp;loc=" + escape(window.location).substring(0,1600));
	if (document.context) document.write ("&context=" + escape(document.context));
	if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
		document.write ("&amp;ct0=" + escape(document.MAX_ct0));
	}
	if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
	var publisherurl = "%%SITE%%";
	var macro = "%%SI" + "TE%%";
	if (publisherurl !== macro) document.write ("&amp;publisherurl="+publisherurl);
	document.write ("'></scr"+"ipt>");
</script>
<?php endif; ?>
<!-- /広告 -->