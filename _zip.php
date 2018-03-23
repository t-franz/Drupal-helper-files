<?PHP
// http://stackoverflow.com/questions/4914750/how-to-zip-a-whole-folder-using-php
// Get real path for our folder
$rootPath = ( isset($_GET["dir"]) ) ? realpath($_GET["dir"]) : realpath('sites');

echo "Zipping <i>".$rootPath."</i>";

$filter = array('styles','translations');
echo "<br/>Excluding: <i>";
foreach ($filter as $key => $value) {
    echo $value.', ';
}
echo "</i>";


// Initialize archive object
$zip = new ZipArchive();
$zip->open('sites.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

$filter = array('styles','translations');


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
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();





/* Auto-Download sites.zip */

$file = 'sites.zip';
$type = 'application/zip';

if(file_exists($file)) {
        //makeDownload($file, $type);
        print '<br><br><a href="sites.zip">Download sites.zip</a>';
    } else {
        print '<br>Error downloading '.$file;
}



function makeDownload($file, $type) {

    header("Content-Type: $type");

    header("Content-Disposition: attachment; filename=\"$file\"");

    readfile($file);
}

