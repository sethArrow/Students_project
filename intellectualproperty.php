<?php
include('connect1.php');

?>

<!DOCTYPE html>
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
<title>Intellectual Property</title>
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
	
		<div id="ugoridlogo" style="height: 61px;">
		<img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
		
<div style="background-color:#b08b57; width: 991px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu">
<?php include('mainmenu.php') ; ?>
<div id="fill2"></div>
<br style="clear: left" />
</div>
<img style="margin-bottom: 30px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="15px" />

<div id="button">
	<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<!--<div  id="ughome" align="left"><a style="color: #000066; font-size: 11px; font-family: Arial, Lucinda Grande;" href="http://www.ug.edu.gh"><strong> UG HOME </strong></a>
</div>-->
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
<div id="welcomeheader" style="padding-left: 0px; border-bottom: 1px solid #b08b57; width:745px;">Intellectual Property</div>
<a href="javascript:divHideShow('row');"><h3>WORLD INTELLECTUAL PROPERTY DAY</h3></a>
<div id="row" style="display:none; font-size: 13px;">
<ul>
	<li>26th April of every year marks World Intellectual Property Day.</li><br />
	<li>The day is set aside by the World Intellectual Property Organisation (WIPO) to increase the general understanding of intellectual property; celebrate creativity; and the contributions made by innovators and creators to the development of societies worldwide.</li><br />
	<li>Intellectual Property (IP) refers to creations of the mind such as inventions; literary and artistic works; for which exclusive rights are granted. Common types of intellectual property rights include patents, copyrights, industrial designs and trademarks.</li><br />
	<li>The theme for the 2013 World IP Day is <b>"Creativity: The Next Generation".</b></li>
</ul>
</div>
<a href="javascript:divHideShow('row1');"><h3>WORLD INTELLECTUAL PROPERTY ORGANISATION (WIPO)</h3></a>
<div id="row1" style="display:none; font-size: 13px;">
	<ul>
		<li>WIPO is an agency of the United Nations</li>
		<li>Established in 1967, it is devoted to the use of intellectual property as a means of stimulating innovation and creativity.</li>
		<li>WIPO comprises of 186 member states.</li>
		<li>Ghana became a member state of WIPO in 1976.</li>
		<li>WIPO is headquartered in Geneva, Switzerland.</li>
		<li>Mr. Francis Gurry is the current Director General of WIPO.</li>
	</ul>
</div>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>