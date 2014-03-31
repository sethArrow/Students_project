<?php
session_start();
include('newconnect.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=6, IE=7, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
<style type="text/css">

div.savestatus{ /* Style for the "Saving Form Contents" DIV that is shown at the top of the form */
width:200px;
padding:2px 5px;
border:1px solid gray;
background:#fff6e5;
-webkit-box-shadow: 0 0 8px #818181;
box-shadow: 0 0 8px #818181;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius:5px;
color:red;
position:absolute;
top:-10px;
}

form#SignupForm div{ /*CSS used by demo form*/
margin-bottom:9px;
}

</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="autosaveform.js">

/***********************************************
* Auto Save Form script (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>

<script type="text/javascript">
var formsave1=new autosaveform({
	formid: 'SignupForm',
	includefields: ['text', 'textarea'],
	pause: 5000 //<--no comma following last option!
})
  
</script>
<script type="text/javascript" src="FieldEmptyCheck.js"></script>
<script type="text/javascript">

/***********************************************
* Disable "Enter" key in Form script- By Nurul Fadilah(nurul@REMOVETHISvolmedia.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
                
function handleEnter (field, event) {
		var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
		if (keyCode == 13) {
			var i;
			for (i = 0; i < field.form.elements.length; i++)
				if (field == field.form.elements[i])
					break;
			i = (i + 1) % field.form.elements.length;
			field.form.elements[i].focus();
			return false;
		} 
		else
		return true;
	}      
	
	// function validateEmpty(fld) {
    // var error = "";
 
    // if (fld.value.length == 0) {
	    // getElementById('#').style.display
        // fld.style.background = 'Yellow'; 
        // error = "The required field has not been filled in.\n"
    // } else {
        // fld.style.background = 'White';
    // }
    // return error;  
// }

</script>
<script type="text/javascript" src="formfieldlimiter.js">

/***********************************************
* Form field Limiter v2.0- � Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Project Page at http://www.dynamicdrive.com for full source code
***********************************************/

</script>

