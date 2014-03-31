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
<style type="text/css">
	#row{display:none;}
	#row1{display:none;}
	#row2{display:none;}
	a:hover{color: blue; font-weight: bold;}
	a:visited {color: blue;}
</style>

</head>



<body marginwidth="0" marginheight="0" >



<div id="mainbody"><div id="maincontent">

<div id="fillcolor2"></div>

<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />

</div>

<div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<div id="myjquerymenu" class="jquerycssmenu">

	<?php include('mainmenu.php'); ?>
	<div id="fill2"></div>
<br style="clear: left" />
</div>
<img  style="margin-top: 0px; margin-bottom: 0px;" src="images/background/divider.png" width="991px" height="15px" />

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

	<div id="button" style="margin-top: 0px;">

<?php include('sidemenu.php'); ?>

</div>

<!-- End css3menu.com BODY section -->

<div id="content" >	
<div id="welcomeheader" style="margin-left: 0px; border-bottom: 1px solid #b08b57;">inaugural lectures</div>
<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	<div align="center" style="width:600px; height:auto; ">
 <a href="javascript:divHideShow('row2')"><h3 style="color:#000066;"><u>2013/2014 Academic Year</u></h3></a>
		<div id="row2" style="text-align: justify; padding-left: 30px; padding-top: 30px;">
	
	<?php 
		$query = mysql_query("SELECT * FROM public_lectures WHERE lect_type = 'INAUGURAL LECTURE' AND academic_yr = '2013/2014' ORDER BY  lect_date DESC");
		while($result = mysql_fetch_assoc($query)) {
		$title = $result['lect_title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		$date = $result['lect_date'];
		$date = html_entity_decode($date, ENT_QUOTES);
		$date = htmlspecialchars_decode($date);
		$image = $result['image_url'];
		$image = html_entity_decode($image, ENT_QUOTES);
		$image = htmlspecialchars_decode($image);
		$delivered_by = $result['delivered_by'];
		$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
		$delivered_by = htmlspecialchars_decode($delivered_by);
		$video_url = $result['video_url'];
		$video_url = html_entity_decode($video_url, ENT_QUOTES);
		$video_url = htmlspecialchars_decode($video_url);
		$summary = $result['introduction'];
		$summary = html_entity_decode($summary, ENT_QUOTES);
		$summary = htmlspecialchars_decode($summary);
		$string = $summary;
		$shortdesc = myTruncate($summary, 70);
		?>
		<table class="under" style="width:630px;">
	<tbody>
	<tr>
	<td><a href="#" ><img width="150px" height="150px" alt="Image Here" src="<?php echo $image ; ?>" /></a><br><?php echo $delivered_by ; ?></td>
	<td align="justify"><h3 style="color:#000066;"><u><?php echo $title ; ?></u></h3>
				<p><?php echo $shortdesc ; ?><a href="<?php echo 'publiclectureintroduction.php' ; ?>?id=<?php echo $result['lecture_id']; ?>">...read more </a></p>
				<p><a style="text-decoration: underline; color: #000066;" target='_blank' href="<?php echo $video_url ; ?>">Click to watch video</a></p></td>
	</tr>
	</tbody>
	</table>
		
		<?php } ?>	

	</div>
 
<a href="javascript:divHideShow('row1')"><h3 style="color:#000066;"><u>2012/2013 Academic Year</u></h3></a>
		<div id="row1" style="text-align: justify; padding-left: 30px; padding-top: 30px;">
	
	<?php 
		$query = mysql_query("SELECT * FROM public_lectures WHERE lect_type = 'INAUGURAL LECTURE' AND academic_yr = '2012/2013' ORDER BY  lect_date DESC");
		while($result = mysql_fetch_assoc($query)) {
		$title = $result['lect_title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		$date = $result['lect_date'];
		$date = html_entity_decode($date, ENT_QUOTES);
		$date = htmlspecialchars_decode($date);
		$image = $result['image_url'];
		$image = html_entity_decode($image, ENT_QUOTES);
		$image = htmlspecialchars_decode($image);
		$delivered_by = $result['delivered_by'];
		$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
		$delivered_by = htmlspecialchars_decode($delivered_by);
		$video_url = $result['video_url'];
		$video_url = html_entity_decode($video_url, ENT_QUOTES);
		$video_url = htmlspecialchars_decode($video_url);
		$summary = $result['introduction'];
		$summary = html_entity_decode($summary, ENT_QUOTES);
		$summary = htmlspecialchars_decode($summary);
		$string = $summary;
		$shortdesc = myTruncate($summary, 70);
		?>
		<table class="under" style="width:630px;">
	<tbody>
	<tr>
	<td><a href="#" ><img width="150px" height="150px" alt="Image Here" src="<?php echo $image ; ?>" /></a><br><?php echo $delivered_by ; ?></td>
	<td align="justify"><h3 style="color:#000066;"><u><?php echo $title ; ?></u></h3>
				<p><?php echo $shortdesc ; ?><a href="<?php echo 'publiclectureintroduction.php' ; ?>?id=<?php echo $result['lecture_id']; ?>">...read more </a></p>
				<p><a style="text-decoration: underline; color: #000066;" target='_blank' href="<?php echo $video_url ; ?>">Click to watch video</a></p></td>
	</tr>
	</tbody>
	</table>
		
		<?php } ?>	

	</div>
	
<a href="javascript:divHideShow('row')"><h3 style="color:#000066;"><u>2011/2012 Academic Year</u></h3></a>

	<div id="row" style="padding-left: 30px; padding-top: 30px; text-align: justify; ">
	<?php 
		$query = mysql_query("SELECT * FROM public_lectures WHERE lect_type = 'INAUGURAL LECTURE' AND academic_yr = '2011/2012' ORDER BY  lect_date DESC");
		while($result = mysql_fetch_assoc($query)) {
		$title = $result['lect_title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		$date = $result['lect_date'];
		$date = html_entity_decode($date, ENT_QUOTES);
		$date = htmlspecialchars_decode($date);
		$image = $result['image_url'];
		$image = html_entity_decode($image, ENT_QUOTES);
		$image = htmlspecialchars_decode($image);
		$delivered_by = $result['delivered_by'];
		$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
		$delivered_by = htmlspecialchars_decode($delivered_by);
		$video_url = $result['video_url'];
		$video_url = html_entity_decode($video_url, ENT_QUOTES);
		$video_url = htmlspecialchars_decode($video_url);
		$summary = $result['introduction'];
		$summary = html_entity_decode($summary, ENT_QUOTES);
		$summary = htmlspecialchars_decode($summary);
		$string = $summary;
		$shortdesc = myTruncate($summary, 70);
		?>
		
	<table class="under" style="width:630px;">
	<tbody>
	<tr>
	<td><a href="#" ><img width="150px" height="150px" alt="Image Here" src="<?php echo $image ; ?>" /></a><br><?php echo $delivered_by ; ?></td>
	<td align="justify"><h3 style="color:#000066;"><u><?php echo $title ; ?></u></h3>
				<p><?php echo $shortdesc ; ?><a href="<?php echo 'publiclectureintroduction.php' ; ?>?id=<?php echo $result['lecture_id']; ?>">...read more</a> </p>
				<p><a style="text-decoration: underline; color: #000066;" target='_blank' href="<?php echo $video_url ; ?>">Click to watch video</a></p></td>
	</tr>
	</tbody>
	</table>
	
	<?php } ?>
	</div>
	</div>	
	
</div>

	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

	<br><br><br>
<div id="footer">University of Ghana || &copy; 2013</div>

</div>

</div>




</body>

</html>