<?php
include 'init.php';
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
* Form field Limiter v2.0- ? Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Project Page at http://www.dynamicdrive.com for full source code
***********************************************/

</script>
<script language="javascript">

function show(elem){
	$('.dynamic_link').hide();
	$('#'+elem).show();
	}
</script>



<style type="text/css">
html .jquerycssmenu{height: 1%;} 	
</style>
<script type="text/javascript" src="jquerycssmenu.js"></script>


<link rel="stylesheet" type="text/css" href="../onlineapplications/newmenu.css" />

	<title>Online Application</title>
	<style type="text/css">
		.button {
				  padding:5px;
				  background-color: #dcdcdc;
				  border: 1px solid #666;
				  color:#ffffff;
				  width: 250px;
				  text-decoration:none;
				  -webkit-border-radius: 4px;
				  -moz-border-radius: 4px;
				  border-radius: 4px;
				  
				  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
				 -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
				 -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
				 box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
				}
		.link {
				text-decoration:none;
			  }
		.detail{
				padding:5px;
				  background-color: #dcdcdc;
				  border: 1px solid #666;
				  color:#000000;
				  width: 150px;
				  text-decoration:none;
				  -webkit-border-radius: 4px;
				  -moz-border-radius: 4px;
				  border-radius: 4px;
				  
				  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
				 -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
				 -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
				 box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
				}
				
</style>
	<style type="text/css">
        body { font-family:Trebuchet MS, Arial, Helvetica, Sans-Serif; font-size:13px; margin:0px; height:1200px;}
        #main { width:960px; margin: 0px auto; border:solid 1px #000066; -moz-border-radius:10px; padding:20px; background-color:#ffffff; }
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
		
		input[type=text] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
