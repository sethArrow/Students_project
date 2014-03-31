<?php
session_start();
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
<link rel="stylesheet" type="text/css" href="provccss.css" />
<!--<link rel="stylesheet" type="text/css" href="admin.css" />-->

<title>Staff Update Form</title>

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
	<div id="welcomeheader">New Staff</div>
	<div id="nwcontent1">
	<form action="loadtodb.php" method="POST">
	<p><b>Please enter staff details below.</b></p>
		Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select id = "title" name = "Title3" width = "20px">
											<option value = "0" selected>Title</option>
											<option value="Mr.">Mr.</option>
											<option value="Ms.">Ms.</option>
											<option value="Mrs.">Mrs.</option>
											<option value="Dr.">Dr.</option>
											<option value="Prof.">Prof.</option>
			</select><br><br>
		First Name:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="first_name" value="" maxlength="50" /><br><br>
		Last Name:&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="last_name" value="" maxlength="50" /><br><br>
		Other Names: <input type="text" name="o_name" value="" maxlength="50" /><br><br>
		Position:&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="position" value="" maxlength="120" /><br><br>
		<table >
			<tbody>
				<tr>
					<td style="color: #125654;">Profile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
				<textarea name="prof" rows="5" cols="40"></textarea><br><br>
		Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="text" name="email" value="" maxlength="50" /><br><br>
		Image Name:&nbsp;&nbsp;
			<input type="text" name="img" maxlength="40" />(Eg. seth.jpg)
			<br><br>
			<input type="submit" name="btnsubmit3" value="Submit" maxlength="50" />
	</form>
	</div>
</div>
<div id="footer"> University of Ghana || &copy; 2013</div>
</div>

</div>

</body>
</html>