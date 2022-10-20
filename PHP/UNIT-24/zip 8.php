<?php

$zip = new ZipArchive();
$zip->open('yeni.zip');
$zip->setPassword('123123');
$zip->extractTo('test/');
$zip->close();