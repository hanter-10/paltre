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
	
	<?php
		echo $this->Html->image('frankey.jpg', array('alt' => 'フランキー', 'height' => 800, 'width' => 480, 'onmouseover' => 'setPosition()'));
	?>
	
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

</div>