<?php
$con = mysql_connect('localhost','oridusr','!3kleaners2');
if(!$con) echo mysql_error();
$db = mysql_select_db('orid_db');

include('connect1.php');

if(isset($_POST['btnsubmit1'])) {

/* Form elements for News Item */
	$title = $_POST['Title'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$title = htmlentities(str_replace("'","\'", $title));
	$content = $_POST['content'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'","\'", $content));
	$image_url = $_POST['img_url'];
	$image_url = htmlspecialchars($image_url, ENT_QUOTES);
	$image_url = htmlentities(str_replace("'","\'", $image_url));
	$date = date(current_timestamp);
/*end*/

	$query = mysql_query("INSERT INTO news VALUES('', '$image_url', '$title', '$content', '$date')
					");
					if(!$query) echo mysql_error();
										
					header("Location: newsupdateform.php");
	
}
elseif(isset($_POST['btn1']))
{
	$id = $_GET['news_id'];
	$title = $_POST['Title'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$title = htmlentities(str_replace("'","\'", $title));
	$content = $_POST['content'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'","\'", $content));
	$image_url = $_POST['img_url'];
	$image_url = htmlspecialchars($image_url, ENT_QUOTES);
	$image_url = htmlentities(str_replace("'","\'", $image_url));
	
	$query1 = mysql_query("UPDATE news SET story_image = '$image_url', title = '$title', content = '$content' WHERE news_id = '$id' ");
	if(!$query1) echo mysql_error();
										
	header("Location: newsupdate.php");
}
/* End of News Section */
/* Beginning of Events Section */
elseif(isset($_POST['btnsubmit2'])) {

/* Form elements for Event */
	$title = $_POST['Title1'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$title = htmlentities(str_replace("'","\'", $title));
	$content = $_POST['content1'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'","\'", $content));
	$event_year = $_POST['event_yr'];
	$event_year = htmlspecialchars($event_year, ENT_QUOTES);
	$event_year = htmlentities(str_replace("'","\'", $event_year));
	$event_month = $_POST['event_mth'];
	$event_month = htmlspecialchars($event_month, ENT_QUOTES);
	$event_month = htmlentities(str_replace("'","\'", $event_month));
	$event_day = $_POST['event_day'];
	$event_day = htmlspecialchars($event_day, ENT_QUOTES);
	$event_day = htmlentities(str_replace("'","\'", $event_day));
	$event_date = $_POST['event_date'];
	$event_date = htmlspecialchars($event_date, ENT_QUOTES);
	$event_date = htmlentities(str_replace("'","\'", $event_date));
	$day_name = $_POST['day_name'];
	$day_name = htmlspecialchars($day_name, ENT_QUOTES);
	$day_name = htmlentities(str_replace("'","\'", $day_name));
	$time = $_POST['time'];
	$time = htmlspecialchars($time, ENT_QUOTES);
	$time = htmlentities(str_replace("'","\'", $time));
	$venue = $_POST['venue'];
	$venue = htmlspecialchars($venue, ENT_QUOTES);
	$venue = htmlentities(str_replace("'","\'", $venue));
	$date = date(current_timestamp);
	/*end*/

	$query = mysql_query("INSERT INTO events VALUES('', '', '$title', '$content', '$event_date', '$event_year', '$event_month', '$event_day', '$day_name', '$time', '$venue', '$date')
						");
					if(!$query) echo mysql_error();
										
					header("Location: events.php");
	}

elseif(isset($_POST['event_update']))
{
	$event_id = $_GET['event_id'];
	$title = $_POST['Title1'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$title = htmlentities(str_replace("'","\'", $title));
	$content = $_POST['content1'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'","\'", $content));
	$event_year = $_POST['event_yr'];
	$event_year = htmlspecialchars($event_year, ENT_QUOTES);
	$event_year = htmlentities(str_replace("'","\'", $event_year));
	$event_month = $_POST['event_mth'];
	$event_month = htmlspecialchars($event_month, ENT_QUOTES);
	$event_month = htmlentities(str_replace("'","\'", $event_month));
	$event_day = $_POST['event_day'];
	$event_day = htmlspecialchars($event_day, ENT_QUOTES);
	$event_day = htmlentities(str_replace("'","\'", $event_day));
	$event_date = $_POST['event_date'];
	$event_date = htmlspecialchars($event_date, ENT_QUOTES);
	$event_date = htmlentities(str_replace("'","\'", $event_date));
	$day_name = $_POST['day_name'];
	$day_name = htmlspecialchars($day_name, ENT_QUOTES);
	$day_name = htmlentities(str_replace("'","\'", $day_name));
	$time = $_POST['time'];
	$time = htmlspecialchars($time, ENT_QUOTES);
	$time = htmlentities(str_replace("'","\'", $time));
	$venue = $_POST['venue'];
	$venue = htmlspecialchars($venue, ENT_QUOTES);
	$venue = htmlentities(str_replace("'","\'", $venue));
	
	$query = mysql_query("UPDATE events SET title = '$title', content = '$content', event_date = '$event_date', event_year = '$event_year', event_month = '$event_month', event_day = '$event_day', day_name = '$day_name', time = '$time', venue = '$venue' WHERE event_id = '$event_id' ");
	if(!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
}
/* End of Events Section */
elseif(isset($_POST['d_events_sub'])) {
	$title = $_POST['Title1'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$title = htmlentities(str_replace("'","\'", $title));
	$content = $_POST['content1'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'","\'", $content));
	$event_year = $_POST['event_yr'];
	$event_year = htmlspecialchars($event_year, ENT_QUOTES);
	$event_year = htmlentities(str_replace("'","\'", $event_year));
	$event_month = $_POST['event_mth'];
	$event_month = htmlspecialchars($event_month, ENT_QUOTES);
	$event_month = htmlentities(str_replace("'","\'", $event_month));
	$event_day = $_POST['event_day'];
	$event_day = htmlspecialchars($event_day, ENT_QUOTES);
	$event_day = htmlentities(str_replace("'","\'", $event_day));
	$event_date = $_POST['event_date'];
	$event_date = htmlspecialchars($event_date, ENT_QUOTES);
	$event_date = htmlentities(str_replace("'","\'", $event_date));
	$day_name = $_POST['day_name'];
	$day_name = htmlspecialchars($day_name, ENT_QUOTES);
	$day_name = htmlentities(str_replace("'","\'", $day_name));
	$time = $_POST['time'];
	$time = htmlspecialchars($time, ENT_QUOTES);
	$time = htmlentities(str_replace("'","\'", $time));
	$venue = $_POST['venue'];
	$venue = htmlspecialchars($venue, ENT_QUOTES);
	$venue = htmlentities(str_replace("'","\'", $venue));
	$date = date(current_timestamp);

	$query = mysql_query("INSERT INTO drussa_events VALUES('', '$title', '$content', '$event_date', '$event_year', '$event_month', '$event_day', '$day_name', '$time', '$venue', '$date')
						");
	if(!$query) echo mysql_error();
		
	header("Location: oridcms_panel.php");
}
/* Beginning of Quick Links Section */
elseif(isset($_POST['d_event_update']))
{
	$event_id = $_GET['d_event_id'];
	$title = $_POST['Title1'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$title = htmlentities(str_replace("'","\'", $title));
	$content = $_POST['content1'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'","\'", $content));
	$event_year = $_POST['event_yr'];
	$event_year = htmlspecialchars($event_year, ENT_QUOTES);
	$event_year = htmlentities(str_replace("'","\'", $event_year));
	$event_month = $_POST['event_mth'];
	$event_month = htmlspecialchars($event_month, ENT_QUOTES);
	$event_month = htmlentities(str_replace("'","\'", $event_month));
	$event_day = $_POST['event_day'];
	$event_day = htmlspecialchars($event_day, ENT_QUOTES);
	$event_day = htmlentities(str_replace("'","\'", $event_day));
	$event_date = $_POST['event_date'];
	$event_date = htmlspecialchars($event_date, ENT_QUOTES);
	$event_date = htmlentities(str_replace("'","\'", $event_date));
	$day_name = $_POST['day_name'];
	$day_name = htmlspecialchars($day_name, ENT_QUOTES);
	$day_name = htmlentities(str_replace("'","\'", $day_name));
	$time = $_POST['time'];
	$time = htmlspecialchars($time, ENT_QUOTES);
	$time = htmlentities(str_replace("'","\'", $time));
	$venue = $_POST['venue'];
	$venue = htmlspecialchars($venue, ENT_QUOTES);
	$venue = htmlentities(str_replace("'","\'", $venue));
	
	$query = mysql_query("UPDATE drussa_events SET title = '$title', content = '$content', event_date = '$event_date', event_year = '$event_year', event_month = '$event_month', event_day = '$event_day', day_name = '$day_name', time = '$time', venue = '$venue' WHERE event_id = '$event_id' ");
	if(!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
}
elseif(isset($_POST['btnsubmit4'])) {

/* Form elements for Quick Link */
	$title2 = $_POST['Title2'];
	$content2 = $_POST['content2'];
	$date = date(current_timestamp);
	/*end*/

	if(strlen($title2) == 0)
	{
		echo "Cannot submit form with empty Title field" ; 
	
	}
	elseif(strlen($content2) == 0)
	{
		echo "Cannot submit form with empty Content field" ; 
	}
else
{
	
	$query = mysql_query("INSERT INTO quick_links VALUES('', '', '$title2', '$content2', '$date')
						");
					if(!$query) echo mysql_error();
										
					header("Location: quicklinkupdate.php");
					}
}
/* End of Quick Link Section */
/* Beginning of Staff Section */
elseif(isset($_POST['btnsubmit3'])) {

/* Form elements for New Staff */
	$title3 = $_POST['Title3'];
	$title3 = htmlspecialchars($title3, ENT_QUOTES);
	$title3 = htmlentities(str_replace("'", "\'", $title3));
	$fname = $_POST['first_name'];
	$fname = htmlspecialchars($fname, ENT_QUOTES);
	$fname = htmlentities(str_replace("'", "\'", $fname));
	$lname = $_POST['last_name'];
	$lname = $_POST['last_name'];
	$lname = htmlspecialchars($lname, ENT_QUOTES);
	$othername = $_POST['o_name'];
	$othername = htmlspecialchars($othername, ENT_QUOTES);
	$othername = htmlentities(str_replace("'", "\'", $othername));
	$position = $_POST['position'];
	$position = htmlspecialchars($position, ENT_QUOTES);
	$position = htmlentities(str_replace("'", "\'", $position));
	$image2 = $_POST['img'];
	$image2 = htmlspecialchars($image2, ENT_QUOTES);
	$image2 = htmlentities(str_replace("'", "\'", $image2));
	$email = $_POST['email'];
	$email = htmlspecialchars($email, ENT_QUOTES);
	$email = htmlentities(str_replace("'", "\'", $email));
	$profile = $_POST['prof'];
	$profile = htmlspecialchars($profile, ENT_QUOTES);
	$profile = htmlentities(str_replace("'", "\'", $profile));
	$date = date(current_timestamp);
	/*end*/					
				
	$query = mysql_query("INSERT INTO staff VALUES('','$title3', '$fname', '$lname', '$othername','$position', '$email', '$profile', '$date', '$image2')
						");
					if(!$query) echo mysql_error();
										
					header("Location: astaff.php");
					}
					
elseif (isset($_POST['update1']))
{
	$staff_id = $_GET['staff_id'];
	$title3 = $_POST['Title3'];
	$title3 = htmlspecialchars($title3, ENT_QUOTES);
	$title3 = htmlentities(str_replace("'", "\'", $title3));
	$fname = $_POST['first_name'];
	$fname = htmlspecialchars($fname, ENT_QUOTES);
	$fname = htmlentities(str_replace("'", "\'", $fname));
	$lname = $_POST['last_name'];
	$lname = htmlspecialchars($lname, ENT_QUOTES);
	$lname = htmlentities(str_replace("'", "\'", $lname));
	$othername = $_POST['o_name'];
	$othername = htmlspecialchars($othername, ENT_QUOTES);
	$othername = htmlentities(str_replace("'", "\'", $othername));
	$position = $_POST['position'];
	$position = htmlspecialchars($position, ENT_QUOTES);
	$position = htmlentities(str_replace("'", "\'", $position));
	$image2 = $_POST['img'];
	$image2 = htmlspecialchars($image2, ENT_QUOTES);
	$image2 = htmlentities(str_replace("'", "\'", $image2));
	$email = $_POST['email'];
	$email = htmlspecialchars($email, ENT_QUOTES);
	$email = htmlentities(str_replace("'", "\'", $email));
	$profile = $_POST['prof'];
	$profile = htmlspecialchars($profile, ENT_QUOTES);
	$profile = htmlentities(str_replace("'", "\'", $profile));
	//echo $title3;
	//echo $fname;
	//echo $lname;
	//echo $othername;
	//echo $position;
	//echo $image2;
	//echo $email;
	//echo $profile;
	//exit;
	
	$query = mysql_query("UPDATE staff SET title = '$title3', fname = '$fname', lname = '$lname', othername = '$othername', position = '$position', email = '$email', profile = '$profile', image2 = '$image2' WHERE staff_id = '$staff_id' ");
	if(!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
}
/* End of Staff Section */
/* Beginning of Research Opportunities Section */					
elseif(isset($_POST['btnsubmit6'])) {

/* Form elements for Research Opportunities */
	$title4 = $_POST['Title4'];
	$title4 = htmlspecialchars($title4, ENT_QUOTES);
	$title4 = htmlentities(str_replace("'", "\'", $title4));
	$alert_number = $_POST['alert_numb'];
	$pdf_1 = $_POST['pdf_file_1'];
	$pdf_2 = $_POST['pdf_file_2'];
	$pdf_3 = $_POST['pdf_file_3'];
	$pdf_4 = $_POST['pdf_file_4'];
	$date = date(current_timestamp);
	/*end*/

					
	$query = mysql_query("INSERT INTO research_alerts VALUES('','$title4', '$alert_number', '$pdf_1', '$pdf_2', '$pdf_3','$pdf_4', '$date')
						");
					if(!$query) echo mysql_error();
										
					header("Location: roaupdate.php");
}

elseif(isset($_POST['roa_update'])) {

	$roa_id = $_GET['roa_id'];
	$title4 = $_POST['Title4'];
	$title4 = htmlspecialchars($title4, ENT_QUOTES);
	$title4 = htmlentities(str_replace("'", "\'", $title4));
	$alert_number = $_POST['alert_numb'];
	$pdf_1 = $_POST['pdf_file_1'];
	$pdf_2 = $_POST['pdf_file_2'];
	$pdf_3 = $_POST['pdf_file_3'];
	$pdf_4 = $_POST['pdf_file_4'];
					
	$query = mysql_query("UPDATE research_alerts SET title = '$title4', alert_number = '$alert_number', pdf_name_1 = '$pdf_1', pdf_name_2 = '$pdf_2', pdf_name_3 = '$pdf_3', pdf_name_4 = '$pdf_4' WHERE research_id = '$roa_id' ");
					
					if(!$query) echo mysql_error();
										
					header("Location: oridcms_panel.php");
}

/*End of Research Opportunities Section */
/* Beginning of Call for Proposals Section */				
elseif(isset($_POST['btnsubmit5'])) {

/* Form elements for Call for Proposals */
	$title5 = $_POST['Title5'];
	$title5 = htmlspecialchars($title5, ENT_QUOTES);
	$title5 = htmlentities(str_replace("'","\'", $title5));
	$content5 = $_POST['content5'];
	$content5 = htmlspecialchars($content5, ENT_QUOTES);
	$content5 = htmlentities(str_replace("'","\'", $content5));
	$call_type = $_POST['call_type'];
	$call_type = htmlspecialchars($call_type, ENT_QUOTES);
	$call_type = htmlentities(str_replace("'","\'", $call_type));
	$date = date(current_timestamp);
	/*end
	 echo $title5;
	 echo $content5;
	 echo $call_type;
	 exit;*/
	if(strlen($title5) == 0)
	{
		echo "Cannot submit form with empty Title field" ; 
	
	}
	elseif(strlen($content5) == 0)
	{
		echo "Cannot submit form with empty Content field" ; 
	}
else
{

	$query = mysql_query("INSERT INTO call_for_proposals VALUES('', '$call_type', '$title5', '$content5', '$date')
						");
					if(!$query) echo mysql_error();
										
					header("Location: oridcms_panel.php");
					}
}

elseif(isset($_POST['callupdate']))
{
	$call_id = $_GET['call_update'];
	$title5 = $_POST['Title5'];
	$title5 = htmlspecialchars($title5, ENT_QUOTES);
	$title5 = htmlentities(str_replace("'","\'", $title5));
	$content5 = $_POST['content5'];
	$content5 = htmlspecialchars($content5, ENT_QUOTES);
	$content5 = htmlentities(str_replace("'","\'", $content5));
	$call_type = $_POST['call_type'];
	$call_type = htmlspecialchars($call_type, ENT_QUOTES);
	$call_type = htmlentities(str_replace("'","\'", $call_type));

	$query = mysql_query("UPDATE call_for_proposals SET call_type = '$call_type', title = '$title5', content = '$content5' WHERE call_id = '$call_id' ");
	if(!$query) echo mysql_error();
	header("Location: callupdate.php?new_call=1");
}
/* End */
elseif(isset($_POST['btnsubmit7']))
{
/* Form elements for UG Research Calls */
	$newtitle = $_POST['Title6'];
	$newtitle = htmlspecialchars($newtitle, ENT_QUOTES);
	$newtitle = htmlentities(str_replace("'","\'", $newtitle));
	$newcontent = $_POST['content6'];
	$newcontent = htmlspecialchars($newcontent, ENT_QUOTES);
	$newcontent = htmlentities(str_replace("'","\'", $newcontent));
	$date = date(current_timestamp);
	/*end*/

	$query = mysql_query("INSERT INTO ugrf_calls VALUES('', '$newtitle', '$newcontent', '$date')");
					if(!$query) echo mysql_error();
										
					header("Location: ugrfcalls.php");
}

elseif (isset($_POST['ugrf_update']))
{
	$ugrf_call_id = $_GET['ugrf_call_id'];
	$ugrf_title = $_POST['Title6'];
	$ugrf_title = htmlspecialchars($ugrf_title, ENT_QUOTES);
	$ugrf_title = htmlentities(str_replace("'","\'", $ugrf_title));
	$ugrf_content = $_POST['content6'];
	$ugrf_content = htmlspecialchars($ugrf_content, ENT_QUOTES);
	$ugrf_content = htmlentities(str_replace("'","\'", $ugrf_content));
	
	$query = mysql_query("UPDATE ugrf_calls SET title = '$ugrf_title', content = '$ugrf_content' WHERE ugrf_call_id = '$ugrf_call_id' ");
	if(!$query) echo mysql_error();
	header("Location: grantlist1.php?ugrf_id=6");
}
elseif (isset($_POST['newbtnsubmit'])) {
	$incall = $_POST['call'];
	$incall = htmlspecialchars($incall, ENT_QUOTES);
	$incall = htmlentities(str_replace("'","\'", $incall));
	
	$grant_type = $_POST['granttype'];
	$grant_type = htmlspecialchars($grant_type, ENT_QUOTES);
	$grant_type = htmlentities(str_replace("'","\'", $grant_type));
	
	$project_title = $_POST['proj_title'];
	$project_title = htmlspecialchars($project_title, ENT_QUOTES);
	$project_title = htmlentities(str_replace("'","\'", $project_title));
	
	$p_investigator = $_POST['prin_investigator'];
	$p_investigator = htmlspecialchars($p_investigator, ENT_QUOTES);
	$p_investigator = htmlentities(str_replace("'","\'", $p_investigator));
	
	$department =$_POST['dept'];
	$department = htmlspecialchars($department, ENT_QUOTES);
	$department = htmlentities(str_replace("'","\'", $department));
	
	$awd_amt = $_POST['award_amt'];
	$awd_amt = htmlspecialchars($awd_amt, ENT_QUOTES);
	$awd_amt = htmlentities(str_replace("'","\'", $awd_amt));
	
	$insummary = $_POST['summary'];
	$insummary = htmlspecialchars($insummary, ENT_QUOTES);
	$insummary = htmlentities(str_replace("'","\'", $insummary));
	
	$instatus = $_POST['status'];
	$instatus = htmlspecialchars($instatus, ENT_QUOTES);
	$instatus = htmlentities(str_replace("'","\'", $instatus));
	
	$email = $_POST['email'];
	$email = htmlspecialchars($email, ENT_QUOTES);
	$email = htmlentities(str_replace("'","\'", $email));

	$query = mysql_query("INSERT INTO inactive_calls VALUES ('', '$incall', '$grant_type', '$project_title', '$p_investigator', '$department', '$email', '$awd_amt', '$insummary', '$instatus')");
					if(!$query) echo mysql_error();
					
					header("Location: inactivecallsupdate.php?success='true'");
}
elseif (isset($_POST['inactivesubmit']))
{
	$call_id = $_POST['call_id'];
	
	$incall = $_POST['call'];
	$incall = htmlspecialchars($incall, ENT_QUOTES);
	$incall = htmlentities(str_replace("'","\'", $incall));
	
	$grant_type = $_POST['granttype'];
	$grant_type = htmlspecialchars($grant_type, ENT_QUOTES);
	$grant_type = htmlentities(str_replace("'","\'", $grant_type));
	
	$project_title = $_POST['proj_title'];
	$project_title = htmlspecialchars($project_title, ENT_QUOTES);
	$project_title = htmlentities(str_replace("'","\'", $project_title));
	
	$p_investigator = $_POST['prin_investigator'];
	$p_investigator = htmlspecialchars($p_investigator, ENT_QUOTES);
	$p_investigator = htmlentities(str_replace("'","\'", $p_investigator));
	
	$department =$_POST['dept'];
	$department = htmlspecialchars($department, ENT_QUOTES);
	$department = htmlentities(str_replace("'","\'", $department));
	
	$awd_amt = $_POST['award_amt'];
	$awd_amt = htmlspecialchars($awd_amt, ENT_QUOTES);
	$awd_amt = htmlentities(str_replace("'","\'", $awd_amt));
	
	$insummary = $_POST['summary'];
	$insummary = htmlspecialchars($insummary, ENT_QUOTES);
	$insummary = htmlentities(str_replace("'","\'", $insummary));
	
	$instatus = $_POST['status'];
	$instatus = htmlspecialchars($instatus, ENT_QUOTES);
	$instatus = htmlentities(str_replace("'","\'", $instatus));
	
	$email = $_POST['email'];
	$email = htmlspecialchars($email, ENT_QUOTES);
	$email = htmlentities(str_replace("'","\'", $email));
	
	$query = mysql_query("UPDATE inactive_calls SET proposal_num = '$incall', grant_type = '$grant_type', project_title = '$project_title', principal_investigator = '$p_investigator', department = '$department', award_amount = '$awd_amt', summary = '$insummary', status = '$instatus', email = '$email' WHERE inactive_call_id = '$call_id' ");
		if(!$query) echo mysql_error();
		
		header("Location: inactivecallsupdate.php?success='true'");
}
elseif (isset($_POST['button_name']))
{
	$pg_id = $_POST['page_id'];
	$pg_title = $_POST['page_title'];
	$content = $_POST['details'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'", "\'", $content));
	$date = date(current_timestamp);
	
	$query = mysql_query("INSERT INTO grants VALUES ('$pg_id', '$pg_title', '$content', '$date')");
	if (!$query) echo mysql_error();
		header("Location: updateform.php?pg_id=".$_POST['page_id']);
	
}
elseif(isset($_POST['btnsub1']))
{
	$pg_id = $_REQUEST['page_id'];
	$grant_id = $_GET['pg_id'];
	$content = $_POST['details'];
	$content = htmlspecialchars($content, ENT_QUOTES);
	$content = htmlentities(str_replace("'", "\'", $content));
	
	$query1 = mysql_query("UPDATE grants SET grant_details = '$content' WHERE grant_id = '$grant_id' ");
	if(!$query1) echo mysql_error();
										
	header("Location: oridcms_panel.php");
}

elseif (isset($_POST['newbtnsubmit1']))
{
	$lecture_type = $_POST['lect_type'];
	$lecture_type = htmlspecialchars($lecture_type, ENT_QUOTES);
	$lecture_type = htmlentities(str_replace("'", "\'", $lecture_type));
	$lecture_title = $_POST['lect_title'];
	$lecture_title = htmlspecialchars($lecture_title, ENT_QUOTES);
	$lecture_title = htmlentities(str_replace("'", "\'", $lecture_title));
	$audio_url = $_POST['aud_url'];
	$audio_url = htmlspecialchars($audio_url, ENT_QUOTES);
	$audio_url = htmlentities(str_replace("'", "\'", $audio_url));
	$video_url = $_POST['vid_url'];
	$video_url = htmlspecialchars($video_url, ENT_QUOTES);
	$video_url = htmlentities(str_replace("'", "\'", $video_url));
	$image_url = $_POST['img_url'];
	$image_url = htmlspecialchars($image_url, ENT_QUOTES);
	$image_url = htmlentities(str_replace("'", "\'", $image_url));
	$academic_year = $_POST['academic_yr'];
	$academic_year = htmlspecialchars($academic_year, ENT_QUOTES);
	$academic_year = htmlentities(str_replace("'", "\'", $academic_year));
	$entry_date = date(current_timestamp);
	$lecture_date = $_POST['lect_date'];
	$lecture_date = htmlspecialchars($lecture_date, ENT_QUOTES);
	$lecture_date = htmlentities(str_replace("'", "\'", $lecture_date));
	$lecture_venue = $_POST['venue'];
	$lecture_venue = htmlspecialchars($lecture_venue, ENT_QUOTES);
	$lecture_venue = htmlentities(str_replace("'", "\'", $lecture_venue));
	$delivered_by = $_POST['del_by'];
	$delivered_by = htmlspecialchars($delivered_by, ENT_QUOTES);
	$delivered_by = htmlentities(str_replace("'", "\'", $delivered_by));
	$dept_faculty = $_POST['dept_faculty'];
	$dept_faculty = htmlspecialchars($dept_faculty, ENT_QUOTES);
	$dept_faculty = htmlentities(str_replace("'", "\'", $dept_faculty));
	$introduction = $_POST['introduction'];
	$introduction = htmlspecialchars($introduction, ENT_QUOTES);
	//$introduction = stripslashes($introduction);
	$introduction = htmlentities(str_replace("'", "\'", $introduction));
	//echo $lecture_type;
	//echo $lecture_title;
	//echo $audio_url;
	//echo $video_url;
	//echo $image_url;
	//echo $academic_year;
	//echo $entry_date;
	//echo $lecture_date;
	//echo $lecture_venue;
	//echo $delivered_by;
	//echo $introduction;
	//exit;	
	$query = mysql_query("INSERT INTO public_lectures VALUES('', '$lecture_type', '$lecture_title', '$audio_url', '$video_url', '$image_url', '$academic_year', '$entry_date', '$introduction', '$lecture_date', '$lecture_venue', '$delivered_by', '$dept_faculty' )");
	if(!$query) echo mysql_error();
	header("Location: publiclectureupdate.php");
}
elseif (isset($_POST['newbtnsubmit2']))
{
	$lecture_id = $_GET['plecture_id'];
	$lecture_type = $_POST['lect_type'];
	$lecture_type = htmlspecialchars($lecture_type, ENT_QUOTES);
	$lecture_type = htmlentities(str_replace("'", "\'", $lecture_type));
	$lecture_title = $_POST['lect_title'];
	$lecture_title = htmlspecialchars($lecture_title, ENT_QUOTES);
	$lecture_title = htmlentities(str_replace("'", "\'", $lecture_title));
	$audio_url = $_POST['aud_url'];
	$audio_url = htmlspecialchars($audio_url, ENT_QUOTES);
	$audio_url = htmlentities(str_replace("'", "\'", $audio_url));
	$video_url = $_POST['vid_url'];
	$video_url = htmlspecialchars($video_url, ENT_QUOTES);
	$video_url = htmlentities(str_replace("'", "\'", $video_url));
	$image_url = $_POST['img_url'];
	$image_url = htmlspecialchars($image_url, ENT_QUOTES);
	$image_url = htmlentities(str_replace("'", "\'", $image_url));
	$academic_year = $_POST['academic_yr'];
	$academic_year = htmlspecialchars($academic_year, ENT_QUOTES);
	$academic_year = htmlentities(str_replace("'", "\'", $academic_year));
	$lecture_date = $_POST['lect_date'];
	$lecture_date = htmlspecialchars($lecture_date, ENT_QUOTES);
	$lecture_date = htmlentities(str_replace("'", "\'", $lecture_date));
	$lecture_venue = $_POST['venue'];
	$lecture_venue = htmlspecialchars($lecture_venue, ENT_QUOTES);
	$lecture_venue = htmlentities(str_replace("'", "\'", $lecture_venue));
	$delivered_by = $_POST['del_by'];
	$delivered_by = htmlspecialchars($delivered_by, ENT_QUOTES);
	$delivered_by = htmlentities(str_replace("'", "\'", $delivered_by));
	$dept_faculty = $_POST['dept_faculty'];
	$dept_faculty = htmlspecialchars($dept_faculty, ENT_QUOTES);
	$dept_faculty = htmlentities(str_replace("'", "\'", $dept_faculty));
	$introduction = $_POST['intro'];
	$introduction = htmlspecialchars($introduction, ENT_QUOTES);
	$introduction = htmlentities(str_replace("'", "\'", $introduction));
	//echo $introduction;
	//exit;
	$query = mysql_query("UPDATE public_lectures SET lect_type = '$lecture_type', lect_title = '$lecture_title', audio_url = '$audio_url', video_url = '$video_url', image_url = '$image_url',
						 academic_yr = '$academic_year', introduction = '$introduction', lect_date = '$lecture_date', lecture_venue = '$lecture_venue', delivered_by = '$delivered_by', dept_faculty = '$dept_faculty' WHERE lecture_id = '$lecture_id' ");
	if(!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
}
elseif(isset($_POST['newgtsub']))
{
	$grant_type = $_POST['gt_type'];
	$academic_year = $_POST['gt_year'];
	$grant_details = $_POST['gt_content'];
	$grant_details = htmlspecialchars($grant_details, ENT_QUOTES);
	$grant_details = htmlentities(str_replace("'", "\'", $grant_details));
	$date = date(current_timestamp);
	$query = mysql_query("INSERT INTO awd_winners1 VALUES('', '$grant_type', '$academic_year', '$grant_details', '$date')");
	if(!$query) echo mysql_error();
	header("Location: grantwinners1.php");
}
elseif(isset($_POST['newgtsub1']))
{
	$win_id = $_GET['win_id'];
	$grant_type = $_POST['gt_type'];
	$academic_year = $_POST['gt_year'];
	$grant_details = $_POST['gt_content'];
	$grant_details = htmlspecialchars($grant_details, ENT_QUOTES);
	$grant_details = htmlentities(str_replace("'", "\'", $grant_details));
	//$date = date(current_timestamp);
	$query = mysql_query("UPDATE awd_winners1 SET grant_type = '$grant_type', academic_year = '$academic_year', details = '$grant_details' WHERE winner1_id = '$win_id' ");
	if(!$query) echo mysql_error();
	header("Location: grantwinners1.php");
}
elseif (isset($_POST['newpgsub']))
{
	$page_title = $_POST['pg_title'];
	$page_title = htmlspecialchars($page_title, ENT_QUOTES);
	$page_title = htmlentities(str_replace("'", "\'", $page_title));
	$content_header = $_POST['pg_header'];
	$content_header = htmlspecialchars($content_header, ENT_QUOTES);
	$content_header = htmlentities(str_replace("'", "\'", $content_header));
	$page_content = $_POST['pg_content'];
	$page_content = htmlspecialchars($page_content, ENT_QUOTES);
	$page_content = htmlentities(str_replace("'", "\'", $page_content));
	//echo $page_title;
	//echo $content_header;
	//echo $page_content;
	//exit;
	$query = mysql_query("INSERT INTO orid_pages VALUES('', '$page_title', '$content_header', '$page_content')");
	if (!$query) echo mysql_error();
	header("Location: oridpages.php");
}
elseif (isset($_POST['ipseminar_submit']))
{
	$seminar_title = $_POST['seminar_title'];
	$seminar_title = htmlspecialchars($seminar_title, ENT_QUOTES);
	$seminar_title = htmlentities(str_replace("'", "\'", $seminar_title));
	
	$seminar_theme = $_POST['seminar_theme'];
	$seminar_theme = htmlspecialchars($seminar_theme, ENT_QUOTES);
	$seminar_theme = htmlentities(str_replace("'", "\'", $seminar_theme));
	
	$seminar_date = $_POST['seminar_date'];
	$seminar_date = htmlspecialchars($seminar_date, ENT_QUOTES);
	$seminar_date = htmlentities(str_replace("'", "\'", $seminar_date));
	
	$seminar_time = $_POST['seminar_time'];
	$seminar_time = htmlspecialchars($seminar_time, ENT_QUOTES);
	$seminar_time = htmlentities(str_replace("'", "\'", $seminar_time));
	
	$seminar_venue = $_POST['seminar_venue'];
	$seminar_venue = htmlspecialchars($seminar_venue, ENT_QUOTES);
	$seminar_venue = htmlentities(str_replace("'", "\'", $seminar_venue));
	
	$seminar_details = $_POST['seminar_details'];
	$seminar_details = htmlspecialchars($seminar_details, ENT_QUOTES);
	$seminar_details = htmlentities(str_replace("'", "\'", $seminar_details));
	
	$entry_date = date(current_timestamp);
	
	$query = mysql_query("INSERT INTO ip_seminars VALUES('', '$seminar_title', '$seminar_theme', '$seminar_date', '$seminar_time', '$seminar_venue', '$seminar_details', '$entry_date') ");
	if(!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
	
}
elseif (isset($_POST['newsletter_submit']))
{
	$newsletter_title = $_POST['nletter_title'];
	$newsletter_title = htmlspecialchars($newsletter_title, ENT_QUOTES);
	$newsletter_title = htmlentities(str_replace("'","\'", $newsletter_title));
	$issue_no = $_POST['issue_no'];
	$issue_no = htmlspecialchars($issue_no, ENT_QUOTES);
	$issue_no = htmlentities(str_replace("'","\'", $issue_no));
	$issue_day = $_POST['day'];
	$issue_day = htmlspecialchars($issue_day, ENT_QUOTES);
	$issue_day = htmlentities(str_replace("'","\'", $issue_day));
	$issue_month = $_POST['month'];
	$issue_month = htmlspecialchars($issue_month, ENT_QUOTES);
	$issue_month = htmlentities(str_replace("'","\'", $issue_month));
	$issue_year = $_POST['year'];
	$issue_year = htmlspecialchars($issue_year, ENT_QUOTES);
	$issue_year = htmlentities(str_replace("'","\'", $issue_year));
	$file_name = $_POST['file_name'];
	$file_name = htmlspecialchars($file_name, ENT_QUOTES);
	$file_name = htmlentities(str_replace("'","\'", $file_name));
	$date = date(current_timestamp);
	
	$query = mysql_query("INSERT INTO ip_newsletters VALUES('', '$newsletter_title', '$issue_no', '$file_name', '$issue_day', '$issue_month', '$issue_year', '$date') ");
		if(!$query) echo mysql_error();
		header("Location: oridcms_panel.php");
	}
elseif (isset($_POST['newsletter_update']))
{
	$newsletter_id = $_GET['newsletter_id'];
	$newsletter_title = $_POST['nletter_title'];
	$newsletter_title = htmlspecialchars($newsletter_title, ENT_QUOTES);
	$newsletter_title = htmlentities(str_replace("'","\'", $newsletter_title));
	$issue_no = $_POST['issue_no'];
	$issue_no = htmlspecialchars($issue_no, ENT_QUOTES);
	$issue_no = htmlentities(str_replace("'","\'", $issue_no));
	$issue_day = $_POST['day'];
	$issue_day = htmlspecialchars($issue_day, ENT_QUOTES);
	$issue_day = htmlentities(str_replace("'","\'", $issue_day));
	$issue_month = $_POST['month'];
	$issue_month = htmlspecialchars($issue_month, ENT_QUOTES);
	$issue_month = htmlentities(str_replace("'","\'", $issue_month));
	$issue_year = $_POST['year'];
	$issue_year = htmlspecialchars($issue_year, ENT_QUOTES);
	$issue_year = htmlentities(str_replace("'","\'", $issue_year));
	$file_name = $_POST['file_name'];
	$file_name = htmlspecialchars($file_name, ENT_QUOTES);
	$file_name = htmlentities(str_replace("'","\'", $file_name));
	
	$query = mysql_query("UPDATE ip_newsletters SET title = '$newsletter_title', issue_no = '$issue_no', file_name = '$file_name', day = '$issue_day', month = '$issue_month', year = '$issue_year' WHERE newsletter_id = '$newsletter_id' ");
	if(!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
}
elseif (isset($_POST['newpgsub1']))
{
	$newpage_id = $_GET['orid_pg_id'];
	$page_title = $_POST['pg_title'];
	$page_title = htmlspecialchars($page_title, ENT_QUOTES);
	$page_title = htmlentities(str_replace("'", "\'", $page_title));
	$content_header = $_POST['pg_header'];
	$content_header = htmlspecialchars($content_header, ENT_QUOTES);
	$content_header = htmlentities(str_replace("'", "\'", $content_header));
	$page_content = $_POST['pg_content'];
	$page_content = htmlspecialchars($page_content, ENT_QUOTES);
	$page_content = htmlentities(str_replace("'", "\'", $page_content));
	//echo $page_content;
	//exit;
	
	$query = mysql_query("UPDATE orid_pages SET page_title = '$page_title', page_header = '$content_header', page_contents = '$page_content' WHERE page_id = '$newpage_id' ");
	if (!$query) echo mysql_error();
	header("Location: oridcms_panel.php");
}
else{
die("Unable to load to database");
}
?>
