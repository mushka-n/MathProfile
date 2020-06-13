<?php

/*Выход пользователя из своего аккаунта*/
session_start();
unset($_SESSION['user']);
header('Location: ../index.php');

?>