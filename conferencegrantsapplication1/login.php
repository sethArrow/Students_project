<?php
session_start();
include "newconnect.php";

$email =filter_input(INPUT_POST ,"email",FILTER_SANITIZE_STRING);

$password =filter_input(INPUT_POST ,"password",FILTER_SANITIZE_STRING);

$query=mysql_query("SELECT * FROM attending WHERE reg_email='$email' AND reg_password1 ='$password' LIMIT 1");

if($result = mysql_fetch_assoc($query)){
	$name =$result['reg_fname'];
	$_SESSION['valid_id']=$result['id'];              
	$_SESSION['username']=$result['reg_fname'];
	$_SESSION['valid_time']=time();
	
	header("Location:att_stepone.php?use='$name'");
	}else{echo 'sory';}






?>