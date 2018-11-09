<?php

$arrZip = glob('*.zip');

ob_end_clean();

if (!empty($arrZip)) {
    foreach ($arrZip as &$value) {
        print 'Try <i>'.$value.'</i> ... <br>';
        if ( unzip($value) ) {
            print 'Done.<br />';
            //unlink($value);
        }
    };
    //unset($value);
} else {
    print 'Keine ZIP-Dateien vorhanden<br/><br/>';
}



//unzip ('l10n_update-7.x-1.0-beta3.zip');

function unzip($file){

    $newfolder = basename($file, ".zip");

    if (file_exists($newfolder)) {
        $date = new DateTime();
        $newfolder = $newfolder.'_'.$date->getTimestamp();
    }

    mkdir($newfolder, 0777, true);

    echo 'Extract to folder: '.$newfolder.'<br>';

    rename($file,$newfolder.'/'.$file);

    chdir($newfolder);

    $zip = zip_open($file);

    if(is_resource($zip)){
        $tree = "";
        while(($zip_entry = zip_read($zip)) !== false){
            // echo "Unpacking ".zip_entry_name($zip_entry)."\n";
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
                file_put_contents($file, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)));
            }
        }
        return TRUE;
    } else if (shell_exec("unzip ".$file)) {
        print "Unable to extract zip file <em>".$file."</em><br><br>";
        print 'Try shell_exec("unzip '.$file.'")<br>';
    } else {
        print "Unable to extract zip file <em>".$file."</em> with Shell.<br><br>";
        print 'Try PHP-Zip-Module (" $zip->open('.$file.')")<br>';
        $phpzip = new ZipArchive;
        $res = $phpzip->open($file);
        if ($res === TRUE) {
         $phpzip->extractTo($newfolder);
         $phpzip->close();
          echo 'Das ZIP-Archiv <b>'.$file.'</b> wurde erfolgreich in das Verzeichnis <b>'.$newfolder.'</b> entpackt.';
        } else {
          echo '<b>Es ist ein Fehler beim Entpacken des ZIP-Archives aufgetreten!</b>';
        }
    }
}

$arrGzip = glob('*.gz');

if (!empty($arrGzip)) {
    foreach ($arrGzip as &$file) {
        print 'Try <i>'.$file.'</i> … ';
    	$entpack = shell_exec('tar xfvz '.$file);
        if ( $entpack ) {
            print 'Done.<br />';
            unlink($file);
        }
    };
    unset($file);
}




print '<br><br><a href="http://'.$_SERVER['HTTP_HOST'].'" target="_self">'.$_SERVER['HTTP_HOST'].'</a>';

/* print '<br /><a href="http://'.$_SERVER['HTTP_HOST'].'/update.php" target="_self">'.$_SERVER['HTTP_HOST'].'/update.php SELF</a>'; */
?>
