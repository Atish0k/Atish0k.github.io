<?php
session_start();

define ('BASE_URL' , 'http://localhost:63342/Atish0k.github.io/index.php');

unset($_SESSION['id']);
unset($_SESSION['login']);

header('location: ' . BASE_URL);