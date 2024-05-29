<div class="banner__header register p">
        <?php include 'header.php' ?>
        <div class="banner container">
            <div class="banner__block register-block">
                <div class="profile__block m">
                    <h4>Редактирование</h4>
                    <form class="qwer" action="actions/profile-edit.php" method="POST">
                        <div class="profile__info">
                            <div class="profile__info__name">
                                <p><input name="name" type="text" value="<?php echo $_SESSION['user']['name'] ?>"></p>
                                <p><input name="surname" type="text" value="<?php echo $_SESSION['user']['surname'] ?>"></p>
                            </div>
                            <p class="prof__email"><input name="email" value="<?php echo $_SESSION['user']['email'] ?>" type="text"></p>
                            <?php
                                if(isset($_SESSION['errors']['name'])) {
                                    ?><p class="errors"><?=$_SESSION['errors']['name'];?></p><?php
                                    unset($_SESSION['errors']['name']);
                                }

                                if(isset($_SESSION['errors']['surname'])) {
                                    ?><p class="errors"><?=$_SESSION['errors']['surname'];?></p><?php
                                    unset($_SESSION['errors']['surname']);
                                }

                                if(isset($_SESSION['errors']['email'])) {
                                    ?><p class="errors"><?=$_SESSION['errors']['email'];?></p><?php
                                    unset($_SESSION['errors']['email']);
                                }
                            ?>
                        </div>
                        <div style="display:flex; gap: 20px;">
                        <form action="actions/quite.php">
                            <button class="quite">Сохранить</button>
                        </form>
                        <button onclick="window.location.href='?page=profile'" class="quite">Отмена</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script>
    console.log(111);
    var dt = new DataTransfer();
 
 $('.input-file input[type=file]').on('change', function(){
     let $files_list = $(this).closest('.input-file').next();
     $files_list.empty();
  
     for(var i = 0; i < this.files.length; i++){
         let new_file_input = '<div class="input-file-list-item">' +
             '<span class="input-file-list-name">' + this.files.item(i).name + '</span>' +
             '<a href="#" onclick="removeFilesItem(this); return false;" class="input-file-list-remove">x</a>' +
             '</div>';
         $files_list.append(new_file_input);
         dt.items.add(this.files.item(i));
     };
     this.files = dt.files;
 });
  
 function removeFilesItem(target){
     let name = $(target).prev().text();
     let input = $(target).closest('.input-file-row').find('input[type=file]');	
     $(target).closest('.input-file-list-item').remove();	
     for(let i = 0; i < dt.items.length; i++){
         if(name === dt.items[i].getAsFile().name){
             dt.items.remove(i);
         }
     }
     input[0].files = dt.files;  
 }
</script>