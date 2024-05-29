<div class="banner__header register p">
        <?php include 'header.php' ?>
        <div class="banner container">
            <div class="banner__block register-block">
                <div class="profile__block">
                    <div class="img__profile__block">
                        <img class="img__profile" src=<?php echo is_null($_SESSION['user']['img']) ? 'img/ellipse.png' : 'img/avatars/' . $_SESSION['user']['img'];  ?> alt="">
                        <form class="input-file-row" action="actions/uploadAvatar.php" method="POST" enctype="multipart/form-data">
                            <label class="input-file">
                                <input type="file" name="avatar">		
                                <span>Выберите фото</span>
                            </label>
                            <div class="input-file-list"></div>  
                            <?php
                                if(isset($_SESSION['errors']['avatar'])) {
                                    ?><p class="errors"><?=$_SESSION['errors']['avatar'];?></p><?php
                                    unset($_SESSION['errors']['avatar']);
                                }
                            ?>
                            <button class="btn__prof">Изменить аватарку</button>
                        </form>  
                    </div>
                    <div class="qwer">
                        <div class="profile__info">
                            <div class="profile__info__name">
                                <p><?php echo $_SESSION['user']['name'] ?></p>
                                <p><?php echo $_SESSION['user']['surname'] ?></p>
                            </div>
                            <p class="prof__email"><?php echo $_SESSION['user']['email'] ?></p>
                        </div>
                        <form action="actions/quite.php">
                            <button class="quite">Выйти</button>
                        </form>
                        <button onclick="window.location.href='?page=profile-edit'" class="quite">Редактировать</button>
                    </div>
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