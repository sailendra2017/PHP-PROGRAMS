
<?php
$mysqli = new mysqli("localhost", "root", "", "lit");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query  = "SELECT LastName, Age from student  ORDER BY LastName";
$query .= "SELECT Country from customers";

/* execute multi query */
if ($mysqli->multi_query($query)) {
  echo "working";
    do {
        /* store first result set */
        if ($result = $mysqli->store_result()) {
            while ($row = $result->fetch_row()) {
                printf("%s\n", $row[0]);
            }
            $result->free();
        }
        /* print divider */
        if ($mysqli->more_results()) {
            printf("-----------------\n");
        }
    } while ($mysqli->next_result());
}

/* close connection */
$mysqli->close();
?>