border-radius: 5px;
}
input[type=text]:focus {border-color:#333; }

		input[type=email] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
border-radius: 5px;
}
input[type=email]:focus {border-color:#333; }

		input[type=password] {padding:5px; border:2px solid #ccc; 
-webkit-border-radius: 5px;
border-radius: 5px;
}
input[type=password]:focus {border-color:#333; }

input[type=submit] {padding:5px 15px; background:#ccc; border:0 none;
cursor:pointer;
-webkit-border-radius: 5px;
border-radius: 5px; }
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

</head>

<body marginwidth="0" marginheight="0" width="80%">

<div id="main" style="height:1000px;">
<div id="content"  style="border: 0px solid black; ">
<div id="headwrapper" style="margin: 0px 125px 0px 100px;">
<div id="header" align="center"  >
	<h3 align="center">UNIVERSITY OF GHANA</h3>
	<p align="center"><img src="../images/ug_logo_front.jpg" width="70px" height="70px" /></p>
	<p align="center">OFFICE OF RESEARCH, INNOVATION AND DEVELOPMENT</p>
	<h3 align="center">UNIVERSITY OF GHANA CONFERENCE GRANTS APPLICATION(ATTENDING)</h3><br />
	<img style="margin-bottom: 0px; margin-top: 0px; margin-right:600px;" src="../images/divider.png" width="750px" height="30px" />
</div><br />
	</div>
        <div id="new_register" class="new_register" style="height:100px; background:#CCC; width:250px; float:left; margin-left:150px; box-shadow: 5px 5px 2px #888888; border-bottom-right-radius:20px; border-bottom-left-radius:20px; border-top-left-radius:20px; border-top-right-radius:20px;" >
        <p align="center" ><h3 align="center">New User Register</h3></p>
        <div id="reg">
        <ul style="list-style-type:none; margin-top:20px; margin-left:20px">
			<li class="detail" style="text-align:center"><a  style="text-decoration:none;" href="#" onClick="show('link1')">REGISTER</a></li><br />
		</ul>
        </div>
        
        <div id="link1" class="dynamic_link" style="display:none; background:#fff;  height:300px; margin:60px 50px 0px 80px; width:500px; float:none;" align="center" >
        
        <?php  
		if(isset($_POST['fname'] ,$_POST['lname'],$_POST['email'],$_POST['password'],$_POST['cpassword'])){
		
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$email =$_POST['email'];	
		$pass1=$_POST['password']; 
		$pass2=$_POST['cpassword'];
		
		
		   $errors=array();
		
		   if(empty($firstname)||empty($lastname)||empty($email)||empty($pass) || empty($pass2)){
		   $errors[]="All Fields Required";
			}
			//validating the email using the new HTML5 syntax
			elseif(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
				$errors="email fields are not valid";
				}
			elseif(strlen($firstname)>200|| strlen($lastname)>200  || strlen($email)>200 || strlen($pass1)>200){$errors[] ="One or more fields contains too many characters  ";}
		elseif(user_exists($email)){
			
			$errors[]="that email has already been registered";
			}
				
				
			if(!empty($errors)){
					foreach ($errors as $error ){
						echo $error,'<br />';
						}
					}
				else{
					
					}
		}
		
		?>
        <form action=" " method="post" name="row1">
         <table width="331"  cellspacing="1" align="center" >
  <tr>
    <td width="134" height="38"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  >First Name</font></td>
    <td width="9">&nbsp;</td>
    <td width="182"><input name="fname" type="text"></td>
  </tr>
   <tr>
    <td width="134" height="38"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  >Last Name</font></td>
    <td width="9">&nbsp;</td>
    <td width="182"><input name="lname" type="text"></td>
  </tr>
  <tr>
    <td height="41"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  >Email:</font></td>
    <td>&nbsp;</td>
    <td><input name="email" type="text"></td>
  </tr>
  <tr>
    <td height="40"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  >Password:</font></td>
    <td>&nbsp;</td>
    <td><input name="password" type="password"></td>
  </tr>
  <tr>
    <td height="40"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  > Confirm Password:</font></td>
    <td>&nbsp;</td>
    <td><input name="cpassword" type="password"></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="register" type="submit" value="register"></td>
  </tr>
</table>
    </form>
        </div>
        </div>
      
        <div id="new_register1" class="new_register1" style="height:100px; background:#CCC; width:250px; float:right; margin-right:150px; box-shadow: 5px 5px 2px #888888; border-bottom-left-radius:20px; border-bottom-right-radius:20px; border-top-left-radius:20px; border-top-right-radius:20px" >
        <p align="center"  ><h3 align="center">Existing User</h3></p>
  
        <ul style="list-style-type:none; margin-top:20px; margin-left:20px">
			<li class="detail" style="text-align:center"><a href="#" style=" text-decoration:none;" onClick="show('link2')">LOGIN</a></li><br />
		</ul>
        </div>
         <div id="link2" class="dynamic_link"   style="display:none; background:#fff;  height:120px; margin:160px 100px 0px 230px; width:450px; float:none;" align="center" >
    <div id="form2" style="margin:20px 10px 0 30px">
        <form action="login.php" method="post" name="row2">
         <table width="236"  cellspacing="1" align="center" >
          <tr>
    <td width="63" height="32"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  > Email:</font></td>
    <td width="10">&nbsp;</td>
    <td width="151"><input name="email" type="text"></td>
  </tr>
  <tr>
    <td height="43"><font style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px; font-weight:700"  >Password:</font></td>
    <td>&nbsp;</td>
    <td><input name="password" type="password"></td>
  </tr>
  <tr>
    <td height="27">&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="log" type="submit" value="Login" ></td>
  </tr>
</table>
   </form>
</div>
        </div>
               
         
   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	

<script type="text/javascript" src="fieldLimiter.js"></script>
		
</div>
</div><br /><br /><br /><br /><br /><br /><br />
	<!--<div id="footer" style="margin-bottom:500px" align="center">University of Ghana || &copy; 2013</div>-->
</div>
</div>

</body>

</html>