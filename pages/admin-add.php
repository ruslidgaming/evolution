<div class="admin-users">
                <p class="h3__admin">Добавить стикер</p>
                <form class="form__register admin__add_form" action="actions/add.php" method="post" enctype="multipart/form-data">
                    <div class="column">
                        <p class="p__form">Название</p>
                        <input type="text" name="name" value="<?php
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
                        <p class="p__form">Описание</p>
                        <input type="text" name="description" value="<?php
                            if (isset($_SESSION['description'])) {
                                echo $_SESSION['description'];
                                unset($_SESSION['description']);
                            }
                        ?>">
                        <?php
                            if(isset($_SESSION['errors']['description'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['description'];?></p><?php
                                unset($_SESSION['errors']['description']);
                            }
                        ?>
                    </div>

                    <div class="column">
                        <p class="p__form">Фотография</p>
                        <input type="file" name="productImg">
                        <?php
                            if(isset($_SESSION['errors']['productImg'])) {
                                ?><p class="errors"><?=$_SESSION['errors']['productImg'];?></p><?php
                                unset($_SESSION['errors']['productImg']);
                            }
                        ?>
                    </div>

                    <button class="btn__form">Добавить</button>
                </form>
            </div>