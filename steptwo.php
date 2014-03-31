<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="main">
<div id="content"  style="border: 0px solid black;">
<div id="header" align="center">
	<h3 align="center">UNIVERSITY OF GHANA</h3>
	<p align="center"><img src="../images/ug_logo_front.jpg" width="70px" height="70px"  /></p>
	<p align="center">OFFICE OF RESEARCH, INNOVATION AND DEVELOPMENT</p>
	<h3 align="center">UNIVERSITY OF GHANA CONFERENCE GRANTS APPLICATION(ATTENDING)</h3><br />
	<img style="margin-bottom: 0px; margin-top: 0px;" src="../images/divider.png" width="650px" height="30px" />
</div>

	<form id="SignupForm" name="SignupForm" enctype="multipart/form-data" method="POST" action="conference_db.php">
	<!-- 1st Fieldset -->
	<fieldset class="sectionwrap">
	<legend>PERSONAL INFORMATION</legend>
	<table align="center">
		<tbody>
			<tr>
				<td>Title:
					<select name="title" >
						<option value="Dr.">Dr.</option>
						<option value="Prof.">Prof.</option>
						<option value="Miss">Miss</option>
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
					</select>
				</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
			  <td>First Name(s):
					<input type="text" name="fname" id="first_name" />
				</td>
				<td></td>
				<td>Last Name:
					<input type="text" name="lname" id="last_name" />
			  </td>
			</tr>
			<tr>
				<td>College/Faculty/School:
					<input type="text" name="college" id="college" />
				</td>
				<td></td>
				<td>Department:
					<input type="text" name="department" id="department" />
				</td>
			</tr>
			<tr>
				<td>Position:
					<input type="text" name="position" id="position" />
				</td>
				<td></td>
				<td>Years of Service with the University:
					<input type="text" name="yrsofservice" id="yrsofservice" />
				</td>
			</tr>
			<tr>
				<td>Phone(office ext.):
					<input type="text" name="office_phone" id="office_phone" />
				</td>
				<td></td>
				<td>Cell Phone:
					<input type="text" name="mob_phone" id="mob_phone" />
				</td>
			</tr>
			<tr>
				<td>E-mail:
					<input type="text" name="email" id="email" />
				</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>Fax:
					<input type="text" name="fax" id="fax" />
				</td>
			</tr>
            <tr>
            	<td></td>
           	  <td></td>
                <td align="right"><input name="stepone" type="submit" value="Save &amp; Continue"></td>
		</tbody>
	</table>
	</fieldset>
	<script type="text/javascript" src="fieldLimiter.js"></script>
	</form>
	
	<!-- End of 1st Fieldset --><br /><br />

<script type="text/javascript" src="fieldLimiter.js"></script>
		
</div>
</div>
</body>
</html>