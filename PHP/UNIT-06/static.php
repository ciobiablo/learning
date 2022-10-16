<?php

function say()
{
    static $i = 1;
    echo $i . '<br>';
    $i++;
}

function yukle($deger)
{
    static $yuklenenler = [];
    $yuklenenler[] = $deger;
    return $yuklenenler;
}

yukle('test.php');
yukle('a.php');
$yuklenenler = yukle('b.php');

print_r($yuklenenler);