<?php include("inc/main.inc"); ?>
<?php include("inc/header.inc"); ?>
<?
$titles = array ('Map','Declaration','GA Guide','Good Neighbor Policy','Principles of Solidarity','FAQ','Legal Fact Sheet','Web Site Help');
$links = array ('/resources/map','/resources/declaration','/resources/general-assembly-guide','/resources/good-neighbor-policy','/resources/principles-of-solidarity','/resources/faq','/resources/legal-fact-sheet','/resources/web-site-help');
?>
<div data-role="page" id="home" data-add-back-btn="true">
	<div data-role="header"> 
	<h1>Resources</h1>
	</div><!-- /header -->
<div data-role="content">
<div data-role="controlgroup">
<? for($i = 0 ; $i < count($titles) ; $i++) { ?>
<a href="content.php?title=<? echo $titles[$i]; ?>&page=http://nycga.net<? echo $links[$i]; ?>" data-role="button"><? echo $titles[$i]; ?></a>
<? } ?>
</div>
</div>
<?php include("inc/footer.inc"); ?>


