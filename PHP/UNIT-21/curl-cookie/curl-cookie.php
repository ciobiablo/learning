<?php

// cookie göndermek için CURLOPT_COOKIE   a=b&c=d

/*
$ch = curl_init('http://localhost/cookie.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIE => 'test=Tayfun Erbilen'
]);
$source = curl_exec($ch);
curl_close($ch);

echo $source;
*/

$ch = curl_init('http://localhost/login-example/index.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'kullanici_adi' => 'admin',
        'sifre' => 'admin',
        'submit' => 1
    ],
    CURLOPT_COOKIEJAR => 'cookie.txt'
]);
$source = curl_exec($ch);
curl_close($ch);

$ch = curl_init('http://localhost/login-example/index.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEFILE => 'cookie.txt',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'hakkinda' => 'curl çalışıyor!'
    ]
]);
$source2 = curl_exec($ch);
curl_close($ch);

echo $source2;