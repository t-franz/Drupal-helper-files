<?php


$files = array('https://download.nextcloud.com/server/releases/nextcloud-13.0.4.zip');

foreach ($files as $file) {

    $data = loadCurlFile($file);
    if (!$data) {
        $data = file_get_contents($file);
        echo 'Herunterladen von "'.basename($file).'" mit Methode <em>curl</em> fehlgeschlagen.<br/>';
        echo 'Versuche Methode <em>file_get_contents</em>.<br/><br/>';
    }

    if (file_put_contents(basename($file),$data) ) {
        echo 'File <em>'.$file.'</em> geladen.<br/>';
        unzip(basename($file));
    } else {
        echo '<b>Herunterladen von "<em>'.$file.'</em>" fehlgeschlagen.</b>';
        unlink(basename($file));
    }
}


// CURL
function loadCurlFile($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}



function unzip($file){
    $zip = zip_open($file);
    if ($zip) {echo "Open <em>".$file."</em><br />"; } else {
        echo "Unable to open zip file ".$file."<br />";
    }
    if(is_resource($zip)){
        echo "<br>ZIP is_resource<br><br />";
        $tree = "";
        while(($zip_entry = zip_read($zip)) !== false){
            if(strpos(zip_entry_name($zip_entry), DIRECTORY_SEPARATOR) !== false){
                $last = strrpos(zip_entry_name($zip_entry), DIRECTORY_SEPARATOR);
                $dir = substr(zip_entry_name($zip_entry), 0, $last);
                $file = substr(zip_entry_name($zip_entry), strrpos(zip_entry_name($zip_entry), DIRECTORY_SEPARATOR)+1);
                if(!is_dir($dir)){
                    @mkdir($dir, 0755, true) or die("Unable to create $dir<br />");
                }
                if(strlen(trim($file)) > 0){
                    $return = @file_put_contents($dir."/".$file, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)));
                    if($return === false){
                        die("Unable to write file $dir/$file<br />");
                    }
                }
            }else{
                if (file_put_contents($file, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry))) ) {
                        echo "Sites entpacken<br />";
                        print 'Done.<br />';
                        unlink($file);
                    } else {
                        echo "Entpacken fehlgeschlagen<br />";
                }

            }
        }
    } else {
        echo "Unable to extract <em>".$file."</em><br />";
        echo 'Try shell_exec("unzip '.$file.'")<br>';

        $entpack = shell_exec("unzip ".$file);

        if ( $entpack ) {
            print 'Done.<br />';
            unlink($file);
        } else {
           print "Unable to open zip file <em>".$file."</em><br>";
           print_r($entpack);
           print "<br>";
        }
    }
}
