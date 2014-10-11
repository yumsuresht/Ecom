<?php require_once('Connections/ECOM.php'); ?>


<?php 
if (!isset($_SESSION)) {
  session_start();
}



if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) 
{

mysql_select_db($database_ECOM, $ECOM);
$query_Recordset1 = "SELECT * FROM article where articleName='".$_REQUEST['textfield']."' 
and Version ='".$_REQUEST['textfield3']."'";
$Recordset1 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

	if($totalRows_Recordset1<=0)
	{
	$msg ="Error::Already Deleted/Not In Data Base";
	header("Location: AdminDeleteUploadedarticles.php"); 
	}
	else
	{
			
		$DeleteSQL="Delete From article where articleName='".$_REQUEST['textfield']."' and Version ='".$_REQUEST['textfield3']."'";
		//echo $DeleteSQL;
		mysql_select_db($database_ECOM, $ECOM);
		$Result1 = mysql_query($DeleteSQL, $ECOM) or die(mysql_error());
		
		
		$filename=$row_Recordset1["FileName"];
		
		//echo getcwd()."\n";
		chdir('Uploaded_Articles');
		unlink ($filename);
		
		
		
		$msg="Sucessfully Deleted";		
	} 
	
	$_SESSION['deletemsg'] = $msg;
	header("Location: AdminDeleteUploadedarticles.php"); 
}
else
{
$_SESSION['deletemsg'] = NULL;
header("Location: AdminDeleteUploadedarticles.php"); 

}


?>
