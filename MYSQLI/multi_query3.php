<?php
$con=mysqli_connect("localhost","root","","lit");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT LastName, Age from student  ORDER BY LastName";
$sql .= "SELECT Country from customers";

// Execute multi query
if (!mysqli_multi_query($con,$sql))
{
  do
    {

    // Store first result set
    if ($result=mysqli_store_result($con)) {
      echo "working";
  
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
        printf("%s\n",$row[0]);
        }
      // Free result set
      mysqli_free_result($result);
      }
    }
  while (mysqli_next_result($con));
}
else
{
  echo"erro";
}

mysqli_close($con);
?> 