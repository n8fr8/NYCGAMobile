<?php include("inc/main.inc"); ?>
<?php include("inc/header.inc"); ?>
<?php

  $doc = new DOMDocument();
  $doc->load('http://www.nycga.net/activity/feed/');


?>
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
$postDesc = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","content.php?page=\\0", $postDesc);
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
