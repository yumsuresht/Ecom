<?php require_once('Connections/ECOM.php'); ?>


<?php

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}
$query_Recordset1 = "SELECT * FROM userdetails WHERE UserName='".$_POST['textfield']."' AND Question='".$_POST['question']."' AND Answer='".$_POST['textfield2']."'"; 

mysql_select_db($database_ECOM, $ECOM);
//echo $query_Recordset1;
$Recordset1 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$FoundUser = mysql_num_rows($Recordset1);

if($FoundUser==1)
{
	
	$pass='';
	for($i=0; $i<4;$i++)
	{
		$pass=$pass.rand(1,9);
		$pass=$pass.chr(rand(65,90));
	}
	
	//$enc = base64_encode($pass); 
	 $enc=md5($pass);
	 
  $updateSQL = "UPDATE userdetails SET Password='".$enc."' WHERE UserName='".$_POST['textfield']."' AND Question='".$_POST['question']."' AND Answer='".$_POST['textfield2']."'"; 
  mysql_select_db($database_ECOM, $ECOM);
  
  $Result1 = mysql_query($updateSQL, $ECOM) or die(mysql_error());
  

	$_SESSION['Found']="Your Password is Cleared. Your New Password is: ".$pass;
    header("Location: ForgotPassword.php" );
   
	
	
	

}
else
{
	$_SESSION['Found']="Sorry...., <br>System can not find your detail. <br>Please type correct informations";
    header("Location: ForgotPassword.php" );
}



?>