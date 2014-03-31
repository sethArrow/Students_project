<?php
include('connect1.php');

if (isset ($_GET['call']))
{
$proposal_num = $_GET['call'];
$query = mysql_query("select * from inactive_calls");


}
else
{
	$_GET['call'] = null;
	$proposal_num = null;
	$inactive_id = null;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

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

<title>Inactive Calls</title>
<style type="text/css">
a:hover {color: #b08b57; font-weight: bold;}
a:visited {color: #000066;}
</style>
</head>

<body marginwidth="0" marginheight="0" >
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
<div  id="ughome" align="left"></div>
<div id="search" align="right" style="width:362px">
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

<div id="content" >
	<div id="welcomeheader" style="width:745px;"></div>
		<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>		
	<br><h3><a href="<?php echo 'inactivecalllist.php'; ?>?call=5TH CALL FOR PROPOSALS">5TH CALL FOR PROPOSALS</a></h3>
	
	<br><h3><a href="<?php echo 'inactivecalllist.php'; ?>?call=4TH CALL FOR PROPOSALS">4TH CALL FOR PROPOSALS</a></h3>
	
	<br><h3><a href="<?php echo 'inactivecalllist.php'; ?>?call=3RD CALL FOR PROPOSALS">3RD CALL FOR PROPOSALS</a></h3>
	
	<br><h3><a href="<?php echo 'inactivecalllist.php'; ?>?call=2ND CALL FOR PROPOSALS">2ND CALL FOR PROPOSALS</a></h3>
	
	<br><h3><a href="<?php echo 'inactivecalllist.php'; ?>?call=1ST CALL FOR PROPOSALS">1ST CALL FOR PROPOSALS</a></h3>
										

												
	
								
	
				
	
				
<br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="footer"> University of Ghana || &copy; 2013</div>
</div>

</div>


</body>
</html>