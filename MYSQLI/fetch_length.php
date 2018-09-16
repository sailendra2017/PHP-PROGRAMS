<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	$row = mysqli_fetch_row($result);
	//Display field lenghts
	foreach (mysqli_fetch_lengths($result) as $i => $val) {
		printf("Field %2d has length: %2d\n", $i+1,$val);
	}
}
//Free Result Sets
mysqli_free_result($result);	
// Close Connection
mysqli_close($con);
?>