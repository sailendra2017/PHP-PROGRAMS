<?php
	$con = mysqli_connect("localhost","root","","lit");
	// Check Connection
	if(!$con)
	{
		die( "Connection Error:".mysqli_connect_errno());
	}
	else
	{
		echo "Connection Success";
	}	
?>