<?php

$ch = curl_init('http://localhost/form.php');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'ad' => 'ahmethan',
        'soyad' => 'ucmaz',
        'meslek' => 'developer',
        'submit' => 1
    ]
]);
$source = curl_exec($ch);
curl_close($ch);

echo $source;