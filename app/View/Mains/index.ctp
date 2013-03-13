<script type="text/javascript">
$(function() {
	var randnum = Math.floor( Math.random() * 7 );
	$('.page-header h2').css('display', 'none');
	$('.page-header h2').eq(randnum).show('slide');
	$('.page-header h2').eq(randnum).css('display', '');

	$('.page-header').mouseenter(function() {
		var randnum2 = Math.floor( Math.random() * 7 );
		$('.page-header h2').css('display', 'none');
		$('.page-header h2').eq(randnum2).show('slide');
		$('.page-header h2').eq(randnum2).css('display', '');
	});

	// 左左煩悩
	$('.btn-group').find('.lleft').click(function() {
		$('.btn-group').find('button').removeClass('active');
		$('.btn-group').find('.lleft').eq(0).addClass('active');

		// 昔のｵﾊﾟｰｲを消す
		$('.titi').remove();
		// 新しいｵﾊﾟｰｲを作る
		tt(function(){
			var left = {
					vertex: [255, 215],						// ｵﾊﾟｰｲ頂点	sample5.JPG
					rect:   [[190, 160], [350, 280]]		// ｵﾊﾟｰｲ範囲	sample5.JPG
				};
			var right = {
					vertex: [420, 180],						// ｵﾊﾟｰｲ頂点	sample5.JPG
					rect:   [[355, 140], [500, 260]]		// ｵﾊﾟｰｲ範囲	sample5.JPG
		        };
			oppai("http://paltre.pk-brs.com/img/sample5.JPG", "#viewer", left, right);
		});

	});

	// 左煩悩
	$('.btn-group').find('.left').click(function() {
		$('.btn-group').find('button').removeClass('active');
		$('.btn-group').find('.left').eq(0).addClass('active');

		// 昔のｵﾊﾟｰｲを消す
		$('.titi').remove();
		// 新しいｵﾊﾟｰｲを作る
		tt(function(){
			var left = {
					vertex: [160, 330],						// ｵﾊﾟｰｲ頂点	sample2.JPG
					rect:   [[60, 200], [280, 420]]			// ｵﾊﾟｰｲ範囲	sample2.JPG
				};
			var right = {
					vertex: [400, 350],						// ｵﾊﾟｰｲ頂点	sample2.JPG
					rect:   [[260, 200], [565, 435]]		// ｵﾊﾟｰｲ範囲	sample2.JPG
		        };
		    oppai("http://paltre.pk-brs.com/img/sample2.JPG", "#viewer", left, right);
		});

	});

	// 中煩悩
	$('.btn-group').find('.center').click(function() {
		$('.btn-group').find('button').removeClass('active');
		$('.btn-group').find('.center').eq(0).addClass('active');

		// 昔のｵﾊﾟｰｲを消す
		$('.titi').remove();
		// 新しいｵﾊﾟｰｲを作る
		tt(function(){
			var left = {
					vertex: [100, 150],						// ｵﾊﾟｰｲ頂点	sample9.JPG
					rect:   [[30, 10], [185, 250]]			// ｵﾊﾟｰｲ範囲	sample9.JPG
				};
			var right = {
					vertex: [250, 180],						// ｵﾊﾟｰｲ頂点	sample9.JPG
					rect:   [[210, 30], [400, 280]]			// ｵﾊﾟｰｲ範囲	sample9.JPG
		        };
			oppai("http://paltre.pk-brs.com/img/sample9.JPG", "#viewer", left, right);
		});

	});

	// 右煩悩
	$('.btn-group').find('.rigth').click(function() {
		$('.btn-group').find('button').removeClass('active');
		$('.btn-group').find('.rigth').eq(0).addClass('active');

		// 昔のｵﾊﾟｰｲを消す
		$('.titi').remove();
		// 新しいｵﾊﾟｰｲを作る
		tt(function(){
		    var left = {
		    		vertex: [165, 290],						// ｵﾊﾟｰｲ頂点	sample3.JPG
					rect:   [[45, 80], [280, 350]]			// ｵﾊﾟｰｲ範囲	sample3.JPG
		        };
		    var right = {
		    		vertex: [380, 360],						// ｵﾊﾟｰｲ頂点	sample3.JPG
					rect:   [[270, 90], [500, 380]]			// ｵﾊﾟｰｲ範囲	sample3.JPG
		        };
		    oppai("http://paltre.pk-brs.com/img/sample3.JPG", "#viewer", left, right);
		});

	});

	// 右右煩悩
	$('.btn-group').find('.rrigth').click(function() {
		$('.btn-group').find('button').removeClass('active');
		$('.btn-group').find('.rrigth').eq(0).addClass('active');

		// 昔のｵﾊﾟｰｲを消す
		$('.titi').remove();
		// 新しいｵﾊﾟｰｲを作る
		tt(function(){
		    var left = {
		    		vertex: [150, 150],						// ｵﾊﾟｰｲ頂点	sample8.JPG
					rect:   [[110, 40], [280, 250]]			// ｵﾊﾟｰｲ範囲	sample8.JPG
		        };
		    var right = {
		    		vertex: [420, 180],						// ｵﾊﾟｰｲ頂点	sample8.JPG
					rect:   [[281, 50], [500, 280]]			// ｵﾊﾟｰｲ範囲	sample8.JPG
		        };
		    oppai("http://paltre.pk-brs.com/img/sample8.JPG", "#viewer", left, right);
		});

	});
});
</script>
	<div class="page-header">
		<h2 style="display: none;">そう。手を伸ばせば届くんだ。</h2>
		<h2 style="display: none;">周りの目は気にするな。</h2>
		<h2 style="display: none;">煩悩の数だけ叩くがいい。</h2>
		<h2 style="display: none;">考える事なんてあるか？</h2>
		<h2 style="display: none;">答えは,目の前にある。</h2>
		<h2 style="display: none;">煩悩の数だけ叩くがいい。</h2>
		<h2 style="display: none;">右っ！左っ！右っ！右っ！！</h2>
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
	<div class="span11">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">最新のトレンドを紹介!!</li>
		  <?php
			echo $this->element('subbox', array(
				"TrendData" => $TrendData,
			));
		  ?>
        </ul>
      </div><!--/.well -->
    </div><!--/span-->
    <div class="span11">
   		<div id="viewer"></div>
   	</div>
	<script type="text/javascript" id="oppai">
		tt(function(){
			var meta = document.createElement("meta"),
		    	left = {
		            //vertex: [75, 85],						// ｵﾊﾟｰｲ頂点	frankey.jpg
		            //rect:   [[50, 80], [93, 115]]			// ｵﾊﾟｰｲ範囲	frankey.jpg
		            vertex: [100, 220],						// ｵﾊﾟｰｲ頂点	sample1.JPG
					rect:   [[25, 40], [250, 270]]			// ｵﾊﾟｰｲ範囲	sample1.JPG
		        },
		        right = {
		            //vertex: [110, 85],					// ｵﾊﾟｰｲ頂点	frankey.jpg
					//rect:   [[94, 80], [125, 120]]		// ｵﾊﾟｰｲ範囲	frankey.jpg
					vertex: [365, 180],						// ｵﾊﾟｰｲ頂点	sample1.JPG
					rect:   [[223, 40], [450, 255]]			// ｵﾊﾟｰｲ範囲	sample1.JPG
		        };

		    meta.name = "viewport";
		    meta.content = "width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1";

		    tt("head").add(meta);
		    oppai("http://paltre.pk-brs.com/img/sample1.JPG", "#viewer", left, right);
		});
	</script>
	<div class="span4">
	</div>
	<div class="span4">
		<div class="btn-group" data-toggle="buttons-radio" >
		  <button type="button" class="btn btn-primary lleft">煩悩</button>
		  <button type="button" class="btn btn-primary left">煩悩</button>
		  <button type="button" class="btn btn-primary center">煩悩</button>
		  <button type="button" class="btn btn-primary rigth">煩悩</button>
		  <button type="button" class="btn btn-primary rrigth">煩悩</button>
		</div>
	</div>
	<div class="span4">
	</div>
    </div><!--/span-->
  </div><!--/row-->