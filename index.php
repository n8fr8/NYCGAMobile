<?php include("inc/main.inc"); ?>
<?php include("inc/header.inc"); ?>

<div data-role="page" id="home" style="background-image:url('img/nycgabg.jpg')">
	<div data-role="header"> 
	<h2 style="color:#FFD700;">NYCGA</h2>
	</div><!-- /header -->
<div data-role="content">
<div data-role="controlgroup">
<a href="activity.php" data-role="button">Activity</a>
<a href="feedbox.php?title=Bulletin&feed=http://nycga.net/category/site-news/feed" data-role="button">Bulletin</a>
<a href="content.php?title=Groups&page=http://nycga.net/groups" data-role="button">Groups</a>
<a href="events.php" data-role="button">Events</a>
<a href="feed.php?title=Minutes&feed=http://nycga.net/category/minutes/feed" data-role="button">Minutes</a>
<a href="resources.php" data-role="button">Resources</a>
<a href="help.php" data-role="button">How To Help</a>
<a href="content.php?title=About&page=http://nycga.net/about" data-role="button">About</a>
</div>
</div>
 <div data-role="footer">
<h4>mobile edition of nycga.net</h4>
        </div><!-- /footer -->
</div>

</body>
</html>
