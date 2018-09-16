<?php
$servername = "localhot";
$username = "root";
$password = "";
try{
	//Create connection for mysql
	$conn = new PDO("mysql::host=$servername;dbname=college",$username,$password);
	//set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "connected Successfully";
}
catch(PDOException $e)
{echo "connection failed:".$e->getMessage();}
?>