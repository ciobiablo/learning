<?php

// ftp_mkdir
// ftp_rmdir
// ftp_chdir
// ftp_pwd

require 'password.php';

$conn_id = ftp_connect('95.179.138.27');
if ($conn_id) {
    echo 'FTP bağlantısı başarılı.<br>';
    $login = ftp_login($conn_id, 'ahmethan', $password);
    if ($login) {
        echo 'FTPye giriş yapıldı.<br>';
        ftp_chdir($conn_id, './public_html');
        //echo ftp_pwd($conn_id);

        $create = ftp_mkdir($conn_id, 'udemy');
        if ($create) {
            echo $create . ' klasörü oluşturuldu.';
        } else {
            echo showError();
        }

        /*
        $delete = ftp_rmdir($conn_id, 'udemy');
        if ($delete){
            echo 'udemy klasörü başarıyla silindi.';
        } else {
            echo showError();
        }
        */

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