<?php
include 'config.php';
$sql = "SELECT LastName from student  ORDER BY LastName";
$sql .= "SELECT Country from customers ";
//Execute Multi Query
if(mysqli_multi_query($con,$sql))
{
	do
	{
		//Store first result set
		if($result = mysqli_store_result($con))
		{
			//Fetch one and one row
			while($row = mysqli_fetch_row($result))
			{
				printf("%s\n", $row[0]);
			}	
			mysqli_free_result($result);
		}
	}
	while(mysqli_next_result($con));
}	
//Close Connection
mysqli_close($con);
?>