<style type="text/css">
html .jquerycssmenu{height: 1%;} 	
table {border-collapse: collapse; border: solid #000000 1px;}
tr, td {border: solid #CCC 1px;}	/*Holly Hack for IE7 and below*/
</style>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="../onlineapplications/newmenu.css" />

	<title>Online Application</title>
	<style type="text/css">
        body { font-family:Trebuchet MS, Arial, Helvetica, Sans-Serif; font-size:13px; margin:20px;}
        #main { width:960px; margin: 0px auto; border:solid 1px #000066; -moz-border-radius:10px; padding:20px; background-color:#ffffff;}
        #header {
	text-align: center;
	border-bottom: solid 0px #b2b3b5;
	width: auto;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 20px;
	margin-left: 7px;
}
        fieldset { border:none; width:auto;}
        legend { font-size:18px; margin:0px; padding:10px 0px; color:#b0232a; font-weight:bold;}
        label { display:block; margin:15px 0 5px;}
        input[type=text], input[type=password] { width:230px; padding:5px; border:solid 1px #000; border-style: inset;}
        .prev, .next { background-color:#b0232a; padding:5px 10px; color:#fff; text-decoration:none;}
        .prev:hover, .next:hover { background-color:#000; text-decoration:none;}
        .prev { float:left;}
        .next { float:right;}
        #steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        #makeWizard { background-color:#b0232a; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        #makeWizard:hover { background-color:#000;}
		textarea { wrap: hard;}
		.newlink {text-align: center;}
    </style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!--<script type="text/javascript" src="formToWizard.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
        });
    </script>
<script type="text/javascript" src="calculateSum.js"></script>
<script type="text/javascript" src="enablesubmit.js"></script>
<script>
$(":checkbox").on('change', function () {
    $('[name="' + $(this).attr('funding_source') + '"]').not(this).prop('checked', false);
});
</script>
</head>

<body marginwidth="0" marginheight="0" width="80%">

<div id="main">
<div id="content"  style="border: 0px solid black; margin: 0px 200px 0px 100px;">
<div id="header" align="center">
	<h3 align="center">UNIVERSITY OF GHANA</h3>
	<p align="center"><img src="../images/ug_logo_front.jpg" width="70px" height="70px"  /></p>
	<p align="center">OFFICE OF RESEARCH, INNOVATION AND DEVELOPMENT</p>
	<h3 align="center">UNIVERSITY OF GHANA CONFERENCE GRANTS APPLICATION(ATTENDING)</h3><br />
	<img style="margin-bottom: 0px; margin-top: 0px;" src="../images/divider.png" width="758px" height="30px" />
</div>

	<form id="SignupForm" name="SignupForm" enctype="multipart/form-data" method="POST" action="conference_db.php">
	<!-- 1st Fieldset -->
	<fieldset class="sectionwrap">
	<legend>FUNDING</legend>
	<table align="center">
		<tbody>
			<tr>
				<td>A. Estimated Total Travel Cost:
				</td>
				<td><input name="travel_cost" type="text" maxlength="100"></td>
			</tr>
			<tr>
			  <td>Attach Full/Total Budget:
			  </td>
				<td><input name="total_budget" type="file" size="5000000">
			  </td>
			</tr>
			<tr>
				<td>B. How much support are you requesting from the University of Ghana?:
				</td>
				<td><textarea name="support" cols="35" rows="2"></textarea>
				</td>
			</tr>
			<tr>
				<td>C. Are you receiving funding from any other source?:
				</td>
				<td><p>
				  <label>
				    <input type="checkbox" name="funding_source" value="Yes" id="funding_source_0">
				    Yes</label>
				  <label>
				    <input type="checkbox" name="funding_source" value="No" id="funding_source_1">
				    No</label>
				  </p>
				</td>
			</tr>
			<tr>
				<td>If yes, please provide details of source(s) and amounts:
				</td>
				<td><textarea name="source_details" cols="35" rows="4"></textarea>
				</td>
			</tr>
			<tr>
				<td>D. Have you ever received any conference grant from the University of Ghana?:
				</td>
			  <td><p>
					  <label>
					    <input type="checkbox" name="received_grant" value="Yes" id="received_grant_0">
					    Yes</label>
					  <label>
					    <input type="checkbox" name="received_grant" value="No" id="received_grant_1">
					    No</label>
			    </p>
				</td>
			</tr>
            <tr>
            	<td>If yes, please provide conference title, dates and amounts received:</td>
                <td><textarea name="conference_details" cols="35" rows="4"></textarea></td>
            </tr>
            <tr>
            	<td>E. Have any publications/collaborative research initiatives resulted from your above conferences?:</td>
                <td><p>
                  <label>
                    <input type="checkbox" name="publications" value="Yes" id="publications_0">
                    Yes</label>
                  <label>
                    <input type="checkbox" name="publications" value="No" id="publications_1">
                    No</label>
                </p></td>
            </tr>
            <tr>
            	<td>If yes, please provide details:</td>
                <td><textarea name="publication_details" cols="35" rows="4"></textarea></td>
            </tr>
            <tr>
            	<td>F. Have you attracted any research funding to the university within the last 5 years?:</td>
                <td><p>
                  <label>
                    <input type="checkbox" name="attracted_funding" value="Yes" id="attracted_funding_0">
                    Yes</label>
                  <label>
                    <input type="checkbox" name="attracted_funding" value="No" id="attracted_funding_1">
                    No</label>
                </p></td>
            </tr>
            <tr>
            	<td>If yes, please provide details:</td>
                <td><textarea name="fund_details" cols="35" rows="4"></textarea></td>
            </tr>
            <tr>
            	<td align="center" colspan="2"><input name="stepthree" type="submit" value="Save &amp; Continue"></td>
                <td></td>
            </tr>
		</tbody>
	</table>
	</fieldset>
	<script type="text/javascript" src="fieldLimiter.js"></script>
	</form>
	
	<!-- End of 1st Fieldset --><br /><br />

<script type="text/javascript" src="fieldLimiter.js"></script>
		
</div>
</div><div id="footer">University of Ghana || &copy; 2013</div>
</body>

</html>