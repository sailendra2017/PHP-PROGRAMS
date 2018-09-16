<?php
include 'config.php';
print_r(mysqli_get_client_stats());
mysqli_close($con);
?>