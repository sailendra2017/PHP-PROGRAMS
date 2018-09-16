<?php
////make a MySQL connection
include('config.php');
// smarty configuration
include 'Smarty/libs/Smarty.class.php';
$smarty = new smarty();
$smarty->template_dir = 'view';
$smarty->compile_dir = 'cache';
$smarty->cache_dir = 'cache';
//get ID from URL
$id = $_GET['id'];
//get linkid, text, linkurl from the page table
//..or..*=select everything from the table page
$result = mysql_query("SELECT linkid, text, linkurl
FROM page WHERE linkid='$id' ")
or die(mysql_error());
while($myrow = mysql_fetch_assoc($result))
{
$values[] = $myrow;
}
$smarty->assign('page', $values);
$smarty->caching = 1;
//$REQUEST_URI will create a separate cache file
//for each unique URL when you call webpage.tpl.
$smarty->display('webpage.tpl',$REQUEST_URI);
?>