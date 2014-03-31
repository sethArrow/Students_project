<?php
session_start();
if (!$_SESSION['admin']){	header('Location: oridcms_panellogin.php');	die();}else{}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<script type="text/javascript">

function checkform()

{
var title = document.forms.news_form.Title5.value;
var content = document.forms.news_form.content5.value;
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

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<!--<link rel="stylesheet" type="text/css" href="admin.css" />-->

<title>Call Update Form</title>
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

<!-- /TinyMCE --><style type="text/css" >	a:visited{color: blue;}</style>
</head>

<body marginwidth="0" marginheight="0">
<div id="mainbody"><div id="maincontent">
<div id="fillcolor2" ></div>
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
</div>
<hr>--><img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
<div id="button">
<?php include('adminsidemenu.php'); ?>
</div>
<div id="content">
	<div id="welcomeheader">Call Update</div>	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>	<?php if(isset($_GET['admin']))		{			$id = $_GET['admin'];			$query = mysql_query("SELECT call_id, title FROM call_for_proposals ORDER BY date");			?>	<ul>	<?php while($result = mysql_fetch_assoc($query)) { ?>	<h3><?php echo $result['title']; ?></h3>	<font size="-1"><a href="newedit1.php?call_id=<?php echo $result['call_id']; ?>">edit</a>	&nbsp; | &nbsp; <a href="delete.php?call_id=<?php echo $result['call_id']; ?>">delete</a></font>	<?php } ?>	<p align="center"><font size="-1"><a href="callupdate.php?new_call=1">New Call For Proposals</a></font></p>		</ul>		<?php } elseif(isset($_GET['new_call'])) 	{		$id = $_GET['new_call'];		?>
	<form action="loadtodb.php" method="POST">
	<p><b>Please enter details below</b></p>	<table >	<tbody>	<tr><td>Call Type:</td><td>	<select name="call_type">											<option value="Call For Proposals" selected>Call For Proposals</option>											<option value="Others">Others</option>											</select></td></tr>			<tr><td>Title:</td><td>	<input type="text" name="Title5" value="" maxlength="256" /></td></tr>				</tbody></table>	<table>	<tbody>
	<tr><td style="color: #125654;">Content:</td></tr>	<tr><td><textarea name="content5" rows="40" cols="80" style="width: 80%;"></textarea></td></tr>	</tbody>	</table>
	<input type="submit" name="btnsubmit5" value="Submit" maxlength="50" />	
	</form>	<?php } else	{		$id = $_GET['grant_id'];	?>	<form action="loadtodb2.php" method="POST" name="news_form" onsubmit=" return checkform()">	<p><b>Please enter details of news item below.</b></p>		Academic Year: 	<input type="text" name="academic_year" value="" maxlength="100" /><br><br>		<table >			<tbody>				<tr><td style="color: #125654;">Details:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>				</tr>			</tbody>		</table>				<textarea name="details" rows="40" cols="80" style="width: 80%;"></textarea><br><br>		<input type="submit"  name="winsubmit" value="Submit" maxlength="50" />	</form>	<?php } ?>	<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="footer"> University of Ghana || &copy; 2012</div>
</div>

</div>


</body>
</html>