<?php
echo 'entered in the config file';

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password="";// Mysql password  
$db_name="";
//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 


?>
