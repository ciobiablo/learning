<?php
require 'baglan.php';
$veriler = $db->query('SELECT * FROM data ORDER BY id DESC LIMIT 0,7')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function () {

            $('#btn').on('click', function (e) {
                var sonId = $('#list li:last').data('id');
                $.post('ajax.php', {'id': sonId}, function (response) {
                    if (response.gizle) {
                        $('#btn').remove();
                    }
                    $('#list').append(response.html);
                }, 'json');
                e.preventDefault();
            });

        });
    </script>
</head>
<body>

<ul id="list">
    <?php
    foreach ($veriler as $veri):
        require 'yorum.php';
    endforeach;
    ?>
</ul>
<button id="btn">Daha fazlasını göster</button>

</body>
</html>