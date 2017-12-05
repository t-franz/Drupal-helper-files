<?php


$file = 'http://sandbox.fusbfg.de/sites.zip';



if (file_put_contents("sites.zip", file_get_contents($file)) ) {
    echo 'File "'.$file.'" geladen.<br/>';
    unzip("sites.zip");
    createsites();
    unlink("sites.zip");
    if (unlink("drupal/sites/default/settings.php")) {
        echo '<br/><br/>Deleting "sites/default/settings.php"<br/>';
        $file = 'drupal/sites/default/default.settings.php';
        $newfile = 'drupal/sites/default/settings.php';
        if (!copy($file, $newfile)) {
            echo '<br/>Failed to copy <em>'.$file.'</em>';
        } else {
            print 'Copied <em>'.$file.'</em><br/>';
            print "Add to databases['default']['default']:<br><pre>\$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'databasename',
  'username' => 'username',
  'password' => 'password',
  'host' => 'localhost',
  'charset' => 'utf8mb4',
  'collation' => 'utf8mb4_general_ci',
);</pre><br/><br/>";
        }
    }
    removetxt();
    print '<br/>Next Step: <b><a href="_helper.php#installdrupal">_helper.php</a></b>';
} else {
    echo 'Herunterladen von "'.$file.'" fehlgeschlagen.<br/>';
}


function unzip($file){ 
    $zip = zip_open($file);
    if ($zip) {echo "Open zip file\n"; } else{ 
        echo "Unable to open zip file\n"; 
    }  
    if(is_resource($zip)){ 
        echo "<br>ZIP is_resource<br>\n";
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
                		echo "Sites entpacken\n"; 
                	} else {
                		echo "Entpacken fehlgeschlagen\n";
                }
                	 
            } 
        } 
    }
    
} 


function createsites() {

  if (!is_dir('sites')) {
    echo '<br><br>Folder <i>sites</i> does not exist.<br>';
    
    if (mkdir('sites', 0777, true) ) {
      echo 'Create folder <i>sites</i><br>';
      if ( rename("all",'sites/all') && rename("default",'sites/default') ) {
        echo 'Folders <i>all</i> and <i>default</i> moved into folder <i>sites</i>';
        movesites();
      };
    } else {
      echo 'Could not create folder <i>sites</i><br>'; 
    }

  } else {
    echo 'Folder <i>sites</i> already exists.<br>';
  }
}

function movesites() {
    print '<br/>Trying to move folder <em>sites</em> into folder <em>drupal</em> ... <br/>';
    $dir = 'drupal' . DIRECTORY_SEPARATOR . 'sites';
    if (is_dir($dir)) {
        $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($it,
                     RecursiveIteratorIterator::CHILD_FIRST);
        foreach($files as $file) {
            if ($file->isDir()){
                rmdir($file->getRealPath());
            } else {
                unlink($file->getRealPath());
            }
        }

        if (!rmdir($dir)) {
            echo '<br/>Could not unlink "drupal/sites"<br/>';
        } else {
            echo '<br/>Remove old "drupal/sites"<br/>';
            if ( rename("sites",'drupal/sites') ) {
                echo 'Folders <i>all</i> and <i>default</i> moved into folder <i>sites</i>';
            } else {
                echo 'Could not move';
            }
        }
    } else {
        print 'Did not succeed – please rename folder <em>drupal-xxx</em> to <em>drupal</em> and move folder <em>sites</em> in it.<br/>';
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

