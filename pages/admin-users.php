<?php 
    $sql = "SELECT * FROM users";

    $query = $connection->query($sql);

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="admin-users">
                <p class="h3__admin">Пользователи</p>
                <div class="admin__users__block">
                    <?php
                        foreach ($users as $user) {
                            ?> 
                                <div class="admin-user">
                                    <img class="profile-img" src=<?php echo is_null($user['img']) ? 'img/ellipse.png' : 'img/avatars/' . $user['img'];?> alt="">
                                    <div class="admin__user__info">
                                        <p><?php echo $user['name'] ?></p>
                                        <p><?php echo $user['surname'] ?></p>
                                    </div>
                                    <p class="admin__user__email"><?php echo $user['email'] ?></p>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>