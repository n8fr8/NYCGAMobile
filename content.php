<?php include("inc/main.inc"); ?>
<?php include("inc/header.inc"); ?>
<?php

$doc = new DomDocument;

// We need to validate our document before refering to the id
$doc->validateOnParse = false;
$doc->loadHtml(file_get_contents( $_GET['page']));

?>
<div data-role="page" id="content" data-add-back-btn="true">

	<div data-role="header">
		<h1><?echo $_GET['title'] ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
	<p>
<?

$links = $doc->getElementsByTagName("a");
foreach($links as $link) {
  $href = $link->getAttribute("href");
  $newLink = "content.php?page=" . $href;
  $link->setAttribute("href",$newLink);
}

$elemContent = $doc->getElementById('content');
$elemText = $elemContent->ownerDocument->saveXML($elemContent);
echo $elemText;
?>
	</p>
	</div><!-- /content -->
<?php include("inc/footer.inc"); ?>
