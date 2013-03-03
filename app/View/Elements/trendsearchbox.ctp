<ul class="list inset">
	<?php foreach ($TrendSearchData as $key => $trendsearch) :?>
		<li>
			<?php echo $trendsearch['DatPostSearch']['source']; ?>
		</li>
	<?php endforeach;?>
</ul>