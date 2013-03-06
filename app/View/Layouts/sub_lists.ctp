<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>ぱるトレ！</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php
    	echo $this->Html->css('bootstrap.css');
    ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>

    <?php
    	echo $this->Html->css('bootstrap-responsive.css');
    ?>

    <?php
    	echo $this->Html->script('http://code.jquery.com/jquery-1.9.1.min.js');
		echo $this->Html->script('http://kawika.org/jquery/js/jquery.autolink.js');
		echo $this->Html->script('tt.js');
		echo $this->Html->script('Oppai.js');
    ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->


  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar">About</span>
          </button>
          <a class="brand" href="#"><strong>ぱるるんトレンダー</strong></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#about">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">

      	<?php echo $this->fetch('content'); ?>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

	<div class="span12">
      <?php echo $this->element('sql_dump'); ?>
    </div>

    </div><!--/.fluid-container-->
</body>
</html>