<?php

function myCreate($name, $date, $dis, $pages, $price){
    $connect = mysqli_connect("db", 'bitrix', '123', 'bitrix') or die("Ошибка");
    $query = "INSERT INTO books(name, date, discription, pages, price) VALUE('$name', '$date', '$dis', '$pages', '$price')";
    $result = mysqli_query($connect, $query) or die ("Error");
    mysqli_close($connect);

}

function myDelete($id){
    $connect = mysqli_connect("db", 'bitrix', '123', 'bitrix') or die("Ошибка");
    $query = "DELETE FROM books WHERE id = '$id'";
    $result = mysqli_query($connect, $query) or die ("Error");
    mysqli_close($connect);
};

function myGet(){
    $connect = mysqli_connect("db", 'bitrix', '123', 'bitrix') or die("Ошибка");
    $query = "SELECT * FROM books";
    $result = mysqli_query($connect, $query) or die ("Error");
    $arrResult = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connect);
    return $arrResult;
};