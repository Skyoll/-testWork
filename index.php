<?php
require_once __DIR__ .'/functions.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<h3><a href="booksAdd.php">Добавить книгу</a></h3>
<table border="1" cellpadding="5" cellspacing="0" width="100%">


        <tr>
        <th>№</th>
        <th>Название</th>
        <th>Сколько минут назад добавлена</th>
        <th>Описание</th>
        <th>Кол-во страниц</th>
        <th>Цена</th>
        <th>Удалить</th>

    </tr>
    <?php
    foreach (getAll() as $key => $value) :?>
        <tr class="books-row-id_<?= $value['id']?>">
            <td><?=$value['id']?></td>
            <td><?=$value['name']?></td>
            <td><?=round((time() - strtotime($value['date']))/60)?></td>
            <td><?=$value['description']?></td>
            <td><?=$value['pages']?></td>
            <td><?=$value['price']?></td>
            <td>
                <a class="delete-link" href="#" data-name="<?= $value['name']?>" data-id="<?= $value['id']?>">Удалить</a>
            </td>
        </tr>

    <?php endforeach; ?>



</table>

<script>
    $( document ).ready(function() {
        $(".delete-link").on("click", function(e) {
            e.preventDefault();

            let id = $(this).data('id');
            let name = $(this).data('name');

            $.ajax({
                method: "POST",
                url: "ajax/ajaxBookDelete.php",
                data: {
                    id: id,
                    name: name
                }
            })
                .fail(function() {
                    alert( "error" );
                })

                .done(function(response) {
                    console.log(response);
                    let data = JSON.parse(response);

                    if (data.error) {
                        alert(data.message)
                    }else {
                        $('.books-row-id_' + id).detach();
                        alert(data.message)
                    }
                });
        });
    });

</script>

</body>
</html>