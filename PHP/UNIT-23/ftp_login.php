<?php

// ftp_connect
// ftp_login
// error_get_last

require 'password.php';

$conn_id = ftp_connect('95.179.138.27');
if ($conn_id) {
    echo 'FTP bağlantısı başarılı.<br>';
    $login = ftp_login($conn_id, 'ahmethan', $password);
    if ($login) {
        echo 'FTPye giriş yapıldı.';
    } else {
        //$error = error_get_last();
        //echo $error['message'];
        //echo 'FTPye giriş başarısız oldu!';
        echo showError();
    }
} else {
    //$error = error_get_last();
    //echo 'FTP bağlantısı başarısız.';
    //echo $error['message'];
    echo showError();
}

function showError()
{
    $error = error_get_last();
    if (isset($error['message']))
        return $error['message'];
}