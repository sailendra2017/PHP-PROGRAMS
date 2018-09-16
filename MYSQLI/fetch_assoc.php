<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
$result = mysqli_query($con,$sql);
//Associative Array
$row = mysqli_fetch_assoc($result);
printf("%s (%s)\n",$row['LastName'],$row['Age']);
//Free Result Sets
mysqli_free_result($result);	
// Close Connection
mysqli_close($con);
?>