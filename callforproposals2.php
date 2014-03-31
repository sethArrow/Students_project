<?php
include('connect1.php');
$query = mysql_query("select * from call_for_proposals order by date DESC LIMIT 0, 5");
$query1 = mysql_query("select * from ugrf_calls order by date DESC LIMIT 0, 5");
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
<title>CALL FOR PROPOSALS</title>

</head>

<body marginwidth="0" marginheight="0" style="background-image: url(images/background/rough_diagonal.png); background-repeat: repeat;">

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
	<?php include('mainmenu.php'); ?>
</div>
<div id="photogallery"><div id='cincopa_widget_4cfcdb6d-d64b-49b5-b167-a5e2d9398a07'><img src='//www.cincopa.com/media-platform/runtime/loading.gif' style='border:0;'/><a href='//www.cincopa.com/media-platform/wordpress-plugin.aspx'><img alt='WordPress plugin' style='border:0;' border=0 src='http://www.cincopa.com/media-platform/runtime/cincopaicons.gif' /></a></div>
<script src='//www.cincopa.com/media-platform/runtime/libasync.js' type='text/javascript'></script>
<script type='text/javascript'>cp_load_widget('AcFA3CLEL5JY', 'cincopa_widget_4cfcdb6d-d64b-49b5-b167-a5e2d9398a07');</script>
<noscript>Click <a href='http://www.cincopa.com/media-platform/view.aspx?fid=AcFA3CLEL5JY'>here</a> to open the gallery.<br>
Powered by Cincopa <a href='http://www.cincopa.com/media-platform'>Media Platform</a> for your website and Cincopa MediaSend for <a href='http://www.cincopa.com/mediasend/start.aspx'>file transfer</a>.
</noscript></div>
<div id="homesearch">
<div  id="ughome" align="left"><a style="color: orange;" href="http://www.ug.edu.gh"><strong> UG HOME </strong></a>
</div>
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
<hr>
	
	<div id="button">
<?php include('sidemenu.php'); ?>
</div>
<!-- End css3menu.com BODY section -->
<div id="content">	
<div id="welcomeheader">call for proposals</div>
	<ol>
	<?php while($data = mysql_fetch_assoc($query)){ ?>
	
		<li><a href="<?php echo 'update.php'; ?>?callid=<?php echo $data['call_id']; ?> "><b><?php echo $data['title']; ?></b></a>
		&nbsp;&nbsp;&nbsp;&nbsp;[<?php echo $data['date']; ?>]</li><br>
			
			<?php } ?>
		
			
	<?php while($data = mysql_fetch_assoc($query1)){ ?>
	
		<li><a href="<?php echo 'update.php'; ?>?ugrf_id=<?php echo $data['ugrf_call_id']; ?> "><b><?php echo $data['title']; ?></b></a> &nbsp;
		&nbsp;&nbsp;&nbsp;[<?php echo $data['date']; ?>]</li><br>
			
			<?php } ?><br>
		
	</ol>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="footer">University of Ghana || &copy; 2012</div>
</div>

</div>

</body>
</html>