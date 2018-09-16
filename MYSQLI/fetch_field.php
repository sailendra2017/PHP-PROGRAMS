<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
if($result = mysqli_query($con,$sql))
{
	//Get field information for "AGE"
	while($filedinfo = mysqli_fetch_field($result))
	{
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