<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<!--<link rel="stylesheet" type="text/css" href="admin.css" />-->
<title>Research Opportunities Form</title>
</head>

<body marginwidth="0" marginheight="0" >
<div id="mainbody">
	<div id="maincontent">
		<div id="fillcolor2" ></div>
			<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<!--<div id="homesearch">
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
<hr>-->
<div id="button" style="margin-top: 62px;">
<?php include('adminsidemenu.php'); ?>
</div>
<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
<div id="content">
<div id="welcomeheader">New Research Opportunities Alert </div>
	<div id="nwcontent1">
	<form action="loadtodb.php" method="POST" name="research_alert">
	<p><b>Please enter details below.</b></p>
		<td>Title:</td>
	<tr>
	<tr>
	<tr>
	<tr>
	</tbody>		
			<input type="submit" name="btnsubmit6" value="Submit" maxlength="50" />
	</form>
	</div>
</div>
<div id="footer"> University of Ghana || &copy; 2013</div>
</div></div>


</body>
</html>