<?php
include('connect1.php');
$eid = mysql_fetch_assoc($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
<style type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<title>News & Events</title>
<body marginwidth="0" marginheight="0" style="background-image: url(images/background/rough_diagonal.png); background-repeat: repeat;">
<div id="mainbody"><div id="maincontent">
<div id="photogallery"><img src="images/logos/anigif3.gif" alt="Animated Image" /></div>
<div  id="ughome" align="left"><a style="color: orange;" href="http://www.ug.edu.gh"><strong> UG HOME </strong></a></div>
<div id="search" align="right">
<form method="get" action="resultspage.php">
<div id="button"><?php include('sidemenu.php'); ?></div>
<!-- End css3menu.com BODY section -->
<div id="content">
	<div id="welcomeheader">News & Events - News</div>
	<div id="nwcontent"> 
		<h2><?php echo $eid['title']; ?></h2>
		<p class="content"> <?php echo $eid['content'];?> <br />
							<?php echo $eid['date'];?><br />
							<?php echo $eid['time'];?><br />
							<?php echo $eid['venue'];?><br /></p> 
	</div>
</div>
<div id="footer"> University of Ghana || &copy; 2012</div>
</div></div>
</body>
</html>