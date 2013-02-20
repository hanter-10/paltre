<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<!-- Sets initial viewport load and disables zooming  -->
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Set Apple icons for when prototype is saved to home screen -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="touch-icons/apple-touch-icon-57x57.png">

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('ratchet.css');
		echo $this->Html->script('ratchet.js');
	?>

	<style type="text/css">
		.welcome {
			line-height: 1.5;
			color: #555;
		}
	</style>
</head>
<body>
	<!-- Make sure all your bars are the first things in your <body> -->
	<header class="bar-title">
		<h1 class="title">Ratchet</h1>
	</header>

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

	</div>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
