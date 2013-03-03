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

$(function() {
	$('#viewer').click(function() {
		var trend = $('#viewer').prev('ul').find('li');
		var max_count = trend.length -1;

		for( var i=0; i < trend.length; i++ ){
			if (trend[i].className == 'segmented-controller-item active') {
				trend.eq(i).removeClass('active');
				var j = i+1;
				if (i === max_count) {
					j = 0;
				}
				trend.eq(j).show('slide');
				trend.eq(j).css('display', '');
				trend.eq(j).addClass('active');
				return;
			}
		}
		return;
	});
});


</script>
<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
	<div class="content-padded">
		<p class="welcome">
			最新のトレンドを紹介!!
		</p>
	</div>
	<?php
	echo $this->element('trendbox', array(
		"TrendData" => $TrendData,
	));
	?>
	<div id="viewer" ></div>
	<script type="text/javascript">
		tt(function(){
			var meta = document.createElement("meta"),
		    	left = {
		            //vertex: [262, 452],
		            //rect:   [[209, 369], [323, 520]]
		            //vertex: [75, 85],						// ｵﾊﾟｰｲ頂点
		            //rect:   [[50, 80], [93, 115]]			// ｵﾊﾟｰｲ範囲
		            vertex: [80, 440],						// ｵﾊﾟｰｲ頂点
					rect:   [[63, 320], [165, 470]]			// ｵﾊﾟｰｲ範囲
		        },
		        right = {
		            //vertex: [377, 445],						// ｵﾊﾟｰｲ頂点
		            //rect:   [[324, 369], [429, 513]]		// ｵﾊﾟｰｲ範囲
		            //vertex: [110, 85],						// ｵﾊﾟｰｲ頂点
					//rect:   [[94, 80], [125, 120]]			// ｵﾊﾟｰｲ範囲
					vertex: [290, 430],						// ｵﾊﾟｰｲ頂点
					rect:   [[166, 300], [360, 480]]			// ｵﾊﾟｰｲ範囲
		        };

		    meta.name = "viewport";
		    meta.content = "width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1";

		    tt("head").add(meta);
		    oppai("http://paltre.pk-brs.com/img/s_20110905_graviaidolnishida_16.jpg", "#viewer", left, right);
		    //oppai("http://paltre.pk-brs.com/img/akb48.jpeg", "#viewer", left, right);
		    //oppai("http://paltre.pk-brs.com/img/frankey.jpg", "#viewer", left, right);			// 画像とElement指定
		    //oppai("https://dl.dropbox.com/s/jov7a7mugkbfk9e/pai_01.jpg", "#viewer", left, right);
		});
	</script>

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
</div>