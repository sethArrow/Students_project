<?php
session_start();
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
<title>Public Lectures</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body marginwidth="0" marginheight="0">
<div id="mainbody"><div id="maincontent">
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
	<div id="fill2"></div>
<br style="clear: left" />
</div>
<img style="margin-top: 0px; margin-bottom: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button">
<?php include('sidemenu.php'); ?>
</div>
<div id="homesearch">
<div  id="ughome" align="left"></div>
<div id="search" align="right" style="width: 360px;">
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

<div id="content" style="text-align: justify;">
	<div id="welcomeheader" style="width: 744px;">Public Lecture</div>
	<a href="javascript:history.go(-1)">Back To Previous Page</a>
<?php	if(isset($_GET['id'])) 
{

$lecture_id = $_GET['id'];
$query = mysql_query("select * from public_lectures where lecture_id = '$lecture_id'");
$l_id = mysql_fetch_assoc($query);
		$title = $l_id['lect_title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		//$date = $l_id['lect_date'];
		//$date = html_entity_decode($date, ENT_QUOTES);
		//$date = htmlspecialchars_decode($date);
		$image = $l_id['image_url'];
		$image = html_entity_decode($image, ENT_QUOTES);
		$image = htmlspecialchars_decode($image);
		$delivered_by = $l_id['delivered_by'];
		$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
		$delivered_by = htmlspecialchars_decode($delivered_by);
		$introduction = $l_id['introduction'];
		$introduction = html_entity_decode($introduction, ENT_QUOTES);
		$introduction = htmlspecialchars_decode($introduction);
	?>

	<div style="padding-left: 20px; padding-right: 20px;">
								
				<h3 style = "align:left;"> <?php echo $title ; ?></h3>
				<p style="padding-left: 220px;"><img src="<?php echo $image ; ?>" alt="" width="250px" height="200px" /><br /><?php echo $delivered_by ; ?></p>
				<p class="content"> <?php echo $introduction ;?></p>
	</div>	
<?php } elseif(isset($_GET['inter_fac_id']))
{
	$lecture_id = $_GET['inter_fac_id'];
	$query = mysql_query("select * from public_lectures where lecture_id = '$lecture_id'");
	$l_id = mysql_fetch_assoc($query);
	$title = $l_id['lect_title'];
	$title = html_entity_decode($title, ENT_QUOTES);
	$title = htmlspecialchars_decode($title);
	$image = $l_id['image_url'];
	$image = html_entity_decode($image, ENT_QUOTES);
	$image = htmlspecialchars_decode($image);
	$delivered_by = $l_id['delivered_by'];
	$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
	$delivered_by = htmlspecialchars_decode($delivered_by);
	$dept_faculty = $l_id['dept_faculty'];
	$dept_faculty = html_entity_decode($dept_faculty, ENT_QUOTES);
	$dept_faculty = htmlspecialchars_decode($dept_faculty);
	$introduction = $l_id['introduction'];
	$introduction = html_entity_decode($introduction, ENT_QUOTES);
	$introduction = htmlspecialchars_decode($introduction);
?>
	<div style="padding-left: 20px; padding-right: 20px;">
								
				<h3 style = "align:left;"> <?php echo $title ; ?><br />&nbsp;by&nbsp;<?php echo $delivered_by ; ?></h3>
				
				<p>Department/Faculty:&nbsp;&nbsp;<?php echo $dept_faculty ; ?></p>
				<p class="content">ABSTRACT:<br /> <?php echo $introduction ;?></p>
	</div>	
<?php } else
{}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<div id="footer"> University of Ghana || &copy; 2013</div>
</div>
</div>



</body>
</html>