<?php
require_once 'functions.php';

$myGet = myGet();
if(isset($_POST['del'])){
    myDelete($_POST['del']);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    foreach ($myGet as $key => $value):?>
        <tr>
            <td><?=$value['id']?></td>
            <td><?=$value['name']?></td>
            <td><?=round((time() - strtotime($value['date']))/60)?></td>
            <td><?=$value['discription']?></td>
            <td><?=$value['pages']?></td>
            <td><?=$value['price']?></td>
            <td><form method="post"><button name="del" value="<?=$value['id']?>">Удалить</button></form></td>
        </tr>

    <?php
    endforeach;
    ?>



</table>
</body>
</html>