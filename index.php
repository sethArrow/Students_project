<?php
include('connect1.php');
$query2 = mysql_query("select * from news order by date DESC LIMIT 0, 8");

$query = mysql_query("select * from events order by date DESC LIMIT 0, 8");

$query3 = mysql_query("SELECT * FROM call_for_proposals WHERE call_type = 'Others' ORDER BY date DESC LIMIT 0, 5 ");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>


 <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />



	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<meta http-equiv="X-UA-Compatible" content="IE=5, IE=6, IE=7, IE=8, IE=9, IE=10" />
    
  <link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
	<script type="text/javascript" src="slider/engine1/jquery.js"></script>
    
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
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

	<style type="text/css">
	html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
	</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="menu.css" />
<style type="text/css">
	p {line-height: 150%;}
	a:visited {color: #444444;}
	a:hover {color: blue; font-weight: bold;}
	.rAfrica {width: 198px; height: 70px; margin-top:515px; -webkit-border-radius: 4px; -moz-border-radius:4px; border-radius: 4px; }
</style>
<title>ORID || HOME</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body marginwidth="0" marginheight="0" style="background:#FFF" >

<div id="mainbody" style="background:#FFF;"><div id="maincontent" style="border: 1px solid lightgrey;">

<div id="ugoridlogo" style="height:61px">
<img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<div id="myjquerymenu" class="jquerycssmenu" style="background:#010066; width:991">
<?php include('mainmenu.php') ; ?>
<div id="fill2"></div>
<br style="clear: left" />
</div>

<img style="margin-bottom: 5px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="15px" />

<div id="ql" style="margin-top: 630px;">
<div id="qlinks">Quick Links</div><br />
<ul style="padding-left: 4px; padding-top: 10px; font-color: #b08b57; font-size: 11px; font-family: Candara, Trebuchet MS, Lucinda Grande, Sans-serif; list-style-type: none; ">	
	<?php 
		while($data = mysql_fetch_assoc($query3)){ 
		$title = $data['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		?>
	
		<li><a style="color: #000066;" href="<?php echo 'update.php'; ?>?callid=<?php echo $data['call_id']; ?> "><?php echo $title ; ?></a></li><br />
	<?php } ?>
</ul>
<p align="right" style="color: #b08b57;"><b><a href="fundingopportunities.php">...MORE</a></b></p>
</div>

<div id="button">
	<?php include('sidemenu.php'); ?>
</div>
<div align="left" style="width: 190px; position: absolute; height: 44px; margin-top: 35px; padding-left: 5px;">
	<a href="http://orid.ug.edu.gh/researchafrica.php" target="_blank"><img class="rAfrica" src="images/Research Africa - Animated-Banner.gif" /></a>
</div>

<div id="photogallery" style="height:253px; padding:0px 0px 0px 0px; width:755px;">


		<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="slider/data1/images/pic_edit1.jpg" alt="" title="" id="wows1_0"/></li>
<li><img src="slider/data1/images/pic_edit2.jpg" alt="" title="" id="wows1_1"/></li>
<li><img src="slider/data1/images/pic_edit3.jpg" alt="" title="" id="wows1_2"/></li>
<li><img src="slider/data1/images/pic_edit4.jpg" alt="" title="" id="wows1_3"/></li>
</ul></div>
<span class="wsl"><a href="http://wowslider.com">Images Slideshow</a> by WOWSlider.com v4.8</span>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="slider/engine1/wowslider.js"></script>
	<script type="text/javascript" src="slider/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
    <link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
	<script type="text/javascript" src="slider/engine1/jquery.js"></script>
</div>

<div id="homesearch" style=" margin-top:2px;">

<div id="search" align="right">
<form method="get" action="resultspage.php"> 
<input type="text" name="srch" alt="Search" value="" maxlength="256" size="22"  placeholder="Search..."/>
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="index.php" />
<input type="hidden" name="client" value="index.php" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />
</form>
</div>
</div> 
<!--<hr color="#b08b57" size="3px" width="760px" align="right"/>-->
<div id="welcomeheader" >pro-vice chancellor's (rid) welcome message</div>

<div id="sidelinks">
	<div id="ne"><div id="newsevents">News &amp; Events</div><br />
		<marquee direction="up" scrollamount="1"  onMouseOver="this.stop();" onMouseOut="this.start();">
		<ul style="list-style-type:none; padding-left: 4px;" class="link">
		<?php while($title = mysql_fetch_assoc($query2)){ 
		$newtitle = $title['title'];
		$newtitle = html_entity_decode($newtitle, ENT_QUOTES);
		$newtitle = htmlspecialchars_decode($newtitle);
		?>
		<li><a href = "<?php echo 'update.php'; ?>?id=<?php echo $title['news_id'];?>"><?php echo $newtitle ; ?></a></li><br />
		<?php } ?>
		</ul></marquee>
		
</div>
<div id="events">
<h3 align="center" style="text-decoration: underline;color: #b08b57;">Events</h3>
	
	<ul class="link" style="margin-left: 5px; margin-right: 0px; padding-left: 0px; padding-right: 0px; list-style-type: none;">
	<?php 
	$query = mysql_query("SELECT * FROM events ORDER BY event_month ASC LIMIT 0, 2 ");
	while($data = mysql_fetch_assoc($query)){
	$event_title = $data['title'];
	$event_title = html_entity_decode($event_title, ENT_QUOTES);
	$event_title = htmlspecialchars_decode($event_title);
	$event_date = $data['event_date'];
	$event_date = html_entity_decode($event_date, ENT_QUOTES);
	$event_date = htmlspecialchars_decode($event_date);
	$event_month = $data['event_month'];
	$event_month = html_entity_decode($event_month, ENT_QUOTES);
	$event_month = htmlspecialchars_decode($event_month);
	$time = $data['time'];
	$time = html_entity_decode($time, ENT_QUOTES);
	$time = htmlspecialchars_decode($time);
	$venue = $data['venue'];
	$venue = html_entity_decode($venue, ENT_QUOTES);
	$venue = htmlspecialchars_decode($venue);
	?>
	<li><table><tbody>
	<tr><td><a href="<?php echo 'oridevents.php'; ?>?event_id=<?php echo $data['event_id']; ?>"><?php echo $event_title ; ?></a></td></tr>
	<tr><td style="color: #000066;"><b><?php echo 'Date:' ?></b>&nbsp;&nbsp;<?php echo $event_date ; ?> </td></tr>
	<tr><td style="color: #000066;"><b><?php echo 'Time:'?></b>&nbsp;&nbsp;<?php echo $time ; ?></td></tr>
	<tr><td style="color: #000066;"><b><?php echo 'Venue:'?></b>&nbsp;&nbsp;<?php echo $venue ; ?></td></tr>
	</tbody></table></li><br />
	<?php } ?>
	</ul>
</div>
</div>
<div id="content" style="font-family: Candara; text-align: justify; font-size: 12px;">
<div id="provcimage"><img src="images/staff/provc.jpg" alt="Pro VC's Image" /><i>Prof. John O. Gyapong</i></div><br />

<p>Welcome to the Office of Research, Innovation and Development (ORID), the research management arm of the University of Ghana, Legon.</p>
<p>This office was established in the year 2010 to foster and enhance research in the University. Our mission is to promote, coordinate 
	and facilitate research activities in the university, and also lead the development of the university's strategic plans, including business 
	plans and fund-raising strategies.
</p>
<p>As the drive of every University is research-based, we believe in academic freedom, creativity and innovation where people have the ability 
	to develop concepts without any restrictions and come out with creative and innovative ideas as well as cutting edge research which advances 
	the frontiers of knowledge and promote national development. We aim to promote research that satisfy high ethical standards, intellectual 
	property protection and good practices in data/material management. We therefore focus on policy development, provision of guidelines, and 
	human resource development for research, fundraising, and engaging industry to translate our findings into practice. We aim to facilitate the 
	efficient communication, dissemination and utilization of findings from research works.
</p> 
<p>It is therefore with great honour and privilege that I am given the mandate to lead the team to fulfill this mandate here at Ghana's Premier University.</p>
<p>I wish you a stimulating experience as you explore our research portal and discover how we can cultivate a spirit of innovation and creativity among 
	our staff and community. You are encouraged to visit our portal for updates on research grant opportunities, fellowship opportunities, and research 
	findings as well as seize new and available opportunities to engage in contract research activities.</p></div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>
 
 <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</body>
</html>