<?php
session_start();
require_once '../database/database.php';
global $connection;

if(!isset($_POST)) die('Поддерживается только метод post. Вы передаете get запрос');

$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password_r = trim($_POST['password_r']);

$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;

if(empty($email)) $_SESSION['errors']['email'] = 'Поле email является обязательным';

if(empty($email)) $_SESSION['errors']['name'] = 'Поле имя является обязательным';

if(empty($email)) $_SESSION['errors']['surname'] = 'Поле фамилия является обязательным';

else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['errors']['email'] = 'Поле email некорректно';

else {
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $query = $connection->query($sql);
    $isReg = $query->fetch(PDO::FETCH_ASSOC);

    if(!empty($isReg)) $_SESSION['errors']['email'] = 'Поле email должно быть уникальным';
}

if(empty($password)) $_SESSION['errors']['password'] = 'Поле password является обязательным';

else if(strlen($password) > 6) $_SESSION['errors']['password'] = 'Максимальное кол-во символов - 6';

if(empty($password_r)) $_SESSION['errors']['password_r'] = 'Подтвердите пароль';

else if($password !== $password_r) $_SESSION['errors']['password_r'] = 'Пароли не совпадают';

if(!empty($_SESSION['errors'])) {
    header('Location: ../index.php?page=register');
    die();
}

$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `role_id`) VALUES (NULL,:name,:surname, :email, :password, :role_id)";

$params = [
    ':name' => $name,
    ':surname' => $surname,
    ':email' => $email,
    ':password' => $password,
    ':role_id' => 1,
];

$prepare = $connection->prepare($sql);

$prepare->execute($params);

unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['surname']);

header('Location: ../index.php?page=login');