<?php
require_once 'functions.php';
if(isset($_POST['submit'])){
    create($_POST['name'],  $_POST['date'], $_POST['dis'],$_POST['pages'],$_POST['price']);
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        function validate() {
            var name = document.getElementById("name");
            var dis = document.getElementById("dis");
            var pages = document.getElementById("pages");
            var price = document.getElementById("price");


            if(!name.value) {
                name.style.border = "2px solid red";
            }
            else{
                name.style.border = "";
            }

            if(!dis.value) {
                dis.style.border = "2px solid red";
            }
            else{
                dis.style.border = "";
            }

            if(!pages.value) {
                pages.style.border = "2px solid red";
            }
            else{
                pages.style.border = "";
            }

            if(!price.value) {
                price.style.border = "2px solid red";
            }
            else{
                price.style.border = "";
            }
            if(!name.value || !dis.value || !pages.value || !price.value){
                return false;
            }
            return true;
        }

        alert (validate());
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

<script>
    // var a;
    // a = validate();
    // alert (a);
    // if (validate() == true) {
    //     window.location.href = 'index.php';
    // }


</script>

</body>
</html>
