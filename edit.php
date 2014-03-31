<?phpinclude('connect1.php') ;?>
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
		theme_advanced_resizing : true,				theme_advanced_fonts : "Candara,Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Candara=candara;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",				//theme_advanced_font_sizes : "8pt,9pt,10pt,11pt,12px,13pt,14px,15pt,16px,24px",

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
</div><div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<!--<div id="homesearch">
<div  id="ughome" align="left">
</div>
<div id="search" align="right"><form method="get" action="resultspage.php"><input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" /><input type="submit" name="btn" value="Search" /><input type="hidden" name="site" value="Orid" /><input type="hidden" name="client" value="Orid" /><input type="hidden" name="proxystylesheet" value="Orid" /><input type="hidden" name="output" value="xml_no_dtd" /><input type="hidden" name="filter" value="0" /></form></div>
</div>
<hr>--><img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />	
	<div id="button">
<?php include('adminsidemenu.php'); ?>
</div>
<!-- End css3menu.com BODY section -->
<div id="content">	
<div id="welcomeheader">edit</div>
	
<?php	if(isset($_GET['news_id']))
	{	$id = $_GET['news_id'];
	//$query = mysql_query("select * from news where news_id = '$id'");
	$result = mysql_query("select * from news where news_id = '$id'") or die("Error in query: $result.".mysql_error());

	//if((!isset($_GET['news_id']) || trim($_GET['news_id']) == ''))
	//{
	//	die("Missing record ID!");
	//}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);		$title = $row['title'];		$title = html_entity_decode($title, ENT_QUOTES);		$title = htmlspecialchars_decode($title);		$content = $row['content'];		$content = html_entity_decode($content, ENT_QUOTES);		$content = htmlspecialchars_decode($content);		$image = $row['story_image'];		$image = html_entity_decode($image, ENT_QUOTES);		$image = htmlspecialchars_decode($image);
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
			
	</form>	<?php } ?>	<?php } elseif(isset($_GET['ugrf_id']))	{		$ugrf_call_id = $_GET['ugrf_id'];		$result = mysql_query("SELECT * FROM ugrf_calls WHERE ugrf_call_id = '$ugrf_call_id'") or die ("Error in query: $result.".mysql_error());	if(mysql_num_rows($result) > 0)	{		$row = mysql_fetch_assoc($result);		$call_title = $row['title'];		$call_title = html_entity_decode($call_title, ENT_QUOTES);		$call_title = htmlspecialchars_decode($call_title);		$call_content = $row['content'];		$call_content = html_entity_decode($call_content, ENT_QUOTES);		$call_content = htmlspecialchars_decode($call_content);	?>	<form action="loadtodb.php?ugrf_call_id=<?php echo $row['ugrf_call_id']; ?>" method="POST" name="ugrfcalls">	<p><b>Please enter details below.</b></p>		Title:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="Title6" value="<?php echo $call_title ; ?>" maxlength="256" /><br><br>		<table ><tbody>				<tr><td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>				</tbody>		</table>				<textarea name="content6" rows="40" cols="80" style="width: 80%;"><?php echo $call_content ; ?></textarea><br><br>			<input type="submit" name="ugrf_update" value="Update" maxlength="50" />	</form>	<?php } ?>	<?php } elseif(isset($_GET['ipseminar']))	{	?>	<form action="loadtodb.php" method="POST" name="ipseminar">		<table>			<tbody>				<tr>					<td>Title:</td>					<td><input type="text" name="seminar_title" value="" /></td>				</tr>				<tr>					<td>Theme:</td>					<td><input type="text" name="seminar_theme" value="" /></td>				</tr>				<tr>					<td>Date:</td>					<td><input type="text" name="seminar_date" value="" />&nbsp;&nbsp;(YYYY-MM-DD)</td>				</tr>				<tr>					<td>Venue:</td>					<td><input type="text" name="seminar_venue" value="" /></td>				</tr>				<tr>					<td>Time:</td>					<td><input type="text" name="seminar_time" value="" />&nbsp;&nbsp;(e.g. 8:00 pm)</td>				</tr>				<tr>					<td style="width: 200px">Details:</td>					<td><textarea name="seminar_details" cols="30" rows="35"></textarea></td>				</tr>				<tr>					<td></td>					<td><input type="submit" value="submit" name="ipseminar_submit" /></td>				</tr>			</tbody>		</table>	</form>
	<?php } elseif(isset($_GET['orid_pg_id']))	{	$page_id = $_GET['orid_pg_id'];	$result = mysql_query("SELECT * FROM orid_pages WHERE page_id = '$page_id'") or die ("Error in query: $result.".mysql_error());		//if((!isset($_GET['orid_pg_id']) || trim($_GET['orid_pg_id'] == ''))	//{	//	die("Missing Record ID! ");	//}		if(mysql_num_rows($result) > 0)	{		$row = mysql_fetch_assoc($result);		$page_content = $row['page_contents'];		$page_content = html_entity_decode($page_content, ENT_QUOTES);		$page_content = htmlspecialchars_decode($page_content);		$page_title = $row['page_title'];		$page_title = html_entity_decode($page_title, ENT_QUOTES);		$page_title = htmlspecialchars_decode($page_title);		$page_header = $row['page_header'];		$page_header = html_entity_decode($page_header, ENT_QUOTES);		$page_header = htmlspecialchars_decode($page_header);	?>	<form action="loadtodb.php?orid_pg_id=<?php echo $row['page_id'] ; ?>" method="POST" name="news_form" onsubmit="return checkform()">	<input type="hidden" name="$page_id" value="<?php echo $page_id ; ?>" />		<p><b>Please enter details below</b></p>		Page Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="page_title" type="text" name="pg_title" value="<?php echo $page_title ; ?>" maxlength="256" /><br><br>		Content Header:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="pg_header" value="<?php echo $page_header ; ?>" maxlength="256" /><br><br>		<table >			<tbody>				<tr>					<td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					</td>				</tr>			</tbody>		</table>				<textarea id="page_content" name="pg_content" rows="40" cols="80" style="width: 80%;"><?php echo $page_content ; ?></textarea><br><br>		<input type="submit" name="newpgsub1" value="Update" maxlength="50" />	</form>	<?php } ?>
<?php } else
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