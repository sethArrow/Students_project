<?php
session_start();
if (!$_SESSION['admin'])
{
	header('Location: adminlogin.php');
	die();
}

else

{}
include('connect1.php');

if(isset($_GET['pg_id']))
{
$pg_id = $_GET['pg_id'];
$header = 'GRANTS';
$page_id = null;
$lecture_id = null;
}
elseif(isset($_GET['newpg_id']))
{
	$page_id = $_GET['newpg_id'];
	$header = 'ORID PAGES';
	$pg_id = null;
	$lecture_id = null;
}
else
{
$lecture_id = $_GET['plecture_id'];
$header = 'PUBLIC LECTURES';
$pg_id = null;
$page_id = null;
//$pg_id = null;
//$result = null;
//$query = null;



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

ul {list-style-type: none}

</style>

<style type="text/css">
a:visited {color: blue;}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

<script type="text/javascript" src="jquerycssmenu.js"></script>



<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title><?php echo $header ; ?> UPDATE</title>



</head>



<body marginwidth="0" marginheight="0" >



<div id="mainbody"><div id="maincontent">

<div id="fillcolor2"></div>

<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" />

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

<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />

	

	<div id="button">

<?php include('adminsidemenu.php'); ?>

</div>

<!-- End css3menu.com BODY section -->

<div id="content">	

<div id="welcomeheader"><?php echo $header ; ?> update</div>

<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>	

		<ul>

		<?php 
		
			
			//$data = null;
			//$query1 = null;
		
		$query = mysql_query("select * from grants order by grant_type DESC LIMIT 0, 10");
		while($result = mysql_fetch_assoc($query)){ ?>

		

			<li><a href="<?php echo 'update.php'; ?>?pg_id=<?php echo $pg_id ; ?> "><b><?php echo $result['grant_type']; ?></b></a></li><br>

				[<?php echo $result['date']; ?>]

			<font size="-1"><a href="newedit.php?pg_id=<?php echo $pg_id ; ?>">edit</a>

		&nbsp; |&nbsp; <a href="newdelete.php?pg_id=<?php echo $pg_id ; ?>">delete</a></font><br><br>
				<?php } ?>
			<p align="center"><font size="-1"><a href="updateform.php?pg_id=<?php echo $pg_id ; ?>">Add New Item </a></font></p>

		</ul>
		<ul>
		<?php 
			
			$query = mysql_query("SELECT * FROM orid_pages");
			while($data = mysql_fetch_assoc($query)) { ?>
			<h3 style="text-transform: uppercase;"><?php echo $data['page_header']; ?></h3>
			<font size="-1"><a href="edit.php?orid_pg_id=<?php echo $data['page_id']; ?>">edit</a>
			&nbsp;|&nbsp; <a href="delete.php?orid_pg_id=<?php echo $data['page_id']; ?>">delete</a></font>
			<?php } ?>
			<p align="center"><font size="-1"><a href="oridpages.php"> Add New Page </a></font></p>
		</ul>
		<ul>
			<?php 
			
			
			$query1= mysql_query("SELECT * from public_lectures ORDER BY lect_type, lect_date DESC");
			while ($data = mysql_fetch_assoc($query1)) { ?>
			<h3><?php echo $data['lect_type'];?></h3>
			<li><a href=""><b><?php echo $data['lect_title']; ?></b></a><br> by <?php echo $data['delivered_by']; ?></li><br>
			[<?php echo $data['lect_date']; ?>]
			
			<font size="-1"><a href="newedit1.php?plecture_id=<?php echo $data['lecture_id'] ; ?>">edit</a>

		&nbsp; |&nbsp; <a href="newdelete.php?plecture_id=<?php echo $data['lecture_id'] ; ?>">delete</a></font><br><br>

		
		<?php } ?>
		<p align="center"><font size="-1"><a href="publiclectureupdate.php">Add New Item </a></font></p>	
		</ul>
		
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<div id="footer">University of Ghana || &copy; 2013</div>

</div>



</div>



</body>

</html>