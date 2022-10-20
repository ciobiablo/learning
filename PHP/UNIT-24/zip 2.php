<?php

function get_directory_list($dir)
{
    static $files = [];
    foreach (glob($dir) as $file) {
        if (is_dir($file)) get_directory_list($file . '/*');
        else {
            if ($file !== basename(__FILE__)) {
                $files[] = $file;
            }
        }
    }
    return $files;
}

$zip = new ZipArchive();
$zip->open('frontend.zip', ZIPARCHIVE::CREATE);
foreach (get_directory_list('prototurk/*') as $file) {
    $zip->addFile($file);
}
$zip->close();