<?php

// ftp_nlist
// ftp_rename
// ftp_delete

require 'password.php';

$conn_id = ftp_connect('95.179.138.27');
if ($conn_id) {
    echo 'FTP bağlantısı başarılı.<br>';
    $login = ftp_login($conn_id, 'ahmethan', $password);
    if ($login) {
        echo 'FTPye giriş yapıldı.<br>';
        ftp_chdir($conn_id, './public_html');

        //$files = ftp_nlist($conn_id, '.');
        /*
        $rename = ftp_rename($conn_id, 'nedir.mov', 'sanane.mov');
        if ($rename){
            echo 'klasör adı değiştirildi.';
        } else {
            echo showError();
        }
        */

        $delete = ftp_delete($conn_id, 'ahmet.txt');
        if ($delete) {
            echo 'dosya silindi';
        } else {
            echo showError();
        }

    } else {
        echo showError();
    }
} else {
    echo showError();
}

function showError()
{
    $error = error_get_last();
    if (isset($error['message']))
        return $error['message'];
}