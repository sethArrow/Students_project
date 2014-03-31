<?php
include('connect1.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<style>
	h3 {text-align: center; color: #000066;}
	p.content {color: #444444;}
</style>
<title></title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body marginwidth="0" marginheight="0">
<div id="mainbody"><div id="maincontent">
<div id="fillcolor2"></div>
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
	<br style="clear: left" />
</div>
<img style="margin-top:0px; margin-bottom:0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button">
<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<div  id="ughome" align="left"></div>
<div id="search" align="right">
<form method="get" action="resultspage.php">
<input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" />
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="Orid" />
<input type="hidden" name="client" value="Orid" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />
</form>
</div>
</div>

<!-- End css3menu.com BODY section -->

<div id="content">
	<div id="welcomeheader"></div>
	
				<a href="javascript:history.go(-1)">Back To Previous Page</a>
				<?php if(isset($_GET['id']))
				{
					$newsid = $_GET['id'];
					$query1 = mysql_query("select * from news where news_id = '$newsid'");
					$nid = mysql_fetch_assoc($query1);
					$title = $nid['title'];
					$title = html_entity_decode($title, ENT_QUOTES);
					$title = htmlspecialchars_decode($title);
					$summary = $nid['content'];
					$summary = html_entity_decode($summary, ENT_QUOTES);
					$summary = htmlspecialchars_decode($summary);
				?>
				<h3 style = "align:left;"> <?php echo $title ; ?></h3>
				<p class="content"> <?php echo $summary ;?></p>
				
				<?php } elseif(isset($_GET['qid']))
				{
					$quicklinkid = $_GET['qid'];
					$query2 = mysql_query("select * from quick_links where qlink_id = '$quicklinkid'");
					$qlink = mysql_fetch_assoc($query2);
					$title = $qlink['title'];
					$title = html_entity_decode($title, ENT_QUOTES);
					$title = htmlspecialchars_decode($title);
					$content = $qlink['content'];
					$content = html_entity_decode($content, ENT_QUOTES);
					$content = htmlspecialchars_decode($content);
				?>	
				<h3><?php echo $title ; ?></h3>
				<p class="content"> <?php echo $content ;?></p>
		
				<?php } elseif(isset($_GET['callid']))
				{
					$callid = $_GET['callid'];
					$query3 = mysql_query("select * from call_for_proposals where call_id = '$callid'");
					$cid = mysql_fetch_assoc($query3);
					$title = $cid['title'];
					$title = html_entity_decode($title, ENT_QUOTES);
					$title = htmlspecialchars_decode($title);
					$content = $cid['content'];
					$content = html_entity_decode($content, ENT_QUOTES);
					$content = htmlspecialchars_decode($content);
				?>
				<h3><?php echo $title ; ?></h3>
				<p class="content"> <?php echo $content ; ?></p>
				
				<?php } elseif(isset($_GET['ugrf_id']))
				{
					$ugrf_id = $_GET['ugrf_id'];
					$query4 = mysql_query("select * from ugrf_calls where ugrf_call_id = '$ugrf_id' ");
					$ugrfid = mysql_fetch_assoc($query4);
					$content = $ugrfid['content'];
					$content = html_entity_decode($content, ENT_QUOTES);
					$content = htmlspecialchars_decode($content);
				?>
				
				<p class="content"> <?php echo $content ;?></p>
				
				<?php } else
				{}
				?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>

<div id="footer"> University of Ghana || &copy; 2013</div>
</div>
</div>



</body>
</html>