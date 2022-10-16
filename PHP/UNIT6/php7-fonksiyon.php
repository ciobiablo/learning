<?php
declare(strict_types=1);


function topla(int $sayı1, int $sayı2): string
{
    return (string)($sayı1 + $sayı2);
}

echo topla(6, 9) . PHP_EOL;

function arr($arr)
{
    return $arr;
}

print_r(arr(['test', 'test2']));