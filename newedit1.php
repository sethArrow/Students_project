<?php
session_start();
include('connect1.php') ;
if (!$_SESSION['admin'])
{
	header('Location: oridcms_panellogin.php');
	die();
}
else{}

	if(isset($_GET['pg_id']))
	{
		$page_id = $_GET['pg_id'];
		if($page_id == 1)
		{
			$btn_name = 'new_btn1';
			$welcome_header = 'about drussa';
			$page_title = 'DRUSSA';
			$txtarea_name = 'dcontent';
		}
		elseif($page_id == 2)
		{
			$btn_name = 'new_btn2';
			$welcome_header = 'group of 24';
			$page_title = 'DRUSSA Group of 24';
			$txtarea_name = 'grp_content';
		}
		elseif($page_id == 3)
		{
			$btn_name = 'new_btn3';
			$welcome_header = 'drussa group events';
			$page_title = 'DRUSSA GROUP EVENTS';
			$txtarea_name = 'grpev_content';
		}
		elseif($page_id == 4)
		{
			$btn_name = 'new_btn4';
			$welcome_header = 'faculty development grants';
			$page_title = 'FACULTY DEVELOPMENT GRANTS';
			$txtarea_name = 'facdev_content';
		}
		elseif($page_id == 5)
		{
			$btn_name = 'new_btn5';
			$welcome_header = 'conference grants';
			$page_title = 'CONFERENCE GRANTS';
			$txtarea_name = 'cgrants_content';
		}
		elseif($page_id == 6)
		{
			$btn_name = 'new_btn6';
			$welcome_header = 'bsu initiative';
			$page_title = 'BSU INITIATIVE';
			$txtarea_name = 'bsu_content';
		}
		elseif($page_id == 7)
		{
			$btn_name = 'new_btn7';
			$welcome_header = 'carnegie grants';
			$page_title = 'CARNEGIE';
			$txtarea_name = 'carnegie_content';
		}
		else 
		{
			$btn_name = 'new_btn8';
			$welcome_header = 'treccafrica';
			$page_title = 'TreccAfrica';
			$txtarea_name = 'tafrica_content';
		}	
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



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

<script type="text/javascript" src="jquerycssmenu.js"></script>



<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title>Edit Item</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- TinyMCE -->

<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

	tinyMCE.init({

		// General options

		mode : "textareas",

		theme : "advanced",

		skin : "o2k7",

		plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		

		// Theme options

		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",

		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",

		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,restoredraft,|,insertfile,insertimage",

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



<div id="mainbody"><div id="maincontent">

<div id="fillcolor2"></div>

<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />

</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>


<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />

	

	<div id="button">

<?php include('adminsidemenu.php'); ?>

</div>

<!-- End css3menu.com BODY section -->

<div id="content">	

<div id="welcomeheader">edit</div>

	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>

	<?php if(isset($_GET['plecture_id']))
{
	$plecture_id = $_GET['plecture_id'];

//$query = mysql_query("select * from news where news_id = '$id'");

	$result = mysql_query("select * from public_lectures where lecture_id = '$plecture_id'") or die("Error in query: $result.".mysql_error());
	
	if((!isset($_GET['plecture_id']) || trim($_GET['plecture_id']) == ''))

	{

		die("Missing RECORD ID!");

	}

	

	if (mysql_num_rows($result) > 0)

	{

		$row = mysql_fetch_assoc($result);
		$lecture_type = $row['lect_type'] ;
		$lecture_type = html_entity_decode($lecture_type, ENT_QUOTES);
		$lecture_type = htmlspecialchars_decode($lecture_type);
		$lecture_title = $row['lect_title'];
		$lecture_title = html_entity_decode($lecture_title, ENT_QUOTES);
		$lecture_title = htmlspecialchars_decode($lecture_title);
		$academic_year = $row['academic_yr'];
		$academic_year = html_entity_decode($academic_year, ENT_QUOTES);
		$academic_year = htmlspecialchars_decode($academic_year);
		$lecture_date = $row['lect_date'];
		$lecture_date = html_entity_decode($lecture_date, ENT_QUOTES);
		$lecture_date = htmlspecialchars_decode($lecture_date);
		$lecture_venue = $row['lecture_venue'];
		$lecture_venue = html_entity_decode($lecture_venue, ENT_QUOTES);
		$lecture_venue = htmlspecialchars_decode($lecture_venue);
		$delivered_by = $row['delivered_by'];
		$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
		$delivered_by = htmlspecialchars_decode($delivered_by);
		$dept_faculty = $row['dept_faculty'];
		$dept_faculty = html_entity_decode($dept_faculty, ENT_QUOTES);
		$dept_faculty = htmlspecialchars_decode($dept_faculty);
		$introduction = $row['introduction'];
		$introduction = html_entity_decode($introduction, ENT_QUOTES);
		$introduction = htmlspecialchars_decode($introduction);
		$image_url = $row['image_url'];
		$image_url = html_entity_decode($image_url, ENT_QUOTES);
		$image_url = htmlspecialchars_decode($image_url);
		$video_url = $row['video_url'];
		$video_url = html_entity_decode($video_url, ENT_QUOTES);
		$video_url = htmlspecialchars_decode($video_url);
		$audio_url = $row['audio_url'];
		$audio_url = html_entity_decode($audio_url, ENT_QUOTES);
		$audio_url = htmlspecialchars_decode($audio_url);
	?>

	<form action="loadtodb.php?plecture_id=<?php echo $row['lecture_id']; ?>" method="POST" name="news_form" onsubmit=" return checkform()">
	<p><b>Please enter project details below.</b></p>
		Lecture Type:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="lect_type" value="<?php echo $lecture_type ; ?>" maxlength="256" />&nbsp;&nbsp;(i.e. "INAUGURAL LECTURE", "INTERFACULTY LECTURE" etc.)<br /><br />
		Lecture Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="lect_title" value="<?php echo $lecture_title ; ?>" maxlength="256" /><br /><br />
		Academic Year: 	<input type="text" name="academic_yr" value="<?php echo $academic_year ; ?>" maxlength="256" />&nbsp;&nbsp;( 2011/2012, 2012/2013 etc.)<br /><br />
		Lecture Date: &nbsp;&nbsp;&nbsp;	<input type="text" name="lect_date" value="<?php echo $lecture_date ; ?>" maxlength="256" />&nbsp;&nbsp;( YYYY-MM-DD)<br /><br />
		Lecture Venue:&nbsp;	<input type="text" name="venue" value="<?php echo $lecture_venue ; ?>" maxlength="256" /><br /><br />
		Delivered By:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="del_by" value="<?php echo $delivered_by ; ?>" maxlength="256" /><br /><br />
		Department/Faculty:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="dept_faculty" value="<?php echo $dept_faculty ; ?>" maxlength="256" /><br /><br />
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Introduction:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea name="intro" rows="20" cols="80" style="width: 80%;"><?php echo $introduction ; ?></textarea><br /><br />
		Image Url:&nbsp;&nbsp;	<input type="text" name="img_url" value="<?php echo $image_url ; ?>" maxlength="256" /><br /><br />
		Video Url:&nbsp;&nbsp;&nbsp;<input type="text" name="vid_url" value="<?php echo $video_url ; ?>" maxlength="256" /><br /><br />
		audio Url:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="aud_url" value="<?php echo $audio_url ; ?>" maxlength="256" /><br /><br />
			<input type="submit"  name="newbtnsubmit2" value="Update" maxlength="50" />
	</form>
<?php } ?>
<?php } elseif(isset($_GET['newsletter_id']))
{
	$newsletter_id = $_GET['newsletter_id'];
	$result = mysql_query("SELECT * FROM ip_newsletters WHERE newsletter_id = '$newsletter_id' ") or die("Error in query: $result.".mysql_error());
	
	if ((!isset($_GET['newsletter_id']) || trim($_GET['newsletter_id']) == ''))
	{
		die("Missing record ID");
	}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		$newsletter_title = $row['title'];
		$newsletter_title = html_entity_decode($newsletter_title, ENT_QUOTES);
		$newsletter_title = htmlspecialchars_decode($newsletter_title);
		$issue_no = $row['issue_no'];
		$issue_no = html_entity_decode($issue_no, ENT_QUOTES);
		$issue_no = htmlspecialchars_decode($issue_no);
		$issue_day = $row['day'];
		$issue_day = html_entity_decode($issue_day, ENT_QUOTES);
		$issue_day = htmlspecialchars_decode($issue_day);
		$issue_month = $row['month'];
		$issue_month = html_entity_decode($issue_month, ENT_QUOTES);
		$issue_month = htmlspecialchars_decode($issue_month);
		$issue_year = $row['year'];
		$issue_year = html_entity_decode($issue_year, ENT_QUOTES);
		$issue_year = htmlspecialchars_decode($issue_year);
		$file_name = $row['file_name'];
		$file_name = html_entity_decode($file_name, ENT_QUOTES);
		$file_name = htmlspecialchars_decode($file_name);
	?>
	<form action="loadtodb.php?newsletter_id=<?php echo $row['newsletter_id']; ?>" method="POST">
					<table style="border-collapse: collapse">
						<thead>Please Enter Details for Newsletter</thead>
						<tbody>
						<tr><td>Title:</td><td><input type="text" name="nletter_title" value="<?php echo $newsletter_title ; ?>" maxlength="256" /></td><td></td></tr>
						<tr><td></td><td></td><td></td></tr>
						<tr><td>Issue no:</td><td><input type="text" name="issue_no" value="<?php echo $issue_no ; ?>" /></td><td></td></tr>
						<tr><td></td><td></td><td></td></tr>
						<tr><td>Issue Date:</td><td><select name="day">
						<option value="31" >31</option>
						<option value="30" >30</option>
						<option value="29" >29</option>
						<option value="28" >28</option>
						<option value="27" >27</option>
						<option value="26" >26</option>
						<option value="25" >25</option>
						<option value="24" >24</option>
						<option value="23" >23</option>
						<option value="22" >22</option>
						<option value="21" >21</option>
						<option value="20" >20</option>
						<option value="19" >19</option>
						<option value="18" >18</option>
						<option value="17" >17</option>
						<option value="16" >16</option>
						<option value="15" >15</option>
						<option value="14" >14</option>
						<option value="13" >13</option>
						<option value="12" >12</option>
						<option value="11" >11</option>
						<option value="10" >10</option>
						<option value="09" >09</option>
						<option value="08" >08</option>
						<option value="07" >07</option>
						<option value="06" >06</option>
						<option value="05" >05</option>
						<option value="04" >04</option>
						<option value="03" >03</option>
						<option value="02" >02</option>
						<option value="01" selected>01</option>
						</select>&nbsp;&nbsp;<select name="month">
						<option value="December" >December</option>
						<option value="November" >November</option>
						<option value="October" >October</option>
						<option value="September" >September</option>
						<option value="August" >August</option>
						<option value="July" >July</option>
						<option value="June" >June</option>
						<option value="May" >May</option>
						<option value="April" >April</option>
						<option value="March" >March</option>
						<option value="February" >February</option>
						<option value="January" selected>January</option>
						</select>&nbsp;&nbsp;<select name="year">
						<option value="2040" >2040</option>
						<option value="2039" >2039</option>
						<option value="2038" >2038</option>
						<option value="2037" >2037</option>
						<option value="2036" >2036</option>
						<option value="2035" >2035</option>
						<option value="2034" >2034</option>
						<option value="2033" >2033</option>
						<option value="2032" >2032</option>
						<option value="2031" >2031</option>
						<option value="2030" >2030</option>
						<option value="2029" >2029</option>
						<option value="2028" >2028</option>
						<option value="2027" >2027</option>
						<option value="2026" >2026</option>
						<option value="2025" >2025</option>
						<option value="2024" >2024</option>
						<option value="2023" >2023</option>
						<option value="2022" >2022</option>
						<option value="2021" >2021</option>
						<option value="2020" >2020</option>
						<option value="2019" >2019</option>
						<option value="2018" >2018</option>
						<option value="2017" >2017</option>
						<option value="2016" >2016</option>
						<option value="2015" >2015</option>
						<option value="2014" >2014</option>
						<option value="2013" selected>2013</option>
						</select>
						</td><td></td></tr>
						<tr><td>File/Document Name:</td><td><input type="text" name="file_name" value="<?php echo $file_name ; ?>" /></td></tr>
						<tr><td></td><td></td><td></td></tr>
						<tr><td></td><td><input type="submit" name="newsletter_update" value="Update" />
						</tbody>
					</table>
				</form>
	<?php } ?>
<?php } 
elseif (isset($_REQUEST['staff_id']))
{
	$staff_id = $_REQUEST['staff_id'];
	$result = mysql_query("select * from staff where staff_id = '$staff_id'") or die("Error in query: $result.".mysql_error());

	if ((!isset($_REQUEST['staff_id']) || trim($_REQUEST['staff_id']) == ''))
	{
		die("Missing record ID");
	}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
	?>
	<form action="loadtodb.php?staff_id=<?php echo $row['staff_id']; ?>" method="POST">

	<p><b>Please enter staff details below.</b></p>

		Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<input type="text" id = "title" name = "Title3" value="<?php echo $row['title']; ?>" maxlength="50" /><br /><br />

		First Name:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="first_name" value="<?php echo $row['fname']; ?>" maxlength="50" /><br /><br />

		Last Name:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="last_name" value="<?php echo $row['lname']; ?>" maxlength="50" /><br /><br />

		Other Names: <input type="text" name="o_name" value="<?php echo $row['othername']; ?>" maxlength="50" /><br /><br />

		Position:&nbsp;&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="position" value="<?php echo $row['position']; ?>" maxlength="120" /><br /><br />

		<table >

			<tbody>

				<tr>

					<td style="color: #125654;">Profile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</td>

				</tr>

			</tbody>

		</table>

				<textarea name="prof" rows="5" cols="40"><?php echo $row['profile']; ?></textarea><br /><br />

		Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="email" value="<?php echo $row['email']; ?>" maxlength="50" /><br /><br />

		Image Name:&nbsp;&nbsp;

			<input type="text" name="img" value="<?php echo $row['image2']; ?>"maxlength="40" />(Eg. seth.jpg)

			<br /><br />

			<input type="submit" name="update1" value="Update" maxlength="50" />

	</form>
	<?php } ?>
	<?php } elseif(isset($_GET['d_event_id']))
	{
		$event_id = $_GET['d_event_id'];
		$result = mysql_query("SELECT * FROM drussa_events WHERE event_id = '$event_id' ") or die("Error in query: $result.".mysql_error());
		
	if((!isset($_GET['d_event_id']) || trim($_GET['d_event_id']) == ''))
	{
		die("Missing Record ID!");
	}
	if(mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		$event_title = $row['title'];
		$event_title = html_entity_decode($event_title, ENT_QUOTES);
		$event_title = htmlspecialchars_decode($event_title);
		$event_content = $row['content'];
		$event_content = html_entity_decode($event_content, ENT_QUOTES);
		$event_content = htmlspecialchars_decode($event_content);
		$event_date = $row['event_date'];
		$event_date = html_entity_decode($event_date, ENT_QUOTES);
		$event_date = htmlspecialchars_decode($event_date);
		$event_year = $row['event_year'];
		$event_year = html_entity_decode($event_year, ENT_QUOTES);
		$event_year = htmlspecialchars_decode($event_year);
		$event_month = $row['event_month'];
		$event_month = html_entity_decode($event_month, ENT_QUOTES);
		$event_month = htmlspecialchars_decode($event_month);
		$event_day = $row['event_day'];
		$event_day = html_entity_decode($event_day, ENT_QUOTES);
		$event_day = htmlspecialchars_decode($event_day);
		$day_name = $row['day_name'];
		$day_name = html_entity_decode($day_name, ENT_QUOTES);
		$day_name = htmlspecialchars_decode($day_name);
		$event_time = $row['time'];
		$event_time = html_entity_decode($event_time, ENT_QUOTES);
		$event_time = htmlspecialchars_decode($event_time);
		$event_venue = $row['venue'];
		$event_venue = html_entity_decode($event_venue, ENT_QUOTES);
		$event_venue = htmlspecialchars_decode($event_venue);
	?>
	
	<form action="loadtodb.php?d_event_id=<?php echo $row['event_id']; ?>" method="POST">

	<p><b>Please enter details of Event below.</b></p>
	<table><tbody>
	<tr><td>Event Title:</td><td><input type="text" name="Title1" value="<?php echo $event_title ; ?>" maxlength="256" /></td><td></td><td><select name="event_yr">
						<option value="2013" selected>2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
						<option value="2031">2031</option>
						<option value="2032">2032</option>
						<option value="2033">2033</option>
						</select></td></tr>

	<tr><td>Event Date:</td><td><input type="text" name="event_date" value="<?php echo $event_date ; ?>" maxlength="256" />(eg. Thursday, April 25, 2013)</td><td></td><td><select name="event_mth">
						<option value="January" selected>January</option>
						<option value="February" >February</option>
						<option value="March" >March</option>
						<option value="April" >April</option>
						<option value="May" >May</option>
						<option value="June" >June</option>
						<option value="July" >July</option>
						<option value="August" >August</option>
						<option value="September" >September</option>
						<option value="October" >October</option>
						<option value="November" >November</option>
						<option value="December" >December</option>
						</select></td></tr>

	<tr><td>Time:</td><td><input type="text" name="time" value="<?php echo $event_time ; ?>" maxlength="256" /></td><td></td><td><select name="event_day">
						<option value="1" selected>1</option>
						<option value="2" >2</option>
						<option value="3" >3</option>
						<option value="4" >4</option>
						<option value="5" >5</option>
						<option value="6" >6</option>
						<option value="7" >7</option>
						<option value="8" >8</option>
						<option value="9" >9</option>
						<option value="10" >10</option>
						<option value="11" >11</option>
						<option value="12" >12</option>
						<option value="13" >13</option>
						<option value="14" >14</option>
						<option value="15" >15</option>
						<option value="16" >16</option>
						<option value="17" >17</option>
						<option value="18" >18</option>
						<option value="19" >19</option>
						<option value="20" >20</option>
						<option value="21" >21</option>
						<option value="22" >22</option>
						<option value="23" >23</option>
						<option value="24" >24</option>
						<option value="25" >25</option>
						<option value="26" >26</option>
						<option value="27" >27</option>
						<option value="28" >28</option>
						<option value="29" >29</option>
						<option value="30" >30</option>
						<option value="31" >31</option>
						</select></td></tr>

	<tr><td>Venue:</td><td><input type="text" name="venue" value="<?php echo $event_venue ; ?>" maxlength="256" /></td><td></td><td><select name="day_name">
						<option value="Monday">Monday</option>
						<option value="Tuesday" selected>Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
						<option value="Sunday">Sunday</option>
						</select></td></tr>
	</tbody></table>
		<table ><tbody>
				<tr><td style="color: #125654;">Contents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td></tr>
		</tbody></table>
			<textarea name="content1" rows="25" cols="40"><?php echo $event_content ; ?></textarea><br /><br />
	<input type="submit" name="d_event_update" value="Update" maxlength="50" />
	</form>
	<?php } ?> 
	<?php } elseif(isset($_GET['event_id']))
	{
		$event_id = $_GET['event_id'];
		$result = mysql_query("SELECT * FROM events WHERE event_id = '$event_id' ") or die("Error in query: $result.".mysql_error());
		
	if((!isset($_GET['event_id']) || trim($_GET['event_id']) == ''))
	{
		die("Missing Record ID!");
	}
	if(mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		$event_title = $row['title'];
		$event_title = html_entity_decode($event_title, ENT_QUOTES);
		$event_title = htmlspecialchars_decode($event_title);
		$event_content = $row['content'];
		$event_content = html_entity_decode($event_content, ENT_QUOTES);
		$event_content = htmlspecialchars_decode($event_content);
		$event_date = $row['event_date'];
		$event_date = html_entity_decode($event_date, ENT_QUOTES);
		$event_date = htmlspecialchars_decode($event_date);
		$event_year = $row['event_year'];
		$event_year = html_entity_decode($event_year, ENT_QUOTES);
		$event_year = htmlspecialchars_decode($event_year);
		$event_month = $row['event_month'];
		$event_month = html_entity_decode($event_month, ENT_QUOTES);
		$event_month = htmlspecialchars_decode($event_month);
		$event_day = $row['event_day'];
		$event_day = html_entity_decode($event_day, ENT_QUOTES);
		$event_day = htmlspecialchars_decode($event_day);
		$day_name = $row['day_name'];
		$day_name = html_entity_decode($day_name, ENT_QUOTES);
		$day_name = htmlspecialchars_decode($day_name);
		$event_time = $row['time'];
		$event_time = html_entity_decode($event_time, ENT_QUOTES);
		$event_time = htmlspecialchars_decode($event_time);
		$event_venue = $row['venue'];
		$event_venue = html_entity_decode($event_venue, ENT_QUOTES);
		$event_venue = htmlspecialchars_decode($event_venue);
	?>
	
	<form action="loadtodb.php?event_id=<?php echo $row['event_id']; ?>" method="POST">

	<p><b>Please enter details of Event below.</b></p>
	<table><tbody>
	<tr><td>Event Title:</td><td><input type="text" name="Title1" value="<?php echo $event_title ; ?>" maxlength="256" /></td><td></td><td><select name="event_yr">
						<option value="2013" selected>2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
						<option value="2031">2031</option>
						<option value="2032">2032</option>
						<option value="2033">2033</option>
						</select></td></tr>

	<tr><td>Event Date:</td><td><input type="text" name="event_date" value="<?php echo $event_date ; ?>" maxlength="256" />(eg. Thursday, April 25, 2013)</td><td></td><td><select name="event_mth">
						<option value="January" selected>January</option>
						<option value="February" >February</option>
						<option value="March" >March</option>
						<option value="April" >April</option>
						<option value="May" >May</option>
						<option value="June" >June</option>
						<option value="July" >July</option>
						<option value="August" >August</option>
						<option value="September" >September</option>
						<option value="October" >October</option>
						<option value="November" >November</option>
						<option value="December" >December</option>
						</select></td></tr>

	<tr><td>Time:</td><td><input type="text" name="time" value="<?php echo $event_time ; ?>" maxlength="256" /></td><td></td><td><select name="event_day">
						<option value="1" selected>1</option>
						<option value="2" >2</option>
						<option value="3" >3</option>
						<option value="4" >4</option>
						<option value="5" >5</option>
						<option value="6" >6</option>
						<option value="7" >7</option>
						<option value="8" >8</option>
						<option value="9" >9</option>
						<option value="10" >10</option>
						<option value="11" >11</option>
						<option value="12" >12</option>
						<option value="13" >13</option>
						<option value="14" >14</option>
						<option value="15" >15</option>
						<option value="16" >16</option>
						<option value="17" >17</option>
						<option value="18" >18</option>
						<option value="19" >19</option>
						<option value="20" >20</option>
						<option value="21" >21</option>
						<option value="22" >22</option>
						<option value="23" >23</option>
						<option value="24" >24</option>
						<option value="25" >25</option>
						<option value="26" >26</option>
						<option value="27" >27</option>
						<option value="28" >28</option>
						<option value="29" >29</option>
						<option value="30" >30</option>
						<option value="31" >31</option>
						</select></td></tr>

	<tr><td>Venue:</td><td><input type="text" name="venue" value="<?php echo $event_venue ; ?>" maxlength="256" /></td><td></td><td><select name="day_name">
						<option value="Monday">Monday</option>
						<option value="Tuesday" selected>Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
						<option value="Sunday">Sunday</option>
						</select></td></tr>
	</tbody></table>
		<table ><tbody>
				<tr><td style="color: #125654;">Contents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td></tr>
		</tbody></table>
			<textarea name="content1" rows="25" cols="40"><?php echo $event_content ; ?></textarea><br /><br />
	<input type="submit" name="event_update" value="Update" maxlength="50" />
	</form>
	<?php } ?>
<?php } elseif(isset($_GET['win_id']))
	{
		$win_id = $_GET['win_id'];
		$result = mysql_query("SELECT * FROM awd_winners1 WHERE winner1_id = '$win_id'");
		if(!$result) echo mysql_error();
	
	if((!isset($_GET['win_id']) || trim($_GET['win_id']) == ''))
	{
		echo mysql_error();
		die("Missing Record ID");
	}
	
	if(mysql_num_rows($result) > 0 )
	{
		$row = mysql_fetch_assoc($result);
		$list = $row['details'];
		$list = html_entity_decode($list, ENT_QUOTES);
		$list = htmlspecialchars_decode($list);
	?>
	<form action="loadtodb.php?win_id=<?php echo $row['winner1_id']; ?>" method="POST">

	<p><b>Please enter details below</b></p>

		Grant Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;<input type="text" name="gt_type" value="<?php echo $row['grant_type']; ?>" maxlength="256" /><br /><br />
		Academic Year:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="gt_year" value="<?php echo $row['academic_year']; ?>" maxlength="256" /><br /><br />

		

		<table >

			<tbody>

				<tr>

					<td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</td>

				</tr>

			</tbody>

		</table>

				<textarea name="gt_content" rows="40" cols="80" style="width: 80%;"><?php echo $list ; ?></textarea><br /><br />

		

			<input type="submit" name="newgtsub1" value="Update" maxlength="50" />

	</form>
	<?php } ?>
<?php } elseif(isset($_REQUEST['inactive_call_id']))
{
	$inactivecall_id = $_REQUEST['inactive_call_id'];
	$query = mysql_query("SELECT * FROM inactive_calls WHERE inactive_call_id = '$inactivecall_id' ") or die("Error in query: $query.".mysql_error());
	
	if ((!isset($_REQUEST['inactive_call_id']) || trim($_REQUEST['inactive_call_id']) == ''))
	{
		die("Missing Record ID") ;
	}
	
	if (mysql_num_rows($query) > 0)
	{
		$row = mysql_fetch_assoc($query) ;
		
		$call_number = $row['proposal_num'];
		$call_number = html_entity_decode($call_number, ENT_QUOTES);
		$call_number = htmlspecialchars_decode($call_number);
		
		$principal_investigator = $row['principal_investigator'];
		$principal_investigator = html_entity_decode($principal_investigator, ENT_QUOTES);
		$principal_investigator = htmlspecialchars_decode($principal_investigator);
		
		$project_title = $row['project_title'];
		$project_title = html_entity_decode($project_title, ENT_QUOTES);
		$project_title = htmlspecialchars_decode($project_title);
		
		$department = $row['department'];
		$department = html_entity_decode($department, ENT_QUOTES);
		$department = htmlspecialchars_decode($department);
		
		$award_amount = $row['award_amount'];
		$award_amount = html_entity_decode($award_amount, ENT_QUOTES);
		$award_amount = htmlspecialchars_decode($award_amount);
		
		$project_status = $row['status'];
		$project_status = html_entity_decode($project_status, ENT_QUOTES);
		$project_status = htmlspecialchars_decode($project_status);
		
		$email_address = $row['email'];
		$email_address = html_entity_decode($email_address, ENT_QUOTES);
		$email_address = htmlspecialchars_decode($email_address);
		
		$summary = $row['summary'];
		$summary = html_entity_decode($summary, ENT_QUOTES);
		$summary = htmlspecialchars_decode($summary);
	?>
	<form action="loadtodb.php" method="POST" name="news_form" onsubmit=" return checkform()">
	<p><b>Please enter project details below.</b></p>
		<table>
		<tbody>
			<tr>
				<td>Grant Type:</td>
				<td><select name="granttype">
					<option value="SEED FUNDING">Seed Funding</option>
					<option value="INVESTIGATOR-LED GRANTS">Investigator-led Grants</option>
					<option value="LARGE MULTI-DISCIPLINARY GRANT">Large Multi-Disciplinary Grant</option>
					<option value="Not Applicable">Not Applicable</option>
					</select></td>
			</tr>
			</tr>
			<tr>
				<td>Call:</td><td>	<input type="text" name="call" value="<?php echo $call_number ;?>" maxlength="256" />(e.g. "1ST CALL FOR PROPOSALS", "2ND CALL FOR PROPOSALS" etc.)</td>
			</tr>
			<tr>
				<td>Project Title:</td><td>	<input type="text" name="proj_title" value="<?php echo $project_title ;?>" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Principal Investigator(s):</td><td>	<input type="text" name="prin_investigator" value="<?php echo $principal_investigator ;?>" maxlength="256" />(If multiple Principal Investigators, seperate with "/")</td>
			</tr>
			<tr>
				<td>Department:</td><td><input type="text" name="dept" value="<?php echo $department ;?>" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Email Address:</td><td><input type="text" name="email" value="<?php echo $email_address ;?>" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Award Amount:</td><td><input type="text" name="award_amt" value="<?php echo $award_amount ;?>" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Project Status:</td><td><input type="text" name="status" value="<?php echo $project_status ;?>" maxlength="256" /></td>
			</tr>
		</tbody>
		</table>
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Summary:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea name="summary" rows="20" cols="80" style="width: 80%;"><?php echo $summary ;?></textarea><br /><br />
			<input type="hidden" name="call_id" value="<?php echo $inactivecall_id ; ?>" />
			<input type="submit"  name="inactivesubmit" value="Submit" maxlength="50" />
	</form>
	<?php } ?>
<?php } elseif(isset($_REQUEST['pg_id']))
{
	$pg_id = $_REQUEST['pg_id'];
	$result = mysql_query("SELECT * FROM grants WHERE grant_id = '$pg_id' ") or die("Error in query: $result.".mysql_error());
	
	if ((!isset($_REQUEST['pg_id']) || trim($_REQUEST['pg_id']) == ''))
	{
		die("Missing Record ID") ;
	}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result) ;
	?>
	<form action="loadtodb.php?pg_id=<?php echo $row['grant_id']; ?>" method="POST" name="news_form" onsubmit=" return checkform()">
		
	    <p><b>Please enter details below.</b></p>

		<table ><tbody><tr>

			<td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			</td>
			</tr></tbody></table>

				<textarea name="details" rows="40" cols="80" style="width: 80%;"><?php echo $row['grant_details']; ?></textarea><br /><br />
		
		<input type="hidden" name="page_title" value="<?php echo $page_title ; ?>" />
		
		<input type="hidden"  name="page_id" value="<?php echo $page_id ; ?>" />
		<input type="submit"  name="<?php echo $btn_name ; ?>" value="Update" maxlength="50" />
		<input type="hidden"  name="btnsub1" value="<?php echo $btn_name ; ?>"  />
		</form>
		<?php } ?>
	
