<?php 
    $sql = "SELECT * FROM stickers";

    $query = $connection->query($sql);

    $stickers = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="banner__header">
        <?php include 'header.php' ?>
        <div class="banner container">
            <div class="banner__block">
                <h1>Evolution: <br>
                    The Path of Life</h1>
                <p class="banner__text">Пройди захватывающий путь от возникновения простейших форм жизни до становления межзвёздной цивилизации в этой увлекательной игре-симуляторе.</p>
                <div class="banner__stages">
                    <img src="img/banner-stages1.png" alt="">
                    <img src="img/banner-stages2.png" alt="">
                    <img src="img/banner-stages3.png" alt="">
                    <img src="img/banner-stages4.png" alt="">
                    <img src="img/banner-stages5.png" alt="">
                    <img src="img/banner-stages6.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="story">
        <div class="story__block container">
            <h2>СЮЖЕТ</h2>
            <div class="story__text story__text1">
                <p>Игрок начинает с управления простейшим одноклеточным организмом в древнем океане и постепенно, через миллионы лет, развивает его, преодолевая множество испытаний, включая конкуренцию за ресурсы, хищников и природные катастрофы.</p>
                <img src="img/story-img1.png" alt="">
            </div>

            <div class="story__text story__text2">
                <img src="img/story-img2.png" alt="">
                <p>Исследуя различные биомы и эпохи, игрок улучшает и адаптирует свой вид, наблюдая за его эволюцией от простых форм жизни до сложных существ. Конечная цель — создать максимально развитый вид, способный выживать и процветать в любых условиях.</p>
            </div>
        </div>
    </div>

    <div class="stages stages__one">
        <div class="stages__one__block container">
            <h2>УРОВНИ</h2>
            <div class="stages__block">
                <div class="stages__one__text">
                    <h3>1. Зарождение жизни: <br>
                        Путь Одноклеточного</h3>
                    <p class="stages__text">На этом этапе игрок начинает с управления простейшим одноклеточным организмом в первобытном океане. Задача — выживать, питаться и размножаться, избегая хищников и неблагоприятных условий. Игроку предстоит собирать ресурсы, чтобы развивать и усложнять свою клеточную структуру, приобретая новые функции и адаптации для выживания.</p>
                </div>
                <img src="img/stage-one.png" alt="">
            </div>
        </div>
    </div>

    <div class="stages stages__two">
        <div class="stages__two__block container">
            <div class="stages__block">
                <img src="img/stage-two.png" alt="">
                <div class="stages__two__text">
                    <h3>2. Расцвет первобытного мира: <br>
                        Эра Многоклеточных</h3>
                    <p class="stages__text">Второй этап переносит игрока в эпоху многоклеточных организмов. Важными элементами игры становятся симбиоз, специализация клеток и развитие органов. Игроку необходимо создавать новые виды, адаптируя их к различным экологическим нишам.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="stages stages__three">
        <div class="stages__three__block container">
            <div class="stages__block">
                <div class="stages__three__text">
                    <h3>3. Первые шаги на суше:  <br>
                        Господство Рептилий и Амфибий</h3>
                    <p class="stages__text">Третий этап посвящен переходу жизни на сушу. Игроку предстоит развивать амфибий и рептилий, способных выживать как в воде, так и на суше. Основной акцент делается на адаптацию к новым средам обитания, развитию конечностей для передвижения по суше и защите от новых хищников.</p>
                </div>
                <img src="img/stage-three.png" alt="">
            </div>
        </div>
    </div>

    <div class="stages stages__four">
        <div class="stages__four__block container">
            <div class="stages__block">
                <img src="img/stage-four.png" alt="">
                <div class="stages__three__text">
                    <h3>4. Век млекопитающих: <br>
                        Возникновение Разума</h3>
                    <p class="stages__text">На четвертом этапе игрок управляет млекопитающими, которые начинают проявлять признаки разума. Важной задачей становится развитие социальных структур, обучение, изобретения и использование орудий труда. Игрок развивает виды, способные к коллективной охоте, строительству убежищ и защите от хищников.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="stages stages__five">
        <div class="stages__five__block container">
            <div class="stages__block">
                <div class="stages__three__text">
                    <h3>5. Цивилизационный скачок: <br> Эпоха Технологий</h3>
                    <p class="stages__text">Пятый этап представляет собой период интенсивного технологического развития. Игрок управляет разумными существами, которые строят города, развивают науку и технику. Важными элементами становятся изобретения, создание государств, взаимодействие с другими цивилизациями и решение социальных проблем. </p>
                </div>
                <img src="img/stage-five.png" alt="">
            </div>
        </div>
    </div>

    <div class="stages stages__six">
        <div class="stages__six__block container">
            <div class="stages__block">
                <img src="img/stage-six.png" alt="">
                <div class="stages__three__text">
                    <h3>6. Покорение космоса: <br>
                        Межзвёздная Цивилизация</h3>
                    <p class="stages__text">Заключительный этап переносит игрока в эпоху, когда цивилизация достигла такого уровня развития, что способна исследовать и колонизировать другие планеты и звездные системы. Игрок управляет межзвёздной цивилизацией, строя космические корабли, исследуя новые миры и взаимодействуя с инопланетными расами. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pack">
        <div class="pack-block container">
            <h2>Стикерпак</h2>
            <p class="stick_text">Войдите или зарегистрируйтесь в аккаунт чтобы скачать стикеры!</p>
            <div class="sticks">
                <?php
                    foreach ($stickers as $sticker) {
                        ?> 
                            <div class="stick">
                                <img class="stick__img"  src="img/products/<?echo $sticker['img']?>" alt="">
                                <p class="h__stick"><?php echo $sticker['name'] ?></p>
                                <p class="info__stick"><?php echo $sticker['description'] ?></p>
                                <?php 
                                if (isset($_SESSION['user'])) {
                                    ?> 
                                        <a href="img/products/<?echo $sticker['img']?>" download="stick">
                                            <button class="btn">Загрузить</button>
                                        </a>
                                    <?php
                                }
                                ?>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>