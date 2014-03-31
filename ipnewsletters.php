<?php
include('connect1.php');
$query = mysql_query("SELECT * FROM ip_newsletters ORDER BY issue_no DESC ");

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
<title>Newsletters</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body marginwidth="0" marginheight="0" >

<div id="mainbody"><div id="maincontent">
	
		<div id="ugoridlogo" style="height: 61px;">
		<img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
		
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu">
<?php include('mainmenu.php') ; ?>
<div id="fill2"></div>
<br style="clear: left" />
</div>
<img style="margin-bottom: 5px; margin-top: 0px;" src="images/background/divider.png" width="992px" height="15px" />

<div id="button">
	<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
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
<div id="welcomeheader" style="border-bottom: 1px solid #b08b57; width:745px;">Newsletters</div>
<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
<ul class="clink" style="list-style-type: none;">
<?php while($result = mysql_fetch_assoc($query))
	{
		$newsletter_title = $result['title'];
		$newsletter_title = html_entity_decode($newsletter_title, ENT_QUOTES);
		$newsletter_title = htmlspecialchars_decode($newsletter_title);
		$file_name = $result['file_name'];
		$file_name = html_entity_decode($file_name, ENT_QUOTES);
		$file_name = htmlspecialchars_decode($file_name);
?>
	<li><a href="pdfs/<?php echo $file_name ; ?>" target="_blank"><span><?php echo $newsletter_title ; ?></span></a></li><br />
<?php } ?>
</ul>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>