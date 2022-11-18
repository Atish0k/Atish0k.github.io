<?php
include ("app/controllers/users.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OnCode</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="index.php"><img class="logo" src="img/Logo/logo2.svg"></a>
    </div>
    <nav>
        <a href="index.php">ГЛАВНАЯ</a>
        <a href="aboutUs.html">О НАС</a>
        <a href="contacts.html">КОНТАКТЫ</a>
        <a href="login.php">ВХОД</a>
        <a  class="point" href="registration.php">РЕГИСТРАЦИЯ</a>
    </nav>
    <div class="content">
        <h1 class="ts">Регистрация</h1>
        <hr>
        <main class="main-reg">
        <div class = "register-form-container">
            <h1 class = "form-title"></h1>
            <h2><?=$errMsg?></h2>
            <div class = "form-fields">
                <form class = "js-form" method = "post" action = "registration.php">
                    <div class = "form-field">
                        <input value = "<?=$name?>" type = "text" placeholder="ФИО" id = "name" class = "input js-input" name="name">
                        <!--<div class = "span"></div>-->
                    </div>
                    <div class = "form-field">
                        <input value = "<?=$username?>"type = "text" placeholder="Логин" class = "input js-input" name ="username">
                    </div>
                    <div class = "form-field">
                        <input value = "<?=$email?>" type = "email" placeholder="Email" class = "input js-input js-input-email" name = "email">
                    </div>
                    <div class = "form-field">
                        <input type = "password" placeholder="Пароль" class = "input js-input" name = "pass-first">
                    </div>
                    <div class = "form-field">
                        <input type = "password" placeholder="Повторите пароль" class = "input js-input" name = "pass-sec">
                    </div>
                    <div class = "form-field">
                        <input class = "checkbox js-input-checkbox" type = "checkbox" placeholder="Повторите пароль" checked="checked">
                        <label>Согласие на обработку персональных данных</label>
                    </div>
                    <button type = "submit" class = "button" name = "button-reg">Регистрация</button>
                    <!--<input id = "check-input-data" class="button-1" value = "Проверить данные" type="submit">
                    <p>Данные не отправлены</p>-->
                </form>
            </div>
            <div class = "form-buttons">

                <div class = "divider"</div>
                <a href = "login.php">Авторизоваться</a>
                <h1 class = "form-title"></h1>
            </div>
        </div>
        </main>
    </div>
    <footer>
        <div class="footer">
            <div class="row2">
                <div class="colFooter col1">
                    <p class="textFooter">OnCode</p><br><p class="text3">Бесплатные курсы<br>программирования</p>
                </div>
                <div class="colFooter col2">
                    <a class="navFooter" href="index.php">ГЛАВНАЯ</a>
                    <a class="navFooter" href="aboutUs.html">О НАС</a>
                    <a class="navFooter" href="contacts.html">КОНТАКТЫ</a>
                    <a class="navFooter" href="login.php">ВХОД</a>
                    <a class="navFooter" href="registration.php">РЕГИСТРАЦИЯ</a>
                </div>
                <div class="colFooter col3">
                    <a class="aFooter" href="https://t.me/artiisshok"><i class="fa-brands fa-telegram"></i>Artiisshok0</a>
                    <a class="aFooter" href="https://t.me/bbartem"><i class="fa-brands fa-telegram"></i>BBArtem</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="scripts/signIn.js" type="text/javascript"></script>
</body>
</html>