<?php
session_start();
include('connect1.php');
if (isset ($_GET['call']))
	{
		$ncall_id = null;
		$inactive_detail = null;
		
		$proposal_num = $_GET['call'];
		$query = mysql_query("select * from inactive_calls");
		

	}
else{}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" >
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<style type="text/css">
a:hover {color: #b08b57; font-weight: bold;}
a:visited {color: #000066;}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="abtorid.css" />
<title>Inactive Calls</title>
 <!-- Start WOWSlider.com HEAD section 
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
 End WOWSlider.com HEAD section -->
</head>
	
<body marginwidth="0" marginheight="0" >
	<div id="mainbody"><div id="maincontent">
	
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
	<div id="fill2"></div>
<br style="clear: left" />
</div>
<img  style="margin-top: 0px; margin-bottom: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button">
<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<div  id="ughome" align="left"></div>
<!-- Search Bar -->
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
<!--<hr color="#b08b57" size="3px" width="760px" align="right"/>-->
	
<!-- End css3menu.com BODY section -->
<div id="content">
<div id="welcomeheader"></div>
<p><a style="color: #000066;" href="javascript:history.go(-1)">Back</a></p>

<?php if(isset ($_GET['inact_id'])) { 
	$proposal_num = null;
	$inactive_id = null;
	$ncall_id = $_GET['inact_id'];
	$query2 = mysql_query("select * from inactive_calls where inactive_call_id = '$ncall_id'");
	$inactive_detail = mysql_fetch_assoc($query2);
	
	$project_title = $inactive_detail['project_title'];
	$project_title = html_entity_decode($project_title, ENT_QUOTES);
	$project_title = htmlspecialchars_decode($project_title);
	
	$principal_investigator = $inactive_detail['principal_investigator'];
	$principal_investigator = html_entity_decode($principal_investigator, ENT_QUOTES);
	$principal_investigator = htmlspecialchars_decode($principal_investigator);
	
	$department = $inactive_detail['department'];
	$department = html_entity_decode($department, ENT_QUOTES);
	$department = htmlspecialchars_decode($department);
	
	$email = $inactive_detail['email'];
	$email = html_entity_decode($email, ENT_QUOTES);
	$email = htmlspecialchars_decode($email);
	
	$award_amount = $inactive_detail['award_amount'];
	$award_amount = html_entity_decode($award_amount, ENT_QUOTES);
	$award_amount = htmlspecialchars_decode($award_amount);
	
	$status = $inactive_detail['status'];
	$status = html_entity_decode($status, ENT_QUOTES);
	$status = htmlspecialchars_decode($status);
	
	$summary = $inactive_detail['summary'];
	$summary = html_entity_decode($summary, ENT_QUOTES);
	$summary = htmlspecialchars_decode($summary);
	
	?>
	
	<h3 style="text-decoration: underline; color: #b08b57;"><?php echo $project_title; ?></h3> 
	<p><b><?php echo 'Principal Investigator(s):' ; ?> <?php echo $principal_investigator; ?></b>(<?php echo $department; ?>)</p>
	<p><b>Email Address:</b><a href="#"> <?php echo $email; ?></a></p>
	<p><b>Award Amount:</b> <?php echo $award_amount; ?></p>
	<p><b>Project Status:</b> <?php echo $status; ?></p>
	<p><b>Summary:</b> <?php echo $summary; ?></p>
	
	
	<?php } ?>
	
	
	
	<h3 align="center"><?php echo $proposal_num ; ?></h3>
	
	
	<?php $query1 = mysql_query("select * from inactive_calls where proposal_num = '$proposal_num'");
	while($inactive_id = mysql_fetch_assoc($query1)) { ?>
	<ul>
	<li><a style="color: #000066; " href = "<?php echo 'inactivecalllist.php' ; ?>?inact_id=<?php echo $inactive_id['inactive_call_id'];?>"><?php echo $inactive_id['project_title']; ?></a></li><br />
	</ul>
	<?php } ?>
	
<a href="javascript:history.go(-1)"> Back to Previous Page</a>
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>