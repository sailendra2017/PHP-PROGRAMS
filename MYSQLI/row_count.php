<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Return the no of rows in result set
	$rowcount = mysqli_num_rows($result);
	printf("Result set has %d rows.\n", $rowcount);
	//Free Result Sets
	mysqli_free_result($result);		
}

// Close Connection
mysqli_close($con);
?>