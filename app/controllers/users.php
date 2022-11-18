<?php
//include "app/database/db.php";

$errMsg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-sec']);

    if($name === '' || $username === '' || $email === '' || $passF === '')
    {
        $errMsg = 'Не все поля заполнены';
    }elseif (mb_strlen($username, 'utf8')){
        $errMsg = 'Логин дб больше 2х символов';
    }
    elseif ($passF === $passS){
        $errMsg = "Не совпадают пароли";
    }
    else{
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        $post = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $pass
                ];
            $id = insert('users', $post);
        }
    }
else{
    echo 'GET';
    $name = '';
    $username = '';
    $email = '';
}





