<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title><?php echo $page->title; ?></title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="apple-touch-icon" href="<?php echo $config->urls->root; ?>apple-touch-icon.png" />
		<!-- Place favicon.ico in the root directory -->

		<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/normalize.css" />
		<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/main.css" />
		<script src="<?php echo $config->urls->templates; ?>js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<?php echo "{$page->body}\n"; ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo $config->urls->templates; ?>js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="<?php echo $config->urls->templates; ?>js/plugins.js"></script>
		<script src="<?php echo $config->urls->templates; ?>js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	</body>
</html>
