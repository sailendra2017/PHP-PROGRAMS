
<?php
$link = mysqli_connect("localhost", "root", "", "lit");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query  = "SELECT LastName, Age from student  ORDER BY Lastname";
$query .= "SELECT Country from customers ";

/* execute multi query */
if (mysqli_multi_query($link, $query)) {
   echo 'hi';
}

/* close connection */
mysqli_close($link);
?>
