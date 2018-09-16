<?php
$con = mysqli_connect("localhost","root","","lit");
//Check Connection
if(mysqli_connect_errno())
{

	die("Failed to connect to Mysql:".mysqli_connect_errno());
}

?>