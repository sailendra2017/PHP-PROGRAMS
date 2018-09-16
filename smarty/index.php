<?php
include 'Smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir="view";
$smarty->compile_dir="cache";
$a = 200;
$smarty ->assign("a",$a);
$smarty->display('content.tpl.html');

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');

// display it
$smarty->display('index.tpl.html');
$smarty->display('example1.tpl.html');
$smarty->display('example2.tpl.html');
$smarty->display('child.tpl.html');
$smarty->display('example3.tpl.html');

//To assign value of an array
$arr = array(100,300,400,600);
$smarty->assign("name",$arr);
$smarty->display('example4.tpl.html');

//Display in Uppper case
$name='sailendanath mansingh';
$smarty->assign('title',$name);
$smarty->display('example5.tpl.html');
$smarty->display('example6.tpl.html');

//Repeat a string
$smarty->display('example7.tpl.html');

//Array 
$arr_s = array("Litindia","PHP",".NET");
$smarty->assign("myArray",$arr_s);
$smarty->display('example8.tpl.html');

$website = "litindia.in is the website name of lit . i am at BBST. I am at LIT";
$smarty->assign("title",$website);
$smarty->display('example9.tpl.html');

//Convert Integer to Float
$name = 232342;
$smarty->assign("title",$name);
$smarty->display('example10.tpl.html');

//Count No of Characters in a string
$smarty->assign('articleTitle','Dear Student,Welcome to my PHP class');
$smarty->display('example11.tpl.html');
?>
