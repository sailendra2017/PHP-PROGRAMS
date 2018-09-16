<?php
include 'config.php';
//Table student already exists, so we should get an error
$sql = "CREATE TABLE student (FirstName VARCHAR(30),Lastname VARCHAR(30),aGE INT)";
if(!mysqli_query($con,$sql))
{
	echo "SQLSTATE error : ".mysqli_sqlstate($con);
}
//Close Connection
mysqli_close($con);
?>