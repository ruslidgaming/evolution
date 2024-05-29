<?php 
    $sql = "SELECT * FROM stickers";

    $query = $connection->query($sql);

    $stickers = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="admin-users">
                <p class="h3__admin">Стикеры</p>
                <div class="sticks admin__sticks">
                    <?php
                        foreach ($stickers as $sticker) {
                            ?> 
                                <div class="stick admin__stick">
                                    <img class="stick__img" src="img/products/<?echo $sticker['img']?>" alt="">
                                    <p class="h__stick"><?php echo $sticker['name'] ?></p>
                                    <p class="info__stick"><?php echo $sticker['description'] ?></p>
                                    <div class="admin__user__btn">
                                        <button onclick="window.location.href='?page=admin&admin=edit&id=<?=$sticker['id']?>'">Редактировать</button>
                                        <form action="actions/delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $sticker['id'] ?>">
                                            <button>Удалить</button>
                                        </form>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>