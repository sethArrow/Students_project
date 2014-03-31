<?php
session_start();
include('connect1.php');
if (!$_SESSION['admin'])
{
	header('Location: oridcms_panellogin.php');
	die();
}
else
{}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title>Public Lectures</title>

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
<script src="gen_validatorv4.js" type="text/javascript"></script>

</head>

<body marginwidth="0" marginheight="0" >
<div id="mainbody"><div id="maincontent">
<div id="fillcolor2" ></div>
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
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
	<div id="welcomeheader">Public Lectures</div>
	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	<form action="loadtodb.php" method="POST" name="news_form" onsubmit=" return checkform()">
	<p><b>Please enter details below.</b></p>
		Lecture Type:&nbsp;&nbsp;&nbsp;&nbsp;	<select name="lect_type">
												<option value="INAUGURAL LECTURE" selected>Inaugural Lecture </option>
												<option value="INTER-FACULTY LECTURE" >Inter-faculty Lecture </option>
												<option value="AGGREY-FRASER-GUGGISBERG MEMORIAL LECTURE">Aggrey-Fraser-Guggisberg Memorial Lecture</option>
												<option value="OTHER PUBLIC LECTURES" >Other Public Lectures</option>
												</select><br><br>
		Lecture Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="lect_title" value="" maxlength="256" /><br><br>
		New Academic Year:	<select name="newacademic_yr">
							<option value="2013/2014 Academic Year" selected>2013/2014 Academic Year</option>
							<option value="2014/2015 Academic Year">2014/2015 Academic Year</option>
							<option value="2015/2016 Academic Year">2015/2016 Academic Year</option>
							<option value="2016/2017 Academic Year">2016/2017 Academic Year</option>
							<option value="2017/2018 Academic Year">2017/2018 Academic Year</option>
							<option value="2018/2019 Academic Year">2018/2019 Academic Year</option>
							<option value="2019/2020 Academic Year">2019/2020 Academic Year</option>
							<option value="2020/2021 Academic Year">2020/2021 Academic Year</option>
							<option value="2021/2022 Academic Year">2021/2022 Academic Year</option>
							<option value="2022/2023 Academic Year">2022/2023 Academic Year</option>
							<option value="2023/2024 Academic Year">2023/2024 Academic Year</option>
							<option value="2024/2025 Academic Year">2024/2025 Academic Year</option>
							<option value="2025/2026 Academic Year">2025/2026 Academic Year</option>
							<option value="2026/2027 Academic Year">2026/2027 Academic Year</option>
							<option value="2027/2028 Academic Year">2027/2028 Academic Year</option>
							<option value="2028/2029 Academic Year">2028/2029 Academic Year</option>
							<option value="2029/2030 Academic Year">2029/2030 Academic Year</option>
							<option value="2030/2031 Academic Year">2030/2031 Academic Year</option>
							<option value="2031/2032 Academic Year">2031/2032 Academic Year</option>
							<option value="2032/2033 Academic Year">2032/2033 Academic Year</option>
							<option value="2033/2034 Academic Year">2033/2034 Academic Year</option>
							<option value="2034/2035 Academic Year">2034/2035 Academic Year</option>
							</select><br><br>
		Academic Year: 	<input type="text" name="academic_yr" value="" maxlength="256" />&nbsp;&nbsp;( 2011/2012, 2012/2013 etc.)<br><br>
		Lecture Date: &nbsp;&nbsp;&nbsp;	<input type="text" name="lect_date" value="" maxlength="256" />&nbsp;&nbsp;( YYYY-MM-DD)<br><br>
		Lecture Venue:&nbsp;	<input type="text" name="venue" value="" maxlength="256" /><br><br>
		Delivered By:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="del_by" value="" maxlength="256" /><br><br>
		Department/Faculty:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="dept_faculty" value="" maxlength="256" /><br><br>
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Introduction:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea name="introduction" rows="20" cols="80" style="width: 80%;"></textarea><br><br>
		Image Url:&nbsp;&nbsp;	<input type="text" name="img_url" value="" maxlength="256" /><br><br>
		Video Url:&nbsp;&nbsp;&nbsp;<input type="text" name="vid_url" value="" maxlength="256" /><br><br>
		audio Url:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="aud_url" value="" maxlength="256" /><br><br>
			<input type="submit"  name="newbtnsubmit1" value="Submit" maxlength="50" />
	</form>
	<script type="text/javascript">
	var frmvalidator = new Validator("news_form");
	frmvalidator.addValidation("lect_type");
	</script>
</div>
<div id="footer"> University of Ghana || &copy; 2013</div>
</div>

</div>


</body>
</html>