<?php
include 'config.php';
//Get thread id
$t_id = mysqli_thread_id($con);
// Kill connection
if(mysqli_kill($con,$t_id))
{
	echo "Successfully Kill Connection";
}
else
{
	echo "Unable to kill connection";
}
?>