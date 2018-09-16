<?php
include 'config.php';
print_r(mysqli_get_proto_info($con));
mysqli_close($con);
?>