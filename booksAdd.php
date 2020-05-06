<?php
require_once 'functions.php';
if(isset($_POST['submit'])){
    myCreate($_POST['name'],  $_POST['date'], $_POST['dis'],$_POST['pages'],$_POST['price']);
}


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">

        function validate() {
            //Считаем значения из полей name и email в переменные x и y
            var name = document.forms["form"]["name"].value;
            var dis = document.forms["form"]["dis"].value;
            var pages = document.forms["form"]["pages"].value;
            var price = document.forms["form"]["price"].value;

            //Если поле name пустое выведем сообщение и предотвратим отправку формы

                if (name.length == 0) {
                    document.forms["form"]["name"].style = "border-color: #900; background-color: #FDD;";
                    // document.forms["form"]["name"].removeAttr('style');
                    // return false;
                }
                if (dis.length == 0) {
                    document.forms["form"]["dis"].style = "border-color: #900; background-color: #FDD;";
                    // document.forms["form"]["dis"].removeAttr('style');
                    // return false;
                }
                if (pages.length == 0) {
                    document.forms["form"]["pages"].style = "border-color: #900; background-color: #FDD;";
                    // document.forms["form"]["pages"].removeAttr('style');
                    // return false;
                }
                if (price.length == 0) {
                    document.forms["form"]["price"].style = "border-color: #900; background-color: #FDD;";
                    // document.forms["form"]["price"].removeAttr('style');
                    // return false;
                }
                if (name.length == 0 || dis.length == 0 || pages.length == 0 || price.length == 0) {
                    // setTimeout(document.forms["form"]["name"].style = "border-color: black; background-color: black;", 40000)
                    return false;
                } else {
                    return true;
                        window.location.href = "www.google.com/";
                }
        }
    </script>
    <title>Document</title>
</head>
<body>
<h3><a href="index.php">На главную</a></h3>
<form name="form" id="form"  method="post" onsubmit="return validate()">
    <p>
        <input type="text" name="name" id="name" placeholder="Название книги">
    </p>
    <p>
        <textarea rows="7" #FDD name="dis" id="dis" placeholder="Описание книги"></textarea>
    </p>
    <p>
        <input type="text" name="pages" id="pages" placeholder="Количество страниц">
    </p>
    <p>
        <input type="text" name="price" id="price" placeholder="Цена">
    </p>
    <p>
        <input type="text" name="date" id="date" placeholder="гг.мм.дд час:минута" value="<?=date('Y-m-d H:i:s')?>">
    </p>
    <p>
        <input type="submit" name="submit" id="submit" value="Добавить книгу">
    </p>

<!--    style="border-color: red;"-->

</form>
</body>
</html>
