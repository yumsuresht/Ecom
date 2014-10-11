<?php require_once('Connections/ECOM.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}



mysql_select_db($database_ECOM, $ECOM);
$query_Recordset1 = "SELECT * FROM hotnews";
$Recordset2 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());



$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}


if (isset($_POST['username'])) {
  $loginUsername=strtoupper($_POST['username']);
  
 // $password = base64_encode($_POST['password']); 
 $password=md5($_POST['password']);
  
  $MM_fldUserAuthorization = "";
  if($loginUsername=='ADMIN')
	  	$MM_redirectLoginSuccess = "Adminhome.php";
	else
		$MM_redirectLoginSuccess = "userhome.php";
  $MM_redirectLoginFailed = "Error.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_ECOM, $ECOM);
  
   
  $LoginRS__query=sprintf("SELECT UserName, Password,FirstName,LastName FROM userdetails WHERE UserName='".$loginUsername."' AND Password='".$password."'"); 
  
 
   
   
  $LoginRS = mysql_query($LoginRS__query, $ECOM) or die(mysql_error());
  $row_Recordset1 = mysql_fetch_assoc($LoginRS);
$totalRows_Recordset1 = mysql_num_rows($LoginRS);



  
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
	$_SESSION['MM_FirstName'] = $row_Recordset1['FirstName'];  
	$_SESSION['MM_LastName'] = $row_Recordset1['LastName'];  
	
	
$result3 = "update userdetails set LastLogin=sysdate() where UserName='".$loginUsername."';";
mysql_select_db($database_ECOM, $ECOM);
$Result2 = mysql_query($result3, $ECOM) or die(mysql_error());    

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />
<link rel="stylesheet" type="text/css" href="screen1.css" media="screen" />
<link rel="stylesheet" type="text/css" href="print.css" media="print" />
<link rel="stylesheet" type="text/css" href="handheld.css" media="handheld" />
<title>Online Digital Library</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:118px;
	top:392px;
	width:140px;
	height:182px;
	background-color: #EEEEEE;
}
.style2 {
	font-size: 1.1em;
	font-weight: bold;
}
#Layer2 {
	position:absolute;
	left:122px;
	top:378px;
	width:138px;
	height:186px;
	z-index:1;
	background-color: #EEEEEE;
}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #9E281E}
.style6 {color: #660000}
-->
</style>
</head>
<body>
<div class="top"></div>
<div class="page_wrap clearfix">
  <div class="header">
    <div class="header_block">
      <div class="logo"><img alt="logo" src="img/pc_logo.jpg" /></div>
      <h1 align="right">Online Digital Library </h1>
      <div align="right">Sri Lanka Institute of Information Technology,<br />
        Malabe, Sri Lanka. <br />
      Tel :   011 2301904</div>
    </div>
  </div>
  <div class="navbar" id="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
      <li><a href="ContactUs.php">Contact Us </a></li>
      <li><a href="FAQ.php">FAQs</a></li>
      <li></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
  <div class="container clearfix">
    <div class="left_column">
      <h3 class="style6">Search</h3>
      <form name="form2" method="post" action="Searcharticles1.php">
        <label>
        <input name="textfield3" type="text" size="15" />
        </label>
        <label>
		<input type="hidden" name="MM_update" value="form3" />
		<input type="button" name="Go" value="Go"  onclick="javascript:check1()"/>

        </label>
      </form>
      <p><strong>Advance Search</strong>?<a href="Searcharticles.php">Click</a> </p>
      <p class="style2">News</p>
      <p class="style2"><!-- MArquee Start from here--------------------------------------------------------------------------->
<script language="JavaScript1.2">

//Specify the marquee's width (in pixels)
var marqueewidth=160
//Specify the marquee's height
var marqueeheight=200 //org=162
//Specify the marquee's scroll speed (larger is faster)
var speed=2



var marqueecontents='<p align="center"><font color="#003366" font face="Verdana"><small><?php $row_Recordset2 = mysql_fetch_assoc($Recordset2); ?><?php echo $row_Recordset2['Title']; ?></p><p align="center"><?php $row_Recordset2 = mysql_fetch_assoc($Recordset2); ?><?php echo $row_Recordset2['Title']; ?></p><p align="center"><?php $row_Recordset2 = mysql_fetch_assoc($Recordset2); ?><?php echo $row_Recordset2['Title']; ?></p><p align="center"><?php $row_Recordset2 = mysql_fetch_assoc($Recordset2); ?><?php echo $row_Recordset2['Title']; ?></p><p align="center"><?php $row_Recordset2 = mysql_fetch_assoc($Recordset2); ?><?php echo $row_Recordset2['Title']; ?></font>'



if (document.all)
document.write('<marquee direction="up" scrollAmount='+speed+' style="width:'+marqueewidth+';height:'+marqueeheight+'">'+marqueecontents+'</marquee>')

function regenerate(){
window.location.reload()
}
function regenerate2(){
if (document.layers){
setTimeout("window.onresize=regenerate",1000)
intializemarquee()
}
}

function intializemarquee(){
document.cmarquee01.document.cmarquee02.document.write(marqueecontents)
document.cmarquee01.document.cmarquee02.document.close()
thelength=document.cmarquee01.document.cmarquee02.document.height
scrollit()
}

function scrollit(){
if (document.cmarquee01.document.cmarquee02.top>=thelength*(-1)){
document.cmarquee01.document.cmarquee02.top-=speed
setTimeout("scrollit()",100)
}
else{
document.cmarquee01.document.cmarquee02.top=marqueeheight
scrollit()
}
}

window.onload=regenerate2
                          </script>
                    </font> 
                  <span class="HomepageRightMenu">
                  <ilayer name="cmarquee01" height="&amp;{marqueeheight};" width="&amp;{marqueewidth};"> 
                  </ilayer>
                  </span>&nbsp;</p>
      <p>
	  
	  

                   
	  
	  
	  </p>
    </div>

    <div class="center_column">
      <div class="box_right">
        <h3>User Login</h3>
        <form  method="POST" name="Login" action="<?php echo $loginFormAction; ?>">
          <label>UserName
          <input name="username" type="text" id="username" size="18" />
          </label>
                <label>Password
                <input name="password" type="password" id="password" size="20" />
                </label>
                <label>                </label>
                <label>
                
				<input type="button" name="Submit" value="Submit"  onclick="javascript:check()"/>
                </label>
        </form>
        <p class="style4"><strong>Forgot Password</strong>?<a href="ForgotPassword.php">Click</a> </p>
        <hr />
        <p class="style3 style4"><a href="UserRegistration.php" class="style4">New Registration </a></p>
        <p align="center"><img src="img/0,11855,5-102-17-900380-0,00.gif" alt="" width="130" height="65" align="absbottom" /></p>
      </div>
      <h5 class="style4">Welcome</h5>
      <hr size="1" />
      <div align="justify"><span class="style4">Thank you for accessing Online Digital Library. We hope you are enjoy our   web and services. If you  <strong>could not login or further informations</strong>, please   send email to <a href="mailto:dli_info@sliit.lk"><strong>Us</strong></a>. </span><br />
      </div>
      <h5>&nbsp;</h5>
      <h5 class="style4">How to use the Online Digital Library </h5>
      <hr size="1" />
      <ul>
        <li class="style4">Any one can visit our site and can browse and read the   abstracts of articles. </li>
        <li class="style4">To download articles,users must have to register with this site. </li>
        <li class="style4">Registered member can download any number of articles. </li>
        <li class="style4">          User can search article by Article name or Author name.</li>
        <li class="style4">Further information go to FAQ's  </li>
      </ul>
      <h2>&nbsp;</h2>
    </div>
  </div>
  <div class="footer">
    <div class="footer_logo">
      <div align="center"></div>
    </div>
    <div align="center">Copyright, 2006 Sri Lanka Institute of Information Technology &nbsp;&#8226;&nbsp; Design
      by Sliit Students  for
    ECOM</div>
  </div>
</div>
<div class="bottom"></div>
</body>
</html>


<script language="javascript">
function check()
{
	if(document.getElementById('username').value=='')
	{
		alert("Username Empty");
		return;
		
	}
	else if(document.getElementById('Password').value=='')
	{
		alert("Password Empty");
		return;
	}
	else	
	document.Login.submit();
}

function check1()
{
	if(document.getElementById('textfield3').value=='')
	{
		alert("Search Field is Empty");
		return;
		
	}
	else	
	document.form2.submit();
}
</script>