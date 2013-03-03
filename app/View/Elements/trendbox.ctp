<ul class="inset list">
	<?php foreach ($TrendData as $key => $trend) :?>
		<?php if ($key == 0): ?>
		<li id="item<?php echo $key;?>" class="segmented-controller-item active">
		<?php else:?>
		<li id="item<?php echo $key;?>" class="segmented-controller-item">
		<?php endif; ?>
			<?php $post_id = $trend['DatPost']['id']; ?>
			<a href="<?php echo $this->Html->url('/mains/lists/'.$trend['DatPost']['id'], false); ?>">
			<?php echo $trend['DatPost']['source']; ?>
			<span class="chevron"></span>
			</a>
		</li>
	<?php endforeach;?>
</ul>
