<?php require_once('Connections/ECOM.php'); ?>

<?php
//initialize the session

mysql_select_db($database_ECOM, $ECOM);
$query_Recordset3 = "SELECT * FROM hotnews";
$Recordset3 = mysql_query($query_Recordset3, $ECOM) or die(mysql_error());


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) 
{
$articlename=$_REQUEST['textfield'];

if($_REQUEST['select']=="Article")
{
	$query_Recordset2="select * from article where Abstract like '%".$articlename."%'";
	$display1="Search Article by Article:".$_REQUEST['textfield'];
}
else if($_REQUEST['select']=="Author")
{
	$query_Recordset2="select * from article where Author like '%".$articlename."%'";
	$display1="Search Article by Author:".$_REQUEST['textfield'];
}
else if($_REQUEST['select']=="Category")
{
	$query_Recordset2="select * from article where Category like '%".$articlename."%'";
	$display1="Search Article by Category:".$_REQUEST['textfield'];
}

mysql_select_db($database_ECOM, $ECOM);
$Recordset2 = mysql_query($query_Recordset2, $ECOM) or die(mysql_error());

 $totalRows = mysql_num_rows($Recordset2);
 if($totalRows==0){
 $display= "<span class=style9>".$display1."--> No Record Found</span>";
 }
 else 
 $display= "<span class=style9>".$display1."</span>";			
 
 
$message="";
 
while ($row_Recordset1 = mysql_fetch_assoc($Recordset2))
{ 
	$message=$message."<tr><td width=25>&nbsp;</td><td width=401><span class=style10>
	Article Name:".$row_Recordset1["articleName"];
	if($row_Recordset1["NoofViewedUsers"]<=10)
		$message=$message."<img src=img/rating_1.gif width=60 height=12>";
	elseif($row_Recordset1["NoofViewedUsers"]<=20)
		$message=$message."<img src=img/rating_2.gif width=60 height=12>";
	elseif($row_Recordset1["NoofViewedUsers"]<=30)
		$message=$message."<img src=img/rating_3.gif width=60 height=12>";
	elseif($row_Recordset1["NoofViewedUsers"]<=40)
		$message=$message."<img src=img/rating_4.gif width=60 height=12>";
	else
		$message=$message."<img src=img/rating_5.gif width=60 height=12>";

	$message=$message."<br>Author:".$row_Recordset1["Author"]."
	<br>Abstract:".$row_Recordset1["Abstract"].
"<br>Publish Date:".$row_Recordset1["PublishDate"].
	 "<br><span class=style11>You Must Register with this website. After that You can download the Articles<a href=UserRegistration.php>Click to Register</a></span><hr></td></tr>";


}  
			  

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
<title>Online Digital Library--&gt;Search Articles</title>
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
.style10 {color: #9E281E; font-weight: bold; font-size: x-small; }
.style11 {
	font-size: x-small;
	font-style: italic;
	font-weight: bold;
	color: #000099;
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
            <td width="192" height="31" bgcolor="#9E281E"><div align="left"><span class="style5">Search Articles </span></div></td>
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



var marqueecontents='<p align="center"><font color="#003366" font face="Verdana"><small><?php $row_Recordset3 = mysql_fetch_assoc($Recordset3); ?><?php echo $row_Recordset3['Title']; ?></p><p align="center"><?php $row_Recordset3 = mysql_fetch_assoc($Recordset3); ?><?php echo $row_Recordset3['Title']; ?></p><p align="center"><?php $row_Recordset3 = mysql_fetch_assoc($Recordset3); ?><?php echo $row_Recordset3['Title']; ?></p><p align="center"><?php $row_Recordset3 = mysql_fetch_assoc($Recordset3); ?><?php echo $row_Recordset3['Title']; ?></p><p align="center"><?php $row_Recordset3 = mysql_fetch_assoc($Recordset3); ?><?php echo $row_Recordset3['Title']; ?></font>'



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
      <td width="604" valign="top"><table width="587" border="0">
        
      </table>
        <form name="form1" method="post" action="Searcharticles.php">
          <table width="462" height="18" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="77"><div align="left"><span class="style10">Search</span></div></td>
              <td width="385" valign="top"><p align="left" class="style10">
                <label>
                <input type="text" name="textfield">
                </label>
                <label>
	  	        
	  	        <select name="select">
	  	          <option value="Article">Article</option>
	  	          <option value="Author" selected>Author</option>
	  	          <option value="Category">Category</option>
	  	          </select>
	  	        <input type="hidden" name="MM_update" value="form1">
				<input type="button" name="Search" value="Search"  onclick="javascript:check()"/>
                </label>
              </td>
            </tr>
            <tr>
              <td colspan="2">
			  <?php echo "<span class=style10>".$display."</span>";
			 		  
			  ?>
			  </td>
            </tr>
          </table>
        </form>
        <table width="436" border="0">
		
		
		<?php  echo "<span class=style10>".$message."</span>"; ?>
        </table>
       
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>      </td>
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

<script language="javascript">
function check()
{
	if(document.getElementById('textfield').value=='')
	{
		alert("Search Field is Empty");
		return;
		
	}
	else	
	document.form1.submit();
}
</script>