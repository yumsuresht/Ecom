<?php
$hostname_ECOM = "localhost";
$database_ECOM = "ecom";
$username_ECOM = "root";
$password_ECOM = "123456";
$ECOM = mysql_pconnect($hostname_ECOM, $username_ECOM, $password_ECOM) or trigger_error(mysql_error(),E_USER_ERROR); 
?>