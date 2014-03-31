<?php
session_start();
if (!$_SESSION['admin'])
{
	header('Location: oridcms_panellogin.php');
	die();
}

else

{}
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



ul {list-style-type: none}

</style>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

<script type="text/javascript" src="jquerycssmenu.js"></script>



<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title>Delete Item</title>



</head>



<body marginwidth="0" marginheight="0" >



<div id="mainbody"><div id="maincontent">

<div id="fillcolor2"></div>

<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" />

</div>



<!--<div id="myjquerymenu" class="jquerycssmenu">
</div>-->

<div id="homesearch">

<div  id="ughome" align="left">
</div>

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

<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />

	

	<div id="button">

<?php include('adminsidemenu.php'); ?>

</div>

<!-- End css3menu.com BODY section -->

<div id="content">	

<div id="welcomeheader">delete</div>
<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
<?php
if(isset($_GET['pg_id']))
{
$id = $_GET['pg_id'];

//$query = mysql_query("DELETE FROM grants WHERE grant_id = '$id'");

$result = mysql_query("DELETE FROM grants WHERE grant_id = '$id'")
or die ("Error in query: $result.".mysql_error());
echo '<font size="-1" style="align: center;">Deletion Succesful.</font>';
}
elseif(isset($_GET['plecture_id']))
{
$plecture_id = $_GET['plecture_id'];
$result = mysql_query("DELETE FROM public_lectures WHERE lecture_id = '$plecture_id' ")
or die ("Error in query: $result.".mysql_error());
echo '<font size="-1" style="align: center;">Deletion Succesful.</font>';
}
elseif(isset($_GET['event_id']))
{
	$event_id = $_GET['event_id'];
	$result = mysql_query("DELETE FROM events WHERE event_id = '$event_id' ") or die ("Error in query: $result.".mysql_error());
	echo '<font size="-1" style="align: center; ">Deletion Sucessful.</font>';
}
elseif(isset($_GET['newsletter_id']))
{
	$newsletter_id = $_GET['newsletter_id'];
	$result = mysql_query("DELETE FROM ip_newsletters WHERE newsletter_id = '$newsletter_id' ") or die ("Error in query: $result.".mysql_error()); echo '<font size="-1" style="align:center; ">Deletion Successful.</font>';
}
elseif(isset($_GET['d_event_id']))
{
	$event_id = $_GET['d_event_id'];
	$result = mysql_query("DELETE FROM drussa_events WHERE event_id = '$event_id' ") or die ("Error in query: $result.".mysql_error());
	echo '<font size="-1" style="align: center; ">Deletion Sucessful.</font>';
}
elseif(isset($_GET['roa_id']))
{
$roa_id = $_GET['roa_id'];
$result = mysql_query("DELETE FROM research_alerts WHERE research_id = '$roa_id' ")
or die ("Error in query: $result.".mysql_error());
echo '<font size="-1" style="align: center;">Deletion Succesful.</font>';
}
elseif(isset($_GET['call_update']))
{
	$call_id = $_GET['call_update'];
	$result = mysql_query("DELETE FROM call_for_proposals WHERE call_id = '$call_id' ")
	or die ("Error in query: $result.".mysql_error());
echo '<font size="-1" style="align: center;">Deletion Succesful.</font>';
}

else
{}

?>	

		

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>

<div id="footer">University of Ghana || &copy; 2012</div>

</div>



</div>



</body>

</html>