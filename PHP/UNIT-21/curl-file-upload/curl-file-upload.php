<?php

$ch = curl_init('http://localhost/file-form.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'adsoyad' => 'udemy test',
        'dosya' => new CURLFile('test.txt', 'application/zip')
    ]
]);
$source = curl_exec($ch);
curl_close($ch);

echo $source;