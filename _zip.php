<?PHP
// http://stackoverflow.com/questions/4914750/how-to-zip-a-whole-folder-using-php
// Get real path for our folder

$folder = ( isset($_GET["dir"]) ) ? $_GET["dir"] : 'sites';

$filter = array('translations','settings.php');

if ($folder == 'sites') {
    // exclude old backups, retain last
    $backups = array_map('basename', glob("sites/default/files/private/backup_migrate/manual/*.{gz,info}", GLOB_BRACE));
    sort($backups);
    array_splice($backups, -2);
    $filter = array_merge($filter,$backups);
}

if (!file_exists($folder)) {
    echo "Folder <em>".$folder."</em> does not exists.<br>";
} else {

    $rootPath = realpath($folder);

    echo "Zipping <i>".$rootPath."</i>";

    echo "<br><br/>Excluding: <i>";
    print '<pre>';
    print_r($filter);
    print '</pre>';
    echo "</i>";


    // Initialize archive object
    $zip = new ZipArchive();
    $zip->open($folder.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);


    $files = new RecursiveIteratorIterator(
      new RecursiveCallbackFilterIterator(
        new RecursiveDirectoryIterator(
          $rootPath,
          RecursiveDirectoryIterator::SKIP_DOTS
        ),
        function ($files, $key, $iterator) use ($filter) {
          return $files->isFile() || !in_array($files->getBaseName(), $filter);
        }
      )
    );

    foreach ($files as $name => $file)
    {
        // Skip directories (they would be added automatically)
        if (!$file->isDir())
        {
            if (!in_array(basename($file),$filter )) {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }
    }

    // Zip archive will be created only after closing object
    $zip->close();





    /* Auto-Download sites.zip */

    $file = $folder.'.zip';
    $type = 'application/zip';

    if(file_exists($file)) {
            //makeDownload($file, $type);
            print '<br><br><a href="'.$folder.'.zip">Download '.$folder.'.zip</a>';
        } else {
            print '<br>Error downloading '.$file;
    }

}

function makeDownload($file, $type) {

    header("Content-Type: $type");

    header("Content-Disposition: attachment; filename=\"$file\"");

    readfile($file);
}

