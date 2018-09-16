<?php
//make a MySQL connection
include('config.php');
//create a MySQL table in the selected database
mysql_query("CREATE table `page` (
`linkid` int(11) NOT NULL auto_increment,
`text` text collate utf8_unicode_ci,
`linkurl` text collate utf8_unicode_ci,
PRIMARY KEY (`linkid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
COLLATE=utf8_unicode_ci AUTO_INCREMENT=1")
or die(mysql_error());
?>