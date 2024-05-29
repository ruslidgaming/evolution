<header class="container">
            <a href="?page=main"><img src="img/logo.svg" alt=""></a>
            <input type="checkbox" name="" id="burger">
            <label for="burger"></label>
            <div class="menu_nav">
                <nav>
                    <a href="?page=main">ГЛАВНАЯ</a>
                    <a href="">CЮЖЕТ</a>
                    <a href="">УРОВНИ</a>
                    <a href="">СТИКЕРЫ</a>
                    <?php 
                        if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] == 2) {
                            ?> <a href="?page=admin&&admin=users">АДМИН</a> <?php
                        }
                    ?>
                </nav>
            </div>
            <?php 
                if (isset($_SESSION['user'])) {
                    ?> <a href="?page=profile"><img src="img/user-icon.svg" alt=""></a> <?php
                }
                else {
                    ?> <a href="?page=login"><img src="img/user-icon.svg" alt=""></a> <?php
                }
            ?>
        </header>