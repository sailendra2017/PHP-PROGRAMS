<?php
	$zip = zip_open("text.zip");
	if ($zip) {
		# code...
		while ($zip_entry = zip_read($zip)) {
			# code...
			echo "<p>";
			echo "Name:".zip_entry_name($zip_entry)."<br />";
			if (zip_entry_open($zip, $zip_entry)) {
				# code...
				zip_entry_close($zip_entry);
			}
			echo "</p>";
		}
		zip_close($zip);
	}
?>
