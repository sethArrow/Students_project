<?php
//connection script

$host = "localhost";
$user = "root";
$password = "";
$dbname = "conference_db";

$error1 = "Problem connecting to database. Please try again.";
mysql_connect($host,$user,$password) or die ($error1);
mysql_select_db($dbname)  or die ($error1);


?>