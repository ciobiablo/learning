<?php

if (isset($_POST['submit'])) {

    if (!isset($_POST['kullanici_adi']) || !isset($_POST['sifre'])) {
        echo 'kullanıcı adı ya da şifre boş bırakılamaz.';
    } elseif ($_POST['kullanici_adi'] == 'admin' && $_POST['sifre'] == 'admin') {
        // oturumu başlat
        $_SESSION['login'] = true;
        header('Location:index.php');
    } else {
        echo 'kullanıcı adı ya da şifre hatalı!';
    }

}

?>

<form action="" method="post">
    Kullanıcı Adı: <input type="text" name="kullanici_adi"> <br>
    Şifre: <input type="password" name="sifre"><br>
    <button type="submit" name="submit" value="1">Giriş Yap</button>
</form>