<?php
include('connect1.php');
//$query = mysql_query("select * from call_for_proposals order by date DESC");
//$query1 = mysql_query("select * from ugrf_calls order by date DESC LIMIT 0, 5");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=6, IE=7, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<style type="text/css">
 a:visited {color: blue;}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<!--<link rel="stylesheet" type="text/css" href="cgrants.css" />-->
	<title>FUNDING OPPORTUNITIES</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<style>
a.pg,a.pg1{
	text-decoration:underline;
	color:#666;
	font-size:16px;
	}
a.pg:hover , a.pg1:hover {color:#00C;}

ol.list1{list-style-type:none;}
</style>

</head>

<body marginwidth="0" marginheight="0">

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
<div id="content" style="border-bottom: solid #ffffff 0px;">	
<div id="welcomeheader" style="width:745px;">call for proposals</div>
<p><a style="color: #000066;" href="javascript:history.go(-1)">Back</a></p>
<ol class="list1">
	<?php 
		$per_page = 10;
		$pages_query = mysql_query("SELECT COUNT(call_id) FROM call_for_proposals");
		$pages =ceil(mysql_result($pages_query,0)/ $per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page']: 1;
		
		$start =($page -1)* $per_page;
		
		$query = mysql_query("select * from call_for_proposals order by call_id DESC LIMIT $start ,$per_page");
		
		
		if($pages >= 1 && $page <= $pages){
       for($x=1;$x<=$pages;$x++){
         echo ($x ==$page)  ? '<strong><a class="pg" href="?page='.$x.'">'. $x.'</a> </strong> &nbsp;&nbsp;' : '<a class="pg1" href="?page='.$x.'">'. $x.'</a> &nbsp;&nbsp;';		   
		   }
		 }
		echo '<br /><br />';
	
	
	
	
	while($data = mysql_fetch_assoc($query)){ 
		$title = $data['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
	?>
	
		<li><a href="<?php echo 'update.php'; ?>?callid=<?php echo $data['call_id']; ?> "><b><?php echo $title ; ?></b></a></li><br /><br />
			
			<?php } ?>
            
		
	</ol>
   

	
</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="footer">University of Ghana || &copy; 2013</div>
</div>
</div>


</body>
</html>