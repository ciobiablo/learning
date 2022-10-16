<?php
// memory_get_usage()
//number_format()

function bytetoMb($byte)
{
    return number_format($byte / 1048576, 2);
}

$sayılar = range(0, 50);
echo bytetoMb(memory_get_usage()) . 'Mb bellek kullanıldı';
print_r($sayılar);


function say($başlangic, $limit)
{
    for ($i = $başlangic; $i < $limit; $i++) {
        yield $i;
    }
}

$sayılar = say(0, 10000000);
echo bytetoMb(memory_get_usage()) . 'mb bellek kullanıldı';