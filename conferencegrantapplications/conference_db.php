<?php 
include('newconnect.php');

if(isset($_POST['stepone']))
{
	$title = $_POST['title'] ;
	//echo $title;
	
	$firstname = $_POST['fname'] ;
	$firstname = htmlspecialchars($firstname, ENT_QUOTES);
	$firstname = htmlentities(str_replace("'","\'", $firstname));
	//echo $firstname;
	
	$lastname = $_POST['lname'];
	$lastname = htmlspecialchars($lastname, ENT_QUOTES);
	$lastname = htmlentities(str_replace("'","\'", $lastname));
	//echo $lastname;
	
	$college = $_POST['college'];
	$college = htmlspecialchars($college, ENT_QUOTES);
	$college = htmlentities(str_replace("'","\'", $college));
	//echo $college;
	
	$department = $_POST['department'];
	$department = htmlspecialchars($department, ENT_QUOTES);
	$department = htmlentities(str_replace("'","\'", $department));
	//echo $department;
	
	$position = $_POST['position'];
	$position = htmlspecialchars($position, ENT_QUOTES);
	$position = htmlentities(str_replace("'","\'", $position));
	//echo $position;
	
	$yrsofservice = $_POST['yrsofservice'];
	$yrsofservice = htmlspecialchars($yrsofservice, ENT_QUOTES);
	$yrsofservice = htmlentities(str_replace("'","\'", $yrsofservice));
	//echo $yrsofservice;
	
	$office_phone = $_POST['office_phone'];
	$office_phone = htmlspecialchars($office_phone, ENT_QUOTES);
	$office_phone = htmlentities(str_replace("'","\'", $office_phone));
	//echo $office_phone;
	
	$mobile_phone = $_POST['mob_phone'];
	$mobile_phone = htmlspecialchars($mobile_phone, ENT_QUOTES);
	$mobile_phone = htmlentities(str_replace("'","\'", $mobile_phone));
	//echo $mobile_phone;
	
	$email = $_POST['email'];
	$email = htmlspecialchars($email, ENT_QUOTES);
	$email = htmlentities(str_replace("'","\'", $email));
	//echo $email;
	
	$fax = $_POST['fax'];
	$fax = htmlspecialchars($fax, ENT_QUOTES);
	$fax = htmlentities(str_replace("'","\'", $fax));
	//echo $fax;
	
	$entry_date = date("Y-m-d H:i:s");
	//echo $entry_date;
//	exit;
	
	$query = mysql_query("INSERT INTO personal_information VALUES ('', '$title', '$firstname', '$lastname', '$college', '$department', '$position', '$yrsofservice', '$office_phone', '$mobile_phone', '$email', '$fax', '$entry_date')");
	if(!$query) echo mysql_error();
	
	header("Location: conferencegrantsteptwo.php");
	
}
elseif(isset($_REQUEST['steptwo']))
{
	$grant_purpose = $_REQUEST['grant_purpose'];
	$where_held = $_REQUEST['where_held'];
	$duration = $_REQUEST['duration'];
	$conference_title = $_REQUEST['conference_title'];
	$conference_theme = $_REQUEST['conference_theme'];
	$major_role = $_REQUEST['major_role'];
	$proposal_acceptance = $_REQUEST['proposal_acceptance'];
	$participation_details = $_REQUEST['participation_details'];
	$travel_dates = $_REQUEST['travel_dates'];
	$entry_date = date("Y-m-d H:i:s");
	
	// Configuration - Your Options
      $allowed_filetypes = array('.xlxs','.pdf','.doc','.docx'); // These will be the types of file that will pass the validation.
      $max_filesize = 5097152; // Maximum filesize in BYTES (currently 5MB).
      $upload_path = '../conferencegrantapplications/abstract/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   $filename = $_FILES['abstract']['name']; // Get the name of the file (including file extension).
   $filename = htmlspecialchars($filename, ENT_QUOTES);
   $filename = htmlentities(str_replace("'","\'", $filename));
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
   // Check if the filetype is allowed, if not DIE and inform the user.
   if(!in_array($ext,$allowed_filetypes))
      die('The file you attempted to upload is not allowed.');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['abstract']['tmp_name']) > $max_filesize)
      die('The file you attempted to upload is too large.');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   // Upload the file to your specified path.
   if(move_uploaded_file($_FILES['abstract']['tmp_name'],$upload_path.$filename))
   
   $query = mysql_query("INSERT INTO conference_details VALUES('', '$grant_purpose', '$where_held', '$duration', '$conference_title', '$conference_theme', '$major_role', '$proposal_acceptance', '$participation_details', '$filename', '$travel_dates', '$entry_date')");
   
   if(!$query) echo mysql_error();
   
   header("Location: conferencegrantstepthree.php");
}
elseif(isset($_REQUEST['stepthree']))
{
	$travel_cost = $_REQUEST['travel_cost'];
	$travel_cost = htmlspecialchars($travel_cost, ENT_QUOTES);
	$travel_cost = htmlentities(str_replace("'", "\'", $travel_cost));	
	//$total_budget = $_REQUEST['total_budget'];
	$support = $_REQUEST['support'];
	$support = htmlspecialchars($support, ENT_QUOTES);
	$support = htmlentities(str_replace("'", "\'", $support));	
	 
	$funding_source = $_REQUEST['funding_source'];
	$funding_source = htmlspecialchars($funding_source, ENT_QUOTES);
	$funding_source = htmlentities(str_replace("'", "\'", $funding_source));	
	
	$source_details = $_REQUEST['source_details'];
	$source_details = htmlspecialchars($source_details, ENT_QUOTES);
	$source_details = htmlentities(str_replace("'", "\'", $source_details));	
	
	$received_grant = $_REQUEST['received_grant'];
	$received_grant = htmlspecialchars($received_grant, ENT_QUOTES);
	$received_grant = htmlentities(str_replace("'", "\'", $received_grant));	
	
	$conference_details = $_REQUEST['conference_details'];
	$conference_details = htmlspecialchars($conference_details, ENT_QUOTES);
	$conference_details = htmlentities(str_replace("'", "\'", $conference_details));	
	
	$publications = $_REQUEST['publications'];
	$publications = htmlspecialchars($publications, ENT_QUOTES);
	$publications = htmlentities(str_replace("'", "\'", $publications));	
	
	$publication_details = $_REQUEST['publication_details'];
	$publication_details = htmlspecialchars($publication_details, ENT_QUOTES);
	$publication_details = htmlentities(str_replace("'", "\'", $publication_details));	
	
	$attracted_funding = $_REQUEST['attracted_funding'];
	$attracted_funding = htmlspecialchars($attracted_funding, ENT_QUOTES);
	$attracted_funding = htmlentities(str_replace("'", "\'", $attracted_funding));	
	
	$fund_details = $_REQUEST['fund_details'];
	$fund_details = htmlspecialchars($fund_details, ENT_QUOTES);
	$fund_details = htmlentities(str_replace("'", "\'", $fund_details));	
	
	$entry_date = date("Y-m-d H:i:s");
	
	// Configuration - Your Options
      $allowed_filetypes = array('.xlxs','.pdf','.doc','.docx'); // These will be the types of file that will pass the validation.
      $max_filesize = 5097152; // Maximum filesize in BYTES (currently 5MB).
      $upload_path = '../conferencegrantapplications/total budget/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   $filename = $_FILES['total_budget']['name']; // Get the name of the file (including file extension).
   $filename = htmlspecialchars($filename, ENT_QUOTES);
   $filename = htmlentities(str_replace("'","\'", $filename));
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
   // Check if the filetype is allowed, if not DIE and inform the user.
   if(!in_array($ext,$allowed_filetypes))
      die('The file you attempted to upload is not allowed.');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['total_budget']['tmp_name']) > $max_filesize)
      die('The file you attempted to upload is too large.');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   // Upload the file to your specified path.
   if(move_uploaded_file($_FILES['total_budget']['tmp_name'],$upload_path.$filename))
   
   $query = mysql_query("INSERT INTO funding VALUES('', '$travel_cost', '$filename', '$support', '$funding_source', '$source_details', '$received_grant', '$conference_details', '$publications', '$publication_details', '$attracted_funding', '$fund_details', '$entry_date')");
   
   if(!$query) echo mysql_error();
   
   header("Location: success.php?conferenceattending='true'");
	}
else{}


?>