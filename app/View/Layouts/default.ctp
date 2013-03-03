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
		echo $this->Html->script('http://code.jquery.com/jquery-1.9.1.min.js');
		echo $this->Html->script('ratchet.js');
		echo $this->Html->script('tt.js');
		echo $this->Html->script('Oppai.js');
		//echo $this->Html->script('http://jsrun.it/damele0n/kXAJ/js');
		//echo $this->Html->script('http://jsrun.it/damele0n/saWA/js');
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
		<a class="button" href="#">
			Left
		</a>
		<h1 class="title">ぱるるんﾄﾚﾝﾀﾞｰ</h1>
		<a class="button" href="#">
			Right
		</a>
	</header>

	<?php echo $this->fetch('content'); ?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
