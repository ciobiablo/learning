<?php

// ftp_get
// ftp_nb_get 

require 'password.php';

$conn_id = ftp_connect('95.179.138.27');
if ($conn_id) {
    echo 'FTP bağlantısı başarılı.<br>';
    $login = ftp_login($conn_id, 'ahmethan', $password);
    if ($login) {
        echo 'FTPye giriş yapıldı.<br>';
        ftp_chdir($conn_id, './public_html');

        /*
        $download = ftp_get($conn_id, 'index2.php', '_index.php', FTP_BINARY);
        if ($download){
            echo 'FTP den dosya indirme işlemi başarılı';
        } else {
            echo showError();
        }
        */

        $download = ftp_nb_get($conn_id, 'inendosya.mov', 'nedir.mov', FTP_BINARY, FTP_AUTORESUME);
        while ($download == FTP_MOREDATA) {
            echo '.';
            $download = ftp_nb_continue($conn_id);
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