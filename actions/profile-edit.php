<?php

session_start();

require_once '../database/database.php';

if(isset($_POST)){


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $id = (int) $_SESSION['user']['id'];
    
    if(empty($name)) $_SESSION['errors']['name'] = 'Поле name является обязательным';

    if(empty($surname)) $_SESSION['errors']['surname'] = 'Поле surname является обязательным';

    if(empty($email)) $_SESSION['errors']['email'] = 'Поле email является обязательным';

    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
    $_SESSION['email'] = $email;


    if(!empty($_SESSION['errors'])) {
        header("Location: ../index.php?page=profile-edit");
        die();
    }

    $sql = "UPDATE `users` SET `name` = '$name', `surname` = '$surname', `email` = '$email' WHERE `users`.`id` = '$id'";

    $query = $connection->query($sql);

    unset($_SESSION['name']);
    unset($_SESSION['surname']);
    unset($_SESSION['email']);

    $_SESSION['user']['name'] = $name;
    $_SESSION['user']['surname'] = $surname;
    $_SESSION['user']['email'] = $email;

}

header('Location: ../index.php?page=profile');