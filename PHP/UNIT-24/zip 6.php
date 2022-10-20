<?php

$zip = new ZipArchive();
$zip->open('yeni.zip', ZipArchive::CREATE);
$zip->addFile('frontend.zip');
$zip->setEncryptionName('frontend.zip', ZipArchive::EM_AES_256, '123123');
$zip->close();
echo 'ok';