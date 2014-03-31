<?php

session_start();



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

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title>FILE UPLOAD</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

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

<hr>

<div id="button">

<?php include('adminsidemenu.php'); ?>

</div>

<div id="content" align="center">

	<div id="welcomeheader">File Upload</div>
<p><a style="color: #000066;" href="javascript:history.go(-1)">Back To Previous Page</a></p>
	<form action="uploads.php" method="post" enctype="multipart/form-data">
   <p>
      <label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> <br />
      <button>Upload File</button>
   <p>
</form>
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<div id="footer"> University of Ghana || &copy; 2013</div>

</div>
</div>
</body>

</html>