<?php
session_start();
if (!$_SESSION['admin'])
{
	header('Location: oridcms_panellogin.php');
	die();
}
else
{}	if(isset($_GET['pg_id']))	{		$page_id = $_GET['pg_id'];		if($page_id == 1)		{			$btn_name = 'new_btn1';			$welcome_header = 'about drussa';			$page_title = 'DRUSSA';			$txtarea_name = 'dcontent';		}		elseif($page_id == 2)		{			$btn_name = 'new_btn2';			$welcome_header = 'group of 24';			$page_title = 'DRUSSA Group of 24';			$txtarea_name = 'grp_content';		}		elseif($page_id == 3)		{			$btn_name = 'new_btn3';			$welcome_header = 'drussa group events';			$page_title = 'DRUSSA GROUP EVENTS';			$txtarea_name = 'grpev_content';		}		elseif($page_id == 4)		{			$btn_name = 'new_btn4';			$welcome_header = 'faculty development grants';			$page_title = 'FACULTY DEVELOPMENT GRANTS';			$txtarea_name = 'facdev_content';		}		elseif($page_id == 5)		{			$btn_name = 'new_btn5';			$welcome_header = 'conference grants';			$page_title = 'CONFERENCE GRANTS';			$txtarea_name = 'cgrants_content';		}		elseif($page_id == 6)		{			$btn_name = 'new_btn6';			$welcome_header = 'bsu initiative';			$page_title = 'BSU INITIATIVE';			$txtarea_name = 'bsu_content';		}		elseif($page_id == 7)		{			$btn_name = 'new_btn7';			$welcome_header = 'carnegie grants';			$page_title = 'CARNEGIE';			$txtarea_name = 'carnegie_content';		}		else 		{			$btn_name = 'new_btn8';			$welcome_header = 'treccafrica';			$page_title = 'TreccAfrica';			$txtarea_name = 'tafrica_content';		}		}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<title><?php echo $page_title ; ?></title>
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
</script><!-- /TinyMCE --><style type="text/css">a:visited {color: blue;}</style><script src="gen_validatorv4.js" type="text/javascript"></script>
</head>
<body marginwidth="0" marginheight="0" >
<div id="mainbody"><div id="maincontent">
<div id="fillcolor2" ></div>
<div id="ugoridlogo"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
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
<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
<div id="button">
<?php include('adminsidemenu.php'); ?>
</div>

<div id="content">
	<div id="welcomeheader"><?php echo $welcome_header ; ?></div><p><a style="color: #000066;" href="javascript:history.go(-1)">Go Back</a></p>
		<form action="loadtodb.php" method="POST" name="news_form">		
	    <p><b>Please enter details below.</b></p>
		<table ><tbody><tr>
			<td style="color: #125654;">Content:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>			</tr></tbody></table>
				<textarea name="details" rows="40" cols="80" style="width: 80%;"></textarea><br><br>				<input type="hidden" name="page_title" value="<?php echo $page_title ; ?>" />				<input type="hidden"  name="page_id" value="<?php echo $page_id ; ?>" />
		<input type="submit"  name="<?php echo $btn_name ; ?>" value="Submit" maxlength="50" />		<input type="hidden"  name="button_name" value="<?php echo $btn_name ; ?>"  />		</form>		<script type="text/javascript">		var frmvalidator = new Validator("news_form");		frmvalidator.addValidation("details", "req", "Please fill content field");				</script>
</div>
<div id="footer"> University of Ghana || &copy; 2013</div>
</div>

</div>


</body>
</html>