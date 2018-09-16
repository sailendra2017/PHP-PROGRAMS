<title>Insert Page</title>
<center><h2>Insert Page</h2></center><br>
<a href="index.php">Index Page</a>
<?php
//make a MySQL connection
include('config.php');
//to check if a submit button was clicked, use this...
if(isset($_POST['submit']))
{
$text = $_POST['text'];
$linkurl = $_POST['linkurl'];
//the INSERT INTO statement is used
//to add new records to a database table
mysql_query("INSERT INTO page (text,linkurl)
VALUES ('$text','$linkurl')")
or die(mysql_error());
}else{
?>
<form method="post" action="insert.php">
<table><tr><td>
Title:
</td><td>
<input name="text" size="60" maxlength="255">
</td></tr>
<tr><td>
URL:
</td><td>
<input name="linkurl" size="60" maxlength="255">
</td></tr>
<tr><td>
<input type="submit" name="submit" value="submit">
</td></tr></table>
</form>
<?php
}
?>