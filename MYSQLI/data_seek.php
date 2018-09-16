<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Seek to row number 15
	mysqli_data_seek($result,14);
	//Fetch Row
	$row = mysqli_fetch_row($result);
	printf("Lastname:%s Age: %s\n",$row[0],$row[1]);
}
//Free Result Sets
mysqli_free_result($result);	
//Close Connection
mysqli_close($con);
?>