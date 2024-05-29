<?php
try{
    $dsn = 'mysql:host=localhost;dbname=z891';
    $connection = new PDO($dsn,'z891', 'caA8EkD3BRP4FG6z');
    return $connection;
}
catch(PDOException $exeption){
    echo 'Возникла ошибка при подключении к бд: ' . $exeption ->getMessage();
}

