<?php
include 'config.php';

//Some PHP Code
if(mysqli_close($con))  //mysqli_close() used to close connecteion
{
	echo "Connection Successfully Closed";
}
else
{
	echo "There is a problem in Close Connection";
}

?>