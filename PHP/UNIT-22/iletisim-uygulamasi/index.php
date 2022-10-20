<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="app.js"></script>
    <style>
        #basarili {
            padding: 10px;
            background: green;
            color: #fff;
            display: none;
        }

        #hata {
            padding: 10px;
            background: red;
            color: #fff;
            display: none;
        }
    </style>
</head>
<body>

<div id="basarili"></div>
<div id="hata"></div>

<form action="" method="post" id="iletisim-form" onsubmit="return false;">

    Ad-Soyad: <br>
    <input type="text" placeholder="Adınız-Soyadınız" id="adsoyad" name="adsoyad"> <br><br>

    E-posta: <br>
    <input type="text" placeholder="E-posta Adresiniz" id="eposta" name="eposta"> <br><br>

    Mesajınız: <br>
    <textarea name="mesaj" id="mesaj" cols="30" rows="5"></textarea> <br><br>

    <button type="submit" id="gonder-btn">Gönder</button>

</form>

</body>
</html>