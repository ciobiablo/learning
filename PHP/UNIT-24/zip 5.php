<?php

$zip = new ZipArchive();
if ($zip->open('frontend.zip') === true) {

    //$zip->deleteName('prototurk/assets/styles/');
    //$zip->deleteIndex(1);

    for ($i = 0; $i < $zip->numFiles; $i++) {
        $stat = $zip->statIndex($i);
        echo $stat['name'] . '<br>';
    }

    $zip->close();
} else {
    echo 'dosya açılamadı!';
}