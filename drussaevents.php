<?php
session_start();
include('connect1.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <style>
a.pg,a.pg1{
	text-decoration:underline;
	color:#666;
	font-size:16px;
	}
a.pg:hover , a.pg1:hover {color:#00C;}

</style>
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
<title>DRUSSA Events</title>
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
<div id="button" style="margin-top: 20px;">
	<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
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

<div id="content">
<div id="welcomeheader" style="border-bottom: 1px solid #b08b57; width:745px;">DRUSSA EVENTS</div>

<a href="javascript:history.go(-1)">Back To Previous Page</a><br><br>
	
	<?php 
	
	
		$per_page = 4;
		$pages_query = mysql_query("SELECT COUNT(event_id) FROM drussa_events");
		$pages =ceil(mysql_result($pages_query,0)/ $per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page']: 1;
		
		$start =($page -1)* $per_page;
		
		if($pages >= 1 && $page <= $pages){
       for($x=1;$x<=$pages;$x++){
         echo ($x ==$page)  ? '<strong><a class="pg" href="?page='.$x.'">'. $x.'</a> </strong> &nbsp;&nbsp;' : '<a class="pg1" href="?page='.$x.'">'. $x.'</a> &nbsp;&nbsp; ';		   
		   }
		 }
	
	
	if(isset($_GET['event_id']))
	{
		$event_id = $_GET['event_id'];
		$query = mysql_query("SELECT * FROM drussa_events WHERE event_id = '$event_id'  LIMIT $start ,$per_page");
		$event = mysql_fetch_assoc($query);
		$title = $event['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		$content = $event['content'];
		$content = html_entity_decode($content, ENT_QUOTES);
		$content = htmlspecialchars_decode($content);
	?>
	<a href="javascript:divHideShow('row');"><h3><?php echo $title ; ?></h3></a>
	<div id="row" style="display: block;">
	<p><?php echo $content ; ?></p>
	</div>
	<?php } else
	{
		$query = mysql_query("SELECT * FROM drussa_events ORDER BY event_month, event_day DESC LIMIT $start ,$per_page ");
		while($event = mysql_fetch_assoc($query))
		{
		$title = $event['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
	?>
	<a href="javascript:divHideShow('row'); "><h3><a href="drussaevents.php?event_id=<?php echo $event['event_id']; ?>"><?php echo $title ; ?></a></h3></a>
	<?php } ?>
	<?php } ?>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>