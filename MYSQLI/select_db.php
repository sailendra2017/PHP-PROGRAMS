<?php
$con = mysqli_connect("localhost","root","","lit");
//Check Connection
if(mysqli_connect_errno())
{
	die("Failed to connect to Mysql:".mysqli_connect_errno());
}
//....some php code for database "my_db"..
//change database to "college"
mysqli_select_db($con,"college");
//Some php code for data base "college"
mysqli_close($con);0
?>