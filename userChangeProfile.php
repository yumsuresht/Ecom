<?php require_once('Connections/ECOM.php'); ?>


<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

mysql_select_db($database_ECOM, $ECOM);
$query_Recordset1 = "SELECT * FROM hotnews";
$Recordset2 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = "UPDATE userdetails SET
   Title='".$_POST['title'].
  "',FirstName='". $_POST['Fname'].
  "',LastName='". $_POST['Lname'].
  "',Sex='". $_POST['sex'].
  "',Profession='". $_POST['designation'].
  "',Address='". $_POST['textfield3'].
  "',Country='". $_POST['state'].
  "',Email='". $_POST['email'].
  "' WHERE username='".$_SESSION['MM_Username']."'";

 mysql_select_db($database_ECOM, $ECOM);
 $Result1 = mysql_query($updateSQL, $ECOM) or die(mysql_error());
 
 if($Result1)
 $msg="Your Profile is sucessfully Edited";
 
}




mysql_select_db($database_ECOM, $ECOM);
$query_Recordset1 = "SELECT * FROM userdetails WHERE username = '".$_SESSION['MM_Username']."'";
$Recordset1 = mysql_query($query_Recordset1, $ECOM) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$_SESSION['MM_FirstName'] = $row_Recordset1['FirstName'];  
	$_SESSION['MM_LastName'] = $row_Recordset1['LastName'];

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

if(!isset($_SESSION['MM_Username']))
{
 header("Location: index.php");
 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0089)http://www.aurorahealthcare.org/events/_hidden/search.asp?DisplayList=Y&fldDate=2/28/2006 -->



