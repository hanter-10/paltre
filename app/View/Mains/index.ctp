<script type="text/javascript">

function setPosition(){
	target = document.getElementById('sampleform');

	//マウスを動かしたとき
	window.document.onmousemove = function(e){
		target.onmouseX.value = getMousePosition(e).x;
		target.onmouseY.value = getMousePosition(e).y;
	}

	//マウスクリックを引上げたとき
	window.document.onmouseup = function(e){
		target.onmouseupX.value = getMousePosition(e).x;
		target.onmouseupY.value = getMousePosition(e).y;
	}

	//マウスクリックを押下したとき
	window.document.onmousedown = function(e){
		target.onmousedownX.value = getMousePosition(e).x;
		target.onmousedownY.value = getMousePosition(e).y;
	}
}


function getMousePosition(e) {
	var obj = new Object();

	if(e) {
		obj.x = e.pageX;
		obj.y = e.pageY;
	}
	else {
		obj.x = event.x + document.body.scrollLeft;
		obj.y = event.y + document.body.scrollTop;
	}

	return obj;
}
</script>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
	<div class="content-padded">
		<p class="welcome">Thanks for downloading Ratchet. This is an example HTML page that's linked up to compiled Ratchet CSS and JS, has the proper meta tags and the HTML structure. Need some more help before you start filling this with your own content? Check out some Ratchet resorces:</p>
	</div>

	<ul class="list inset">
		<li>
			<a href="http://maker.github.com/ratchet/">
			<strong>Ratchet documentation</strong>
			<span class="chevron"></span>
			</a>
		</li>
		<li>
			<a href="http://www.github.com/maker/ratchet/">
			<strong>Ratchet on Github</strong>
			<span class="chevron"></span>
			</a>
		</li>
		<li>
			<a href="https://groups.google.com/forum/#!forum/goratchet">
			<strong>Ratchet Google group</strong>
			<span class="chevron"></span>
			</a>
		</li>
		<li>
			<a href="http://www.twitter.com/GoRatchet">
			<strong>Ratchet on Twitter</strong>
			<span class="chevron"></span>
			</a>
		</li>
	</ul>

	<!--
	<form action="" method="" id="sampleform">
		<ul>
		<li>onmouseX: <input type="text" value="" name="onmouseX" /></li>
		<li>onmouseY: <input type="text" value="" name="onmouseY" /></li>
		<li>onmousedownX: <input type="text" value="" name="onmousedownX" /></li>
		<li>onmousedownY: <input type="text" value="" name="onmousedownY" /></li>
		<li>onmouseupX: <input type="text" value="" name="onmouseupX" /></li>
		<li>onmouseupY: <input type="text" value="" name="onmouseupY" /></li>
		</ul>
	</form>

	<div style="user-select: none;" >
	<a href="JavaScript:void()" onmouseover="setPosition();">
	<?php
		echo $this->Html->image('frankey.jpg', array('alt' => 'フランキー', 'height' => 800, 'width' => 480));
	?>
	</a>
	</div>
	-->

	<div id="viewer"></div>
	<script type="text/javascript">
		tt(function(){
			var meta = document.createElement("meta"),
		    	left = {
		            //vertex: [262, 452],
		            //rect:   [[209, 369], [323, 520]]
		            vertex: [75, 85],						// ｵﾊﾟｰｲ頂点
		            rect:   [[50, 80], [93, 115]]			// ｵﾊﾟｰｲ範囲
		        },
		        right = {
		            //vertex: [377, 445],						// ｵﾊﾟｰｲ頂点
		            //rect:   [[324, 369], [429, 513]]		// ｵﾊﾟｰｲ範囲
		            vertex: [110, 85],						// ｵﾊﾟｰｲ頂点
					rect:   [[94, 80], [125, 120]]			// ｵﾊﾟｰｲ範囲
		        };

		    meta.name = "viewport";
		    meta.content = "width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1";

		    tt("head").add(meta);
		    oppai("http://localhost:8888/paltre/img/frankey.jpg", "#viewer", left, right);			// 画像とElement指定
		    //oppai("https://dl.dropbox.com/s/jov7a7mugkbfk9e/pai_01.jpg", "#viewer", left, right);
		});
	</script>
</div>