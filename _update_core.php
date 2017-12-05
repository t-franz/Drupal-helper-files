<?php

$nofile = TRUE;
$version = 70;


while ($nofile && $version > 50) {
	$file = 'https://ftp.drupal.org/files/projects/drupal-7.'.$version.'.zip';
	print 'Checkfile: '.$file.'<br/>';
	if (strlen(@file_get_contents($file))) {
		$nofile = FALSE;
		print '<br/>Get file: '.$file.'<br/>';
	} else {
		$version--;
	}
}



if (file_put_contents("drupal_core.zip", file_get_contents($file)) ) {
	echo 'File "'.$file.'" geladen.<br/>';
	unzip("drupal_core.zip");
	unlink("drupal_core.zip");
	if (!rename('drupal-7.'.$version,'drupal')) {
		print '<br/><br/>Could not rename folder <em>drupal-7.'.$version.'</em>. <b>Please rename folder <em>drupal-7.'.$version.'</em> manually.</b><br/>';
	} else {
		print '<br/>Renaming folder <em>drupal-7.'.$version.'</em> to <em>drupal</em><br/>';
		removetxt();
		print '<br/><br/>Next Steps: <b>Remove folder and files <em>sites</em>, <em>.htaccess</em>, <em>robots.txt</em> from new folder.</b>';
		print 'Move folders and <a href="/update.php">update</a> site.<br/><br/><br/>';
	}

} else {
	echo 'Herunterladen von "'.$file.'" fehlgeschlagen.<br/>';
}


function unzip($file){ 
	$zip = zip_open($file); 
	if(is_resource($zip)){ 
		$tree = ""; 
		while(($zip_entry = zip_read($zip)) !== false){ 
			if(strpos(zip_entry_name($zip_entry), DIRECTORY_SEPARATOR) !== false){ 
				$last = strrpos(zip_entry_name($zip_entry), DIRECTORY_SEPARATOR); 
				$dir = substr(zip_entry_name($zip_entry), 0, $last); 
				$file = substr(zip_entry_name($zip_entry), strrpos(zip_entry_name($zip_entry), DIRECTORY_SEPARATOR)+1); 
				if(!is_dir($dir)){ 
					@mkdir($dir, 0755, true) or die("Unable to create $dir\n"); 
				} 
				if(strlen(trim($file)) > 0){ 
					$return = @file_put_contents($dir."/".$file, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry))); 
					if($return === false){ 
						die("Unable to write file $dir/$file\n"); 
					} 
				} 
			}else{ 
				if (file_put_contents($file, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry))) ) {
						echo "Drupal Core entpacken\n"; 
					} else {
						echo "Entpacken fehlgeschlagen\n";
				}
					 
			} 
		} 
	}else{ 
		echo "Unable to open zip file\n"; 
	} 
} 


function removetxt() {
	foreach (glob("drupal/*.txt") as $filename) {
		if ($filename != 'drupal/robots.txt') {
			echo 'Remove <em>'.$filename . '</em><br/>';
			unlink($filename);
		}
	}
}

