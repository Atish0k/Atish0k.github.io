<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OnCode</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
    <!--<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">-->
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
        <a  class="point" href="registration.html">РЕГИСТРАЦИЯ</a>
    </nav>
    <div class="content">
        <h1 class="ts">Регистрация</h1>
        <hr>
        <main class="main-reg">
        <div class = "register-form-container">
            <h1 class = "form-title"></h1>
            <div class = "form-fields">
                <form class = "js-form">
                    <div class = "form-field">
                        <input type = "text" placeholder="ФИО" id = "name" class = "input js-input">
                        <!--<div class = "span"></div>-->
                    </div>
                    <div class = "form-field">
                        <input type = "text" placeholder="Логин" class = "input js-input">
                    </div>
                    <div class = "form-field">
                        <input type = "email" placeholder="Email" class = "input js-input js-input-email">
                    </div>
                    <div class = "form-field">
                        <input type = "password" placeholder="Пароль" class = "input js-input">
                    </div>
                    <div class = "form-field">
                        <input type = "password" placeholder="Повторите пароль" class = "input js-input">
                    </div>
                    <div class = "form-field">
                        <input class = "checkbox js-input-checkbox" type = "checkbox" placeholder="Повторите пароль" checked="checked">
                        <label>Согласие на обработку персональных данных</label>
                    </div>
                    <button type = "submit" class = "button">Регистрация</button>
                    <!--<input id = "check-input-data" class="button-1" value = "Проверить данные" type="submit">
                    <p>Данные не отправлены</p>-->
                </form>
            </div>
            <div class = "form-buttons">

                <div class = "divider">Или</div>
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
                    <a class="navFooter" href="registration.html">РЕГИСТРАЦИЯ</a>
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