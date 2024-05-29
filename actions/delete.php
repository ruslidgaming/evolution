<?php
require_once '../database/database.php';

if(isset($_POST)){
    $id = (int) $_POST['id'];

    $sql = "DELETE FROM `stickers` WHERE `stickers`.`id` = $id";
    // echo $sql;
    // die();

    $query = $connection->query($sql);

    header('Location: ../index.php?page=admin&admin=stickers');
    
}