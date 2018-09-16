<?php
include 'config.php';
print_r(mysqli_get_server_version($con));
mysqli_close($con);
?>