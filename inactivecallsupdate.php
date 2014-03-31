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
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<script type="text/javascript">

function checkform()

{
var title = document.forms.news_form.Title.value;
var content = document.forms.news_form.content.value;
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

<title>Inactive Calls Update Form</title>

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
<script language="javascript">
function divHideShow(divToHideOrShow)
{
	var div = document.getElementById(divToHideOrShow);
	
	if (div.style.display == "none")
	{
		div.style.display = "block";
	}
	else
	{
		div.style.display = "none";
	}
}
</script>
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
	<div id="welcomeheader">Inactive Calls Update</div>
	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>
	<?php 
		if(isset($_GET['inactive_call']))
		{
			$query = mysql_query("SELECT * FROM inactive_calls ORDER BY proposal_num DESC ");
	?>
	<a href="javascript:divHideShow('row');"><b>AWARDED RESEARCH GRANTS</b></a>
	<div id="row" style="display: none; ">
		<ul style="list-style-type: none;">
	<?php while($result=mysql_fetch_assoc($query))
	{	
		$inactivecall_id = $result['inactive_call_id'];
		
		$call_number = $result['proposal_num'];
		$call_number = html_entity_decode($call_number, ENT_QUOTES);
		$call_number = htmlspecialchars_decode($call_number);
		
		$principal_investigator = $result['principal_investigator'];
		$principal_investigator = html_entity_decode($principal_investigator, ENT_QUOTES);
		$principal_investigator = htmlspecialchars_decode($principal_investigator);
		
		$project_title = $result['project_title'];
		$project_title = html_entity_decode($project_title, ENT_QUOTES);
		$project_title = htmlspecialchars_decode($project_title);
	?>
	<h2 style="color: #000066;"><?php echo $call_number; ?></h2>
		<p><h3 style="color: blue;"><?php echo $principal_investigator ;?>:</h3> <?php echo $project_title ;?></p>
		<font size="-1"><a href="newedit1.php?inactive_call_id=<?php echo $inactivecall_id ;?>">edit</a>&nbsp; | &nbsp; <a href="newdelete.php?inactive_call_id=<?php echo $inactivecall_id ;?>">delete</a></font><br />
	<?php } ?>
		</ul>
	</div>
	<p align="center"><font size="-1"><a href="inactivecallsupdate.php?update='true'">Add Awardee</a></font></p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<?php } elseif(isset($_GET['update']))
	{
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
				<td>Call:</td><td>	<input type="text" name="call" value="" maxlength="256" />(e.g. "1ST CALL FOR PROPOSALS", "2ND CALL FOR PROPOSALS" etc.)</td>
			</tr>
			<tr>
				<td>Project Title:</td><td>	<input type="text" name="proj_title" value="" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Principal Investigator(s):</td><td>	<input type="text" name="prin_investigator" value="" maxlength="256" />(If multiple Principal Investigators, seperate with "/")</td>
			</tr>
			<tr>
				<td>Department:</td><td><input type="text" name="dept" value="" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Email Address:</td><td><input type="text" name="email" value="" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Award Amount:</td><td><input type="text" name="award_amt" value="" maxlength="256" /></td>
			</tr>
			<tr>
				<td>Project Status:</td><td><input type="text" name="status" value="" maxlength="256" /></td>
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
				<textarea name="summary" rows="20" cols="80" style="width: 80%;"></textarea><br /><br />		
			<input type="submit"  name="newbtnsubmit" value="Submit" maxlength="50" />
	</form>
	<?php } elseif(isset($_REQUEST['success']))
	{
	?>
		<p align="center"> Upload/Update Successful.</p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
	<?php } else {} ?>
<br /><br />
	</div>
<div id="footer"> University of Ghana || &copy; 2012</div>
</div>

</div>


</body>
</html>