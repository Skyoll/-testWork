<?php

require_once __DIR__. '/../functions.php';

$id = (int) strip_tags(trim($_POST['id']));
$name = (string) strip_tags(trim($_POST['name']));

$response = [];

if (!$id) {
    $response = [
        'error' => true,
        'message' => 'Не валидный id'
    ];

    echo json_encode($response);
    die();
}

$result = delete($id);

if (!$result) {
    $response = [
        'error' => true,
        'message' => 'Не удалось удалить запись'
    ];
}else {
    $response = [
        'error' => false,
        'message' => sprintf('Книга с названием %s успешно удалена', $name)
    ];
}

echo json_encode($response);