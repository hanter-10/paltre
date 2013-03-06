<script type="text/javascript">
$(function() {
// 	$('#viewer').click(function() {
// 		var trend = $('#viewer').parent().next().find('li');
// 		var max_count = trend.length -1;

// 		for( var i=0; i < trend.length; i++ ) {
// 			if (trend[i].className == 'active' || trend[i].className == 'nav-header active') {
// 				trend.eq(i).removeClass('active');
// 				var j = i+1;
// 				if (i === max_count) {
// 					j = 0;
// 				}
// 				trend.eq(j).addClass('active');
// 				return;
// 			}
// 		}
// 	});
// 	$('.previous').click(function() {
// 		// 昔のｵﾊﾟｰｲを消す
// 		$('.titi').remove();
// 		// 新しいｵﾊﾟｰｲを作る
// 		tt(function(){
// 			var left = {
// 					vertex: [160, 330],						// ｵﾊﾟｰｲ頂点	sample2.JPG
// 					rect:   [[60, 200], [280, 420]]			// ｵﾊﾟｰｲ範囲	sample2.JPG
// 				};
// 			var right = {
// 					vertex: [400, 350],						// ｵﾊﾟｰｲ頂点	sample2.JPG
// 					rect:   [[260, 200], [565, 435]]		// ｵﾊﾟｰｲ範囲	sample2.JPG
// 		        };
// 		    oppai("http://paltre.pk-brs.com/img/sample2.JPG", "#viewer", left, right);
// 		});
// 	});
// 	$('.next').click(function() {
// 		// 昔のｵﾊﾟｰｲを消す
// 		$('.titi').remove();
// 		// 新しいｵﾊﾟｰｲを作る
// 		tt(function(){
// 		    var left = {
// 		    		vertex: [165, 290],						// ｵﾊﾟｰｲ頂点	sample1.JPG
// 					rect:   [[45, 80], [280, 350]]			// ｵﾊﾟｰｲ範囲	sample1.JPG
// 		        };
// 		    var right = {
// 		    		vertex: [380, 360],						// ｵﾊﾟｰｲ頂点	sample1.JPG
// 					rect:   [[270, 90], [500, 380]]			// ｵﾊﾟｰｲ範囲	sample1.JPG
// 		        };
// 		    oppai("http://paltre.pk-brs.com/img/sample3.JPG", "#viewer", left, right);
// 		});
// 	});

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
					vertex: [75, 85],						// ｵﾊﾟｰｲ頂点	frankey.jpg
		            rect:   [[50, 80], [93, 115]]			// ｵﾊﾟｰｲ範囲	frankey.jpg
				};
			var right = {
					vertex: [110, 85],					// ｵﾊﾟｰｲ頂点	frankey.jpg
					rect:   [[94, 80], [125, 120]]		// ｵﾊﾟｰｲ範囲	frankey.jpg
		        };
			oppai("http://paltre.pk-brs.com/img/frankey.jpg", "#viewer", left, right);
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
});
</script>
    <div class="span12">
    	<div id="viewer"></div>

<!--
    	<ul class="pager">
		  <li class="previous">
		    <a href="#">&larr; Prev</a>
		  </li>
		  <li class="next">
		    <a href="#">Next &rarr;</a>
		  </li>
		</ul>
-->
		<div class="span4">
		</div>
		<div class="span4">
			<div class="btn-group" data-toggle="buttons-radio" >
			  <button type="button" class="btn btn-primary left">左煩悩</button>
			  <button type="button" class="btn btn-primary center">中煩悩</button>
			  <button type="button" class="btn btn-primary rigth">右煩悩</button>
			</div>
		</div>
		<div class="span4">
		</div>
		<script type="text/javascript" id="oppai">
			tt(function(){
				var meta = document.createElement("meta"),
			    	left = {
			            //vertex: [262, 452],
			            //rect:   [[209, 369], [323, 520]]
			            //vertex: [75, 85],						// ｵﾊﾟｰｲ頂点	frankey.jpg
			            //rect:   [[50, 80], [93, 115]]			// ｵﾊﾟｰｲ範囲	frankey.jpg
			            //vertex: [80, 440],					// ｵﾊﾟｰｲ頂点	s_20110905_graviaidolnishida_16.jpg
						//rect:   [[63, 320], [165, 470]]		// ｵﾊﾟｰｲ範囲	s_20110905_graviaidolnishida_16.jpg
						//vertex: [120, 700],					// ｵﾊﾟｰｲ頂点	1685347457513379e73b266-resize.jpg
						//rect:   [[15, 490], [300, 750]]		// ｵﾊﾟｰｲ範囲	1685347457513379e73b266-resize.jpg
						vertex: [100, 220],						// ｵﾊﾟｰｲ頂点	sample1.JPG
						rect:   [[25, 40], [250, 270]]			// ｵﾊﾟｰｲ範囲	sample1.JPG
						//vertex: [160, 330],						// ｵﾊﾟｰｲ頂点	sample2.JPG
						//rect:   [[60, 200], [280, 420]]			// ｵﾊﾟｰｲ範囲	sample2.JPG
						//vertex: [165, 290],						// ｵﾊﾟｰｲ頂点	sample3.JPG
						//rect:   [[45, 80], [280, 350]]			// ｵﾊﾟｰｲ範囲	sample3.JPG
			        },
			        right = {
			            //vertex: [377, 445],					// ｵﾊﾟｰｲ頂点
			            //rect:   [[324, 369], [429, 513]]		// ｵﾊﾟｰｲ範囲
			            //vertex: [110, 85],					// ｵﾊﾟｰｲ頂点	frankey.jpg
						//rect:   [[94, 80], [125, 120]]		// ｵﾊﾟｰｲ範囲	frankey.jpg
						//vertex: [290, 430],					// ｵﾊﾟｰｲ頂点	s_20110905_graviaidolnishida_16.jpg
						//rect:   [[166, 300], [360, 480]]		// ｵﾊﾟｰｲ範囲	s_20110905_graviaidolnishida_16.jpg
						//vertex: [320, 680],					// ｵﾊﾟｰｲ頂点	1685347457513379e73b266-resize.jpg
						//rect:   [[230, 480], [450, 730]]		// ｵﾊﾟｰｲ範囲	1685347457513379e73b266-resize.jpg
						vertex: [365, 180],						// ｵﾊﾟｰｲ頂点	sample1.JPG
						rect:   [[223, 40], [450, 255]]			// ｵﾊﾟｰｲ範囲	sample1.JPG
						//vertex: [400, 350],						// ｵﾊﾟｰｲ頂点	sample2.JPG
						//rect:   [[260, 200], [565, 435]]			// ｵﾊﾟｰｲ範囲	sample2.JPG
						//vertex: [380, 360],						// ｵﾊﾟｰｲ頂点	sample3.JPG
						//rect:   [[270, 90], [500, 380]]			// ｵﾊﾟｰｲ範囲	sample3.JPG
			        };

			    meta.name = "viewport";
			    meta.content = "width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1";

			    tt("head").add(meta);
			    oppai("http://paltre.pk-brs.com/img/sample1.JPG", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/sample2.JPG", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/sample3.JPG", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/1685347457513379e73b266-resize.jpg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/663959817512e466eb0d81-resize.jpg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/s_20110905_graviaidolnishida_16.jpg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/akb48.jpeg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/frankey.jpg", "#viewer", left, right);			// 画像とElement指定
			    //oppai("https://dl.dropbox.com/s/jov7a7mugkbfk9e/pai_01.jpg", "#viewer", left, right);
			});
		</script>
    </div><!--/span-->
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
  </div><!--/row-->
