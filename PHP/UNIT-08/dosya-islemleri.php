<?php

//dosya oluşturma
// touch()
//touch('test.txt');
//touch('test2.txt', time() - 84000);
/*
 * fopen() - dosyayı açmamızı sağlıyor
 * fclose() - dosyayı kapatmamızı sağlıyor
 * fwrite () - dosyaya birşeyler yazmamızı sağlar
 * fread () - tüm içeriği okur
 * fgets () -satır satır okur
 * feof() - dosyaynın sonuna geliniğ gelinmediğini döndürür
 */
$icerik = 'Bu bir yazı örneğidir.' . rand(0, 1000) . "\n";
$dosya = fopen('test.txt', 'a+');
fwrite($dosya, $icerik);
echo fread($dosya, 5);

// control the test.txt


//while (!feof($dosya)) {
//  echo fgets($dosya) . '<br>';
$değerler = file('test.txt');
//print_r($değerler) ;

fclose($dosya);

//unlink('test.txt');

//$icerik = file_get_contents('test.txt');

//echo $icerik;
//file_put_contents('test.txt', 'bu yeni deger', FILE_APPEND );


