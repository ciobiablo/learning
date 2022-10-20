<?php

if (isset($_FILES['dosya']['name'])) {
    if ($_FILES['dosya']['type'] == 'application/zip') {
        move_uploaded_file($_FILES['dosya']['tmp_name'], 'upload/' . $_FILES['dosya']['name']);
    } else {
        die('geçersiz dosya formatı!');
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">
    Ad-soyad: <input type="text" name="adsoyad"> <br><br>
    CV: <input type="file" name="dosya"> <br><br>
    <button type="submit">Yükle</button>
</form>