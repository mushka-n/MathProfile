<?php

    $connect = mysqli_connect('localhost', 'root', '', 'mls-exams');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>