<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="page-header">
	<h2>トレンドの騒ぎ！</h2>
</div>
<div class="ninja_onebutton">
<script type="text/javascript">
//<![CDATA[
(function(d){
if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_f548093ff47378ef66f61313a92dce7e)=='undefined'){
    document.write("<sc"+"ript type='text\/javascript' src='http:\/\/omt.shinobi.jp\/b\/f548093ff47378ef66f61313a92dce7e'><\/sc"+"ript>");
}else{
    window.NINJA_CO_JP_ONETAG_BUTTON_f548093ff47378ef66f61313a92dce7e.ONETAGButton_Load();}
})(document);
//]]>
</script><span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
</div>
<div id="autoLink">
	<?php
	echo $this->element('sublistbox', array(
				"TrendSearchData" => $TrendSearchData,));
			?>
</div>
<script type="text/javascript">
	$(function() {
		$("#autoLink").autolink();
		$("#autoLink").highlight("defeated", '&lt;span style="background-color:#FFFF7F;"&gt;$1&lt;/span&gt;');
		return false;
	});
</script>
