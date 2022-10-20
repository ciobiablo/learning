<?php

if (isset($_POST['hakkinda'])) {
    print_r($_POST);
}

?>

Burayı sadece üye olanlar görecek!

<form action="" method="post">
    <textarea name="hakkinda" placeholder="Hakkında birşeyler yaz"></textarea> <br>
    <button type="submit">Gönder</button>
</form>