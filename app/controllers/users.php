<?php
include "app/database/db.php";
define ('BASE_URL' , 'http://localhost:63342/Atish0k.github.io/index.php');
$errMsg = '';
$regStatus = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-sec']);



    if($name === '' || $email === '' || $passF === ''){
        $errMsg = "Не все поля заполнены";
    }elseif(mb_strlen($name, 'UTF-8') < 2){
        $errMsg = "Логин короче 2-х символов";
    }elseif($passF !== $passS){
        $errMsg = "Пароли в обоих полях должны совпадать";
    }
    else{
        $existence = selectOne('users' , ['email' => $email]);
        if($existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже есть, попробуйте другую";
        }else{
            $pass  = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => $pass
            ];
            $id=insert('users', $post);
            //$errMsg = "Пользователь $name успешно зарегистрирован";
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            header('location: ' . BASE_URL);

        }

    }
}
else{
    echo 'GET';
    $name = '';
    $username = '';
    $email = '';
}





