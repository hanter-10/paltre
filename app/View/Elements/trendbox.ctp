<ul class="inset list">
	<?php foreach ($TrendData as $key => $trend) :?>
		<?php if ($key == 0): ?>
		<li id="item<?php echo $key;?>" class="segmented-controller-item active">
		<?php else:?>
		<li id="item<?php echo $key;?>" class="segmented-controller-item">
		<?php endif; ?>
			<?php echo $trend['DatPost']['source']; ?>
		</li>
	<?php endforeach;?>
</ul>
