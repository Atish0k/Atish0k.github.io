<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OnCode</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/logon.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="header">
        <h1 class="ts">OnCode</h1>
    </div>
    <nav>
        <a href="index.html">ГЛАВНАЯ</a>
        <a>КУРСЫ</a>
        <a href="aboutUs.html">О НАС</a>
        <a href="contacts.html">КОНТАКТЫ</a>
        <a href="logon.html">ВХОД</a>
    </nav>
    <div class="content">
        <h1>КОНТЕНТ</h1>
        <!--Form Registration-->
        <form method="post" action="registration.html">
            <div class="mb-3">
                <label  class="form-label">Ваш никнейм</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы беспокоимся за сохранность вашей почты</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</пароль></label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
            <a href="login.php">Авторизоваться</a>
        </form>
        <!--End Form-->
    </div>
    <div class="clear">
    </div>
    <footer>
        <h1>ПОДВАЛ</h1>
    </footer>
</div>

</body>
</html>