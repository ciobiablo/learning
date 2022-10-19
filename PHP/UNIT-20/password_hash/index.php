<?php

$sifre = 'ahmet123';
$md5sifre = md5($sifre);
//386e81cd741ffb732268ce05983f3bd0 == 'ahmet123'
/*
if (md5($sifre) == $md5sifre){
    echo 'şifre doğru!';
}
*/

//echo password_hash($sifre, PASSWORD_DEFAULT);

// $2y$10$8cUMofD7hRr8Z1TInQTfBubI0NGGZSSVm4z4HF03rmmZE9w6.gjYu
// $2y$10$6/M6TJaELkaMZ4iHCHTBVub5wJGsQbH3CURhrTXDZiGnwYJtjjwqi
// $2y$10$C0IxV20hXZTE8NhnSl.ziOrKIDZU0UzU2391Xz6MpTSXI2nYLggES

$hash = '$2y$10$8cUMofD7hRr8Z1TInQTfBubI0NGGZSSVm4z4HF03rmmZE9w6.gjYu';

if (password_verify($sifre, $hash)) {
    echo 'şifre doğru!';
}