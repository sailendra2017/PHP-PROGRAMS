<?php
$userid = $_REQUEST['userid'];
include 'config.php';
$result = mysql_query("SELECT * FROM `student` where FirstName  = '".$userid."' ");
if($arr = mysql_fetch_assoc($result))
{
	echo json_encode($arr);
}	
?>