<?php
include('connect1.php');
$query2 = mysql_query("select * from news order by date DESC LIMIT 0, 8");

$query = mysql_query("select * from events order by date DESC LIMIT 0, 8");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
		<script>
function clearForms()
{
  var i;
  for (i = 0; (i < document.forms.length); i++) {
    document.forms[i].reset();
  }
}
		</script>
	
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

<link rel="stylesheet" type="text/css" href="menu.css" />
<style type="text/css">
	p {line-height: 200%;}
	a:visited {color: #444444;}
	a:hover {color: blue; font-weight: bold;}
</style>
<title>ORID || HOME</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body marginwidth="0" marginheight="0" >

<div id="mainbody"><div id="maincontent">
	
		<div id="ugoridlogo">
		<img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
		

<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
</div>
<img style="margin-bottom: 30px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="31px" />

<div id="ql">
<div id="qlinks">Quick Links</div><br>
<ul style="font-color: #b08b57; font-size: 11px; font-family: Verdana, Lucinda Grande, Sans-serif; ">	
	<?php $query3 = mysql_query("select * from call_for_proposals order by date DESC LIMIT 0, 2 ");
		while($data = mysql_fetch_assoc($query3)){ ?>
	
		<li><a href="<?php echo 'update.php'; ?>?callid=<?php echo $data['call_id']; ?> "><?php echo $data['title']; ?></a>&nbsp;&nbsp;<img src="images/background/titre_glitter.gif" width="20px" height="15px" /></li><br>
	<?php } ?>
	<a href="siteunderconstruction.php">Click Here</a>
</ul>
</div>

<div id="button">
	<?php include('sidemenu.php'); ?>
</div>

<div id="photogallery">
<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/agric_research.jpg" alt="College of Agriculture" title="College of Agriculture" id="wows1_0"/>Research Work at the College of Agriculture</li>
<!--<li><img src="data1/images/cacsbuilding.jpg" alt="CACS" title="CACS" id="wows1_1"/>College of Agriculture and Consumer Sciences</li>
<li><img src="data1/images/cegensa.jpg" alt="CEGENSA" title="CEGENSA" id="wows1_2"/>Centre for Gender Studies and Advocacy</li>-->
<li><img src="data1/images/collegeofagric.jpg" alt="College of Agriculture" title="College of Agriculture" id="wows1_3"/>College of Agriculture Farms-University of Ghana</li>
<!--<li><img src="data1/images/icde.jpg" alt="ICDE" title="ICDE" id="wows1_4"/>Institute of Continuing and Distance Education</li>
<li><img src="data1/images/images7.jpg" alt="Laboratory Apparatus" title="Laboratory Apparatus" id="wows1_5"/></li>
<li><img src="data1/images/images9.jpg" alt="Laboratory Equipment" title="Laboratory Equipment" id="wows1_6"/></li>
<li><img src="data1/images/lab.jpg" alt="Laboratory Work" title="Laboratory Work" id="wows1_7"/></li>-->
<li><img src="data1/images/leciad.jpg" alt="LECIAD" title="LECIAD" id="wows1_8"/>Legon Centre For International Affairs and Diplomacy</li>
<!--<li><img src="data1/images/legon.jpg" alt="The Balme Library at a Distance" title="The Balme Library at a Distance" id="wows1_9"/></li>-->
<!--<li><img src="data1/images/newimage.jpg" alt="Laboratory Equipment" title="Laboratory Equipment" id="wows1_10"/></li>
<li><img src="data1/images/newimage4.jpg" alt="Improving The Quality of Tomatoes" title="Improving The Quality of Tomatoes" id="wows1_11"/></li>-->
<li><img src="data1/images/noguchi.jpg" alt="Laboratory Work at Noguchi" title="Laboratory Work at Noguchi" id="wows1_12"/></li>
<!--<li><img src="data1/images/research3.jpg" alt="Laboratory Work" title="Laboratory Work" id="wows1_13"/></li>
<li><img src="data1/images/research4.jpg" alt="Laboratory Work" title="Laboratory Work" id="wows1_14"/></li>
<li><img src="data1/images/research7.jpg" alt="Laboratory Work" title="Laboratory Work" id="wows1_15"/></li>-->
<!--<li><img src="data1/images/rips_build.jpg" alt="RIPS" title="RIPS" id="wows1_16"/>Regional Institute of Population Studies</li>
<li><img src="data1/images/ugbs.jpg" alt="UGBS" title="UGBS" id="wows1_17"/>University of Ghana Business School</li>
<li><img src="data1/images/unainra.jpg" alt="UNA - INRA" title="UNA - INRA" id="wows1_18"/></li>-->
</ul></div>
<div class="ws_thumbs">
<div>
<a href="#" title="College of Agriculture"><img src="data1/tooltips/agric_research.jpg" alt="" /></a>
<!--<a href="#" title="CACS"><img src="data1/tooltips/cacsbuilding.jpg" alt="" /></a>
<a href="#" title="CEGENSA"><img src="data1/tooltips/cegensa.jpg" alt="" /></a>-->
<a href="#" title="College of Agriculture"><img src="data1/tooltips/collegeofagric.jpg" alt="" /></a>
<!--<a href="#" title="ICDE"><img src="data1/tooltips/icde.jpg" alt="" /></a>
<a href="#" title="Laboratory Apparatus"><img src="data1/tooltips/images7.jpg" alt="" /></a>
<a href="#" title="Laboratory Equipments"><img src="data1/tooltips/images9.jpg" alt="" /></a>
<a href="#" title="Laboratory Work"><img src="data1/tooltips/lab.jpg" alt="" /></a>-->
<a href="#" title="LECIAD"><img src="data1/tooltips/leciad.jpg" alt="" /></a>
<!--<a href="#" title="The Balme Library at a Distance"><img src="data1/tooltips/legon.jpg" alt="" /></a>-->
<!--<a href="#" title="Laboratory Equipment"><img src="data1/tooltips/newimage.jpg" alt="" /></a>
<a href="#" title="Improving The Quality of Tomatoes"><img src="data1/tooltips/newimage4.jpg" alt="" /></a>-->
<a href="#" title="Laboratory Work at Noguchi"><img src="data1/tooltips/noguchi.jpg" alt="" /></a>
<!--<a href="#" title="Laboratory Work"><img src="data1/tooltips/research3.jpg" alt="" /></a>
<a href="#" title="Laboratory Work"><img src="data1/tooltips/research4.jpg" alt="" /></a>
<a href="#" title="Laboratory Work"><img src="data1/tooltips/research7.jpg" alt="" /></a>-->
<!--<a href="#" title="RIPS"><img src="data1/tooltips/rips_build.jpg" alt="" /></a>
<a href="#" title="UGBS"><img src="data1/tooltips/ugbs.jpg" alt="" /></a>
<a href="#" title="UNA - INRA"><img src="data1/tooltips/unainra.jpg" alt="" /></a>-->
</div>
</div>
<a class="wsl" href="http://wowslider.com">jQuery Fade Image by WOWSlider.com v2.8</a>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<!--<div id='cincopa_widget_6e5ab268-61ec-4370-b241-51dd3f795ac9'><img src='//www.cincopa.com/media-platform/runtime/loading.gif' style='border:0;'/><a href='//www.cincopa.com/media-platform/wordpress-plugin.aspx'><img alt='WordPress plugin' style='border:0;' border=0 src='http://www.cincopa.com/media-platform/runtime/cincopaicons.gif' /></a></div>
<script src='//www.cincopa.com/media-platform/runtime/libasync.js' type='text/javascript'></script>
<script type='text/javascript'>cp_load_widget('AUAACHrsDFDO', 'cincopa_widget_6e5ab268-61ec-4370-b241-51dd3f795ac9');</script>
<noscript>Click <a href='http://www.cincopa.com/media-platform/view.aspx?fid=AUAACHrsDFDO'>here</a> to open the gallery.<br>
Powered by Cincopa <a href='http://www.cincopa.com/media-platform'>Media Platform</a> for your website and Cincopa MediaSend for <a href='http://www.cincopa.com/mediasend/start.aspx'>file transfer</a>.
</noscript>-->
</div>

<div id="homesearch">
<!--<div  id="ughome" align="left"><a style="color: #000066; font-size: 11px; font-family: Arial, Lucinda Grande;" href="http://www.ug.edu.gh"><strong> UG HOME </strong></a>
</div>-->
<div id="search" align="right">
<script>
  (function() {
    var cx = '006450158522253051692:jfxwori95e0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>
</div>
<hr color="#b08b57" size="3px" width="760px" align="right"/>
<div id="welcomeheader" >pro-vice chancellor's (rid) welcome message</div>

<div id="sidelinks">
	<div id="ne"><div id="newsevents">News &amp; Events</div><br />
		<marquee direction="up" scrollamount="1"  onMouseOver="this.stop();" onMouseOut="this.start();">
		<ul class="link">
		<?php while($title = mysql_fetch_assoc($query2)){ ?>
		<li><a href = "<?php echo 'update.php'; ?>?id=<?php echo $title['news_id'];?>"><?php echo $title['title']; ?></a></li><br />
		<?php } ?>
		</ul></marquee>
		
</div>
</div>
<div id="content">
<div id="provcimage"><img src="images/staff/provc.jpg" alt="Pro VC's Image" /><b>Prof. John Owusu Gyapong</b></div><br />


<p>Welcome to the Office of Research, Innovation and Development (ORID). It is with great honor and privilege that I am handed the mandate to lead 
	this office and to spearhead all research activities at the University of Ghana.
</p>
<p>In our quest to effectively manage, coordinate, enhance and facilitate research activities to achieve the maximum output in priority areas 
	identified in the University's Strategic Plan, the University Council saw the need to establish the Office of Research, Innovation and Development 
	(ORID) as a seperate unit from the then School of Research and Graduate Studies(now the School of Graduate Studies). The office, hence began 
	operations in the 2010/2011 academic year and it absorbs the functions of the <em>Research and Conference Committee, Publications Committee, 
	External Funds Office, Consultancy Unit and the Research Administration Unit.</em>
</p>

<p>Indeed, research work plays a very important role in policy formulation and the development of any nation. Hence, the University, through the 
	Office of Research, Innovation and Development, aims to provide more research opportunities for the University Community and to facilitate the 
	effective and efficient Communication, Dissemination and Utilization of findings from research work.
</p> 
<p>I must add that the University has also gained much recognition, both internationally and on the African continent, as a result of its numerous
	research works.</p></div>
<br /><br /><br />
<div id="footer">  University of Ghana || &copy; 2013 </div>
</div>

</div>

</body>
</html>