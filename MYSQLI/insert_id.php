<?php
include 'config.php';
mysqli_query($con,"INSERT INTO  student (FirstName,LastName,Age) VALUES ('Glenn','Quagmire',33)");
//Print auto generated id
echo "New record has id:".mysqli_insert_id($con);
// Close Connection
mysqli_close($con);
?>