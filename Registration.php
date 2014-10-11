<?php require_once('Connections/ECOM.php'); ?>

<?php 
if (!isset($_SESSION)) {
  session_start();
}

?>
<?php




	$pass='';
	for($i=0; $i<4;$i++)
	{
		$pass=$pass.rand(1,9);
		$pass=$pass.chr(rand(65,90));
	}
	
	//$enc = base64_encode($pass); 
	 $enc=md5($pass);
	
	if(!empty($_REQUEST['mode']))
	{
	    if($_REQUEST['mode']=='ok')
		{
		$insertSQL="insert into userdetails values('".$_REQUEST['title']."','".$_REQUEST['email']."','".$enc."','".$_REQUEST['Fname']."','".$_REQUEST['Lname']."','".$_REQUEST['sex']."','".$_REQUEST['designation']."','".$_REQUEST['textfield3']."','".$_REQUEST['state']."','".$_REQUEST['email']."','".$_REQUEST['question']."','".$_REQUEST['textfield']."',sysdate())";
		

mysql_select_db($database_ECOM, $ECOM);
$Result1 = mysql_query($insertSQL, $ECOM) or die(check());


$msg="Your Username is: " .$_REQUEST['email']."  Password is: ".$pass;
$msg1="<td height=26 colspan=2 valign=top bgcolor=#000066><div align=center class=style10>".$msg."</div></td>";

$_SESSION['$msg2'] = $msg1;
 header("Location: UserRegistration.php" );

						
		}
	}
	
	
	function check() { 
	$msg="The Email address Already Registered,Please type different email address";
	$msg1="<td height=26 colspan=2 valign=top bgcolor=#000066><div align=center class=style10>".$msg."</div></td>";
	$_SESSION['$msg2'] = $msg1;
	header("Location: UserRegistration.php" );
	
	
	}

?>
