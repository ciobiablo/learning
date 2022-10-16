<?php

/*
     Sabit Degiskenler;
        define() fonksiyoınu ile tanımlanır
        türkçe karakter içerebilir
        sayı ile bşalayamaz
        Harf yada _ işareti ile başlar
        Büyük küçük harfe duyarlıdır
        veri türlerinde;
           Object hariç tüm veri türlerini kapsar.


*/

$ahmet = "ahmet han ucmaz";
//echo $ahmet;
define("ahmethan", "ahmethanucmaz");

echo ahmethan;

define("ahmethan", "yeni deger");
echo ahmethan;