<?php } elseif(isset($_GET['roa_id']))
{
	$roa_id = $_GET['roa_id'] ;
	$result = mysql_query("SELECT * FROM research_alerts WHERE research_id = '$roa_id' ") or die("Error in query: $result.".mysql_error());
	
	if(mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		$title = $row['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
	?>
	<form action="loadtodb.php?roa_id=<?php echo $roa_id ; ?>" method="POST" name="research_alert">

	<p><b>Please enter details below.</b></p>
	<table><tbody>
	<tr>
		<td>Title:</td><td><input type="text" name="Title4" value="<?php echo $title ; ?>" maxlength="256" /></td>
	</tr>
	<tr>
		<td>Alert Number:</td>
		<td><input type="text" name="alert_numb" /></td>
	</tr>
	<tr>
		<td>PDF file:</td>
		<td><input type="text" name="pdf_file_1" value="<?php echo $row['pdf_name_1']; ?>" maxlength="256" /><i>(NIH)</i></td>
	</tr>
	<tr>
		<td>PDF file:</td>
		<td><input type="text" name="pdf_file_2" value="<?php echo $row['pdf_name_2']; ?>" maxlength="256" /><i>(Other Donors)</i></td>
	</tr>
	<tr>
		<td>PDF file:</td>
		<td><input type="text" name="pdf_file_3" value="<?php echo $row['pdf_name_3']; ?>" maxlength="256" /><i>(Prizes & Scholarships)</i></td>
	</tr>
	<tr>
		<td>PDF file:</td>
		<td><input type="text" name="pdf_file_4" value="<?php echo $row['pdf_name_4']; ?>" maxlength="256" /><i>(Travel Grants)</i></td>
	</tr>
	</tbody>	
	</table>
			<input type="submit" name="roa_update" value="Update" maxlength="50" />

	</form>
<?php } ?>
<?php } elseif(isset($_GET['call_update']))
{
	$call_id = $_GET['call_update'];
	$result = mysql_query("SELECT * FROM call_for_proposals WHERE call_id = '$call_id'") or die("Error in query: $result.".mysql_error());
	
	if ((!isset($_GET['call_update']) || trim($_GET['call_update']) == ''))
	{
		die("Missing record ID");
	}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		$call_type = $row['call_type'];
		$call_type = html_entity_decode($call_type, ENT_QUOTES);
		$call_type = htmlspecialchars_decode($call_type);
		$title = $row['title'];
		$title = html_entity_decode($title, ENT_QUOTES);
		$title = htmlspecialchars_decode($title);
		$content = $row['content'];
		$content = html_entity_decode($content, ENT_QUOTES);
		$content = htmlspecialchars_decode($content);
	?>
	<form action="loadtodb.php?call_update=<?php echo $row['call_id']; ?>" method="POST">

	<p><b>Please enter details below</b></p>

		Call Type:&nbsp;&nbsp;&nbsp;&nbsp;	<select name="call_type">
											<option value="Call For Proposals" selected>Call For Proposals</option>
											<option value="Others">Others</option>
											</select><br /><br /><br />
		
		Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="Title5" value="<?php echo $title ; ?>" maxlength="256" /><br /><br />
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea name="content5" rows="40" cols="80" style="width: 80%;"><?php echo $content ; ?></textarea><br /><br />
			<input type="submit" name="callupdate" value="Update" maxlength="50" />

	</form>
	<?php } ?>
 <?php }
 else

 {

	//form submitted

 }

 ?>

	

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>

<div id="footer">University of Ghana || &copy; 2012</div>

</div>
</div>
</body>

</html>