<?php

session_start();

require_once '../database/database.php';

global $connection;

if(isset($_POST)) {

    
    $name = $_POST['name'];
    $description = $_POST['description'];

    if(empty($name)) $_SESSION['errors']['name'] = 'Поле названия является обязательным';

    if(empty($description)) $_SESSION['errors']['description'] = 'Поле описания является обязательным';

    $_SESSION['name'] = $name;
    $_SESSION['description'] = $description;

    if(empty($_FILES['productImg']['name'])) {

        $_SESSION['errors']['productImg'] = 'Загрузите картинку.';
        // Перенаправляет в ту же страницу елси файл не загружен
        header('Location: ../index.php?page=admin&admin=add');
    
        die();
    }
    
    
    $file = $_FILES['productImg'];
    
    // $_SESSION['errors']['avatar'] - поменять под себя
    if($file['size'] > 1024 * 1024 * 8) $_SESSION['errors']['productImg'] = 'Максимальный размер картинки 8 мб.';
    
    $types = [
        'image/jpeg',
        'image/png',
        'image/jpg',
        'image/svg+xml',
    ];
    
    if(!in_array($file['type'], $types)) $_SESSION['errors']['productImg'] = 'Неверный формат картинки. Поддерживаются следующие форматы: png, jpg, jpeg, svg';
    
    if(!empty($_SESSION['errors']['productImg'])) {
    // Если есть ошибки, чела переброс обратно
        header('Location: ../index.php?page=admin&admin=add');
    
        die();
    }
    
    // Узнаём , тип картинки
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    // Меняем название картинки
    $fileName = uniqid() . '.' . $extension;
    // Поменять путь загрузки Относительно файл add.php
    move_uploaded_file($file['tmp_name'], '../img/products/' . $fileName);

    if(!empty($_SESSION['errors'])) {
        header('Location: ../index.php?page=admin&admin=add');
        die();
    }

    $sql = "INSERT INTO `stickers` (`id`, `name`, `description`, `img`) VALUES (NULL, '$name', '$description', '$fileName')";

    $query = $connection->query($sql);


    unset($_SESSION['name']);
    unset($_SESSION['description']);

    header('Location: ../index.php?page=admin&admin=stickers');

}
