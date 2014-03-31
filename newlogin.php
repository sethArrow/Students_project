<?php
session_start();
include("connect1.php");

// username and password sent from form
$myusername=$_POST['u_name'];
$mypassword=$_POST['psswd'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$mypassword = hash("sha256", $mypassword);
//echo "$result['adminpass']";
//echo "$mypassword";
//exit;
$sql="SELECT * FROM administrator WHERE adminname='$myusername' AND adminpass='$mypassword' ";

//$stmt = $db->prepare($sql);
//$stmt->execute(array(":myusername" => $myusername,
//":mypassword" => $mypassword
//));
//$row = $stmt->fetch();
$result=mysql_query($sql);
$newresult = mysql_fetch_assoc($result);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1){
//echo "$count";
//exit;
// Register $myusername, $mypassword and redirect to file "oridcms_panel.php"
//session_register("myusername");
//session_register("mypassword");
if($newresult['adminpass'] == $mypassword)
{
$_SESSION['admin'] = $newresult['admin_id'];
}
header("Location: oridcms_panel.php?admin=".$_SESSION['admin']);

}
else {
echo "Wrong Username or Password. <a href='oridcms_panellogin.php'>Try Again</a>";
}
?>