<?php
session_start();include('connect1.php');/*if (!$_SESSION['admin'])
{	header('Location: adminlogin.php');	die();}else{}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<!--<link rel="stylesheet" type="text/css" href="admin.css" />-->

<title>Event Upload Form</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- TinyMCE -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
		
		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/provccss.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		external_link_image_url : "images/photos",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

</head>

<body marginwidth="0" marginheight="0" >
<div id="mainbody">
	<div id="maincontent">
		<div id="fillcolor2" ></div>
			<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
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

<div id="content">
<div id="welcomeheader">New Event </div>
	<div id="nwcontent1">	<a href="javascript:history.go(-1)">Back To Previous Page</a>	<?php if(isset($_GET['event_id']))	{		$event_id = $_GET['event_id'];		$query = mysql_query("SELECT * FROM events WHERE event_id = '$event_id' ");		$event = mysql_fetch_assoc($query);		$title = $event['title'];		$title = html_entity_decode($title, ENT_QUOTES);		$title = htmlspecialchars_decode($title);		$content = $event['content'];		$content = html_entity_decode($content, ENT_QUOTES);		$content = htmlspecialchars_decode($content);	?>	<h3 style="align:left;"><?php echo $title ; ?></h3>	<p class="content"><?php echo $content ; ?></p>		<?php } elseif(isset($_GET['drussaevents']))	{	?>	<form action="loadtodb.php" method="POST">	<p><b>Please enter details of Event below.</b></p>	<table><tbody>	<tr><td>Event Title:</td><td><input type="text" name="Title1" value="" maxlength="256" /></td><td></td><td><select name="event_yr">						<option value="2013" selected>2013</option>						<option value="2014">2014</option>						<option value="2015">2015</option>						<option value="2016">2016</option>						<option value="2017">2017</option>						<option value="2018">2018</option>						<option value="2019">2019</option>						<option value="2020">2020</option>						<option value="2021">2021</option>						<option value="2022">2022</option>						<option value="2023">2023</option>						<option value="2024">2024</option>						<option value="2025">2025</option>						<option value="2026">2026</option>						<option value="2027">2027</option>						<option value="2028">2028</option>						<option value="2029">2029</option>						<option value="2030">2030</option>						<option value="2031">2031</option>						<option value="2032">2032</option>						<option value="2033">2033</option>						</select></td></tr>	<tr><td>Event Date:</td><td><input type="text" name="event_date" value="" maxlength="256" />(eg. Thursday, April 25, 2013)</td><td></td><td><select name="event_mth">						<option value="January" selected>January</option>						<option value="February" >February</option>						<option value="March" >March</option>						<option value="April" >April</option>						<option value="May" >May</option>						<option value="June" >June</option>						<option value="July" >July</option>						<option value="August" >August</option>						<option value="September" >September</option>						<option value="October" >October</option>						<option value="November" >November</option>						<option value="December" >December</option>						</select></td></tr>	<tr><td>Time:</td><td><input type="text" name="time" value="" maxlength="256" /></td><td></td><td><select name="event_day">						<option value="1" selected>1</option>						<option value="2" >2</option>						<option value="3" >3</option>						<option value="4" >4</option>						<option value="5" >5</option>						<option value="6" >6</option>						<option value="7" >7</option>						<option value="8" >8</option>						<option value="9" >9</option>						<option value="10" >10</option>						<option value="11" >11</option>						<option value="12" >12</option>						<option value="13" >13</option>						<option value="14" >14</option>						<option value="15" >15</option>						<option value="16" >16</option>						<option value="17" >17</option>						<option value="18" >18</option>						<option value="19" >19</option>						<option value="20" >20</option>						<option value="21" >21</option>						<option value="22" >22</option>						<option value="23" >23</option>						<option value="24" >24</option>						<option value="25" >25</option>						<option value="26" >26</option>						<option value="27" >27</option>						<option value="28" >28</option>						<option value="29" >29</option>						<option value="30" >30</option>						<option value="31" >31</option>						</select></td></tr>	<tr><td>Venue:</td><td><input type="text" name="venue" value="" maxlength="256" /></td><td></td><td><select name="day_name">						<option value="Monday">Monday</option>						<option value="Tuesday" selected>Tuesday</option>						<option value="Wednesday">Wednesday</option>						<option value="Thursday">Thursday</option>						<option value="Friday">Friday</option>						<option value="Saturday">Saturday</option>						<option value="Sunday">Sunday</option>						</select></td></tr>	</tbody></table>	<table ><tbody>		<tr><td style="color: #125654;">Contents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		</td></tr>	</tbody></table>	<textarea name="content1" rows="25" cols="40"></textarea><br /><br />	<input type="submit" name="d_events_sub" value="Submit" maxlength="50" />	</form>	<?php } else	{	?>
	<form action="loadtodb.php" method="POST">
	<p><b>Please enter details of Event below.</b></p>	<table><tbody>
	<tr><td>Event Title:</td><td><input type="text" name="Title1" value="" maxlength="256" /></td><td></td><td><select name="event_yr">						<option value="2013" selected>2013</option>						<option value="2014">2014</option>						<option value="2015">2015</option>						<option value="2016">2016</option>						<option value="2017">2017</option>						<option value="2018">2018</option>						<option value="2019">2019</option>						<option value="2020">2020</option>						<option value="2021">2021</option>						<option value="2022">2022</option>						<option value="2023">2023</option>						<option value="2024">2024</option>						<option value="2025">2025</option>						<option value="2026">2026</option>						<option value="2027">2027</option>						<option value="2028">2028</option>						<option value="2029">2029</option>						<option value="2030">2030</option>						<option value="2031">2031</option>						<option value="2032">2032</option>						<option value="2033">2033</option>						</select></td></tr>
	<tr><td>Event Date:</td><td><input type="text" name="event_date" value="" maxlength="256" />(eg. Thursday, April 25, 2013)</td><td></td><td><select name="event_mth">						<option value="January" selected>January</option>						<option value="February" >February</option>						<option value="March" >March</option>						<option value="April" >April</option>						<option value="May" >May</option>						<option value="June" >June</option>						<option value="July" >July</option>						<option value="August" >August</option>						<option value="September" >September</option>						<option value="October" >October</option>						<option value="November" >November</option>						<option value="December" >December</option>						</select></td></tr>
	<tr><td>Time:</td><td><input type="text" name="time" value="" maxlength="256" /></td><td></td><td><select name="event_day">						<option value="1" selected>1</option>						<option value="2" >2</option>						<option value="3" >3</option>						<option value="4" >4</option>						<option value="5" >5</option>						<option value="6" >6</option>						<option value="7" >7</option>						<option value="8" >8</option>						<option value="9" >9</option>						<option value="10" >10</option>						<option value="11" >11</option>						<option value="12" >12</option>						<option value="13" >13</option>						<option value="14" >14</option>						<option value="15" >15</option>						<option value="16" >16</option>						<option value="17" >17</option>						<option value="18" >18</option>						<option value="19" >19</option>						<option value="20" >20</option>						<option value="21" >21</option>						<option value="22" >22</option>						<option value="23" >23</option>						<option value="24" >24</option>						<option value="25" >25</option>						<option value="26" >26</option>						<option value="27" >27</option>						<option value="28" >28</option>						<option value="29" >29</option>						<option value="30" >30</option>						<option value="31" >31</option>						</select></td></tr>
	<tr><td>Venue:</td><td><input type="text" name="venue" value="" maxlength="256" /></td><td></td><td><select name="day_name">						<option value="Monday">Monday</option>						<option value="Tuesday" selected>Tuesday</option>						<option value="Wednesday">Wednesday</option>						<option value="Thursday">Thursday</option>						<option value="Friday">Friday</option>						<option value="Saturday">Saturday</option>						<option value="Sunday">Sunday</option>						</select></td></tr>	</tbody></table>
		<table ><tbody>			<tr><td style="color: #125654;">Contents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			</td></tr>		</tbody></table>				<textarea name="content1" rows="25" cols="40"></textarea><br /><br />
				<input type="submit" name="btnsubmit2" value="Submit" maxlength="50" />	</form>	<?php } ?>
	</div>
</div>
<div id="footer"> University of Ghana || &copy; 2012</div>
</div></div>


</body>
</html>