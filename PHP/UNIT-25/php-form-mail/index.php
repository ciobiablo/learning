<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post" enctype="multipart/form-data">
    <input name="email" type="text" placeholder="E-posta adresi"> <br>
    <input name="subject" type="text" placeholder="E-posta konusu"> <br>
    <textarea name="content" cols="30" rows="10" placeholder="E-posta içeriği"></textarea> <br>
    <input type="file" name="attachment"> <br>
    <button type="submit">Gönder</button>
</form>

</body>
</html>