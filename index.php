<!DOCTYPE HTML>
<html lang="uk">
<?php session_start();?>
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <link href='style/main.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.orbit.js"></script>
    <script type="text/javascript"> 
        $(window).load(function() {$('#featured').orbit();});
    </script>
</head>

<body>
    <div class="content-wrapper">
        <header class="header">
            <div class="highest_row">
                <div>
                    <h1> Kinobase</h1>
                    <h2>Відкрий світ кіно разом з нами</h2>
                   <!-- <nav>
                        <a href=#>Кіно</a>
                        <a href=#>Серіали</a>
                        <a href=#>Афіша</a>
                        <a href=#>Тексти</a>
                        <a href=#>Рейтинги</a>
                        <a href=#>Програми і шоу</a>
                    </nav>
                    -->
                </div>
            </div>
            <h2>Рейтинг очікування</h2>
              <div id="featured"> 
                <a href="https://uafilm.tv/1018-madagaskar-3.html" target="_blank">
                    <img src="image/header1.png" alt="Link" />
                </a>
                <a href="http://kino-na-xati.com/boyovyk/venom-online.html" target="_blank">
                    <img src="image/venom.jpg" alt="Ezio" rel="ezioCaption" />
                </a>
            </div> 
         </header>
        <div class="main_part">
            <aside class="aside_left">
                <section>
                  <?php require './scripts/left_aside.php'; ?>
                </section>
                <section>
                <?php require './scripts/left_aside2.php'; ?>
                </section>
            </aside>


            <article class="article1">
                <ol>
                <?php require './scripts/output.php'; ?>
                </ol>
            </article >
            <article class="article2">
            <?php require './scripts/out_page_select.php'; ?>
            </article>
                    <aside class = aside_right>
                <div>
                    <h2>П'ять найпопулярніших фільмів</h2>
                    <ol>
                        <?php require './scripts/top5.php';?>
                    </ol>
                </div>
                <div>
                    <h2>П'ять випадкових фільмів</h2>
                    <ol>
                    <?php require './scripts/rand5.php';?>
                    </ol>
                </div>
            </aside>
        </div>
        <footer class="footer">
        <h2>mykursova.herokuapp.com</h2>
            <!--<nav>
            
                <ul>
                    <p>Фільми</p>
                    <li><a href=#>База фільмів</a></li>
                    <li><a href=#>Афіша</a></li>
                    <li> <a href=#>В кінотеатрах</a></li>
                    <li><a href=#>Скоро</a></li>
                    <li><a href=#>Аніме</a></li>
                   
                </ul>
                <ul>
                    <p>Люди</p>
                    <li> <a href=#>Актори</a></li>
                </ul>
                <ul>
                    <p>Мультимедіа </p>
                    <li><a href=#>Трейлери</a></li>
                    <li><a href=#>Фото</a></li>
                    <li><a href=#>Шпалери</a></li>
                    <li> <a href=#>Саундтреки</a></li>
                </ul>
                <ul>
                    <p> Спілкування </p>
                    <li> <a href=#>Форум</a></li>
                </ul>
                <ul>
                    <p>Рейтинги </p>
                    <li><a href=#>Кращі фільми</a></li>
                    <li><a href=#>Box Office</a></li>
                </ul>
                <ul>
                    <p> Новини </p>
                    <li> <a href=#>Новини кіно</a></li>
                </ul>
                <ul>
                    <p>Користувачі </p>
                    <li> <a href=#>Реєстрація</a></li>
                    <li><a href=#>Зайти на сайт</a></li>
                </ul>
                <ul>
                    <p> Контакти </p>
                   <li> <a href=#>Форма зворотного зв'язку</a></li>
                    <li><a href=#>Реклама на kinobase</a></li>
                </ul>
            </nav>-->
        </footer>
    </div>
</body>

</html>