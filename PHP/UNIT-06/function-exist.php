<?php
function test2()
{
    return 'test;';
}

if (function_exists('test2')) {
    echo 'test fonksiyonu vardır.' . PHP_EOL;
} else {
    echo 'test fonksiyonu yoktur.<br>';
}

$str = 'Ahmet Han Uçmaz Burada.';
function kisalt($str, $limit = 10)
{
    $karakterSayisi = strlen($str);
    if ($karakterSayisi > $limit) {
        if (function_exists('mb_substr')) {
            $str = mb_substr($str, 0, $limit, 'utf8') . '...';
        } else {
            $str = substr($str, 0, $limit) . '...';
        }
        return $str;

    }
    return $str;
}

echo kisalt($str);
