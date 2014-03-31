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

<style>
a.pg,a.pg1{
	text-decoration:underline;
	color:#666;
	font-size:18px;
	}
a.pg:hover , a.pg1:hover {color:#00C;}

</style>

</head>

<body marginwidth="0" marginheight="0">

<div id="mainbody"><div id="maincontent">
	<div id="fillcolor"></div>
		<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>

<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
</div>
<img style="margin-top: 0px; margin-bottom: 0px;" src="images/background/divider.png" width="991px" height="31px" />
<div id="button" style="margin-top: 9px;">
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
	
		$per_page = 4;
		$pages_query = mysql_query("SELECT COUNT(alert_number) FROM research_alerts");
		$pages =ceil(mysql_result($pages_query,0)/ $per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page']: 1;
		
		$start =($page -1)* $per_page;
		
		$query = mysql_query("SELECT * FROM research_alerts ORDER BY alert_number DESC LIMIT $start, $per_page");
		if($pages >= 1 && $page <= $pages){
       for($x=1;$x<=$pages;$x++){
         echo ($x ==$page)  ? '<strong><a class="pg" href="?page='.$x.'">'. $x.'</a> </strong> &nbsp;&nbsp;' : '<a class="pg1" href="?page='.$x.'">'. $x.'</a> &nbsp;&nbsp;';	   
		   }
		 }
		 echo "<br /><br />";
		while($data = mysql_fetch_assoc($query)) { 
		$title = $data['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
	?>
	<b style="color: #000066; text-transform: uppercase; font-size: 14px;"><?php echo $title ; ?> </b><br><br>
		<li><a href="<?php echo $data['pdf_name_2']; ?>" target="_blank" ><span>Volume 1a: Research Grants From Other Donors</span></a></li><br>
		<li><a href="<?php echo $data['pdf_name_1']; ?>" target="_blank" ><span>Volume 1b: Research Grants From NIH</span></a></li><br>
		<li><a href="<?php echo $data['pdf_name_3']; ?>" target="_blank" ><span>Volume 2: Prizes and Scholarships</span></a></li><br>			
		<li><a href="<?php echo $data['pdf_name_4']; ?>" target="_blank" ><span>Volume 3: Travel Grants</span></a></li><br>			
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