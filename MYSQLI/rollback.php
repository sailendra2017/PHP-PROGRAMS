<?php
include 'config.php';
//Set Auto Commit to off
mysqli_autocommit($con,FALSE);
//Insert some values
mysqli_query($con,"INSERT INTO  student (FirstName,LastName,Age) VALUES ('Peter','Griffin',35)");
mysqli_query($con,"INSERT INTO  student (FirstName,LastName,Age) VALUES ('Glenn','Quagmire',33)");
//Commit transaction
mysqli_commit($con);
//Rollback transaction
mysqli_rollback($con);
//Close Connection
mysqli_close($con);
?>