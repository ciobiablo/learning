<?php

/*
$ch = curl_init('http://localhost/header.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Token: tayfunerbilen123'
    ]
]);
$source = curl_exec($ch);
curl_close($ch);

echo $source;
*/

$ch = curl_init('http://localhost/header.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_NOBODY => true
]);
$source = curl_exec($ch);
curl_close($ch);

echo $source;