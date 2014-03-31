<?phpsession_start();if (!$_SESSION['admin']){	header('Location: oridcms_panellogin.php');	die();}else{}
include('connect1.php');
$query = mysql_query("select * from news order by date DESC LIMIT 0, 10");
$result = mysql_query('$query');
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="abtorid.css" />
<title>NEWS UPDATE</title>

</head>

<body marginwidth="0" marginheight="0" >

<div id="mainbody"><div id="maincontent">
<div id="fillcolor2"></div>
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div><div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<!--<div id="homesearch">
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
</div>-->
<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
	
	<div id="button">
<?php include('adminsidemenu.php'); ?>
</div>
<!-- End css3menu.com BODY section -->
<div id="content">	
<div id="welcomeheader">news update</div><a href="javascript:history.go(-1)">Back To Previous Page</a>
	
		<ul>
		<?php while($data = mysql_fetch_assoc($query)){ 					$newsid = $data['news_id'];						$news_title = $data['title'];			$news_title = html_entity_decode($news_title, ENT_QUOTES);			$news_title = htmlspecialchars_decode($news_title);		?>
			<li><a href="<?php echo 'update.php'; ?>?newsid=<?php echo $newsid; ?> "><b><?php echo $news_title; ?></b></a></li><br>
				[<?php echo $data['date']; ?>]
			<font size="-1"><a href="edit.php?news_id=<?php echo $data['news_id']; ?>">edit</a>
		&nbsp; |&nbsp; <a href="delete.php?news_id=<?php echo $data['news_id']; ?>">delete</a></font><br><br>
				<?php } ?>
			
		</ul>
<p align="center"><font size="-1"><a href="newsupdateform.php">Add News Item </a></font></p>
<br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="footer">University of Ghana || &copy; 2013</div>
</div>

</div>

</body>
</html>