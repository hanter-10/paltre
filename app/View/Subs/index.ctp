<script type="text/javascript">
$(function() {
	$('#viewer').click(function() {
		var trend = $('#viewer').parent();
		var max_count = trend.length -1;
		alert(trend[0]);

		for( var i=0; i < trend.length; i++ ){
			if (trend[i].className == 'active') {
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



  <div class="span3">
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
    <div class="span9">

      <div id="viewer"></div>
		<script type="text/javascript">
			tt(function(){
				var meta = document.createElement("meta"),
			    	left = {
			            //vertex: [262, 452],
			            //rect:   [[209, 369], [323, 520]]
			            //vertex: [75, 85],						// ｵﾊﾟｰｲ頂点
			            //rect:   [[50, 80], [93, 115]]			// ｵﾊﾟｰｲ範囲
			            //vertex: [80, 440],						// ｵﾊﾟｰｲ頂点	s_20110905_graviaidolnishida_16.jpg
						//rect:   [[63, 320], [165, 470]]			// ｵﾊﾟｰｲ範囲	s_20110905_graviaidolnishida_16.jpg
						vertex: [120, 700],						// ｵﾊﾟｰｲ頂点	1685347457513379e73b266-resize.jpg
						rect:   [[15, 490], [300, 750]]			// ｵﾊﾟｰｲ範囲	1685347457513379e73b266-resize.jpg
			        },
			        right = {
			            //vertex: [377, 445],					// ｵﾊﾟｰｲ頂点
			            //rect:   [[324, 369], [429, 513]]		// ｵﾊﾟｰｲ範囲
			            //vertex: [110, 85],					// ｵﾊﾟｰｲ頂点
						//rect:   [[94, 80], [125, 120]]		// ｵﾊﾟｰｲ範囲
						//vertex: [290, 430],						// ｵﾊﾟｰｲ頂点	s_20110905_graviaidolnishida_16.jpg
						//rect:   [[166, 300], [360, 480]]		// ｵﾊﾟｰｲ範囲	s_20110905_graviaidolnishida_16.jpg
						vertex: [320, 680],						// ｵﾊﾟｰｲ頂点	1685347457513379e73b266-resize.jpg
						rect:   [[230, 480], [450, 730]]		// ｵﾊﾟｰｲ範囲	1685347457513379e73b266-resize.jpg
			        };

			    meta.name = "viewport";
			    meta.content = "width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1";

			    tt("head").add(meta);
			    oppai("http://paltre.pk-brs.com/img/1685347457513379e73b266-resize.jpg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/663959817512e466eb0d81-resize.jpg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/s_20110905_graviaidolnishida_16.jpg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/akb48.jpeg", "#viewer", left, right);
			    //oppai("http://paltre.pk-brs.com/img/frankey.jpg", "#viewer", left, right);			// 画像とElement指定
			    //oppai("https://dl.dropbox.com/s/jov7a7mugkbfk9e/pai_01.jpg", "#viewer", left, right);
			});
		</script>

      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
      </div><!--/row-->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/span-->
  </div><!--/row-->