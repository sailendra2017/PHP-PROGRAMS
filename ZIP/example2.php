<?php
	$zip = new ZipArchive();
	$filename = "./ziplit.zip";
	if($zip->open($filename, ZipArchive::CREATE) !== TRUE)
	{
		exit("Cannot open <$zipfile> \n");
	}
	$zip->addFromString("testfilephp.txt","#1 This is a test string added as testfilephp.txt. \n");
	echo "numfiles:".$zip->numFiles."\n";
	echo "status:".$zip->status."\n";
	$zip->close();
?>	