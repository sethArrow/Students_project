<?php
//connection script

$host = "localhost";
$user = "root";
$password = "";
$dbname = "conference_db";

$error = "Problem connecting to database. Please try again.";
mysql_connect($host,$user,$password) or die ($error);
mysql_select_db($dbname)  or die ($error);


?>