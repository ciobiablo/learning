<?php

$zip = new ZipArchive();
$zip->open('dosyalar.zip', ZIPARCHIVE::CREATE);
foreach (glob('*') as $file) {
    if ($file != basename(__FILE__))
        $zip->addFile($file);
}
$zip->close();