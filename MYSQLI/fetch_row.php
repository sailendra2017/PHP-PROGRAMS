<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Fetch one and one row
	while($row = mysqli_fetch_row($result))
	{
		printf("%s(%s)\n", $row[0], $row[1]);
	}	
}
//Free Result Sets
mysqli_free_result($result);	
// Close Connection
mysqli_close($con);
?>