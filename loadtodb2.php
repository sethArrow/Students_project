<?php
$con = mysql_connect('localhost','root','');
if(!$con) echo mysql_error();
$db = mysql_select_db('orid_db');

include('connect1.php');

if(isset($_POST['winsubmit']))
{
	$grant_type = $_POST['grant_type'];
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$othername = $_POST['o_name'];
	$faculty = $_POST['fac_name'];
	$duration = 'N/A';
	$academic_year = $_POST['academic_year'];
	//$details = $_POST['details'];
	$department = $_POST['department'];
	$thesis_title = $_POST['thes_title'];
	$univ_reg1 = $_POST['uni_reg1'];
	$univ_reg2 = $_POST['uni_reg2'];
	$grant_amt = $_POST['grant_amt'];
	$thesis_status = $_POST['thes_status'];
	$date = date(current_timestamp);
	
	$query = mysql_query("INSERT INTO awd_winners VALUES ('', '$grant_type', '$firstname', '$othername', '$lastname', '$faculty', '$department', '$univ_reg1', '$univ_reg2', '$thesis_title', '$grant_amt', '$academic_year', '$duration', '$date')");
	//$query = mysql_query("INSERT INTO awd_winners1 VALUES ('', '$academic_year', '$details', '$date')");
	if(!$query) echo mysql_error();
	header("Location: grantwinners.php");
}

else{
die("Unable to load to database");
}
?>
