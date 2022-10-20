<?php

// olmayan bir sayfaya istek atmayı deneyelim
$ch = curl_init('http://asdasdasd123123123.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
if (curl_exec($ch) == false) {
    echo curl_error($ch);
}
curl_close($ch);