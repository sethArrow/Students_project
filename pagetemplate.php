<?php
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
<title>Title Goes Here</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body marginwidth="0" marginheight="0" >

<div id="mainbody"><div id="maincontent">
	
		<div id="ugoridlogo">
		<img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
		

<div id="myjquerymenu" class="jquerycssmenu">
<?php include('mainmenu.php') ; ?>
<div id="fill2"></div>
<br style="clear: left" />

</div>
<img style="margin-bottom: 30px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="31px" />

<div id="button">
	<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<div id="search" align="right">
<form method="get" action="resultspage.php">
<input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" />
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="index.php" />
<input type="hidden" name="client" value="index.php" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />
</form>
</div>
</div>
<hr color="#b08b57" size="3px" width="760px" align="right"/>
<div id="welcomeheader" style="border-bottom: 0px;">Header Goes Here</div>

<div id="content">
</div>
<br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>