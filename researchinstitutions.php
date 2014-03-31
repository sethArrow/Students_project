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
<style type="text/css">
a:visited {color: #000066; }
a:hover {font-weight: bold; color: #b08b57;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title>RESEARCH INSTITUTIONS</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine16/style.css" media="screen" />
	<script type="text/javascript" src="engine16/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


</head>

<body marginwidth="0" marginheight="0">
<div id="mainbody">

	<div id="maincontent">
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
<div id="photogallery" style="border: solid #000066 0px;">
<!-- Start WOWSlider.com BODY section id=wowslider-container16 -->
	<div id="wowslider-container16">
	<div class="ws_images"><ul>
<!--<li><img src="data16/images/cacsbuilding.jpg" alt="" title="" id="wows16_0"/>College of Agriculture & Consumer Sciences</li>-->
<li><img src="data16/images/cegensa.jpg" alt="" title="" id="wows16_1"/>Centre for Gender Studies & Advocacy</li>
<!--<li><img src="data16/images/icde.jpg" alt="" title="" id="wows16_2"/>Institute of Continuing & Distance Education</li>-->
<li><img src="data16/images/isser.jpg" alt="" title="" id="wows16_3"/>Institute of Statistical, Social & Economic Research</li>
<li><img src="data16/images/leciad.jpg" alt="" title="" id="wows16_4"/>Legon Centre for International Affairs & Diplomacy</li>
<li><img src="data16/images/noguchi3.jpg" alt="" title="" id="wows16_5"/>Noguchi Memorial Institute for Medical Research</li>
<!--<li><img src="data16/images/remsensing.jpg" alt="" title="" id="wows16_6"/>Remote Sensing Applications Unit</li>-->
<li><img src="data16/images/rips_build.jpg" alt="" title="" id="wows16_7"/>Regional Institute of Population Studies</li>
<!--<li><img src="data16/images/ugms.jpg" alt="" title="" id="wows16_8"/>University of Ghana Medical School</li>-->
<li><img src="data16/images/wacci.jpg" alt="" title="" id="wows16_9"/>West Africa Centre for Crop Improvement</li>
</ul></div>
<div class="ws_thumbs">
<div>
<a href="#" title=""><img src="data16/tooltips/cacsbuilding.jpg" alt="" /></a>
<a href="#" title=""><img src="data16/tooltips/cegensa.jpg" alt="" /></a>
<!--<a href="#" title=""><img src="data16/tooltips/icde.jpg" alt="" /></a>-->
<a href="#" title=""><img src="data16/tooltips/isser.jpg" alt="" /></a>
<a href="#" title=""><img src="data16/tooltips/leciad.jpg" alt="" /></a>
<a href="#" title=""><img src="data16/tooltips/noguchi3.jpg" alt="" /></a>
<!--<a href="#" title=""><img src="data16/tooltips/remsensing.jpg" alt="" /></a>-->
<a href="#" title=""><img src="data16/tooltips/rips_build.jpg" alt="" /></a>
<!--<a href="#" title=""><img src="data16/tooltips/ugms.jpg" alt="" /></a>-->
<a href="#" title=""><img src="data16/tooltips/wacci.jpg" alt="" /></a>
</div>
</div>
<a class="wsl" href="http://wowslider.com">Javascript Gallery Tutorial by WOWSlider.com v2.8</a>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine16/wowslider.js"></script>
	<script type="text/javascript" src="engine16/script.js"></script>
<!-- End WOWSlider.com BODY section -->

</div>
<div id="homesearch">
<div  id="ughome" align="left"></div>
<div id="search" align="right" style="width:362px;">
<form method="get" action="searchpage.php">

<input type="text" name="search"  value="" maxlength="256" size="32" />
<input type="submit" name="submit" value="Search"  />

<!--<input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" />
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="Orid" />
<input type="hidden" name="client" value="Orid" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />-->
</form>
</div>
</div>
<!-- End css3menu.com BODY section -->
	<div id="content">
    <?php 
	
	
	$per_page = 4;
		$pages_query = mysql_query("SELECT COUNT(page_id) FROM orid_pages WHERE page_title = 'RESEARCH INSTITUTIONS'");
		$pages =ceil(mysql_result($pages_query,0)/ $per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page']: 1;
		
		$start =($page -1)* $per_page;
		
		$query = mysql_query("SELECT * FROM orid_pages WHERE page_title = 'RESEARCH INSTITUTIONS' order by page_id DESC LIMIT $start ,$per_page");
		//$query = mysql_query("SELECT * FROM orid_pages WHERE page_title = 'RESEARCH INSTITUTIONS' ");
		
		if($pages >= 1 && $page <= $pages){
       for($x=1;$x<=$pages;$x++){
         echo ($x ==$page)  ? '<strong><a class="pg" href="?page='.$x.'">'. $x.'</a> </strong> &nbsp;&nbsp;' : '<a class="pg1" href="?page='.$x.'">'. $x.'</a> &nbsp;&nbsp;';	   
		   }
		 }

		while($result = mysql_fetch_assoc($query)) {
		$page_content = $result['page_contents'];
		$page_content = html_entity_decode($page_content, ENT_QUOTES);
		$page_content = htmlspecialchars_decode($page_content);
		$page_title = $result['page_title'];
		$page_header = $result['page_header'];	
		}
	
	?>
		<div id="welcomeheader" style="width:745px;"><?php echo $page_header ; ?></div>
	<p><?php echo $page_content ; ?></p>
		<br><br>
	<br><br><br><br><br><br>

 	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
 </div>
 <div id="footer"> University of Ghana || &copy; 2013</div>
</div>

</div>


</body>
</html>