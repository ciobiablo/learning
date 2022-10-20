<?php

$zip = new ZipArchive();
if ($zip->open('frontend.zip') === true) {

    //$zip->renameIndex(0, 'prototurk/alt2.html');
    $zip->renameName('prototurk/basicdb.php', 'prototurk/abc.php');

    for ($i = 0; $i < $zip->numFiles; $i++) {
        $stat = $zip->statIndex($i);
        echo $stat['name'] . '<br>';
    }

    $zip->close();
} else {
    echo 'dosya açılamadı!';
}