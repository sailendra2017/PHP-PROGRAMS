<title>Index Page</title>
<center><h2>INDEX</h2></center><BR>
<?php
//make a MySQL connection
include('config.php');
echo "&nbsp;<a href=\"insert.php\">INSERT PHP</a><br>";
//get all the data from the page table
//*=select everything from the table page
$result = mysql_query("SELECT * FROM page")
or die(mysql_error());
while($link=mysql_fetch_array($result)){
//echo (display) a link using $link[linkid]
echo "&nbsp;<a href=\"webpage.php?id=$link[linkid]\">Web Page 1</a><br>";
}
?>