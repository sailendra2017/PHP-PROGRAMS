<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Get field information for All fields
	mysqli_field_seek($result,0);
	while($filedinfo = mysqli_fetch_field($result))
	{
		//Get field cursor position
		$currentfield = mysqli_field_tell($result);
		printf("Column : %d\n", $currentfield);
		printf("Name : %s\n", $filedinfo->name);
		printf("Table : %s\n", $filedinfo->table);
		printf("Max. Len : %s\n", $filedinfo->max_length);
	}
			
}
//Free Result Sets
mysqli_free_result($result);	
// Close Connection
mysqli_close($con);
?>