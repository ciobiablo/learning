<?php

$zip = new ZipArchive();
$zip->open('dosyalar.zip', ZIPARCHIVE::CREATE);
$zip->addFile('index.html', 'a.html');
$zip->addFile('main.css');
$zip->addFile('muzik-listesi.png', 'muzik.png');
$zip->close();