<div class="banner__header register p">
        <?php include 'header.php' ?>
        <div class="banner container">
            <div class="banner__block register-block">
                <form class="form__register" action="actions/login.php" method="POST">
                    <p class="h__form">Вход</p>
                    <div class="column">
                        <p class="p__form">Почта</p>
                        <input type="text" name="email" value="<?php
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
                        <input type="password" name="password">
                        <?php
                            if(isset($_SESSION['errors']['password'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['password'];?></p><?php
                                unset($_SESSION['errors']['password']);
                            }
                        ?>
                    </div>

                    <button class="btn__form">Войти</button>
                    <div class="redirect">
                        <p>Еще нет аккаунта?</p>
                        <a href="?page=register">Зарегистрируйтесь</a>
                    </div>
                </form>
            </div>
        </div>
    </div>