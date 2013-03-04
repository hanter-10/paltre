<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
	<div class="content-padded">
		<p class="welcome">
			トレンドの騒ぎ!!
		</p>
	</div>
	<div id="autoLink">
		<?php
		echo $this->element('trendsearchbox', array(
			"TrendSearchData" => $TrendSearchData,
		));
	?>
	</div>
	<script type="text/javascript">
		$(function() {
			$("#autoLink").autolink();
			$("#autoLink").highlight("defeated", '&lt;span style="background-color:#FFFF7F;"&gt;$1&lt;/span&gt;');
			return false;
		});
	</script>
</div>
