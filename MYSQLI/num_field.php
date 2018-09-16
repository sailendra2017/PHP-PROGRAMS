<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Return the no of fields in result set
	$fieldcount = mysqli_num_fields($result);
	printf("Result set has %d fields.\n", $fieldcount);
	//Free Result Sets
	mysqli_free_result($result);		
}

// Close Connection
mysqli_close($con);
?>