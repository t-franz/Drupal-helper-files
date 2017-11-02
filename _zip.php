<?PHP
// http://stackoverflow.com/questions/4914750/how-to-zip-a-whole-folder-using-php
// Get real path for our folder
$rootPath = realpath($_GET["dir"]);

// print 'START ZIP '.$rootPath;

// Initialize archive object
$zip = new ZipArchive();
$zip->open('sites.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
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


$file = 'sites.zip';
$type = 'application/zip';

if(file_exists($file)) {
        makeDownload($file, $type);
        print '<br><br><a href="sites.zip">Download sites.zip</a>';
    } else {
        print '<br>Error downloading '.$file;
}



function makeDownload($file, $type) {
    
    header("Content-Type: $type");

    header("Content-Disposition: attachment; filename=\"$file\"");

    readfile($file);  
}






        
