<?php
include 'newconnect.php';

$title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_POST ,"fname", FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST,"lname",FILTER_SANITIZE_STRING);
$faculty = filter_input(INPUT_POST,"college",FILTER_SANITIZE_STRING);
$department= filter_input(INPUT_POST ,"department",FILTER_SANITIZE_STRING);
$position = filter_input(INPUT_POST,"position",FILTER_SANITIZE_STRING);
$yrs_of_service = filter_input(INPUT_POST,"yrsofservice",FILTER_SANITIZE_STRING);
$office_phone = filter_input(INPUT_POST,"office_phone",FILTER_SANITIZE_STRING);
$cell_phone = filter_input(INPUT_POST,"mob_phone",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
$fax = filter_input(INPUT_POST,"fax",FILTER_SANITIZE_STRING);
$purpose_of_apply = filter_input(INPUT_POST,"grant_purpose",FILTER_SANITIZE_STRING);
$venue_of_conference = filter_input(INPUT_POST,"where_held",FILTER_SANITIZE_STRING);
$duration = filter_input(INPUT_POST,"duration",FILTER_SANITIZE_STRING);
$title_of_conference = filter_input(INPUT_POST,"conference_title",FILTER_SANITIZE_STRING);
$theme_of_conference = filter_input (INPUT_POST,"conference_theme",FILTER_SANITIZE_STRING);
$presenting_paper = filter_input (INPUT_POST,"major_role",FILTER_SANITIZE_STRING);
$proposal_accepted = filter_input(INPUT_POST,"proposal_acceptance",FILTER_SANITIZE_STRING);
$detail_of_participation = filter_input(INPUT_POST,"participation_details",FILTER_SANITIZE_STRING);
$abstract = filter_input(INPUT_POST,"abstract",FILTER_SANITIZE_STRING);
$dates_for_travel = filter_input(INPUT_POST,"travel_dates",FILTER_SANITIZE_STRING);
$esti_travel_cost =filter_input(INPUT_POST,"travel_cost",FILTER_SANITIZE_STRING);
$total_budget_attach= filter_input(INPUT_POST,"total_budget",FILTER_SANITIZE_STRING);
$support_needed= filter_input(INPUT_POST,"support",FILTER_SANITIZE_STRING);
$other_supports= filter_input(INPUT_POST,"funding_source",FILTER_SANITIZE_STRING);
$details_of_sources= filter_input(INPUT_POST,"source_details",FILTER_SANITIZE_STRING);
$recieved_grants_before= filter_input(INPUT_POST,"recieved_grant",FILTER_SANITIZE_STRING);
$details_of_grants_before= filter_input(INPUT_POST,"conference_details",FILTER_SANITIZE_STRING);
$publi_frm_conference= filter_input(INPUT_POST,"publications",FILTER_SANITIZE_STRING);
$details_of_publi= filter_input(INPUT_POST,"publication_details",FILTER_SANITIZE_STRING);
$research_funds= filter_input(INPUT_POST,"attracted_funding",FILTER_SANITIZE_STRING);
$detail_of_rf= filter_input(INPUT_POST,"fund_details",FILTER_SANITIZE_STRING);
$today = date("Y-m-d H:i:s");

if(isset($_POST['stepone'])){
 mysql_query("INSERT INTO attending VALUES ('','$title','$firstname','$lastname','faculty',
'$department','$position','$yrs_of_service','$office_phone','$cell_phone','$email','$fax','','','','','','','','','','','','','','','','','','','','','','')");
header('location:attendingconference.php');
}

elseif(isset($_POST['two'])){
	mysql_query("UPDATE attending SET purpose_of_apply='$purpose_of_apply',venue_of_conference='$venue_of_conference',duration='$duration',title_of_conference='$title_of_conference',theme_of_conference='$theme_of_conference',presenting_paper='$presenting_paper',proposal_accepted='$proposal_accepted',abstract='abstract',dates_for_travels='$dates_for_travel' WHERE office_phone='$office_phone'");
	
$file_extension = array('pdf','doc','docx','gif','jpg','png','xls','xlsx','doc','ppt');
$maxfile = '10097152';
$file_dir = 'uploads/';
$filename1 = $_FILES['abstract']['name'];
$ext = substr($filename1 ,strpos($filename1 ,'.'));
$extension1 = substr($ext,1);
$filesize = $_FILES['abstract']['size'];
if (!is_writeable($file_dir)){
	echo "file cannot be uploaded change the mode to 777";
	}
if (!in_array($extension1 ,$file_extension))
   echo 'the extension is not allowed';
if (($_FILES['abstract']['size'] ) > $maxfile)
    echo 'the file size is large ';
if (move_uploaded_file($_FILES['abstract']['tmp_name'] , $file_dir . $filename1)){
	header('location:attendingconference.php');
	}
	else{
		echo 'upload was unsuccessful . <a href="javascript:history.go(-1)"> GO BACK</a>';
		}
}
	

elseif(isset($_POST['stepthree'])){
	mysql_query("UPDATE attending SET esti_travel_cost='$esti_travel_cost',total_budget_attach='$total_budget_attach',support_needed='$support_needed',
	other_supports='$other_supports',details_of_sources='$details_of_sources',recieved_grants_before='$recieved_grants_before',details_of_grants_before='$details_of_grants_before',
	publi_frm_conference='$publi_frm_conference',research_funds='$research_funds',detail_of_rf='$detail_of_rf',date='$today' WHERE cell_phone='$cell_phone'");
	$file_extension = array('.pdf','.doc','.docx','.gif','.jpg','.png','.xls','.xlsx','.doc','.ppt');
$maxfile = '10097152';
$file_dir = 'uploads/';
$filename2 = $_FILES['total_budget']['name'];
$ext1 = substr($filename2 ,strpos($filename2 ,'.'), strlen($filename2)-1);
//$extension2 = substr($ext1,1);
if (!is_writeable($file_dir)){
	echo "file cannot be uploaded change the mode to 777";
	}
if (!in_array($ext1 ,$file_extension))
   echo 'the extension is not allowed';
if (($_FILES['total_budget']['size']) > $maxfile)
    echo 'the file size is large ';
if (move_uploaded_file($_FILES['total_budget']['tmp_name'] , $file_dir . $filename2)){
	header('location:index.php');
	}
	else{
		echo 'upload was unsuccessful . <a href="javascript:history.go(-1)"> GO BACK</a>';
		}
	}
	
	else{
		echo("sorry!!");
		}

?>