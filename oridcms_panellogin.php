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
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<!--<link rel="stylesheet" type="text/css" href="admin.css" />-->
<script>
function f()
{
if(document.getElementById('adminname').value.length==0)
alert("Username cannot be blank");
else if(document.getElementById('adminpass').value.length==0)
alert("Password cannot be blank");
</script>

<title>Administrator login</title>

</head>

<body marginwidth="0" marginheight="0" >
<div id="mainbody"><div id="maincontent">
<div id="fillcolor2"></div>
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>

<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
	<div id="welcomeheader" style=" padding-left: 200px;">ADMINISTRATOR</div>
		<div align="center">
			<form action="login.php" method="POST">
				<br><br>
				<p><b>Please Enter Your Administrative Login Details Below</b></p><br>
				<label id="uname">USERNAME:</label>
					<input type="text" id="adminname" size="25" name="u_name" maxlength="10" placeholder="ENTER USERNAME" /><br><br>
				<label id="pwd">PASSWORD:</label>
					<input type="password" id="adminpass" name="psswd"size="25" maxlength="20" placeholder="ENTER PASSWORD"/><br><br>
					<input type="submit" value="LOGIN" onclick="f()" />
				
			</form>
		</div>
	<div id="footer" > University of Ghana || &copy; 2013</div>
</div>
</div>
</div></div>
</body>
</html>