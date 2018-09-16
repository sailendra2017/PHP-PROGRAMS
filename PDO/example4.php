<?php
$servername = "localhot";
$username = "root";
$password = "";
try{
	//Create connection for mysql
	$conn = new PDO("mysql::host=$servername;dbname=lit",$username,$password);
	//set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
<table border="1" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td>User Id</td>
			<td>Password</td>
		</tr>
	</thead>
	<tbody>
		<?php
$result = $conn->prepare("select * from user_master");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
		?>
<tr>
	<td><?=$row['user_id']?></td>
	<td><?=$row['password']?></td>
</tr>
		<?php
}
?>
	</tbody>
</table>	
<?php
}
catch(PDOException $e)
{echo "connection failed:".$e->getMessage();}
?>