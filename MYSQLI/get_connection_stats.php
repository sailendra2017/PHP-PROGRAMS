<?php
include 'config.php';
print_r(mysqli_get_connection_stats($con));
mysqli_close($con);
?>