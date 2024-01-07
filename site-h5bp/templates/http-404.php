<?php namespace ProcessWire;

// Template file for “http-404” template used by the Not Found page
// ----------------------------------------------------------------
// The #content div in this file will replace the #content div in _main.php
// when the Markup Regions feature is enabled, as it is by default. 
// You can also append to (or prepend to) the #content div, and much more. 
// See the Markup Regions documentation:
// https://processwire.com/docs/front-end/output/markup-regions/

/** @var Page $page */

?>

<div id="content">
	<h1><?= $page->title ?></h1>
	<p>Sorry, but the page you were trying to view does not exist.</p>
</div>
