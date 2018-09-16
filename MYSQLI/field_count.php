<?php
include 'config.php';
$result = mysqli_query($con,"SELECT * FROM student");
//Get Number of Columns - will always return 3
$c = mysqli_field_count($con);
echo $c;
//Free Result Sets
mysqli_free_result($result);	
// Close Connection
mysqli_close($con);
?>