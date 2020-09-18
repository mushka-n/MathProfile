<?php

session_start();

if (!$_SESSION['user']) {
    header('Location: ../index.php');
} else {
    $id = $_SESSION['user']['id'];
}


if(!isset($_SESSION["theme"]))  $_SESSION["theme"] = "light";


require_once '../vendor/connect.php';

/*$progress = mysqli_query($connect,"SELECT * FROM `users` WHERE `id` ==  ") or die("Ошибка " . mysqli_error($link));*/ 

$user = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `users`  WHERE `id` = '$id'"));

$pr1 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `1`  WHERE `id` = '$id'"));
$pr2 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `2`  WHERE `id` = '$id'"));
$pr3 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `3`  WHERE `id` = '$id'"));
$pr4 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `4`  WHERE `id` = '$id'"));
$pr5 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `5`  WHERE `id` = '$id'"));
$pr6 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `6`  WHERE `id` = '$id'"));
$pr7 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `7`  WHERE `id` = '$id'"));
$pr8 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `8`  WHERE `id` = '$id'"));
$pr9 =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `9`  WHERE `id` = '$id'"));
$pr10 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `10` WHERE `id` = '$id'"));
$pr11 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `11` WHERE `id` = '$id'"));
$pr12 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `12` WHERE `id` = '$id'"));
$pr13 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `13` WHERE `id` = '$id'"));
$pr14 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `14` WHERE `id` = '$id'"));
$pr15 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `15` WHERE `id` = '$id'"));
$pr16 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `16` WHERE `id` = '$id'"));
$pr17 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `17` WHERE `id` = '$id'"));
$pr18 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `18` WHERE `id` = '$id'"));
$pr19 = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `19` WHERE `id` = '$id'"));



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Profile</title>

    <!--Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


     <!--jQuerry -->
     <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="../css/style.css">

     <script src="../js/scripts.js"></script>
