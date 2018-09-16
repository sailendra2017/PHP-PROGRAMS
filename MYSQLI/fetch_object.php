<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Get field information for "AGE"
	while($obj = mysqli_fetch_object($result))
	{
		printf("%s(%s)\n", $obj->LastName, $obj->Age);
	}	
}
//Free Result Sets
mysqli_free_result($result);	
// Close Connection
mysqli_close($con);
?>