<?php
include 'config.php';
//Check  if server is alive
if(mysqli_ping($con))
{
	echo "Connection is OK!";
}
else
{
	echo"Error:".mysqli_error($con);
}
// Close Connection
mysqli_close($con);
?>