<?php
include 'config.php';
print_r(mysqli_get_host_info($con));
mysqli_close($con);
?>