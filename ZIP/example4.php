<?php
backup_tables('localhost','root','','college');
/* backup the db OR just a table*/
function backup_tables($host,$user,$pass,$tables="*")
{
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db(database_name)
}
?>