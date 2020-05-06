<?php


function create($name, $date, $des, $pages, $price) {
    $connect = getConnection();
    $query = "INSERT INTO books(name, date, description, pages, price) VALUE('$name', '$date', '$des', '$pages', '$price')";
    $result = mysqli_query($connect, $query) or die ("Error");
    mysqli_close($connect);

}

function delete($id) {
    $connect = getConnection();
    $query = "DELETE FROM books WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    mysqli_close($connect);
    return $result;
}

function getAll() {
    $connect = getConnection();
    $query = "SELECT * FROM books";
    $result = mysqli_query($connect, $query) or die ("Error");
    $arrResult = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connect);
    return $arrResult;
}

function getConnection() {
    $config = parse_ini_file( __DIR__.'/db.conf');
    return mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASSWORD'], $config['DB_NAME']);
}
