<?php
$con = mysqli_init();
if(!$con)
{
	die("mysqli_init failed");
}
mysqli_ssl_set($con,"key.pem","cert.pem","cacert.pem",NULL,NULL);
if(!mysqli_real_connect($con,"localhost","root","","lit"))
{
	die("Connection Error:".mysqli_connect_error());
}	
// Close Database Connection
mysqli_close($con);
?>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													