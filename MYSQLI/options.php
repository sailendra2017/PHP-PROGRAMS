<?php
$con = mysqli_init();
if(!$con)
{
	die("mysql_init failed");
}
mysqli_options($con,MYSQLI_READ_DEFAULT_FILE,"myfile.cnf");
if(!mysqli_real_connect($con,"localhost","root","","lit"))
{
	die("Connect Error:".mysqli_connect_error());
}
mysqli_close($con);
?>