<ul class="thumbnails">
	<?php $x = 0;?>
	<?php foreach ($TrendSearchData as $key => $trend) :?>

		<?php if ($key % 3 == 0 && $key != 0) :?>
		</ul>
		</div>
		<div class="row-fluid">
		<ul class="thumbnails">
	   	<?php endif; ?>

		<li class="span4">
	       <div class="thumbnail">
	         <div class="caption">
	           <h3>Thumbnail label</h3>
	           <p><?php echo $trend['DatPostSearch']['source']; ?></p>
	           <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
	         </div>
	       </div>
	    </li>
	<?php endforeach;?>
</ul>