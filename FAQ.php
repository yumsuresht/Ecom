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
.style6 {
	font-size: x-small;
	color: #9E281E;
}
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
            <td width="192" height="31" bgcolor="#9E281E"><div align="left"><span class="style5">FAQ</span></div></td>
          </tr>
        </table>
	    <table width="192" height="183" border="1" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
          <tr>
            <td width="188" height="22"><div align="center"><a onMouseOver="dropdownmenu(this, event, menu1, '150px')" 
    	onClick="return clickreturnvalue()" onMouseOut=delayhidemenu() 
    href="">
              
            </a></div></td>
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
      <td width="604"><table width="569" border="0" cellpadding="0" cellspacing="0">

        <tr>
          <td width="104" rowspan="3" valign="top"><img src="img/CAM7S76F.jpg" width="104" height="267"></td>
          <td width="459" height="60" align="left" valign="top" bgcolor="#E2E2E2" class="style6"><strong>How can I access articles from home? </strong></font></strong><br>
Some articles are free and are in the public domain. These are readily accessible to 
                anyone with Internet access. Current 
                students, faculty and staff can access 
                articles from home by signing in with 
            their username and password.</td>
        </tr>
        <tr>
          <td height="60" align="left" valign="top" class="style6"><p><strong>How do I view, save, and print 
            articles? </strong></strong><br>
             Viewing, 
               saving, and printing articles 
               depends in large part on what the specific 
               article allows as well as on your local 
               set-up. Generally, you are able to print out 
               the article. Often, too, you are able to 
               download the article either to a floppy disk 
               or to a hard drive. Frequently article 
               require Adobe Acrobat Reader or Microsoft word or Win Zip software in 
               order to view articles. This software allows 
               one to read the documents in PDF or 
               doc format, 
               essentially a graphical representation of 
            the printed page.</p>
            </td>
        </tr>
        <tr>
          <td height="60" align="left" valign="top" class="style6"><span class="style6"><strong>How to search 
            articles? </strong></span><span class="style1">you can give the name of articles or author's name or category and get the article information </span></td>
        </tr>
      </table>
      
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