<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="#" />
<meta name="keywords" content="#" />
<meta name="author" content="#" />
<link rel="stylesheet" type="text/css" href="screen1.css" media="screen" />
<link rel="stylesheet" type="text/css" href="print.css" media="print" />
<link rel="stylesheet" type="text/css" href="handheld.css" media="handheld" />
<title>Online Digital Library-User--&gt;Change Proflle </title>
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
.style5 {	font-size: 12;
	color: #FFFFFF;
}
.style6 {color: #9E281E; font-weight: bold; }
.style7 {font-size: xx-small}
.style8 {font-size: x-small}
.style9 {color: #9E281E; font-size: x-small; }
.style13 {font-size: x-small; font-weight: bold; color: #9E281E; }
.style15 {font-size: 12; color: #FFFFFF; font-weight: bold; }
.style17 {color: #000000; font-size: x-small; }
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
menu1[0]='<a class="QuickLinks" href="userhome.php">User Home</a>'
menu1[1]='<a class="QuickLinks" href="userChangePass.php">Change Password</a>'
menu1[2]='<a class="QuickLinks" href="userSearcharticle.php">Search Articles</a>'


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
            <td width="192" height="31" bgcolor="#9E281E"><div align="left"><span class="style15">User--&gt;Change Profile </span></div></td>
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
      <td width="604"><table width="587" border="0">
        <tr>
          <td width="490"><span class="style8">Welcome::<?php echo $_SESSION['MM_FirstName']." ".$_SESSION['MM_LastName']?></span></td>
          <td width="87"><div align="right" class="style6">
              <div align="left"><a href="<?php echo $logoutAction ?>" class="style7"><img src="img/2752238159.jpg" width="30" height="30"></a><a href="<?php echo $logoutAction ?>" class="style7">Log out</a></div>
          </div></td>
        </tr>
      </table>
        </br>
        <form name="form1" method="post" action="<?php echo $editFormAction; ?>">
          <table width="474" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#9E281E" bgcolor="#E2E2E2">
            
            <tr>
              <td width="104" rowspan="10" valign="top" class="style13"><img src="img/changeprofile-admin.jpg" width="98" height="242"></td>
              <td colspan="2" bgcolor="#993333" class="style13"><span class="style15">User  Profile</span></td>
            </tr>
            <tr>
              <td width="104" class="style13">UserName</td>
              <td width="258" class="style5"><span class="style1 style8"><?php echo $_SESSION['MM_Username']?></span></td>
            </tr>
            <tr>
              <td class="style13">Title</td>
              <td class="style5"><span class="style9">
                <label>
                <select name="title" id="title" size="1">
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Miss">Miss</option>
                  <option value="Master">Mast</option>
                  <option value="Doctor">Dr</option>
                </select>
                </label>
              </span></td>
            </tr>
            <tr>
              <td class="style13">First Name*</td>
              <td class="style5"><span class="style17">
                <label>
                <input name="Fname" type="text" id="Fname" size="39" value="<?php echo $row_Recordset1['FirstName']; ?>" >
                </label>
              </span></td>
            </tr>
            <tr>
              <td class="style13">Last Name*</td>
              <td class="style5"><input name="Lname" type="text" class="style8" id="Lname"value="<?php echo $row_Recordset1['LastName']; ?>" size="39"></td>
            </tr>
            <tr>
              <td class="style13">Sex</td>
              <td class="style5"><span class="style9">
                <select name="sex" id="sex">
					<option><?php echo $row_Recordset1['Sex']; ?></option>
				  	<option>Male</option>
                  	<option>Female</option>
                </select>
              </span></td>
            </tr>
            <tr>
              <td class="style13">Profession</td>
              <td class="style5"><span class="style9">
                <select name="designation" id="designation">
                  <option><?php echo $row_Recordset1['Profession']; ?></option>
                  <option>Account Manager/Sales Rep</option>
                  <option>Analyst</option>
                  <option>Associate/Individual Contributor/Specialist</option>
                  <option>Assistant/Support Staff</option>
                  <option>Buyer</option>
                  <option>Chairman/CEO</option>
                  <option>Database Administrator</option>
                  <option>Systems Administrator</option>
                  <option>Network Administrator</option>
                  <option>Systems Architect</option>
                  <option>Other</option>
                </select>
              </span></td>
            </tr>
            <tr>
              <td class="style13">Email*</td>
              <td class="style5"><span class="style9">
                <label>
                <input name="email" type="text" id="email" size="30" value="<?php echo $row_Recordset1['Email']; ?>">
                </label>
              </span></td>
            </tr>
            <tr>
              <td class="style13">Address</td>
              <td class="style5"><span class="style9">
                <label>
                <input name="textfield3" type="text" size="39" value="<?php echo $row_Recordset1['Address']; ?>">
                </label>
              </span></td>
            </tr>
            <tr>
              <td class="style13">Country/State</td>
              <td class="style5"><span class="style9">
                <select size="1" name="state" id="state">
                  <option selected value="<?php echo $row_Recordset1['Country']; ?>"><?php echo $row_Recordset1['Country']; ?>                                   
                  <option value="United States of America">United States of America                  <option value="Canada">Canada                                       
                  <option value="Germany">Germany                                       
                  <option value="France">France                                       
                  <option value="United Kingdom">United Kingdom
				  <option value="India">India                                       
                  <option value="Afghanistan">Afghanistan                                       
                  <option value="Albania">Albania                                       
                  <option value="Algeria">Algeria                                       
                  <option value="American Samoa">American Samoa
                  <option value="Andorra">Andorra                                       
                  <option value="Angola">Angola                                       
                  <option value="Anguilla">Anguilla                                       
                  <option value="Antarctica">Antarctica                                       
                  <option value="Antigua and Barbuda">Antigua                                       and Barbuda                                       
                  <option value="Argentina">Argentina                                       
                  <option value="Armenia">Armenia                                       
                  <option value="Aruba">Aruba                                       
                  <option value="Australia">Australia                                       
                  <option value="Austria">Austria                                       
                  <option value="Azerbaijan">Azerbaijan                                       
                  <option value="Bahamas">Bahamas                                       
                  <option value="Bahrain">Bahrain                                       
                  <option value="Bangladesh">Bangladesh                                       
                  <option value="Barbados">Barbados                                       
                  <option value="Belarus">Belarus                                       
                  <option value="Belgium">Belgium                                       
                  <option value="Belize">Belize                                       
                  <option value="Benin">Benin                                       
                  <option value="Bermuda">Bermuda                                       
                  <option value="Bhutan">Bhutan                                       
                  <option value="Bolivia">Bolivia                                       
                  <option value="Bosnia and Herzegowina">Bosnia                                       and Herzegowina                                       
                  <option value="Botswana">Botswana                                       
                  <option value="Bouvet Island">Bouvet Island                                       
                  <option value="Brazil">Brazil                                       
                  <option value="British Indian Ocean Territory">British                                       Indian Ocean Territory                                       
                  <option value="Brunei Darussalam">Brunei Darussalam                                       
                  <option value="Bulgaria">Bulgaria                                       
                  <option value="Burkina Faso">Burkina Faso                                       
                  <option value="Burundi">Burundi                                       
                  <option value="Cambodia">Cambodia                                       
                  <option value="Cameroon">Cameroon                                       
                  <option value="Cape Verde">Cape Verde                                       
                  <option value="Cayman Islands">Cayman Islands                                       
                  <option value="Central African Republic">Central                                       African Republic                                       
                  <option value="Chad">Chad                                       
                  <option value="Chile">Chile                                       
                  <option value="China">China                                       
                  <option value="Christmas Island">Christmas                                       Island                                       
                  <option value="Cocoa (Keeling) Islands">Cocoa                                       (Keeling) Islands                                       
                  <option value="Colombia">Colombia                                       
                  <option value="Comoros">Comoros                                       
                  <option value="Congo">Congo                                       
                  <option value="Cook Islands">Cook Islands                                       
                  <option value="Costa Rica">Costa Rica                                       
                  <option value="Cote Divoire">Cote Divoire                                       
                  <option value="Croatia (local name: Hrvatska)">Croatia                                       (local name: Hrvatska)                                       
                  <option value="Cuba">Cuba                                       
                  <option value="Cyprus">Cyprus                                       
                  <option value="Czech Republic">Czech Republic                                       
                  <option value="Denmark">Denmark                                       
                  <option value="Djibouti">Djibouti                                       
                  <option value="Dominica">Dominica                                       
                  <option value="Dominican Republic">Dominican                                       Republic                                       
                  <option value="East Timor">East Timor                                       
                  <option value="Ecuador">Ecuador                                       
                  <option value="Egypt">Egypt                                       
                  <option value="El Salvador">El Salvador                                       
                  <option value="Equatorial Guinea">Equatorial                                       Guinea                                       
                  <option value="Eritrea">Eritrea                                       
                  <option value="Estonia">Estonia                                       
                  <option value="Ethiopia">Ethiopia                                       
                  <option value="Falkland Islands (Malvinas)">Falkland                                       Islands (Malvinas)                                       
                  <option value="Faroe Islands">Faroe Islands                                       
                  <option value="Fiji">Fiji                                       
                  <option value="Finland">Finland                                       
                  <option value="France, Metropolitan">France,                                       Metropolitan                                       
                  <option value="French Guiana">French Guiana                                       
                  <option value="French Polynesia">French Polynesia                                       
                  <option value="French Southern Territories">French                                       Southern Territories                                       
                  <option value="Gabon">Gabon                                       
                  <option value="Gambia">Gambia                                       
                  <option value="Georgia">Georgia                                       
                  <option value="Ghana">Ghana                                       
                  <option value="Gibraltar">Gibraltar                                       
                  <option value="Greece">Greece                                       
                  <option value="Greenland">Greenland                                       
                  <option value="Grenada">Grenada                                       
                  <option value="Guadeloupe">Guadeloupe                                       
                  <option value="Guam">Guam                                       
                  <option value="Guatemala">Guatemala                                       
                  <option value="Guinea">Guinea                                       
                  <option value="Guinea-Bissau">Guinea-Bissau                                       
                  <option value="Guyana">Guyana                                       
                  <option value="Haiti">Haiti                                       
                  <option value="Heard and Mc Donald Islands">Heard                                       and Mc Donald Islands                                       
                  <option value="Honduras">Honduras                                       
                  <option value="Hong Kong">Hong Kong                                       
                  <option value="Hungary">Hungary                                       
                  <option value="Iceland">Iceland                                       
                  <option value="Indonesia">Indonesia                                       
                  <option value="Iran (Islamic Republic of)">Iran                                       (Islamic Republic of)                                       
                  <option value="Iraq">Iraq                                       
                  <option value="Ireland">Ireland                                       
                  <option value="Israel">Israel                                       
                  <option value="Italy">Italy                                       
                  <option value="Jamaica">Jamaica                                       
                  <option value="Japan">Japan                                       
                  <option value="Jordan">Jordan                                       
                  <option value="Kazakhstan">Kazakhstan                                       
                  <option value="Kenya">Kenya                                       
                  <option value="Kiribati">Kiribati                                       
                  <option value="Korea">Korea                                       
                  <option value="Korea, Republic of">Korea,                                       Republic of                                       
                  <option value="Kuwait">Kuwait                                       
                  <option value="Kyrgyzstan">Kyrgyzstan                                       
                  <option value="Lao Peoples Democratic Republic">Lao                                       Peoples Democratic Republic                                       
                  <option value="Latvia">Latvia                                       
                  <option value="Lebanon">Lebanon                                       
                  <option value="Lesotho">Lesotho                                       
                  <option value="Liberia">Liberia                                       
                  <option value="Libyan Arab Jamahiriya">Libyan                                       Arab Jamahiriya                                       
                  <option value="Liechtenstein">Liechtenstein                                       
                  <option value="Lithuania">Lithuania                                       
                  <option value="Luxembourg">Luxembourg                                       
                  <option value="Macau">Macau                                       
                  <option value="Macedonia">Macedonia                                       
                  <option value="Madagascar">Madagascar                                       
                  <option value="Malawi">Malawi                                       
                  <option value="Malaysia">Malaysia                                       
                  <option value="Maldives">Maldives                                       
                  <option value="Mali">Mali                                       
                  <option value="Malta">Malta                                       
                  <option value="Marshall Islands">Marshall                                       Islands                                       
                  <option value="Martinique">Martinique                                       
                  <option value="Mauritania">Mauritania                                       
                  <option value="Mauritius">Mauritius                                       
                  <option value="Mayotte">Mayotte                                       
                  <option value="Mexico">Mexico                                       
                  <option value="Micronesia, Federated States of">Micronesia,                                       Federated States of                                       
                  <option value="Moldova, Republic of">Moldova,                                       Republic of                                       
                  <option value="Monaco">Monaco                                       
                  <option value="Mongolia">Mongolia                                       
                  <option value="Montserrat">Montserrat                                       
                  <option value="Morocco">Morocco                                       
                  <option value="Mozambique">Mozambique                                       
                  <option value="Myanmar">Myanmar                                       
                  <option value="Namibia">Namibia                                       
                  <option value="Nauru">Nauru                                       
                  <option value="Nepal">Nepal                                       
                  <option value="Netherlands">Netherlands                                       
                  <option value="Netherlands Antilles">Netherlands                                       Antilles                                       
                  <option value="New Caledonia">New Caledonia                                       
                  <option value="New Zealand">New Zealand                                       
                  <option value="Nicaragua">Nicaragua                                       
                  <option value="Niger">Niger                                       
                  <option value="Nigeria">Nigeria                                       
                  <option value="Niue">Niue                                       
                  <option value="Norfolk Island">Norfolk Island                                       
                  <option value="Northern Mariana Islands">Northern                                       Mariana Islands                                       
                  <option value="Norway">Norway                                       
                  <option value="Oman">Oman                                       
                  <option value="Pakistan">Pakistan                                       
                  <option value="Palau">Palau                                       
                  <option value="Panama">Panama                                       
                  <option value="Papua New Guinea">Papua New                                       Guinea                                       
                  <option value="Paraguay">Paraguay                                       
                  <option value="Peru">Peru                                       
                  <option value="Philippines">Philippines                                       
                  <option value="Pitcairn">Pitcairn                                       
                  <option value="Poland">Poland                                       
                  <option value="Portugal">Portugal                                       
                  <option value="Puerto Rico">Puerto Rico                                       
                  <option value="Qatar">Qatar                                       
                  <option value="Reunion">Reunion                                       
                  <option value="Romania">Romania                                       
                  <option value="Russian Federation">Russian                                       Federation                                       
                  <option value="Rwanda">Rwanda                                       
                  <option value="Saint Kitts and Nevis">Saint                                       Kitts and Nevis                                       
                  <option value="Saint Lucia">Saint Lucia                                       
                  <option value="Saint Vincent and the Grenadines">Saint                                       Vincent and the Grenadines                                       
                  <option value="Samoa">Samoa                                       
                  <option value="San Marino">San Marino                                       
                  <option value="Sao Tome and Principe">Sao                                       Tome and Principe                                       
                  <option value="Saudi Arabia">Saudi Arabia                                       
                  <option value="Senegal">Senegal                                       
                  <option value="Seychelles">Seychelles                                       
                  <option value="Sierra Leone">Sierra Leone                                       
                  <option value="Singapore">Singapore                                       
                  <option value="Slovakia (Slovak Republic)">Slovakia                                       (Slovak Republic)                                       
                  <option value="Slovenia">Slovenia                                       
                  <option value="Solomon Islands">Solomon Islands                                       
                  <option value="Somalia">Somalia                                       
                  <option value="South Africa">South Africa                                       
                  <option value="South Georgia">South Georgia                                       
                  <option value="Spain">Spain                                       
                  <option value="Sri Lanka">Sri Lanka                                                                         
                  <option value="St. Helena">St. Helena                                       
                  <option value="St. Pierre and Miquelon">St.                                       Pierre and Miquelon                                       
                  <option value="Sudan">Sudan                                       
                  <option value="Suriname">Suriname                                       
                  <option value="Svalbard and Jan Mayen Islands">Svalbard                                       and Jan Mayen Islands                                       
                  <option value="Swaziland">Swaziland                                       
                  <option value="Sweden">Sweden                                       
                  <option value="Switzerland">Switzerland                                       
                  <option value="Syrian Arab Republic">Syrian                                       Arab Republic                                       
                  <option value="Taiwan">Taiwan                                       
                  <option value="Tajikistan">Tajikistan                                       
                  <option value="Tanzania, United Republic of">Tanzania,                                       United Republic of                                       
                  <option value="Thailand">Thailand                                       
                  <option value="Togo">Togo                                       
                  <option value="Tokelau">Tokelau                                       
                  <option value="Tonga">Tonga                                       
                  <option value="Trinidad and Tobago">Trinidad                                       and Tobago                                       
                  <option value="Tunisia">Tunisia                                       
                  <option value="Turkey">Turkey                                       
                  <option value="Turkmenistan">Turkmenistan                                       
                  <option value="Turks and Caicos Islands">Turks                                       and Caicos Islands                                       
                  <option value="Tuvalu">Tuvalu                                       
                  <option value="Uganda">Uganda                                       
                  <option value="Ukraine">Ukraine                                       
                  <option value="United Arab Emirates">United                                       Arab Emirates                                       
                  <option value="United States Minor Outlying Islands">United                                       States Minor Outlying Islands                                       
                  <option value="Uruguay">Uruguay                                       
                  <option value="Uzbekistan">Uzbekistan                                       
                  <option value="Vanuatu">Vanuatu                                       
                  <option value="Vatican City State (Holy See)">Vatican                                       City State (Holy See)                                       
                  <option value="Venezuela">Venezuela                                       
                  <option value="Viet Nam">Viet Nam                                       
                  <option value="Virgin Islands (British)">Virgin                                       Islands (British)                                       
                  <option value="Virgin Islands (U.S.)">Virgin                                       Islands (U.S.)                                       
                  <option value="Wallisw and Futuna Islands">Wallisw                                       and Futuna Islands                                       
                  <option value="Western Sahara">Western Sahara                                       
                  <option value="Yeman">Yeman                                       
                  <option value="Yugoslavia">Yugoslavia                                       
                  <option value="Zaire">Zaire                                       
                  <option value="Zambia">Zambia                                       
                  <option value="Zimbabwe">Zimbabwe 
                </select>
              </span></td>
            </tr>
          </table>
          <table width="474" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
            <tr>
              <td width="147"><label>
		        <div align="right">
		          <input type="hidden" name="MM_update" value="form1">
		          <input type="submit" name="Submit" value="Submit">
		          </label>
	            </div></td>
              <td width="148"><label>

                <div align="right">
                  <input type="reset" name="Submit2" value="Reset">
                  </div>
                  </label></td></tr>
            <tr>
              <td colspan="2" bgcolor="#000066"><div align="center"><span class="style15"><?php echo $msg ?></span></div></td>
            </tr>
          </table>
        </form>
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
<a href="<?php echo $logoutAction ?>"></a>
</body>
</html>
