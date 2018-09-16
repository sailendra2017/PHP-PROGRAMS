<?php
if(isset($_REQUEST["b1"]))
{
	$ch = curl_init();
	$userid = $_REQUEST['userid'];
	$pwd = $_REQUEST['pwd'];
	curl_setopt($ch,CURLOPT_URL,"http://localhost/LIT/CURL/test1.php");
	//curl_setopt($ch,CURLOPT_URL,"https://www.google.co.in");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,"userid=".$userid."&pwd=". $pwd);
	$buffer = curl_exec($ch);
	if(empty($buffer))
	{
		echo "Buffer is Empty";
	}
	else
	{
		echo $buffer;
	}
	 curl_close($ch);

}
?>
<form>
	Userid : <input type="test" name="userid"><br>
	Password : <input type="test" name="pwd"><br>
	<input type="submit" value="login" name="b1">
</form>