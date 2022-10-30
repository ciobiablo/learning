<?php

$meta = [
    'title' => 'Giriş Yap',
];
if (post('submit')) {
    $username = post('username');
    $password = post('password');

    if (!$username) {
        $error = 'Lütfen kullanıcı adınızı giriniz.';
    } elseif (!$password) {
        $error = 'Lütden şifrenizi giriniz';
    } else {

        // üye varmı kontrol et

        $row = User::userExist($username);
        if ($row) {  // parola kontrolü yap
            $password_verify = password_verify($password, $row['user_password']);
            if ($password_verify) {
                $success = 'Başarıyla giriş yaptınız. Yönlendiriliyorsunuz.';
                User::Login($row);
                header('refresh:2;url='. site_url());
            } else {
                $error = 'Parolanız yanlış lütfen kontrol edin.';
            }
        } else {
            $error = 'Böyle bir kullanıcı sistemde kayıtlı değil';
        }
    }
}


require view('login');
