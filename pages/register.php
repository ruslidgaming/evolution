<?php
    session_start();
?>

<div class="banner__header register reg">
        <?php include 'header.php' ?>
        <div class="banner container">
            <div class="banner__block register-block">
                <form class="form__register adaptive" action="actions/register.php" method="POST">
                    <p class="h__form">РЕГИСТРАЦИЯ</p>
                    <div class="column">
                        <p class="p__form">Имя</p>
                        <input name="name" type="text" value="<?php
                            if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                                unset($_SESSION['name']);
                            }
                        ?>">
                        <?php
                            if(isset($_SESSION['errors']['name'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['name'];?></p><?php
                                unset($_SESSION['errors']['name']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Фамилия</p>
                        <input name="surname" type="text" value="<?php
                            if (isset($_SESSION['surname'])) {
                                echo $_SESSION['surname'];
                                unset($_SESSION['surname']);
                            }
                        ?>">
                        <?php
                            if(isset($_SESSION['errors']['surname'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['surname'];?></p><?php
                                unset($_SESSION['errors']['surname']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Почта</p>
                        <input name="email" type="text" value="<?php
                            if (isset($_SESSION['email'])) {
                                echo $_SESSION['email'];
                                unset($_SESSION['email']);
                            }
                        ?>">
                        <?php
                            if(isset($_SESSION['errors']['email'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['email'];?></p><?php
                                unset($_SESSION['errors']['email']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Пароль</p>
                        <input name="password" type="password">
                        <?php
                            if(isset($_SESSION['errors']['password'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['password'];?></p><?php
                                unset($_SESSION['errors']['password']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Повторный пароль</p>
                        <input name="password_r" type="password">
                        <?php
                            if(isset($_SESSION['errors']['password_r'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['password_r'];?></p><?php
                                unset($_SESSION['errors']['password_r']);
                            }
                        ?>
                    </div>
                    <button class="btn__form">Зарегистрироваться</button>
                    <div class="redirect">
                        <p>Уже есть аккаунт?</p>
                        <a href="?page=login">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>