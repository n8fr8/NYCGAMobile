<?php include("inc/main.inc"); ?>
<?php

  $doc = new DOMDocument();
  $doc->load('http://www.nycga.net/activity/feed/');


?>
<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>nycga</title> 
	<link rel="stylesheet" href="nycga.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
</head> 

<body> 
<div data-role="page" id="home" data-add-back-btn="true">
	<div data-role="header"> 
	<h1>Upcoming Events</h1>
	</div><!-- /header -->
<div data-role="content">
<?
$count = 0;
  foreach ($doc->getElementsByTagName('item') as $node) {
$postTitle = $node->getElementsByTagName('title')->item(0)->nodeValue;
$postLink = $node->getElementsByTagName('link')->item(0)->nodeValue;
$postDesc = $node->getElementsByTagName('description')->item(0)->nodeValue;
 ?>
<div data-role="collapsible" data-theme="e" data-content-theme="c">
<h3><? echo $postTitle; ?></h3>
<p>
<? echo $postDesc; ?>
</p>
</div>
<? 
	if (++$count == 10)
		break;
} ?>
</div>
<?php include("inc/footer.inc"); ?>
