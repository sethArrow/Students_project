<?php
include "newconnect.php";
$fname = filter_input(INPUT_POST,"fname",FILTER_SANITIZE_STRING);

$lastname = filter_input(INPUT_POST,"lname",FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);

$password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING);

$cpassword = filter_input(INPUT_POST,"cpassword",FILTER_SANITIZE_STRING);

if($_GET['op']=="reg"){
	$InputFlag = false;
	foreach($_POST as $field){
		if($field==""){
			$InputFlag = false;
			}
		else{
			$InputFlag = true;
			}
		}
	}
if($InputFlag = false){
	die("Problem Connecting with the database");
	}

$query= mysql_query("INSERT INTO attending(id ,reg_fname,reg_lastname,reg_email,reg_password1,reg_password2) VALUES ('','$fname','$lastname','$email','$password','$cpassword')");

if(!$query){echo mysql_error();
}
else{
	header("Location: att_stepone.php?op=thanks");
	}




  if ( $_GET["op"] == "thanks" )
    {
    echo "<h2>Thanks for registering!</h2>";
    }
    //The web form for input ability
    else
    {
    echo "<form action=\"?op=reg\" method=\"POST\">\n";
    echo "Username: <input name=\"username\" MAXLENGTH=\"16\">\n";
    echo "Password: <input type=\"password\" name=\"password\" MAXLENGTH=\"16\">\n";
    echo "Email Address: <input name=\"email\" MAXLENGTH=\"25\">\n";
    echo "<input type=\"submit\">\n";
    echo "</form>\n";
    }
    // EOF 





?>