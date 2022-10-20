<?php

// curl başlatıldı
$ch = curl_init();

// curl ayarları
//curl_setopt($ch, CURLOPT_URL, 'http://php.net');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://php.net',
    CURLOPT_RETURNTRANSFER => true
]);

// curl isteği çalıştırıldı
$source = curl_exec($ch);

// curl sonlandırıldı
curl_close($ch);

preg_match('/<title>(.*?)<\/title>/', $source, $title);

print_r($title);