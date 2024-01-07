<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Config $config */

?><!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page->title ?></title>
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

	<link rel="stylesheet" href="<?= $config->urls->templates ?>styles/style.css">

  <link rel="icon" href="<?= $config->urls->root ?>favicon.ico" sizes="any">
  <link rel="icon" href="<?= $config->urls->root ?>icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?= $config->urls->root ?>icon.png">
	
  <link rel="manifest" href="<?= $config->urls->root ?>site.webmanifest">
  <meta name="theme-color" content="#fafafa">

  <script>
    (function(e) {
      e.className = e.className.replace(/\bno-js\b/, 'js');
    })(document.documentElement);
  </script>
</head>

<body>

	<div id="content">
	  <p>Hello world! This is HTML5 Boilerplate.</p>
  </div>

	<script src="<?= $config->urls->templates ?>scripts/app.js"></script>

</body>

</html>
