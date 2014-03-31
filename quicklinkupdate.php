<?php
session_start();
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
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<script type="text/javascript">

function checkform()

{
var title = document.forms.news_form.Title2.value;
var content = document.forms.news_form.content2.value;
if(parseInt(title == 0) || (content == 0))
{
alert("Please enter a Title and/or content.!!");
return false;
}
else
{
 return true;
}
}
</script>
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<!--<link rel="stylesheet" type="text/css" href="admin.css" />-->

<title>New Quick Link</title>
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
			<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>

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
<hr>
<div id="button">
<?php include('adminsidemenu.php'); ?>
</div>

<div id="content">
<div id="welcomeheader">Add New Quick Link Item </div>
	<div id="nwcontent1">
	<form action="loadtodb.php" method="POST" name="news_form">
	<p><b>Please enter details below.</b></p>
		Title:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="Title2" value="" maxlength="256" /><br><br>
		
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Contents:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea name="content2" rows="40" cols="80" width="80%"></textarea><br><br>
			<input type="submit" name="btnsubmit4" value="Submit" maxlength="50" />
	</form>
	</div>
</div>
<div id="footer"> University of Ghana || &copy; 2013</div>
</div></div>


</body>
</html>