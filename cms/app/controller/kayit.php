<?php

$meta = ['title' => 'Kayıt Ol'];

if (post('submit')) {
    $username = post('username');
    $email = post('email');
    $password = post('password');
    $password_again = post('password_again');
}

if (!$username) {
    $error = 'Lütfen kullanıcı adınızı giriniz.';
} elseif (!$email) {
    $error = 'Lütfen e-mail adresini giriniz.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'e-mailiniz doğru formatta olmalıdır.';
} elseif ((!$password) || (!$password_again)) {
    $error = 'Lütden şifrenizi giriniz';
} elseif ($password != $password_again) {
    $error = 'Şifreniz birbiriyle uyumlu olmalıdır';
} else {
    // üye varmı kontrol et
    $row = User::userExist($username, $email);
    if ($row) {
        $error = 'Bu kullanıcı adı ya da e-posta zaten kullanılıyor. Lütfen başka bir tane deneyiniz.';
    } else {
        // üye ekle
        $result = User::Register($username, $email, $password);
        if ($result) {
            $success = 'Üyeliğiniz başarıyla oluşturuldu, Yönlendiriliyorsunuz.';
            User::Login([
                'user_id' => $db->lastInsertId(),
                'user_name' => $username
            ]);
            header('Refresh:2;url=' . site_url());
        } else {
            $error = 'Bir sorun oluştu.';
        }
    }
}

require view('register');