</head>
<body>



    <div class="menu" id="menu">

        <div class="container">

            <div class="row">

                <span class="menu-logo menu-block"><a href="../index.php" class="menu-block-a"><img src="../imgs/icons/favicon.png" alt="" id="menu-logo"><span>Math<br>Profile</span></a></span>

                <span class="menu-user menu-block" ><?= $_SESSION['user']['full_name'] ?></span>

                <span class="menu-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a">Выход</a></span>

            </div>
        </div>
        <div class="theme-switch" id="theme-switch"></div>
    </div>

    <div class="menu-skipper"></div>

    <!-- Профиль -->

    <div class="progress">
        <div class="container">
           
                
                <div class="final-progress">
                    <p class="final-progress-header">Ваш ожидаемый балл:</p>
                    <p class="final-progress-data"><?php echo $user['result'] ?></p>
                </div>
            
      




                <div class="progress-block" id="1">
                    <div class="task-number" id="tn1">Задание 1: &nbsp;<?php echo($pr1['1']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Простейшие задачи</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Вычисления</p>
                        <div class="progress-block-type-data"><?php echo($pr1['1.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Округление</p>
                        <div class="progress-block-type-data"><?php echo($pr1['1.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Проценты</p>
                        <div class="progress-block-type-data"><?php echo($pr1['1.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Проценты и округление</p>
                        <div class="progress-block-type-data"><?php echo($pr1['1.4']) ?>%</div>
                    </div>
                </div>      


                <div class="progress-block" id="2">
                    <div class="task-number" id="tn2">Задание 2: &nbsp;<?php echo($pr2['2']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Графики и диаграммы</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Определение величины</p>
                        <div class="progress-block-type-data"><?php echo($pr2['2.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Вычисление величины</p>
                        <div class="progress-block-type-data"><?php echo($pr2['2.2']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="3">
                    <div class="task-number" id="tn3">Задание 3: &nbsp;<?php echo($pr3['3']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Клетки и плоскость</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Многоугольники</p>
                        <div class="progress-block-type-data"><?php echo($pr3['3.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Координатная плоскость</p>
                        <div class="progress-block-type-data"><?php echo($pr3['3.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Круг и его элементы</p>
                        <div class="progress-block-type-data"><?php echo($pr3['3.3']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="4">
                    <div class="task-number" id="tn4">Задание 4: &nbsp;<?php echo($pr4['4']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Теория вероятности</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Теория вероятности</p>
                        <div class="progress-block-type-data"><?php echo($pr4['4.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Вероятности событий</p>
                        <div class="progress-block-type-data"><?php echo($pr4['4.2']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="5">
                    <div class="task-number" id="tn5">Задание 5: &nbsp;<?php echo($pr5['5']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Простейшие уравнения</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Иррациональные</p>
                        <div class="progress-block-type-data"><?php echo($pr5['5.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Показательные</p>
                        <div class="progress-block-type-data"><?php echo($pr5['5.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Логарифмические</p>
                        <div class="progress-block-type-data"><?php echo($pr5['5.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Рациональные</p>
                        <div class="progress-block-type-data"><?php echo($pr5['5.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">N - ной степени</p>
                        <div class="progress-block-type-data"><?php echo($pr5['5.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Тригонометрические</p>
                        <div class="progress-block-type-data"><?php echo($pr5['5.6']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="6">
                    <div class="task-number" id="tn6">Задание 6: &nbsp;<?php echo($pr6['6']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Планиметрия</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Треугольник</p>
                        <div class="progress-block-type-data"><?php echo($pr6['6.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Вписанная и описанная окружности</p>
                        <div class="progress-block-type-data"><?php echo($pr6['6.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Параллелограмм</p>
                        <div class="progress-block-type-data"><?php echo($pr6['6.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Трапеция</p>
                        <div class="progress-block-type-data"><?php echo($pr6['6.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Окружность</p>
                        <div class="progress-block-type-data"><?php echo($pr6['6.5']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="7">
                    <div class="task-number" id="tn7">Задание 7: &nbsp;<?php echo($pr7['7']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Производные</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Геометрический смысл</p>
                        <div class="progress-block-type-data"><?php echo($pr7['7.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Исследование функций</p>
                        <div class="progress-block-type-data"><?php echo($pr7['7.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Физический смысл</p>
                        <div class="progress-block-type-data"><?php echo($pr7['7.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Первообразная</p>
                        <div class="progress-block-type-data"><?php echo($pr7['7.4']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="8">
                    <div class="task-number" id="tn8">Задание 8: &nbsp;<?php echo($pr8['8']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Стереометрия</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Пирамида</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Призма</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Составной многогранник</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Комбинации тел</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Прямоугольный параллелепипед</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Конус</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.6']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Цилиндр</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.7']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Куб</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.8']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Шар</p>
                        <div class="progress-block-type-data"><?php echo($pr8['8.9']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="9">
                    <div class="task-number" id="tn9">Задание 9: &nbsp;<?php echo($pr9['9']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Преобразования</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Тригонометрия</p>
                        <div class="progress-block-type-data"><?php echo($pr9['9.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Степени</p>
                        <div class="progress-block-type-data"><?php echo($pr9['9.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Алгебраические выражения и дроби</p>
                        <div class="progress-block-type-data"><?php echo($pr9['9.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Иррациональные выражения</p>
                        <div class="progress-block-type-data"><?php echo($pr9['9.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Логарифмы</p>
                        <div class="progress-block-type-data"><?php echo($pr9['9.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Рациональные выражения</p>
                        <div class="progress-block-type-data"><?php echo($pr9['9.6']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="10">
                    <div class="task-number" id="tn10">Задание 10: &nbsp;<?php echo($pr10['10']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Задачи с прикладным содержанием</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Линейные уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Квадратные уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Рациональные уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Иррациональные уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Логарифм-е уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Показательные уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.6']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Тригоном-е уравнения и неравенства</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.7']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Расчет рейтинга</p>
                        <div class="progress-block-type-data"><?php echo($pr10['10.8']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="11">
                    <div class="task-number" id="tn11">Задание 11: &nbsp;<?php echo($pr11['11']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Текстовые задачи</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">На совм. работу</p>
                        <div class="progress-block-type-data"><?php echo($pr11['11.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Движение по прямой</p>
                        <div class="progress-block-type-data"><?php echo($pr11['11.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Движение по воде</p>
                        <div class="progress-block-type-data"><?php echo($pr11['11.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Проценты, сплавы, смеси</p>
                        <div class="progress-block-type-data"><?php echo($pr11['11.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Прогресии</p>
                        <div class="progress-block-type-data"><?php echo($pr11['11.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Движение по окр.</p>
                        <div class="progress-block-type-data"><?php echo($pr11['11.6']) ?>%</div>
                    </div>
                </div>

                <div class="progress-block" id="12">
                    <div class="task-number" id="tn12">Задание 12: &nbsp;<?php echo($pr12['12']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Исследование функций</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Степенные и иррациональные</p>
                        <div class="progress-block-type-data"><?php echo($pr12['12.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Произведения</p>
                        <div class="progress-block-type-data"><?php echo($pr12['12.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Тригонометрические</p>
                        <div class="progress-block-type-data"><?php echo($pr12['12.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Логарифмические</p>
                        <div class="progress-block-type-data"><?php echo($pr12['12.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Показательные</p>
                        <div class="progress-block-type-data"><?php echo($pr12['12.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Частное</p>
                        <div class="progress-block-type-data"><?php echo($pr12['12.6']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="13">
                    <div class="task-number" id="tn13">Задание 13: &nbsp;<?php echo($pr13['13']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Уравнения</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Тригонометрические</p>
                        <div class="progress-block-type-data"><?php echo($pr13['13.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Смешанного типа</p>
                        <div class="progress-block-type-data"><?php echo($pr13['13.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Иррациональные</p>
                        <div class="progress-block-type-data"><?php echo($pr13['13.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Логарифмические</p>
                        <div class="progress-block-type-data"><?php echo($pr13['13.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Показательные</p>
                        <div class="progress-block-type-data"><?php echo($pr13['13.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Рациональные</p>
                        <div class="progress-block-type-data"><?php echo($pr13['13.6']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="14">
                    <div class="task-number" id="tn14">Задание 14: &nbsp;<?php echo($pr14['14']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Стереометрия</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Сечения многогр-ов</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Угол между плоскостями</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Объемы многогр-ков</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Круглые тела</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Расстояние от точки до прямой и до плоскости</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Расстояние между прямыми и плоскостями</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.6']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Угол между скрещ-ся прямыми</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.7']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Угол между прямой и плоскостью</p>
                        <div class="progress-block-type-data"><?php echo($pr14['14.8']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="15">
                    <div class="task-number" id="tn15">Задание 15: &nbsp;<?php echo($pr15['15']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Неравенства</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Логарифмические</p>
                        <div class="progress-block-type-data"><?php echo($pr15['15.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Показательные</p>
                        <div class="progress-block-type-data"><?php echo($pr15['15.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Смешанные</p>
                        <div class="progress-block-type-data"><?php echo($pr15['15.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Рациональные</p>
                        <div class="progress-block-type-data"><?php echo($pr15['15.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">С модулем</p>
                        <div class="progress-block-type-data"><?php echo($pr15['15.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">С радикалами</p>
                        <div class="progress-block-type-data"><?php echo($pr15['15.6']) ?>%</div>
                    </div>
                </div>



                <div class="progress-block" id="16">
                    <div class="task-number" id="tn16">Задание 16: &nbsp;<?php echo($pr16['16']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Планиметрия</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Многоугольники</p>
                        <div class="progress-block-type-data"><?php echo($pr16['16.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Окружности и треугольники</p>
                        <div class="progress-block-type-data"><?php echo($pr16['16.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Окружности и четырехугольники</p>
                        <div class="progress-block-type-data"><?php echo($pr16['16.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Окружности и их системы</p>
                        <div class="progress-block-type-data"><?php echo($pr16['16.4']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="17">
                    <div class="task-number" id="tn17">Задание 17: &nbsp;<?php echo($pr17['17']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Экономика и финансы</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Вклады и кредиты</p>
                        <div class="progress-block-type-data"><?php echo($pr17['17.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Оптимизация</p>
                        <div class="progress-block-type-data"><?php echo($pr17['17.2']) ?>%</div>
                    </div>
                </div>


                <div class="progress-block" id="18">
                    <div class="task-number" id="tn18">Задание 18: &nbsp;<?php echo($pr18['18']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Задачи с параметром</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Уравнения с параметром</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Системы с параметром</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Неравенства с параметром</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">На аналитическое решение</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.4']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Использование монотонности, оценок</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.5']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Использование симметрий</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.6']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Координаты (x, a)</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.7']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Уравнение окружности</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.8']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Функции, зависящие от параметра</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.9']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Расположение корней квадратного трехчлена</p>
                        <div class="progress-block-type-data"><?php echo($pr18['18.10']) ?>%</div>
                    </div>
                </div>

                <div class="progress-block" id="19">
                    <div class="task-number" id="tn19">Задание 19: &nbsp;<?php echo($pr19['19']) ?>%</div>
                    <div class="wrap-task-name">
                        <p class="task-name">Олимпиадная задача</p>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Числа и их свойства</p>
                        <div class="progress-block-type-data"><?php echo($pr19['19.1']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Сюжетные задачи</p>
                        <div class="progress-block-type-data"><?php echo($pr19['19.2']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Последовательности и прогрессии</p>
                        <div class="progress-block-type-data"><?php echo($pr19['19.3']) ?>%</div>
                    </div>
                    <div class="progress-block-type">
                        <p class="progress-block-type-name">Числовые наборы на карточках и досках</p>
                        <div class="progress-block-type-data"><?php echo($pr19['19.4']) ?>%</div>
                    </div>
                </div>



            </div>
        </div>
    </div>



<script>
    
    $('.progress-block').click(function(event){
        if ($(this).children('.progress-block-type').css("display") == "table"){
            $(this).children('.progress-block-type').css("display","none");
        } else {
            $(this).children('.progress-block-type').css("display","table")
        }
    });
</script>

<script>
    for (let i=1; i<20; i++){
        let taskpr = (document.getElementById('tn'+i).textContent).slice(-3,-1);
        if      (taskpr == "00") taskpr = "100"; 
        else if (taskpr == " 0") taskpr =   "0";
        taskpr = parseInt(taskpr);
        console.log(taskpr);

        if      (taskpr <= 30)              $('#'+i).addClass("progress-block-red")
        else if (taskpr>30 && taskpr<80)    $('#'+i).addClass("progress-block-yellow")
        else                                $('#'+i).addClass("progress-block-green")
    }

</script>
    
</body>
</html>