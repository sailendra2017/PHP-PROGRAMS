
<?php

$con = mysql_connect('localhost', 'root', '');
if (!$con) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('8gb_2016', $con);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
