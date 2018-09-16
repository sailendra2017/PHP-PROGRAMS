<?php
include 'config.php';
$charset = mysqli_character_set_name($con);
echo "Default Character Set is :".$charset;
mysqli_close($con);
?>