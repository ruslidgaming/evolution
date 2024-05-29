<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php

        session_start();

        require_once 'database/database.php';

        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'login') {
                include 'pages/login.php';
            }

            elseif ($_GET['page'] == 'register') {
                include 'pages/register.php';
            }

            elseif ($_GET['page'] == 'admin') {
                include 'pages/admin.php';
            }

            elseif ($_GET['page'] == 'profile') {
                include 'pages/profile.php';
            }

            elseif ($_GET['page'] == 'profile-edit') {
                include 'pages/profile-edit.php';
            }

            else {
                include 'pages/main.php';
            }
        }
        else {
            include 'pages/main.php';
        }
        include "pages/footer.php";
    ?>
</body>
</html>