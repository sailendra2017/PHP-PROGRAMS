<?php
$ch = curl_init();
$timeout = 5;
curl_setopt($ch,CURLOPT_URL,"http://localhost/LIT/CURL/test.php");
//curl_setopt($ch,CURLOPT_URL,"https://www.google.co.in");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
 curl_close($ch);
 echo $data;
?>