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
	
<div id="ugoridlogo" style="height:61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<div id="myjquerymenu" class="jquerycssmenu">

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
<!--<hr>-->

	
<!-- End css3menu.com BODY section -->

<div id="content" style="padding-left: 8px; padding-right: 8px;">
<div id="welcomeheader">Ethics Committees</div>	

       <div class="new" style="margin-top:15px;">
     <p align="left" style="padding-left:5px"><a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=109&Itemid=535" target="_blank" style="font-size:15px"> <b> NMIMR-IRB</b> </a> </p>
  <p style="font-size:12px; font-family:candara; padding:0px 5px 0px 5px">The Noguchi Memorial Institute for Medical Research – Institutional Review Board (NMIMR-IRB) 
 is an independent and competent body set up to review, evaluate and decide on the ethical merits of
 research protocols ensuring and guaranteeing the rights, dignity, safety and protection of all individuals 
 and communities who participate in research activities. The NMIMR-IRB reviews medical/health science related
  protocols...<a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=109&Itemid=535" target="_blank" style="font-size:12px; text-decoration:none; color:#b08b57">...read more</a>.</p> </div><br />
  
  
  <div class="new">
<p align="left" style="padding-left:5px"><a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=185&Itemid=536" target="_blank" style="font-size:15px"> <b> NMIMR - IACUC</b> </a> </p>
  <p style="font-size:12px; font-family:candara; padding:0px 5px 0px 5px">
 The Noguchi Memorial Institute for Medical Research - Institutional Animal Care and Use Committee (NMIMR-IACUC) 
operates as a competent body with oversight responsibility for the proper care and humane use of animals for 
research...<a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=185&Itemid=536" target="_blank" style="font-size:12px; text-decoration:none; color:#b08b57">...read more</a>.
</p></div><br />


<div class="new" style="padding-left:5px">
<p align="left"><a href="http://isser.edu.gh/index.php?option=com_content&view=article&id=247&Itemid=236" target="_blank" style="font-size:15px; color: #000066;"> <b> ETHICS COMMITTEE FOR THE HUMANITIES (ECH)</b> </a> </p>
<p style="font-size:12px; font-family:candara; padding:0px 5px 0px 5px">
The Ethics Committee for the Humanities is responsible for the ethical review of all research protocols conducted 
within the humanities study areas...<a href="http://isser.edu.gh/index.php?option=com_content&view=article&id=247&Itemid=236" target="_blank" style="font-size:12px; text-decoration:none; color:#b08b57">...read more</a>
</p>

</div>
		
	<!-- <ol class="clink">
       	<li><b><a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=109&Itemid=535" target="_blank" style="font-size:14px">Noguchi - IRB</a></b></li><br>
		<li><b><a href="http://www.noguchimedres.org/index.php?option=com_content&view=article&id=185&Itemid=536" target="_blank" style="font-size:14px">Noguchi - IACUC</a></b></li><br>
		<li><b><a href="http://isser.edu.gh/index.php?option=com_content&view=article&id=247&Itemid=236" target="_blank" style="font-size:14px">Ethics Committee for the Humanities(ECH)</a></b></li><br>
	</ol> -->	
	
	
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
<div id="footer">University of Ghana || &copy; 2013</div>
</div>

</div>

</body>
</html>