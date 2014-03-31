<?php
session_start();
include('connect1.php');
$query = mysql_query("SELECT * FROM orid_pages WHERE page_title = 'PRO-VC ORID' ");
		while($result = mysql_fetch_assoc($query)) {
		$page_content = $result['page_contents'];
		$page_content = html_entity_decode($page_content, ENT_QUOTES);
		$page_content = htmlspecialchars_decode($page_content);
		$page_title = $result['page_title'];
		$page_header = $result['page_header'];	
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" >
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="provccss.css" />
<title><?php echo $page_title ; ?></title>
 <!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
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
<div  id="ughome" align="left"></div>
<!-- Search Bar -->
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
<!--<hr color="#b08b57" size="3px" width="760px" align="right"/>-->
	
<!-- End css3menu.com BODY section -->
<div id="content">
<div id="welcomeheader" align="center" style="color:#000066; margin-top: 10px; border-bottom: solid #b08b57 1px; text-transform: uppercase;"><?php echo $page_header ; ?></div>
<p><a style="color: #000066;" href="javascript:history.go(-1)">Back</a></p>

<p> <?php echo $page_content ; ?> </p>

	<br /><br /><br /><br /><br /><br /><br />
</div>
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>