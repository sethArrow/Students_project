<?php
session_start();
include('connect1.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<meta http-equiv="X-UA-Compatible" content="IE=5, IE=6, IE=7, IE=8, IE=9, IE=10" />
		<script>
function clearForms()
{
  var i;
  for (i = 0; (i < document.forms.length); i++) {
    document.forms[i].reset();
  }
}
		</script>
	
	
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
<style type="text/css">
	p {line-height: 200%;}
	a:visited {color: #444444;}
	a:hover {color: blue; font-weight: bold;}
</style>
<title>ORID Events</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script language="javascript">
function divHideShow(divToHideOrShow)
{
	var div = document.getElementById(divToHideOrShow);
	
	if (div.style.display == "none")
	{
		div.style.display = "block";
	}
	else
	{
		div.style.display = "none";
	}
}
</script>
</head>

<body marginwidth="0" marginheight="0" >

<div id="mainbody"><div id="maincontent">
	
	<div id="ugoridlogo"  style="height:61px"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu" style="background:#0100666; width:991px">
	<?php include('mainmenu.php'); ?>
    <div id="fill2"></div>
    <br style="clear: left" />
</div>
<img style="margin-bottom: 5px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button" style="margin-top: 12px;">
	<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<!--<div  id="ughome" align="left"><a style="color: #000066; font-size: 11px; font-family: Arial, Lucinda Grande;" href="http://www.ug.edu.gh"><strong> UG HOME </strong></a>
</div>-->
<div id="search" align="right" style="width:362px;">
<form method="get" action="searchpage.php">
<input type="text" name="search"  value="" maxlength="256" size="32" />
<input type="submit" name="submit" value="Search"  />

<!--<input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" />
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="index.php" />
<input type="hidden" name="client" value="index.php" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />-->
</form>
</div>
</div>
<hr color="#b08b57" size="3px" width="760px" align="right"/>
<div id="welcomeheader" align="center" style="border-bottom: 0px; width:745px;">Events</div>

<div id="content">
<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	<?php if(isset($_GET['event_id']))
	{
		$event_id = $_GET['event_id'];
		$query = mysql_query("SELECT * FROM events WHERE event_id = '$event_id' ");
		$event = mysql_fetch_assoc($query);
		$title = $event['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		$content = $event['content'];
		$content = html_entity_decode($content, ENT_QUOTES);
		$content = htmlspecialchars_decode($content);
	?>
	<h3><?php echo $title ; ?></h3>
	
	<?php echo $content ; ?>
	
	<?php } else
	{
		$query = mysql_query("SELECT * FROM events ORDER BY event_year, event_month DESC ");
		while($event = mysql_fetch_assoc($query))
		{
		$title = $event['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
	?>
	<h3><a href="<?php echo 'oridevents.php' ; ?>?event_id=<?php echo $event['event_id']; ?>"><?php echo $title ; ?></a></h3>
	<?php } ?>
	<?php } ?>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>