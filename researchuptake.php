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

<title>PUBLIC LECTURES</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script type="text/javascript">
	document.cestatus = 0;
	function cecontrol(id){
		if(document.cestatus == 0){
			document.getElementById(id).style.display = "block";
			document.cestatus = 1;
		}
		else{
			document.getElementById(id).style.display = "none";
			document.cestatus = 0;
		}
	}
	cecontrol("row, row1");
</script>
<style type="text/css">
	#row{display:none;}
	#row1{display:none;}
	a:hover{ color: blue; font-weight: bold; }
	.new {
	padding-bottom: 0px 5px 2px 5px;
    border:1px solid #dcddcc;
    margin-bottom:8px;
    border-bottom-left-radius:3px;
	alignment-adjust:central;
	border-radius: 4px;
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	background-color: white;}
</style>
<style type="text/css">
a:visited {color: #000066;}
</style>
</head>

<body marginwidth="0" marginheight="0">
<div id="mainbody"><div id="maincontent">
	
<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>

<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
</div>
<img style="margin-top: 0px; margin-bottom: 0px;" src="images/background/divider.png" width="991px" height="31px" />
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
<!--<hr>-->

	
<!-- End css3menu.com BODY section -->

<div id="content" style="padding-left: 8px; cpadding-right: 8px;">
<div id="welcomeheader">Research Uptake</div>	
  <div style="padding:15px 10px 0 10px">
  <div style="margin-left:265px; font-size:14px;"><strong>University of Ghana in PLATFORM2013</strong></div>
  <p style="font-size:14px">
The University of Ghanacontributed toPLATFORM2013 – a first-of-its-kind Research
 Uptake publication from the DRUSSA Universities inSub-Saharan Africa (SSA). 
<i>'Rotavirus Vaccine Introduction'</i> describes how evidence-based data verifies the recognition of rotavirus as an important cause of life-threatening diarrhoea in children in Ghana and Africa, 
 and advocates for shortening the introduction time of rotavirus vaccines in the Expanded Programme on Immunisation in Africa, when these vaccines become available.<br><br>
 
 Read the article on the <a href="pdfs/Platform 2013 article University of Ghana .pdf " style="text-decoration:underline;"> <i>Rotavirus Vaccine Introduction</i></a> or find the full PLATFORM2013 publication <a href="pdfs/PLATFORM2013_CompleteVersion_DRUSSA_Research_Uptake_Final.pdf " style="text-decoration:none;">here</a> with University of Ghana article appearing on pages 14 & 15. 
</p>
</div>
  <br><br><br><br><br><br><br><br><br>
</div>
		
	<!-- <ol class="clink">
       	<li><b><a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=109&Itemid=535" target="_blank" style="font-size:14px">Noguchi - IRB</a></b></li><br>
		<li><b><a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=185&Itemid=536" target="_blank" style="font-size:14px">Noguchi - IACUC</a></b></li><br>
		<li><b><a href="http://isser.edu.gh/index.php?option=com_content&view=article&id=247&Itemid=236" target="_blank" style="font-size:14px">Ethics Committee for the Humanities(ECH)</a></b></li><br>
	</ol> -->	
	
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br />
<div id="footer">University of Ghana || &copy; 2013</div>
</div>

</div>

</div>

</body>
</html>