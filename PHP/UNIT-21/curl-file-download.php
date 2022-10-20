<?php

/*
$file = fopen('php.txt', 'w+');
$ch = curl_init('http://php.net');
curl_setopt($ch, CURLOPT_FILE, $file);
curl_exec($ch);
curl_close($ch);
*/

$file = fopen('ahmet.png', 'w+');
$ch = curl_init('https://i2.wp.com/www.erbilen.net/wp-content/uploads/2017/11/cropped-unnamed-1-1.jpg?w=248&ssl=1');
curl_setopt($ch, CURLOPT_FILE, $file);
curl_exec($ch);
curl_close($ch);