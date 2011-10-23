<?php 
include("inc/main.inc");
?>
<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Single page template</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
</head> 

<body> 
<?  
$pageId = $_GET['id'];
$client = new IXR_Client($endpoint);
if (!$client->query('blogger.getPost','1',$pageId,$user,$pass)) {
die('An error occurred - '.$client->getErrorCode().":".$client->getErrorMessage());
}

$thisPage = $client->getResponse();

$postTitle = $thisPage['content'];
$titleEnd = strrpos($postTitle,"</title>");
$postTitle = substr($postTitle,7,$titleEnd-7);

?>

<div data-role="page" id="page<? echo $thisPage['page_id']; ?>">

	<div data-role="header">
		<h1><?echo $postTitle ?></h1>
	</div><!-- /header -->

	<div data-role="content">	
	<p>
	<?echo nl2br($thisPage['content'])?>
	</p>
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4></h4>
	</div><!-- /footer -->
	
</div><!-- /page -->


</body></html>
