
<div class="admin">
    <div class="admin-panel-container">
        <div class="admin-panel">
            <div class="admin-close">✖</div>
            <a href="?page=main"><img class="logo-admin" src="img/logo-admin.png" alt=""></a>

            <div class="admin-info">
                <p><?php echo $_SESSION['user']['name'] ?></p>
                <p><?php echo $_SESSION['user']['surname'] ?></p>
            </div>
            <p class="admin__email"><?php echo $_SESSION['user']['email'] ?></p>

            <div class="admin-navs">
                <div onclick="window.location.href='?page=admin&&admin=users'" class="admin-nav">
                    <img src="img/admin-icon1.png" alt="">
                    <p>Пользователи</p>
                </div>

                <div onclick="window.location.href='?page=admin&&admin=stickers'" class="admin-nav">
                    <img src="img/admin-icon2.png" alt="">
                    <p>Стикеры</p>
                </div>

                <div onclick="window.location.href='?page=admin&&admin=add'" class="admin-nav">
                    <img src="img/admin-icon3.png" alt="">
                    <p>Добавить стикеры</p>
                </div>
            </div>
        </div>
    </div>
        
        <div class="admin-block">
            <div class="burger-admin-h">
                <div class="admin-burger">
                    <span></span>
                </div>
                <p class="h__admin">Панель администратора</p>
            </div>
            
            <?php 
                if (isset($_GET['admin'])) {
                    if ($_GET['admin'] == "users") {
                        include 'pages/admin-users.php';
                    }

                    elseif ($_GET['admin'] == "stickers") {
                        include 'pages/admin-stickers.php';
                    } 

                    elseif ($_GET['admin'] == "add") {
                        include 'pages/admin-add.php';
                    } 

                    elseif ($_GET['admin'] == "edit") {
                        include 'pages/admin-edit.php';
                    } 
                }
            ?>
        </div>
    </div>

<script type="text/javascript">
    btnBurgerOpen = document.querySelector(".admin-burger");
    btnBurgerClose = document.querySelector(".admin-close");
    adminPanel = document.querySelector(".admin-panel")
    console.log(adminPanel);
    btnBurgerOpen.addEventListener('click', function(){
        adminPanel.style.transform = "translateX(0%)";
    })
    btnBurgerClose.addEventListener('click', function(){
        adminPanel.style.transform = "translateX(-100%)";
    })
</script>