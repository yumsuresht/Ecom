<?php require_once('Connections/ECOM.php'); ?>

<?php

if (!isset($_SESSION)) {
  session_start();
}

mysql_select_db($database_ECOM, $ECOM);
$selectSQL="select * from article where FileName='".$_GET['na']."'";
$selectRS = mysql_query($selectSQL, $ECOM) or die(mysql_error());
$row_selectRS = mysql_fetch_assoc($selectRS);

$count=(int)$row_selectRS['NoofViewedUsers']+1; 
//echo $count;

$result3 = "update article set NoofViewedUsers=".$count." where FileName='".$_GET['na']."';";
mysql_select_db($database_ECOM, $ECOM);
$Result2 = mysql_query($result3, $ECOM) or die(mysql_error()); 



$url_dir="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/Uploaded_articles/";
$filepath= $url_dir.$_GET['na'];

$filename = 'log.txt';
$somecontent = $_GET['na']."--".$_SESSION['MM_Username']."--".date("F j, Y, g:i a")."\n";

// Let's make sure the file exists and is writable first.
if (is_writable($filename))
{
    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }

    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    echo "Success, wrote ($somecontent) to file ($filename)";
    fclose($handle);
}
else 
{
    echo "The file $filename is not writable";
}
//header("Location: userSearcharticle.php");

header("Location: ".$filepath);



?>


