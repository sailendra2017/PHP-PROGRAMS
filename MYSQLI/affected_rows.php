<?php
include 'config.php';
//Perform queries and print out affedted rows
mysqli_query($con,"SELECT * FROM student");
echo "Affected rows :".mysqli_affected_rows($con);
mysqli_query($con,"DELETE FROM student WHERE Age>89");
echo "Addected Rows:".mysqli_affected_rows($con);
mysqli_close($con);
?>