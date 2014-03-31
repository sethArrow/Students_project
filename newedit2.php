<?php
session_start();
if (!$_SESSION['admin'])
{
	header('Location: oridcms_panellogin.php');
	die();
}
else
{}

include('connect1.php') ;
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

<!--<div id="myjquerymenu" class="jquerycssmenu">

	

</div>

<div id="homesearch">

<div  id="ughome" align="left">

</div>

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

<!-- End css3menu.com BODY section -->

<div id="content">	

<div id="welcomeheader">edit</div>

	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>

	<?php

	$staff_id = $_REQUEST['staff_id'];
	$result = mysql_query("select * from staff where staff_id = '$staff_id'") or die("Error in query: $result.".mysql_error());

	if ((!isset($_REQUEST['staff_id']) || trim($_REQUEST['staff_id']) == ''))
	{
		die("Missing record ID");
	}
	
	if (mysql_num_rows($result) > 0)
	{
		$row = mysql_fetch_assoc($result);
		
		$title3 = $row['title'];
		$title3 = html_entity_decode($title3, ENT_QUOTES);
		$title3 = htmlspecialchars_decode($title3);
		$fname = $row['fname'];
		$fname = html_entity_decode($fname, ENT_QUOTES);
		$fname = htmlspecialchars_decode($fname);
		$lname = $row['lname'];
		$lname = html_entity_decode($lname, ENT_QUOTES);
		$lname = htmlspecialchars_decode($lname);
		$othername = $row['othername'];
		$othername = html_entity_decode($othername, ENT_QUOTES);
		$othername = htmlspecialchars_decode($othername);
		$position = $row['position'];
		$position = html_entity_decode($position, ENT_QUOTES);
		$position = htmlspecialchars_decode($position);
		$image2 = $row['image2'];
		$image2 = html_entity_decode($image2, ENT_QUOTES);
		$image2 = htmlspecialchars_decode($image2);
		$email = $row['email'];
		$email = html_entity_decode($email, ENT_QUOTES);
		$email = htmlspecialchars_decode($email);
		$profile = $row['profile'];
		$profile = html_entity_decode($profile, ENT_QUOTES);
		$profile = htmlspecialchars_decode($profile);
	?>
	<form action="loadtodb.php?staff_id=<?php echo $row['staff_id']; ?>" method="POST">

	<p><b>Please enter staff details below.</b></p>

		Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<input type="text" id = "title" name = "Title3" value="<?php echo $title3 ; ?>" maxlength="50" /><br><br>

		First Name:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="first_name" value="<?php echo $fname ; ?>" maxlength="50" /><br><br>

		Last Name:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="last_name" value="<?php echo $lname ; ?>" maxlength="50" /><br><br>

		Other Names: <input type="text" name="o_name" value="<?php echo $othername ; ?>" maxlength="50" /><br><br>

		Position:&nbsp;&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="position" value="<?php echo $position ; ?>" maxlength="120" /><br><br>

		<table >

			<tbody>

				<tr>

					<td style="color: #125654;">Profile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</td>

				</tr>

			</tbody>

		</table>

				<textarea name="prof" rows="20" cols="40"><?php echo $profile ; ?></textarea><br><br>

		Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="email" value="<?php echo $email ; ?>" maxlength="50" /><br><br>

		Image Name:&nbsp;&nbsp;

			<input type="text" name="img" value="<?php echo $image2 ; ?>"maxlength="40" />(Eg. seth.jpg)

			<br><br>

			<input type="submit" name="update1" value="Update" maxlength="50" />

	</form>
	<?php
}
else

{

	//form submitted

}

?>

	

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<div id="footer">University of Ghana || &copy; 2012</div>

</div>



</div>



</body>

</html>