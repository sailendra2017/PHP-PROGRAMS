<?php
include 'config.php';
var_dump(mysqli_get_charset($con));
mysqli_close($con);
?>