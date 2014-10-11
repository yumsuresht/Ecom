
<?php require_once('Connections/ECOM.php'); ?>


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
<title>Online Digital Library-Administrator--&gt;Upload Articles </title>
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
}
.style10 {color: #9E281E; font-weight: bold; }
.style7 {font-size: xx-small}
.style11 {
	color: #FFFFFF;
	font-size: x-small;
	font-weight: bold;
}
.style14 {font-size: x-small; font-weight: bold; }
.style15 {font-size: x-small}
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
menu1[0]='<a class="QuickLinks" href="AdminHome.php">Admin Home</a>'
menu1[1]='<a class="QuickLinks" href="AdminChangePassword.php">Change Password</a>'
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

      </SCRIPT>
      </p>
	    <table width="192" border="1" cellpadding="0" cellspacing="0" bordercolor="#9D281E">
          <tr>
            <td width="192" height="31" bgcolor="#9E281E"><div align="center" class="style5">
              <div align="left"><strong>Administrator--&gt;Upload Articles </strong></div>
            </div></td>
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
</span>&nbsp;</p>            </td>
          </tr>
        </table>      </td>
      <td width="604"><table width="587" border="0">
        <tr>
          <td width="490">&nbsp;</td>
          <td width="87"><div align="right" class="style10">
              <div align="left"><a href="<?php echo $logoutAction ?>" class="style7"><img src="img/2752238159.jpg" width="30" height="30"></a><a href="<?php echo $logoutAction ?>" class="style7">Log out</a></div>
          </div></td>
        </tr>
      </table>
        <p>
          <?php
		if($_SESSION['uploadmsg']!=NULL)		
		 echo "<table width=447 border=1 align=center cellpadding=0 cellspacing=0 bordercolor=#9E281E bgcolor=#000066>
          <tr><td><div align=center><span class=style11>".$_SESSION['uploadmsg']."</span></div></td></tr></table>"; ?>
</p>
        <p align="center" class="style15">
        
        <form id="form1" name="form1"  method="post" ENCTYPE="multipart/form-data">
  <table width="546" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
  
  <tr>
    <td width="101" rowspan="7" align="left" valign="top"><table width="101" height="229" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th height="100" scope="row"><span class="style15"><img src="img/upload.jpg" width="100" height="150"></span></th>
      </tr>
      <tr>
        <th height="129" align="left" valign="top" scope="row"><img src="img/hotnews.jpg" width="100" height="150"></th>
      </tr>
    </table></td>
    <td colspan="2" bgcolor="#993333"><span class="style11">Article Details</span></td>
    </tr>
  <tr>
    <td width="105"><span class="style14">Name of Article * </span></td>
    <td width="332"><label>
      <input name="textfield" type="text" size="50">
    </label></td>
  </tr>
  <tr>
    <td valign="top"><span class="style14">Abstract</span></td>
    <td><label>
      <textarea name="textarea" cols="39" rows="6"></textarea>
    </label></td>
  </tr>
  <tr>
    <td><span class="style14">Author Name * </span></td>
    <td><label>
      <input name="textfield2" type="text" size="40">
    </label></td>
  </tr>
  <tr>
    <td><span class="style14">Version*</span></td>
    <td><label>
      <input name="textfield3" type="text" size="10">
    </label></td>
  </tr>
  <tr>
    <td><span class="style14">Category</span></td>
    <td><label>
	        <input type="hidden" name="MM_update" value="form1">

      <select name="select">
		<option value="Behavioral Science">Behavioral Science</option>
		<option value="Biomedical and Life Sciences">Biomedical and Life Sciences</option>
		<option value="Business and Economics">Business and Economics</option>
		<option value="Chemistry and Materials Science">Chemistry and Materials Science</option>
		<option value="Chinese Library of Science">Chinese Library of Science</option>
		<option value="Computer Science">Computer Science</option>
		<option value="Earth and Environmental Science">Earth and Environmental Science</option>
		<option value="Engineering">Engineering</option>
		<option value="Humanities, Social Sciences and Law">Humanities, Social Sciences and Law</option>
		<option value="Mathematics">Mathematics</option>
		<option value="Medicine">Medicine</option>
		<option value="Physics and Astronomy">Physics and Astronomy</option>
		<option value="Russian Library of Science">Russian Library of Science</option>
      </select>
    </label></td>
  </tr>
  
  <tr>
    <td colspan="2"><span class="style14">File: </span><span class="style14">
      <input type="file" name="file" size="30">
        <input type="button" name="Submit" value="Upload"  onClick="javascript:check()"/>
        </span></td>
    </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
</table>
</form>
	  
	  
	  </p></td>
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
<?php

$_SESSION['uploadmsg']=NULL;
?>


<script language="javascript">
function check()
{
	if(document.getElementById('textfield').value=='')
	{
		alert("Article Name Feild is Empty");
		form1.textfield.focus();
		return;
		
	}
	else if(document.getElementById('textarea').value=='')
	{
		alert("Abstract Feild Empty");
		form1.textarea.focus();
		return;
	}
	else if(document.getElementById('textfield2').value=='')
	{
		alert("Author Name Feild is Empty");
		form1.textfield2.focus();
		return;
	}
	else if(document.getElementById('textfield3').value=='')
	{
		alert("Version Feild is Empty");
		form1.textfield3.focus();
		return;
	}
	else
	{
	document.form1.action="Upload.php"
	document.form1.submit()
	}
	
}
</script>