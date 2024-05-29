<?php
    $id = (int) $_GET['id'];

    $sql = "SELECT * FROM `stickers` WHERE id = $id";
    $query = $connection->query($sql);
    $sticker = $query->fetch(PDO::FETCH_ASSOC);

    $var = !empty($_SESSION['errors']);

?>

<div class="admin-users">
                <p class="h3__admin">Изменить стикер</p>
                <form class="form__register admin__add_form" action="actions/update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="column">
                        <p class="p__form">Название</p>
                        <input type="text" name="name" value="<?php echo $var ? $_SESSION['name'] : $sticker['name']?>">
                        <?php
                            if(isset($_SESSION['errors']['name'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['name'];?></p><?php
                                unset($_SESSION['errors']['name']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Описание</p>
                        <input type="text" name="description" value="<?php echo $var ? $_SESSION['description'] : $sticker['description'] ?>">
                        <?php
                            if(isset($_SESSION['errors']['description'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['description'];?></p><?php
                                unset($_SESSION['errors']['description']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Фотография</p>
                        <input type="file" name="productImg" value="<?php echo $sticker['img'] ?>">
                        <?php
                            if(isset($_SESSION['errors']['productImg'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['productImg'];?></p><?php
                                unset($_SESSION['errors']['productImg']);
                            }
                        ?>
                    </div>

                    <button class="btn__form">Сохранить</button>
                </form>
            </div>