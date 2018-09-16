<?php
$servername = "localhot";
$username = "root";
$password = "";
try{
	//Create connection for mysql
	$conn = new PDO("mysql::host=$servername;dbname=lit",$username,$password);
	//set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO `user_master` 
	(`user_name`, `user_id`, `pet_name`, `pet_info`)
	VALUES
	('Sailendra', '123', 'pet name', 'peti')";
	if($conn->query($sql))
	{
		echo "Data Inserted successfully";
	}
	else
	{
		echo "Problem while data insert";
	}
}
catch(PDOException $e)
{echo "connection failed:".$e->getMessage();}
?>