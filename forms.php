<?php
session_start();
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
<!--<link rel="stylesheet" type="text/css" href="provccss.css" />-->
<link rel="stylesheet" type="text/css" href="menu2.css" />

<title>FORM DOWNLOADS</title>
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
<img style="margin-bottom: 5px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button" style="margin-top: 12px;">
<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<div  id="ughome" align="left" ></div>
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
<div id="welcomeheader">forms</div>	
		<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	<ul class="clink">
	
		<li><b>Faculty Development Forms</b><br /><br />
			<ul class="clink">
				<li style="font-style: italic;"><a href="pdfs/Faculty.Development.Grant.Application.Form_UG.ORID.FD.AF.001.pdf" target="_blank"><span>Faculty Development Award Application Form</span></a></li><br />
				<li style="font-style: italic;"><a href="pdfs/Progress Review and Expenditure Report Form.pdf" target="_blank"><span>Progress Review & Expenditure Report Form</span></a></li><br />
				<li style="font-style: italic;"><a href="pdfs/Research Project Situation Analysis Form and Action Plan.pdf" target="_blank"><span>Research Project Situation Analysis & Action Plan</span></a></li>			
			</ul>
		</li><br />
		<li><b>Conference Grant Forms</b><br /><br />
			<ul class="clink">
				<li style="font-style: italic;"><a href="docs/UG ORID CG AF 004 Conference Application Form(July-2013).docx" target="_blank"><span>Conference Grant Application Form</span></a></li><br />
				<li style="font-style: italic;"><a href="docs/UG ORID CG RF 003b Conference Reporting Form.doc" target="_blank"><span>Conference Report Format</span></a></li><br />
			</ul>
		</li><br />
<li><b>Research Grant Forms</b><br /><br />
	<ul class="clink">
	<li style="font-style: italic;"><a href="pdfs/Equipment Transfer Receipt.pdf" class="clink" target="_blank">Equipment Transfer Receipt</a></li><br />
	<li style="font-style: italic;"><a href="pdfs/Final Report Format.pdf" target="_blank"><span>Final Report Format</span></a></li><br />
	<li style="font-style: italic;"><a href="pdfs/Progress Report Format.pdf" target="_blank"><span>Progress Report Format</span></a></li><br />
	<li style="font-style: italic;"><a href="pdfs/Summary Report Format For URF Research Projects.pdf" target="_blank"><span>Summary Report Format For URF 	Research</span></a></li><br />
	</ul>
	
<li><b>Research Affiliation Forms</b><br />
		<ul class="clink">
		<li><a href="docs/Application form for Research Affiliates_UG-ORID.doc" class="clink" style="font-style: italic;" target="_blank" >Application Form for Research Affiliates</a></li><br />
		<li><a href="docs/Acceptance form.docx" class="clink" style="font-style: italic;" target="_blank">Acceptance Form for Research Affiliates</a></li><br />
		</ul>
</li>
</ul>
<br /><br /><br /><br />
</div>
<div id="footer">University of Ghana || &copy; 2013</div>
</div>

</div>

</body>
</html>