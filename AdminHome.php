﻿<?php require_once('Connections/ECOM.php'); ?>

<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}


mysql_select_db($database_ECOM, $ECOM);
$query_Recordset1 = "SELECT * FROM hotnews";
$Recordset2 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());

?>
<?php
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";

if (!isset($_SESSION)) {
  session_start();
}
if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true"))
{
  $_SESSION['MM_Username'] = NULL;
  unset($_SESSION['MM_Username']);
	
	header("Location: index.php");
    exit;
}
if(!isset($_SESSION['MM_Username'])||$_SESSION['MM_Username']!="ADMIN")
{
 header("Location: index.php");
 }
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
.style6 {color: #9E281E; font-weight: bold; }
.style7 {font-size: xx-small}
.style29 {font-size: x-small; color: #993333; font-weight: bold; font-style: italic; }
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
	      <SCRIPT type=text/javascript>//Contents for menu 1
var menu1=new Array()
menu1[0]='<a class="QuickLinks" href="AdminChangePassword.php">Change Password</a>'
menu1[1]='<a class="QuickLinks" href="AdminUploadarticles.php">Upload Articles</a>'
menu1[2]='<a class="QuickLinks" href="AdminViewUploadedarticles.php">View Uploaded Articles</a>'
menu1[3]='<a class="QuickLinks" href="AdminSearchUsers.php">Search Users</a>'
menu1[4]='<a class="QuickLinks" href="AdminSearcharticles.php">Search Articles</a>'
menu1[5]='<a class="QuickLinks" href="AddHotNews.php">Add HotNews</a>'
menu1[6]='<a class="QuickLinks" href="logview.php">View Log file</a>'


var menuwidth='150px' //default menu width
var menubgcolor='#E4E9F5'  //menu bgcolor
var disappeardelay=100  //menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick="yes" //hide menu when user clicks within menu?

/////No further editting needed

var ie4=document.all
var ns6=document.getElementById&&!document.all

if (ie4||ns6)
document.write('<div id="dropmenudiv" style="visibility:hidden;width:'+menuwidth+';background-color:'+menubgcolor+'" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')

function getposOffset(what, offsettype){
var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentEl=what.offsetParent;
while (parentEl!=null){
totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
parentEl=parentEl.offsetParent;
}
return totaloffset;
}


function showhide(obj, e, visible, hidden, menuwidth){
if (ie4||ns6)
dropmenuobj.style.left=dropmenuobj.style.top=-500
if (menuwidth!=""){
dropmenuobj.widthobj=dropmenuobj.style
dropmenuobj.widthobj.width=menuwidth
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")
obj.visibility=visible
else if (e.type=="click")
obj.visibility=hidden
}

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge){
var edgeoffset=0
if (whichedge=="rightedge"){
var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth
}
else{
var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset
var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure){ //move up?
edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight
if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) //up no good either?
edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge
}
}
return edgeoffset
}

function populatemenu(what){
if (ie4||ns6)
dropmenuobj.innerHTML=what.join("")
}


function dropdownmenu(obj, e, menucontents, menuwidth){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu()
dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv
populatemenu(menucontents)

if (ie4||ns6){
showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)
dropmenuobj.x=getposOffset(obj, "left")
dropmenuobj.y=getposOffset(obj, "top")
dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px"
dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+"px"
}

return clickreturnvalue()
}

function clickreturnvalue(){
if (ie4||ns6) return false
else return true
}

