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
<link rel="stylesheet" type="text/css" href="provccss.css" />
<link rel="stylesheet" type="text/css" href="roa.css" />

<title>Research Opportunities Alert</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>

<body marginwidth="0" marginheight="0">

<div id="mainbody"><div id="maincontent">
	<div id="ugoridlogo"  style="height:61px"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu" style="background:#0100666; width:991px">
	<?php include('mainmenu.php'); ?>
    <div id="fill2"></div>
    <br style="clear: left" />
</div>
<img style="margin-bottom: 0px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button" style="margin-top: 8px;">
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
	<div align="center" id="welcomeheader" style="color: #000066; text-transform: uppercase; border-bottom:solid #b08b57 1px;">research opportunity alerts</div>
	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	
	<ul class="clink">
	<?php 
		$query = mysql_query("SELECT * FROM research_alerts ORDER BY alert_number DESC LIMIT 0, 4");
		while($data = mysql_fetch_assoc($query)) { 
		$title = $data['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
	?>
	<b style="color: #000066; text-transform: uppercase; font-size: 14px;"><?php echo $title ; ?> </b><br><br>
		<li><a href="pdfs/<?php echo $data['pdf_name_1']; ?>" target="_blank" ><span>Volume 1a: Research Grants From NIH</span></a></li><br>
		<li><a href="pdfs/<?php echo $data['pdf_name_2']; ?>" target="_blank" ><span>Volume 1b: Research Grants From Other Donors</span></a></li><br>
		<li><a href="pdfs/<?php echo $data['pdf_name_3']; ?>" target="_blank" ><span>Volume 2: Prizes and Scholarships</span></a></li><br>			
		<li><a href="pdfs/<?php echo $data['pdf_name_4']; ?>" target="_blank" ><span>Volume 3: Travel Grants</span></a></li><br>			
	<?php } ?>
	</ul>
	
	<!--<ul class="clink"><b style="color: #000066; font-size: 14px;">8TH ISSUE OF ROA! FOR THE PERIOD OF FEBRUARY - MARCH, 2012</b><br><br>
		<li><a href="pdfs/Volume_1-Research_Grants.pdf" target="_blank" ><span>Volume 1: Research Grants</span></a></li><br>
		<li><a href="pdfs/Volume_2-Prizes_&_Scholarships.pdf" target="_blank" ><span>Volume 2: Prizes and Scholarships</span></a></li><br>
		<li><a href="pdfs/Volume_3-Travel_&_Conference_Grants.pdf" target="_blank" ><span>Volume 3: Travel and Conference Grants</span></a></li><br>			
	</ul>-->
	
	


</div>
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>