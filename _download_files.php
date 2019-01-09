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
        _download_sites();
    }

} else {
    echo 'Herunterladen von "'.$file.'" fehlgeschlagen.<br/>';
}


function _download_sites() {
    $file = 'http://sandbox.fusbfg.de/sites.zip';
    print '<br/>Downloading  <em>'.$file.'</em><br/>';
    if (file_put_contents("sites.zip", file_get_contents($file)) ) {
        echo 'File "'.$file.'" geladen.<br/>';
        unzip("sites.zip");
        createsites();
        unlink("sites.zip");
        if (unlink("drupal/sites/default/settings.php")) {
            echo '<br/><br/>Deleting "sites/default/settings.php"<br/>';
            $templatefile = 'drupal/sites/default/default.settings.php';
            $newfile = 'drupal/sites/default/settings.php';
            if (!copy($templatefile, $newfile)) {
                echo '<br/>Failed to copy <em>'.$templatefile.'</em>';
            } else {
                print 'Copied <em>'.$templatefile.'</em><br/><br/>';
            }
        }
        removetxt();
        echo '<br>';
        echo (unlink('drupal/.editorconfig')) ? 'Remove <em>drupal/.editorconfig</em><br/>' : '';
        echo (unlink('drupal/.gitignore')) ? 'Remove <em>drupal/.gitignore</em><br/>' : '';
        echo (unlink('drupal/web.config')) ? 'Remove <em>drupal/web.config</em><br/>' : '';

        appendrobots();

        if (rename('_helper.php','drupal/_helper.php')) echo '<br/>Moved <em>_helper.php</em> to new folder.<br />';

        // Move and renam Drupal folder to Basefolder
        $originalBasename = basename(__DIR__);
        chdir('../');
        echo '<br/><br/>Moving new drupal-folder to original basefolder <em>'.$originalBasename.'</em><br/>';
        rename($originalBasename.'/drupal','drupalneu');
        if (rename($originalBasename,$originalBasename.'__alt')) {
            echo '<br/>Renamed original folder <em>'.$originalBasename.'</em> to <em>'.$originalBasename.'__alt</em><br/>';
        }
        if (rename('drupalneu',$originalBasename) ) echo '<br/>Drupal folder is new Basefolder.<br/>';

        print '<br/>Install Drupal: <a href="_helper.php#installdrupal">_helper.php</a>';
    } else {
        echo 'Herunterladen von "'.$file.'" fehlgeschlagen.<br/>';
    }
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
                		echo $file." entpacken\n";
                	} else {
                		echo "Entpacken fehlgeschlagen\n";
                }

            }
        }
    }else{
        echo "Unable to open zip file\n";
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

function appendrobots() {
    $append = "# Paths (clean URLs without trailing slash)
Disallow: /admin
Disallow: /comment/reply
Disallow: /filter/tips
Disallow: /node/add
Disallow: /search
Disallow: /user/register
Disallow: /user/password
Disallow: /user/login
Disallow: /user/logout
# Paths (no clean URLs)
Disallow: /?q=admin
Disallow: /?q=comment/reply
Disallow: /?q=filter/tips
Disallow: /?q=node/add
Disallow: /?q=search
Disallow: /?q=user/password
Disallow: /?q=user/register
Disallow: /?q=user/login
Disallow: /?q=user/logout";

    if (file_put_contents("drupal/robots.txt", $append, FILE_APPEND)) {
        print '<br>Add <em>paths without Trailing Slash</em> to robots.txt<br>';
    } else {
        print '<br><strong>Could not append robots.txt</strong><br>';
    }
}

