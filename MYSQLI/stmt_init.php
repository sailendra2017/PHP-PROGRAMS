<?php
include'config.php';
$fname = "raju";
//Create a Prepared Statement
$stmt = mysqli_stmt_init($con);
if(mysqli_stmt_prepare($stmt,"SELECT LastName FROM student WHERE FirstName=?"))
{
	//Bind parameters
	mysqli_stmt_bind_param($stmt,"s",$fname);

	//Execute query
	mysqli_stmt_execute($stmt);

	//Bind Result Variables
	mysqli_stmt_bind_result($stmt,$lastname);

	//Fetch Value
	mysqli_stmt_fetch($stmt);

	printf("%s having last name %s", $fname, $lastname);

	//Close Statement
	mysqli_stmt_close($stmt);
}
// Close Database Connection
mysqli_close($con);
?>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																													