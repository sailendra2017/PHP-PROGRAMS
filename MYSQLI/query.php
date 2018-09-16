<?php
include 'config.php';
$sql = "SELECT LastName, Age from student  ORDER BY Lastname";
$sql = "INSERT INTO student (FirsName,LastName,Age) VALUES('Sailendra','Mansignh',26)";
// Close Connection
mysqli_close($con);
?>