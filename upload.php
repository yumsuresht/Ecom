<?php require_once('Connections/ECOM.php'); ?>


<?php 
if (!isset($_SESSION)) {
  session_start();
}




if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) 
{
	$url_dir="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);

	// ==============
	// Configuration
	// ==============
	$uploaddir = "Uploaded_Articles"; // Where you want the files to upload
	$allowed_ext = "doc, pdf, zip"; // These are the allowed extensions of the files that are uploaded
	$max_size = "5000000"; // 50000 is the same as 50kb
	$max_height = "100"; // This is in pixels - Leave this field empty if you don't want to upload images
	$max_width = "100"; // This is in pixels - Leave this field empty if you don't want to upload images 
	// Check Entension
	$extension = pathinfo($_FILES['file']['name']);
	$extension = $extension[extension];
	$allowed_paths = explode(", ", $allowed_ext);
	for($i = 0; $i < count($allowed_paths); $i++) 
	{
		if ($allowed_paths[$i] == "$extension")
		{
			$ok = "1";
	 	}
	}

	// Check File Size
	if ($ok == "1")
	{
		if($_FILES['file']['size'] > $max_size)
		{
			$msg= "File size is too big!";
			exit;
		}

		// Check Height & Width
		if ($max_width && $max_height) 
		{
			list($width, $height, $type, $w) = getimagesize($_FILES['file']['tmp_name']);
			if($width > $max_width || $height > $max_height)
			{
				$msg= "File height and/or width are too big!";
				exit;
			}
		}

		// The Upload Part
		if(is_uploaded_file($_FILES['file']['tmp_name']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],$uploaddir.'/'.$_FILES['file']['name']);
		}
		$msg= "Your file has been uploaded successfully! ";
		
		$path=$url_dir."/".$uploaddir.'/'.$_FILES['file']['name']; //File Path
		
		$insertSQL="insert into article values('".$_REQUEST['textfield']."','".$_REQUEST['textarea']."','".$_REQUEST['textfield2']."','".$_REQUEST['textfield3']."',sysdate(),'".$path."','".$_REQUEST['select']."',0,'".$_FILES['file']['name']."')";
		

		mysql_select_db($database_ECOM, $ECOM);
		
		$_SESSION['uploadmsg'] = "File name/File already Exists";
		
		$Result1 = mysql_query($insertSQL, $ECOM) or die(header("Location: AdminUploadarticles.php"));		
	} 
	else
	{
		$msg= "Incorrect file extension!";
	}

	$_SESSION['uploadmsg'] = $msg;
	header("Location: AdminUploadarticles.php"); 
}
else
{
$_SESSION['uploadmsg'] = NULL;
header("Location: AdminUploadarticles.php"); 

}


?>