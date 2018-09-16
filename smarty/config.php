<?php
//MySQL Configuration
//DB Host (Normally 'localhost')
$dbhost = 'localhost';
//DB Database Username
$dbusername = 'root';
//DB Database User Password
$dbpassword = '';
//DB Database Name
$dbname = 'college';
//mysql_connect function
$conn=mysql_connect($dbhost, $dbusername, $dbpassword);
if(!$conn) :
die('Could not connect: ' . mysql_error());
endif;
$db=mysql_select_db($dbname, $conn);
if(!$db) :
die ('Cant connect to database : ' . mysql_error());
endif;
?>