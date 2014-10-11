<?php require_once('Connections/ECOM.php'); ?>

<?php
mysql_select_db($database_ECOM, $ECOM);
$query_Recordset1 = "SELECT * FROM hotnews";
$Recordset2 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">




<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />
<link rel="stylesheet" type="text/css" href="screen1.css" media="screen" />
<link rel="stylesheet" type="text/css" href="print.css" media="print" />
<link rel="stylesheet" type="text/css" href="handheld.css" media="handheld" />
<title>Online Digital Library-Administrator--&gt;Home</title>
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
#Layer2 {
	position:absolute;
	left:122px;
	top:378px;
	width:138px;
	height:186px;
	z-index:1;
	background-color: #EEEEEE;
}
#Layer3 {
	position:absolute;
	left:660px;
	top:204px;
	width:92px;
	height:21px;
	z-index:1;
	background-color: #FF00FF;
}
#Layer4 {
	position:absolute;
	left:114px;
	top:431px;
	width:132px;
	height:43px;
	z-index:1;
}
.style1 {color: #9E281E}
.style5 {
	font-size: 12;
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {font-size: x-small; color: #A22920; }
.style12 {color: #FFFFFF}
.style13 {font-weight: bold; font-size: x-small;}
.style15 {font-size: x-small; color: #A22920; font-weight: bold; }
-->
</style>
</head>
<body>
<span class="HomepageRightMenu">
</span>






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
     
      <li>
        <div align="right"><a href="#"></a>  </div>
      </li>
    </ul>
  </div>
  <table width="780" height="192" border="0" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
    <tr>
      <td width="167" align="left" valign="top" bordercolor="#9B2C25"><p>
	      
      </p>
	    <table width="192" border="1" cellpadding="0" cellspacing="0" bordercolor="#9D281E">
          <tr>
            <td width="192" height="31" bgcolor="#9E281E"><div align="left"><span class="style5">Who we are? </span></div></td>
          </tr>
        </table>
	    <table width="192" height="183" border="1" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
          <tr>
            <td width="188" height="22"><div align="center"><a onMouseOver="dropdownmenu(this, event, menu1, '150px')" 
    	onClick="return clickreturnvalue()" onMouseOut=delayhidemenu() 
    href=""></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><strong>Hot News </strong></div></td>
          </tr>
          <tr>
            <td><p>
			
			
			
<!-- MArquee Start from here----------------------------------------------->
<script language="JavaScript1.2">

//Specify the marquee's width (in pixels)
var marqueewidth=160
//Specify the marquee's height
var marqueeheight=250 //org=162
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
<ilayer name="cmarquee01" height="&amp;{marqueeheight};" width="&amp;{marqueewidth};"></ilayer>
</span>&nbsp;</p>
            </td>
          </tr>
        </table>
      </td>
      <td width="604"><p>&nbsp;</p>
        <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="538"><span class="style15">We are the final year students of Sri Lanka Institute of Information Technology </span></td>
          </tr>
          <tr>
            <td height="52"><span class="style15">This Online Library System was developed by us for the Electronic Commerce Assignment. We are the five members developed this site. </span></td>
          </tr>
        </table>
        <table width="539" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
          <tr>
            <td colspan="4" bgcolor="#9D281E"><div align="center" class="style12"><span class="style13">Developers</span></div></td>
          </tr>
          <tr>
            <td width="135"><span class="style8">T.Shanmugalingam</span></td>
            <td width="111"><span class="style8">DIT/03/M2-0599</span></td>
            <td width="110"><span class="style8">Team Leader </span></td>
            <td width="173"><span class="style8">tharmini_s@yahoo.co.uk</span></td>
          </tr>
          <tr>
            <td><span class="style8">G.Subaskar</span></td>
            <td><span class="style8">DIT/03/C2-3741</span></td>
            <td><span class="style8">Group Member </span></td>
            <td><span class="style8">g_subaskar@yahoo.com</span></td>
          </tr>
          <tr>
            <td><span class="style8">P.Thivakaran</span></td>
            <td><span class="style8">DIT/03/C1-3579</span></td>
            <td><span class="style8">Group Member</span></td>
            <td><span class="style8">theepan@inbox.com</span></td>
          </tr>
          <tr>
            <td><span class="style8">T.Rajkumar</span></td>
            <td><span class="style8">DIT/03/C2-3717</span></td>
            <td><span class="style8">Group Member</span></td>
            <td><span class="style8">thiru.rajkumar@gmail.com</span></td>
          </tr>
          <tr>
            <td><span class="style8">P.Sureshkumar</span></td>
            <td><span class="style8">DIT/03/C2-3800</span></td>
            <td><span class="style8">Group Member</span></td>
            <td><span class="style8">sureshp8@yahoo.com</span></td>
          </tr>
          <tr>
            <td height="92" colspan="4" align="left" valign="top"><img src="img/pf_main_img.jpg" width="535" height="93"></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </td>
    </tr>
  </table>
  <div class="footer">
    <div align="center" class="style1">Copyright, 2006 Sri Lanka Institute of Information Technology &nbsp;&#8226;&nbsp; Design
      by Sliit Students  for
    ECOM</div>
  </div>
  



  
</div>
<div class="bottom"></div>
</body>
</html>
