<?php

function ozelHataYakalayici($no, $msg, $file, $line)
{
    // hataları dosyaya yaz
    //$hataVerisi = $no . '|' . $msg . '|' . $file . '|' . $line . "\n";
    //file_put_contents('hata.log', $hataVerisi, FILE_APPEND);

    $db = new PDO('mysql:host=localhost;dbname=hatalar', 'root', 'root');
    $insert = $db->prepare('INSERT INTO log SET no = ?, msg = ?, file = ?, line = ?');
    $insert->execute([$no, $msg, $file, $line]);

}

set_error_handler('ozelHataYakalayici');

//echo substr();

echo $test;