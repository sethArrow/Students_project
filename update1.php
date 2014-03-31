<?php
include('connect1.php');$query = mysql_query("select * from events ");$eventid = $_GET['id'];$query = mysql_query("select * from events where event_id = '$eventid'");
$eid = mysql_fetch_assoc($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr"><head><meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
<style type="text/css">html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script><script type="text/javascript" src="jquerycssmenu.js"></script><link rel="stylesheet" type="text/css" href="provccss.css" /><style>	h2 {text-align: center; color: orange}	p.content {color: #125654;}</style>
<title>News & Events</title></head>
<body marginwidth="0" marginheight="0" style="background-image: url(images/background/rough_diagonal.png); background-repeat: repeat;">
<div id="mainbody"><div id="maincontent"><div id="fillcolor2"></div><div id="ugoridlogo"><img src="images/logos/oridlogo2.jpg" alt="orid logo" /></div><div id="myjquerymenu" class="jquerycssmenu"><?php include('mainmenu.php'); ?></div>
<div id="photogallery"><img src="images/logos/anigif3.gif" alt="Animated Image" /></div><div id="homesearch">
<div  id="ughome" align="left"><a style="color: orange;" href="http://www.ug.edu.gh"><strong> UG HOME </strong></a></div>
<div id="search" align="right">
<form method="get" action="resultspage.php"><input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" /><input type="submit" name="btn" value="Search" /><input type="hidden" name="site" value="Orid" /><input type="hidden" name="client" value="Orid" /><input type="hidden" name="proxystylesheet" value="Orid" /><input type="hidden" name="output" value="xml_no_dtd" /><input type="hidden" name="filter" value="0" /></form></div></div><hr />
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