<?php

$file_extension = array('pdf','doc','docx','gif','jpg','png','xls','xlsx','doc','ppt');
$maxfile = '10097152';

$file_dir = 'uploads/';
$filename1 = $_FILES['absract']['name'];
$filename2 = $_FILES['total_budget']['name'];

$ext = substr($filename1 ,strpos($filename1 ,'.'));
$ext1 = substr($filename2 ,strpos($filename2 ,'.'));

$extension1 = substr($ext,1);
$extension2 = substr($ext1,1);

if (!is_writeable($file_dir)){
	echo "file cannot be uploaded change the mode to 777";
	}
if (!in_array($extension1 ,$file_extension) && !in_array($extension2 ,$file_extension))
   echo 'the extension is not allowed';
  
   
if ((filesize($_FILES['abstract']['tmp_name'] )&&( $_FILES['total_budget']['tmp_name'])) > $maxfile)
    echo 'the file size is large ';
if (move_uploaded_file($_FILES['abstract']['tmp_name'] , $file_dir . $filename) && move_uploaded_file($_FILES['total_budget']['tmp_name'] , $file_dir . $filename)){
	echo 'FILE UPLOAD SUCCESSFULLY <a href="javascript:history.go(-1)">GO BACk</a>';
	}
	else{
		echo 'upload was unsuccessful . <a href="javascript:history.go(-1)"> GO BACK</a>';
		}
		

?>