<?php

session_start();

require_once '../database/database.php';

$id = $_SESSION['user']['id'];

if(!isset($_POST)) die('Поддерживается только метод post. Вы передаете get запрос');

if(empty($_FILES['avatar']['name'])) {

    $_SESSION['errors']['avatar'] = 'Загрузите картинку.';

    header('Location: ../index.php?page=profile');

    die();

}

$file = $_FILES['avatar'];

if($file['size'] > 1024 * 1024 * 8) $_SESSION['errors']['avatar'] = 'Максимальный размер картинки 8 мб.';

$types = [
    'image/jpeg',
    'image/png',
    'image/jpg',
    'image/svg+xml',
];

if(!in_array($file['type'], $types)) $_SESSION['errors']['avatar'] = 'Неверный формат картинки. Поддерживаются следующие форматы: png, jpg, jpeg, svg';

if(isset($_SESSION['errors']['avatar'])) {

    header('Location: ../index.php?page=profile');

    die();

}

$extension = pathinfo($file['name'], PATHINFO_EXTENSION);

$fileName = uniqid() . '.' . $extension;

$path = 'assets/avatars/' . $fileName;


move_uploaded_file($file['tmp_name'], '../img/avatars/' . $fileName);


$sql = "UPDATE `users` SET `img` = '$fileName' WHERE `users`.`id` = '$id'";

$query = $connection->query($sql);

$_SESSION['user']['img'] = $fileName;

header('Location: ../index.php?page=profile');