function contains_ns6(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide(e){
if (ie4&&!dropmenuobj.contains(e.toElement))
delayhidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
delayhidemenu()
}

function hidemenu(e){
if (typeof dropmenuobj!="undefined"){
if (ie4||ns6)
dropmenuobj.style.visibility="hidden"
}
}

function delayhidemenu(){
if (ie4||ns6)
delayhide=setTimeout("hidemenu()",disappeardelay)
}

function clearhidemenu(){
if (typeof delayhide!="undefined")
clearTimeout(delayhide)
}

if (hidemenu_onclick=="yes")
document.onclick=hidemenu

      </SCRIPT></p>
	    <table width="192" border="1" cellpadding="0" cellspacing="0" bordercolor="#9D281E">
          <tr>
            <td width="192" height="31" bgcolor="#9E281E"><div align="left"><span class="style5">Administrator--&gt;Home</span></div></td>
          </tr>
        </table>
	    <table width="192" height="183" border="1" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
          <tr>
            <td width="188" height="22"><div align="center"><a onMouseOver="dropdownmenu(this, event, menu1, '150px')" 
    	onClick="return clickreturnvalue()" onMouseOut=delayhidemenu() 
    href=""><img height=31 src="img/quick-links.gif" width=106 border=0>
                  <style type=text/css>
#dropmenudiv {
	BORDER-RIGHT: #6678a4 1px solid; BORDER-TOP: #6678a4 1px solid; Z-INDEX: 100; FONT: 11px/15px Arial; BORDER-LEFT: #6678a4 1px solid; BORDER-BOTTOM: #6678a4 1px solid; POSITION: absolute; font-color: black
}
#dropmenudiv A {
	PADDING-RIGHT: 0px; DISPLAY: block; PADDING-LEFT: 0px; FONT-WEIGHT: normal; PADDING-BOTTOM: 3px; WIDTH: 100%; TEXT-INDENT: 4px; PADDING-TOP: 3px; TEXT-DECORATION: none; font-color: black
}
#dropmenudiv A:hover {
	BACKGROUND-COLOR: #b4c1de
}
A.QuickLinks:link {
	COLOR: black
}
A.QuickLinks:visited {
	COLOR: black
}
A.QuickLinks:hover {
	COLOR: #0000cc
}
                  </style>
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
      <td width="604" valign="top"><table width="519" height="360" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <th width="87" align="left" valign="top" scope="row"><table width="80" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AdminChangePassword.php"><img src="img/changePasword.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></th>
            <td width="121"><a href="AdminChangePassword.php"><span class="style29">Change Password </span></a></td>
            <td width="87">&nbsp;</td>
            <td width="135"><a href="AdminUploadArticles.php"><span class="style29">Upload Article </span></a></td>
            <td width="89" align="left" valign="top"><table width="80" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AdminUploadArticles.php"><img src="img/viewArticle.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></td>
          </tr>
          <tr>
            <th height="81" align="left" valign="top" scope="row"><table width="80" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AddHotNews.php"><img src="img/hotnews.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></th>
            <td><a href="AddHotNews.php"><span class="style29">Hot News </span></a></td>
            <td>&nbsp;</td>
            <td><span class="style29"><a href="AdminViewUploadedArticles.php">View Uploaded Article</a> </span></td>
            <td align="left" valign="top"><table width="80" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AdminViewUploadedArticles.php"><img src="img/upload.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></td>
          </tr>
          <tr>
            <th height="81" align="left" valign="top" scope="row"><table width="80" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AdminSearchUsers.php"><img src="img/searchuser.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></th>
            <td><a href="AdminSearchUsers.php"><span class="style29">Search User</span></a></td>
            <td valign="bottom">&nbsp;</td>
            <td><a href="AdminSearchArticles.php"><span class="style29">Search Article </span></a></td>
            <td align="left" valign="top"><table width="80" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AdminSearchArticles.php"><img src="img/searcharticle-admin.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></td>
          </tr>
          <tr>
            <th height="102" align="left" valign="top" scope="row"><table width="80" height="78" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="logview.php"><img src="img/CAH3RSGP.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></th>
            <td><a href="logview.php"><span class="style29">View Log File </span></a></td>
            <td valign="top">&nbsp;</td>
            <td><span class="style29"><a href="AdminHome.php?doLogout=true">Logout</a></span></td>
            <td align="left" valign="top"><table width="80" height="78" border="2" align="left" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th scope="row"><div align="left"><a href="AdminHome.php?doLogout=true"><img src="img/images7.jpg" width="80" height="80" border="0"></a></div></th>
              </tr>
            </table></td>
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
