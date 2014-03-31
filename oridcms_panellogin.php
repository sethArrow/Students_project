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
</style><style type="text/css">	a:hover{color: blue; font-weight: bold;}	a:visited{color: blue;}</style>
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
alert("Password cannot be blank");}
</script>

<title>Administrator login</title>

</head>

<body marginwidth="0" marginheight="0" >
<div id="mainbody"><div id="maincontent">
<div id="fillcolor2"></div>
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div><div style="background-color:#b08b57; width: 992px; height:2px;"></div>

<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />
	<div id="welcomeheader" style=" padding-left: 200px;">ADMINISTRATOR</div>	<?php if(isset($_GET['changepassword']))		{			$change_password = $_GET['changepassword'];	?>	<div align="center">		<form action="changepassword.php" method="POST">			<table>				<tbody><br><br>					<tr>						<td>Enter Username:</td>						<td><input type="text" name="username" /></td>					</tr>					<tr>						<td>Enter Old Password:</td>						<td><input type="password" name="old_pass" maxlength="6" /></td>					</tr>					<tr>						<td>Enter New Password:</td>						<td><input type="password" name="new_pass" maxlength="20" /></td>					</tr>					<tr>						<td>Confirm New Password:</td>						<td><input type="password" name="confirm_pass" maxlength="20" /></td>					</tr>				</tbody>			</table>			<input type="submit" name="new_password" value="Update" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="oridcms_panellogin.php">Cancel</a>		</form>		<br><br><br><br><br><br><br>	</div>	<?php } else 	{ ?>
		<div align="center">
			<form action="login.php" method="POST">
				<br><br>
				<p><b>Please Enter Your Administrative Login Details Below</b></p><br>
				<label id="uname">USERNAME:</label>
					<input type="text" id="adminname" size="25" name="u_name" maxlength="10" placeholder="ENTER USERNAME" /><br><br>
				<label id="pwd">PASSWORD:</label>
					<input type="password" id="adminpass" name="psswd"size="25" maxlength="20" placeholder="ENTER PASSWORD"/><br><br>
					<input type="submit" value="LOGIN" onclick="f()" />
				
			</form>	<p><a href="oridcms_panellogin.php?changepassword='true'" align="center">Forgotten/Change Password</a></p><br><br><br><br><br><br>
		</div>	<?php } ?>
	<div id="footer" > University of Ghana || &copy; 2013</div>
</div>
</div>
</div></div>
</body>
</html>