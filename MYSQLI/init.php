<?php
$con = mysqli_init();
if(!$con)
{
	die("mysqli_init failed");
}
if(!mysqli_real_connect($con,"localhost","root","","lit"))
{
	die("Connect Error :".mysqli_connect_erro());
}
mysqli_close($con);
?>