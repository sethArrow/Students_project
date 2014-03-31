<?php
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
<!--<div id="homesearch">
<div  id="ughome" align="left">
</div>
<div id="search" align="right">
</div>
<hr>-->
	<div id="button">
<?php include('adminsidemenu.php'); ?>
</div>
<!-- End css3menu.com BODY section -->
<div id="content">	
<div id="welcomeheader">edit</div>
	
<?php
	{
	//$query = mysql_query("select * from news where news_id = '$id'");
	$result = mysql_query("select * from news where news_id = '$id'") or die("Error in query: $result.".mysql_error());

	//if((!isset($_GET['news_id']) || trim($_GET['news_id']) == ''))
	//{
	//	die("Missing record ID!");
	//}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
	?>
		<form action="loadtodb.php?news_id=<?php echo $row['news_id'] ; ?>" method="POST" name="news_form" onsubmit=" return checkform()">
		<input type="hidden" name="$id" value="<?php echo $id; ?>" />
	<p><b>Please enter details of news item below.</b></p>
		Title:&nbsp;&nbsp;&nbsp;&nbsp;	<input  id="news_title"type="text" name="Title" value="<?php echo $title ; ?>" maxlength="256" /><br><br>
		Image URL: 	<input type="text" name="img_url" value="<?php echo $image ; ?>" maxlength="100" />(If any)<br><br>
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea id="news_content" name="content" rows="40" cols="80" style="width: 80%;"><?php echo $content ; ?> </textarea><br><br>
		
			<input type="submit"  name="btn1" value="Update" maxlength="50" />
			
	</form>
	<?php } elseif(isset($_GET['orid_pg_id']))

{
	//form submitted
}
?>
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="footer">University of Ghana || &copy; 2012</div>
</div>

</div>

</body>
</html>