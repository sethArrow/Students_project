<?php

session_start();
include('connect1.php');

function myTruncate($string, $limit, $break=".", $pad="...")
{
	//return with no change if string is shorter than $limit
	if(strlen($string) <= $limit)
		return $string;
		
	//is $break present between $limit and the end of the string?
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if ($breakpoint < strlen($string) - 1)
		{
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
		return $string;
}

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

<link rel="stylesheet" type="text/css" href="inlectures.css" />

<title>PUBLIC LECTURES</title>

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
</style>

</head>



<body marginwidth="0" marginheight="0" >



<div id="mainbody"><div id="maincontent">

<div id="fillcolor2"></div>

<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" />

</div>



<div id="myjquerymenu" class="jquerycssmenu">

	<?php include('mainmenu.php'); ?>
<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />

</div>

<!--<div id="photogallery">
<div id='cincopa_widget_4cfcdb6d-d64b-49b5-b167-a5e2d9398a07'><img src='//www.cincopa.com/media-platform/runtime/loading.gif' style='border:0;'/><a href='//www.cincopa.com/media-platform/wordpress-plugin.aspx'><img alt='WordPress plugin' style='border:0;' border=0 src='http://www.cincopa.com/media-platform/runtime/cincopaicons.gif' /></a></div>

<script src='//www.cincopa.com/media-platform/runtime/libasync.js' type='text/javascript'></script>

<script type='text/javascript'>cp_load_widget('AcFA3CLEL5JY', 'cincopa_widget_4cfcdb6d-d64b-49b5-b167-a5e2d9398a07');</script>

<noscript>Click <a href='http://www.cincopa.com/media-platform/view.aspx?fid=AcFA3CLEL5JY'>here</a> to open the gallery.<br>

Powered by Cincopa <a href='http://www.cincopa.com/media-platform'>Media Platform</a> for your website and Cincopa MediaSend for <a href='http://www.cincopa.com/mediasend/start.aspx'>file transfer</a>.

</noscript></div>-->

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


	<div id="welcomeheader" style="margin-left: 230px;">aggrey-fraser-guggisberg lectures</div>

	<div id="button" style="margin-top: -35px;">

<?php include('sidemenu.php'); ?>

</div>

<!-- End css3menu.com BODY section -->

<div id="content" >
<div style="padding-left: 30px; padding-top: 30px; ">	
<?php 
		$query = mysql_query("SELECT * FROM orid_pages WHERE page_header = 'New Header' ");
		while($result = mysql_fetch_assoc($query)) {
		$summary = $result['page_contents'];
		$summary = html_entity_decode($summary, ENT_QUOTES);
		$summary = htmlspecialchars_decode($summary);
		$shortdesc = myTruncate($summary, 70);
		?>
	
	<p><?php echo $shortdesc ; ?></p>
	
	<?php } ?>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<br><br><br><br><br><br><br><br>

</div>

<div id="footer">University of Ghana || &copy; 2013</div>

</div>

</div>



</body>

</html>