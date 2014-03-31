<?php 

session_start();

include("connect1.php"); 

$username = $_POST['username'];
$password = $_POST['old_pass'];
$password = hash("sha256", $password);
//echo $password ;
$newpassword = $_POST['new_pass'];
$confirmnewpassword = $_POST['confirm_pass'];

$result = mysql_query("SELECT adminpass FROM administrator WHERE adminname='$username'");
if(!$result) 
{ 
echo "The username you entered does not exist."; 
} 
else 
if($password != mysql_result($result, 0)) 
{ 
echo "You entered an incorrect password."; 
} 
else
if($newpassword == $confirmnewpassword) 
	$newpassword = hash("sha256", $newpassword);
    $sql=mysql_query("UPDATE administrator SET adminpass='$newpassword' WHERE adminname='$username'"); 
    if($sql) 
    { 
    echo "Congratulations! You have successfully changed your password.<a href='oridcms_panellogin.php'>Continue</a>";
    }
else
{ 
echo "The new password and confirm new password fields must be the same."; 
}  
?> 