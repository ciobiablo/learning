<?php

function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        $bytes = $bytes . ' bytes';
    } elseif ($bytes == 1) {
        $bytes = $bytes . ' byte';
    } else {
        $bytes = '0 bytes';
    }

    return $bytes;
}

$zip = new ZipArchive();
if ($zip->open('frontend.zip') === true) {
    //echo $zip->getFromName('prototurk/index.html');
    //$firstFile = $zip->statIndex(1);

    for ($i = 0; $i < $zip->numFiles; $i++) {
        $stat = $zip->statIndex($i);
        echo $stat['name'] . ' (' . formatSizeUnits($stat['size']) . ') (' . date('Y-m-d H:i:s', $stat['mtime']) . ')<br>';
        //print_r($stat);
    }

    $zip->close();
} else {
    echo 'dosya açılamadı!';
}