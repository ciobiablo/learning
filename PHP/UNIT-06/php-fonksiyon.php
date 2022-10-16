<?php

function test()
{
    return 'test';
}

$a = test();

//echo $a;
function topla($sayi1, $sayi2 = 10)
{
    return $sayi1 + $sayi2;
}

$toplam = topla(3);
//echo $toplam;
/* global
$GLOBALS
*/
$ad = 'ahmethan';
function adsoyad($soyad)
{
    global $ad;
    return $ad . $soyad;
}

//echo adsoyad('uçmaz');
$yazi = 'ahmethan';
//echo substr($yazi, 0, 10) . '...';

function kisalt($str, $limit = 10)
{
    $karakterSayisi = strlen($str);
    if ($karakterSayisi > $limit) {
        $str = substr($str, 0, $limit) . '...';

    }
    return $str;
}

echo kisalt($yazi, 5);