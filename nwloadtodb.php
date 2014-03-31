<?php 
$con = mysql_connect('localhost', 'root', '');
if (!$con) echo mysql_error();
$db = mysql_select_db('orid_db');

include('connect1.php');

if (isset($_POST['newbtnsubmit1']))
{
	$lecture_type = $_POST['lect_type'];
	$lecture_title = $_POST['lect_title'];
	$academic_year = $_POST['academic_yr'];
	$lecture_date = $_POST['lect_date'];
	$lecture_venue = $_POST['venue'];
	$delivered_by = $_POST['del_by'];
	$introduction = $_POST['introduction'];
	$introduction = utf8_encode($introduction);
	//echo $intro;
	//exit;
	$image_url = $_POST['img_url'];
	$video_url = $_POST['vid_url'];
	$audio_url = $_POST['aud_url'];
	$entry_date = date(current_timestamp);
	
	$query = mysql_query("INSERT INTO public_lectures VALUES('', '$lecture_type', '$lecture_title', '$audio_url', '$video_url', '$image_url', '$academic_yr', '$entry_date', '$introduction', '$lecture_date, '$lecture_venue', '$delivered_by' )");
	if(!$query) echo mysql_error();
	header("Location: publiclectureupdate.php");
}

else{}
?>