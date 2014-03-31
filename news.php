<?php
include('connect1.php');
session_start();



function myTruncate($string, $limit, $break=".", $pad="...")
{
	//return with no change if string is shorter than $limit
	if(strlen($string) <= $limit)
		return $string;
		
	//is $break present between $limit and the end of the string?
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if ($breakpoint < strlen($string)- 1)
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
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
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
<!--<link rel="stylesheet" type="text/css" href="news_style.css">-->
<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="abtorid.css" />
<title>News</title>
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

</style>
</head>
	<div id="fillcolor"></div>
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
<!-- Search Bar -->
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
<input type="hidden" name="filter" value="0" />
</form>-->
</div>
</div>

<!-- End css3menu.com BODY section -->
<div id="content">
<div id="welcomeheader" style="width:745px;">news</div>
		<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	<div class="item">
		<ul class="link" >
		<?php 
		
		$per_page = 4;
		$pages_query = mysql_query("SELECT COUNT(news_id) FROM news");
		$pages =ceil(mysql_result($pages_query,0)/ $per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page']: 1;
		
		$start =($page -1)* $per_page;
		
		$query = mysql_query("select * from news order by news_id DESC LIMIT $start ,$per_page");
		
		
		if($pages >= 1 && $page <= $pages){
       for($x=1;$x<=$pages;$x++){
         echo ($x ==$page)  ? '<strong><a class="pg" href="?page='.$x.'">'. $x.'</a> </strong> &nbsp;&nbsp;' : '<a class="pg1" href="?page='.$x.'">'. $x.'</a> &nbsp;&nbsp;';	   
		   }
		 }
		
		
		while($data = mysql_fetch_assoc($query)){
			$title = $data['title'];
			$title = html_entity_decode($title, ENT_QUOTES);
			$title = htmlspecialchars_decode($title);
			$summary = $data['content'];
			$summary = html_entity_decode($summary, ENT_QUOTES);
			$summary = htmlspecialchars_decode($summary);
			$string = $summary;
			$shortdesc = myTruncate($summary, 100);
		?><br><br>
        <li class="under">
		<a href="<?php echo 'update.php'; ?>?id=<?php echo $data['news_id'];?>"><img style="float: left; align:top;" width="80px" height="70px" margin-left:"18px";  alt="Image Here" src="<?php echo $data['story_image']; ?>" />
		</a>
		
		<h4>
			&nbsp;<a href="<?php echo 'update.php'; ?>?id=<?php echo $data['news_id'];?>"><?php echo $title ; ?></a>
		</h4>
		<p><?php echo $shortdesc ; ?><a href="<?php echo 'update.php'; ?>?id=<?php echo $data['news_id'];?>">read more</a></p>
		<?php } ?>
		</li>
		</ul>
		<br>
		
	</div>	
	
	<br><br><br>
</div>


	<br><br><br><br><br><br><br><br><br>
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>
</div>



</body>
</html>