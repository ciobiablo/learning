<?php

// ftp_put
// ftp_nb_put (non blocking) -

require 'password.php';

$conn_id = ftp_connect('95.179.138.27');
if ($conn_id){
    echo 'FTP bağlantısı başarılı.<br>';
    $login = ftp_login($conn_id, 'ahmethan', $password);
    if ($login) {
        echo 'FTPye giriş yapıldı.<br>';
        ftp_chdir($conn_id, './public_html');
        
        /*
        $upload = ftp_put($conn_id, 'nedir.mov', __DIR__ . '/nedir.mov', FTP_BINARY);
        if ($upload){
            echo 'Dosya başarıyla yüklendi.';
        } else {
            echo 'Dosya yüklenirken bir sorun oluştu.';
        }
        */

        $upload = ftp_nb_put($conn_id, 'udemy.mov', __DIR__ . '/nedir.mov', FTP_BINARY, FTP_AUTORESUME);
        while($upload == FTP_MOREDATA){

            // herhangi bir kod yazıcam..
            echo 'Eşzamansız yükleme örneği ' . rand(1,999) . '<br>';

            // yüklemeye devam edicem
            $upload = ftp_nb_continue($conn_id);

        }

    } else {
        echo showError();
    }
} else {
    echo showError();
}

function showError(){
    $error = error_get_last();
    if (isset($error['message']))
        return $error['message'];
}