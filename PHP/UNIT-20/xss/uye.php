<?php

require 'db.php';

function temizle($str)
{
    return htmlspecialchars($str);
    //return $str;
}

if (!isset($_GET['id'])) {
    exit;
}

$sorgu = $db->prepare('SELECT * FROM uyeler WHERE id = ?');
$sorgu->execute([$_GET['id']]);
$uye = $sorgu->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3><?php echo temizle($uye['kadi']) ?></h3>
<p>
    <?php echo temizle($uye['hakkinda']) ?>
</p>

</body>
</html>