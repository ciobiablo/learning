<?php

$zip = new ZipArchive();
$zip->open('frontend.zip');
$zip->extractTo('test/deneme/');
$zip->close();