<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
$result = mysqli_query($con,$sql);
//Fetch All
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
//Free Result Sets
mysqli_free_result($result);	
// Close Database Connection
mysqli_close($con);
?>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													