<?php 
include("inc/main.inc");
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

<?  
$client = new IXR_Client($endpoint);
if (!$client->query('wp.getPages','0',$user,$pass)) {
die('An error occurred - '.$client->getErrorCode().":".$client->getErrorMessage());
}

$pages = $client->getResponse();

function compare_order_id($a, $b)
 {
    return $a['wp_page_order'] >= $b['wp_page_order'];
  }

  // sort alphabetically by name
  usort($pages, 'compare_order_id');
?>

<div data-role="page" id="home">
	<div data-role="header"> 
		<img src="img/nycga_header.jpg"/>
	</div><!-- /header -->
<div data-role="content">
<h3>Sites Pages</h3>
<div data-role="controlgroup">
<? foreach ($pages as $thisPage) {
if ($thisPage['wp_page_parent_id'] == 0)
 { ?>
<a href="page.php?id=<? echo $thisPage['page_id']; ?>" data-role="button"><? echo $thisPage['title']; ?></a>
<?} } ?>
</div>
<h3>Recent Posts</h3>
<?
$client = new IXR_Client($endpoint);
if (!$client->query('blogger.getRecentPosts','0','5',$user,$pass)) {
die('An error occurred - '.$client->getErrorCode().":".$client->getErrorMessage());
}
$posts = $client->getResponse();
?>
<div data-role="controlgroup">
<? foreach ($posts as $thisPost) {

$postTitle = $thisPost['content'];
$titleEnd = strrpos($postTitle,"</title>");
$postTitle = substr($postTitle,7,$titleEnd-7);
 ?>
<a href="post.php?id=<? echo $thisPost['postid']; ?>" data-role="button"><? echo $postTitle; ?></a>
<? } ?>
</div>
</div>
	<div data-role="footer">
		<h4>http://nycaga.net</h4>
	</div><!-- /footer -->
</div>

</body>
</html>



