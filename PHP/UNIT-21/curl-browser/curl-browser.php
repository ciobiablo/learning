<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'https://eniyidiziler.com',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Linux; Android 4.0.4; Galaxy Nexus Build/IMM76B) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.133 Mobile Safari/535.19'
]);

$source = curl_exec($ch);
curl_close($ch);

echo $source;