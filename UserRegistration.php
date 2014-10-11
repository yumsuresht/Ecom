<?php require_once('Connections/ECOM.php'); ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}


$msg1=$_SESSION['$msg2'];

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
<title>Online Digital Library-Signout</title>
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
.style6 {
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {color: #FFFFFF; font-weight: bold; font-size: x-small; }
.style12 {font-size: x-small}
.style14 {font-size: x-small; font-weight: bold; }
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
            <td width="192" height="31" bgcolor="#9E281E"><div align="left" class="style6 style12">User Registration </div></td>
          </tr>
        </table>
	    <table width="192" height="183" border="1" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
          
          <tr>
            <td width="188"><div align="center"><strong>Hot News </strong></div></td>
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
      <td width="604"><div align="center">


        <form  method="POST" name="form1" action="Registration.php">
          <table width="549" border="1" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
            
            <tr>
              <td width="130" rowspan="11" align="left" valign="top"><img src="img/images1.jpg" width="130" height="140"><img src="img/hotnews.jpg" width="130" height="140"></td>
              <td colspan="2" bgcolor="#9E281E"><span class="style10">User Registration</span></td>
              </tr>
            <tr>
              <td width="124"><span class="style14">Title</span></td>
              <td width="287"><label>
                <select name="title" id="title" size="1">
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Miss">Miss</option>
                  <option value="Master">Mast</option>
                  <option value="Doctor">Dr</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td><span class="style14">First Name*</span></td>
              <td><label>
                <input name="Fname" type="text" id="Fname" size="39">
              </label></td>
            </tr>
            <tr>
              <td><span class="style14">Last Name*</span></td>
              <td><input name="Lname" type="text" id="Lname" size="39"></td>
            </tr>
            <tr>
              <td><span class="style14">Sex</span></td>
              <td><select name="sex" id="sex">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select></td>
            </tr>
            <tr>
              <td><span class="style14">Profession</span></td>
              <td><select name="designation" id="designation">
                <option>[Select a Title]</option>
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
              </select></td>
            </tr>
            <tr>
              <td><span class="style14">Email*</span></td>
              <td><label>
                <input name="email" type="text" id="email" size="30">
              </label></td>
            </tr>
            <tr>
              <td><span class="style14">Address</span></td>
              <td><label>
                <input name="textfield3" type="text" size="39">
              </label></td>
            </tr>
            <tr>
              <td><span class="style14">Country/State</span></td>
              <td><select size="1" name="state" id="state">
                <option selected value="">Choose a Country                                       
                  <option value="United States of America">United                                       States of America                                       
                    <option value="Canada">Canada                                       
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
                </select></td>
            </tr>
            <tr>
              <td><span class="style14">Question</span></td>
              <td><select name="question" id="question">
                <option value="">[Select a Question]                                       
                  <option value="What is your pets name?" >What                                       is your pet's name?                                       
                    <option value="What was the name of your first school?" >What                                       was the name of your first school?                                       
                    <option value="Who was your childhood hero?" >Who                                       was your childhood hero?                                       
                    <option value="What is your favorite pastime?" >What                                       is your favorite pastime?                                       
                    <option value="What is your all-time favorite sports team?" >What                                       is your all-time favorite sports team?                                       
                    <option value="What is your fathers middle name?" >What                                       is your father's middle name?                                       
                    <option value="What was your high school mascot?" >What                                       was your high school mascot?                                       
                    <option value="What make was your first car or bike?" >What                                       make was your first car or bike?                                       
                    <option value="Where did you first meet your spouse?" >Where                                       did you first meet your spouse?
                </select></td>
            </tr>
            <tr>
              <td><span class="style14">Answer</span></td>
              <td><label>
                <input name="textfield" type="text" size="39">
              </label></td>
            </tr>
          </table>
                <table width="375" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#9E281E">
                  <tr>
                    <td width="207" height="26" valign="top"><label>
                      
					  
					    <div align="right">
					      <input type="hidden" name="mode" value="ok">
					      <input type="button" name="Submit" value="Submit" onClick="javascript:check()">
		              </div>
                    </label></td>
                    <td width="168" valign="top"><label>
                    <input type="reset" name="Submit2" value="Reset">
                    </label></td>
                  </tr>
                  <tr>
                    <?php echo $msg1 ?>
                  </tr>
            </table>
                
                
                
                
          </form>
        </div>
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

<script language="javascript">
function check()
{

	if(document.getElementById('Fname').value=='')
	{
		alert("Name Field is Empty");
		form1.Fname.focus();
		return;
		
	}
	else if(document.getElementById('email').value=='')
	{
		alert("Email Field is Empty");
		form1.email.focus();
		return;
	}
	else if(document.getElementById('email').value!='')
	{
		if (document.form1.email.value.indexOf ('@',0) == -1 || document.form1.email.value.indexOf ('.',0) == -1){
		alert("Email is invalid");
		form1.email.focus();
		return;
		}
	}
	else
	
	
	document.getElementById('mode').value='ok'
	document.form1.submit();
	
}




</script>
<?php

$_SESSION['$msg2']=NULL;
?>