<?php
include 'config.php';
print_r(mysqli_get_client_version());
mysqli_close($con);
?>