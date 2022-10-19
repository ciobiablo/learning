<?php

$db = new PDO('mysql:host=localhost;dbname=test1', 'root', 'root');

if (isset($_POST['eposta'])) {

    $eposta = $_POST['eposta'];
    $sorgu = $db->prepare('SELECT * FROM uyeler WHERE eposta = ?');
    $sorgu->execute([$eposta]);
    if ($sorgu->rowCount()) {
        $uye = $sorgu->fetch(PDO::FETCH_ASSOC);
        print_r($uye);
    }

}

?>

<form action="" method="post">
    E-posta Adresi: <br>
    <input type="text" name="eposta"><br>
    <button type="submit">Gönder</button>
</form>