<?php
$curl = curl_init("http://localhost/LIT/CURL/test.php");
//curl_setopt($ch,CURLOPT_URL,"https://www.google.co.in");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
$page = curl_exec($curl);
if(curl_error($curl))
{
	echo "Scraper Error:".curl_error($curl);
	exit;
}
curl_close($curl);
$regex = '/(?<=<title>).+(?=<\/title>)/iU';
if(preg_match($regex, $page, $list))
	echo $list[0];
else
	print "Not Found";
 ?>
