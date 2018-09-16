<?php
	function create_zip($files,$destination,$overwrite = false)
	{
		//if the zip file already exists and overwirte is false, return true
		if (file_exists($destination) && !$overwirte) {
			# code...
			return false;
		}
		//vars
		$valid_files = array();
		//if files were passed in....
		if (is_array($files)) {
			# cycle through each file...
			foreach ($files as $file) {
				# make sure the file exists
				if (file_exists($file)) {
					# code...
					$valid_files[] = $file;
				}
			}

		}
		//if we have good files..........
		if (count($valid_files)) {
			# create the archieve
			$zip = new ZipArchive();
			if ($zip->open($destination,$overwrite?ZIPARCHIVE::OVERWRITE:ZIPARCHIVE::CREATE) !== true) {
				# code...
				return false;
			}
			//add the files
			foreach ($valid_files as $file) {
				# code...
				$zip->addFile($file,$file);
			}
			//debug
			//echo 'The zip archieve contains.,'.$zip->numFiles.'File with a status of ,'.$zip->status;
			//close the zip--done!
			$zip->close();

			//check to make sute the file exists 
			return file_exists($destination);
		}
		else
		{
			return false;
		}
	}
	$file_to_zip  = array(
			'example1.php',
			'example2.php',
			'images/1.jpg'
	);
	//if true good if false zip creation failed
	$result = create_zip($file_to_zip,"my_archieve.zip");
	echo $result;
?>	