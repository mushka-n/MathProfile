<?php

// чтобы нельзя было попасть по  ссылке

session_start();
if (!$_SESSION['user']) {
    header('../index.php');
}

include_once '../vendor/connect.php';
$user = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `users`  WHERE `id` = '$id'"));
if ($user['result'] != ''){
    header('Location: ../index.php');
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MathProfile</title>

    <!-- Favicon -->
    <link rel="icon" href="../imgs/icons/favicon.png" type="image/x-icon">

    <!--Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">

    <!--jQuerry -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- Скрипты -->
    <script src="../js/scripts.js"> </script>
        
    <style>
        body{overflow-x:hidden;}
    </style>
</head>
<body>
<!-- Опрос для начальных резултатов -->

 <div class="quiz-header">
    <h1>Пожалуйста, пройдите короткий тест который поможет нам<br>подбирать задания способствующие вашей подготовке</h1>
</div> 

<!-- Ctrl K 6 -->
<div class="quiz quiz-progress quiz-progress-profil ">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header">
                <h2>Отметьте самостоятельно, какой балл  вы в среднем получаете за каждый тип заданий. <br><br>Если вы желаете сразу приступить к процессу обучения, то нажмите на кнопку ниже</h2>
            </div>
        </div> 
        <div class="row">
            <div class="col-12">
                <form action="quiz-profil-results.php" method="POST">

                    <button class="button" type="submit">Пропустить тестирование</button>


                    <div data-v-3699c9a0="" data-v-4d5efaa8="" class="scrolldown">
                        <svg data-v-3699c9a0="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28.5px" height="43.5px" viewBox="0 0 28.5 43.5" enable-background="new 0 0 28.5 43.5" xml:space="preserve">
                            <g data-v-3699c9a0="">
                                <path data-v-3699c9a0="" fill="none" stroke="#16131a" stroke-width="3" d="M14.415,41.848L14.415,41.848C7.587,41.848,2,36.261,2,29.433V14.415 C2,7.587,7.587,2,14.415,2h0c6.828,0,12.415,5.587,12.415,12.415v15.019C26.829,36.261,21.243,41.848,14.415,41.848z"></path>
                                <line data-v-3699c9a0="" id="dropdown-point" x1="14.415" y1="12.408" x2="14.415" y2="12.408" stroke="#16131a" stroke-width="5" stroke-linecap="round">
                                    <animate data-v-3699c9a0="" id="animation1" attributeName="y2" dur="3s" values="12.408; 12.408; 12.408; 15.908; 19.408; 19.408; 23.408; 23.408; 23.408; 23.408; 23.408" repeatCount="indefinite" begin="0s" fill="freeze"></animate>
                                    <animate data-v-3699c9a0="" id="animation2" attributeName="y1" dur="3s" values="12.408; 12.408; 12.408; 12.408; 12.408; 12.408; 23.408; 23.408; 23.408; 23.408; 23.408" repeatCount="indefinite" begin="0s" fill="freeze"></animate>
                                    <animate data-v-3699c9a0="" id="animation3" attributeName="opacity" dur="3s" values="0; 1; 1; 1; 1; 1; 1; 1; 1; 0; 0;" repeatCount="indefinite" begin="0s" fill="freeze"></animate>
                                </line>
                            </g>
                        </svg>
                    </div>

                    <!-- 
                    .quiz-progress-block>p.task-number{Задание !:}>span.value[id="!"]{0%}^+.wrap-task-name>p.task-name^+.quiz-progress-block-type*N>p.name+.wrap>input.score.score-checkbox[type="checkbox" value="0" id="!.$.?" name="t!_$"]+label[for="!.$.?"]
                    
                    .quiz-progress-block>p.task-number>{Задание !:}>span.value[id="!"]{0%}^+div.wrap-task-name>p.task-name^+.quiz-progress-block-type*N>p.name+div.wrap>input.score.score-slider[type="range" min="0" max="B" step="1" value="0" alt="0" id="!.$.?" name="t!_$"]+.score-slider-points.score-slider-points-BT>span.point.point-first{0}+span.point.point-middle{0}+span.point.point-last{B}
                     -->

                    <!--                     ЗАДАНИЕ 1                     -->
                    <div class="quiz-progress-block"> 
                        <div class="task-number">Задание 1:<span class="value" id="1">0%</span></div>

                        <div class="wrap-task-name">
                            <p class="task-name">Простейшие задачи</p>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Вычисления</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.1.30" name="t1_1">
                                <label for="1.1.30"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Округление</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.2.30" name="t1_2">
                                <label for="1.2.30"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Проценты</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.3.30" name="t1_3">
                                <label for="1.3.30"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Проценты и округление</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.4.10" name="t1_4">
                                <label for="1.4.10"></label>
                            </div>
                        </div>

                    </div>

                    <!--                     ЗАДАНИЕ 2                     -->
                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 2:<strong><span class="value" id="2" >0%</span></strong></p>

                        <div class="wrap-task-name">
                            <p class="task-name">Графики и диаграммы</p>
                        </div>
                        
                        <div class="quiz-progress-block-type">
                            <p class="name">Определение величины</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="2.1.80" name="t2_1">
                                <label for="2.1.80"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Вычисление величины</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="2.2.20" name="t2_2">
                                <label for="2.2.20"></label>
                            </div>
                        </div>
                    </div>

                    <!--                     ЗАДАНИЕ 3                     -->
                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 3:<strong><span class="value" id="3" >0%</span></strong></p>

                        <div class="wrap-task-name">
                            <p class="task-name">Клетки и плоскость</p>
                        </div>
                        
                        <div class="quiz-progress-block-type">
                            <p class="name">Многоугольники</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="3.1.50" name="t3_1">
                                <label for="3.1.50"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Координатная плоскость</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="3.2.30" name="t3_2">
                                <label for="3.2.30"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Круг и его элементы</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="3.3.20" name="t3_3">
                                <label for="3.3.20"></label>
                            </div>
                        </div> 
                    </div>

                    <!--                     ЗАДАНИЕ 4                     -->
                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 4:<strong><span class="value" id="4" >0%</span></strong></p>

                        <div class="wrap-task-name">
                            <p class="task-name">Теория вероятности</p>
                        </div>
                        
                        <div class="quiz-progress-block-type">
                            <p class="name">Классические задачи</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="4.1.60" name="t4_1">
                                <label for="4.1.60"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Вероятности событий</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="4.2.40" name="t4_2">
                                <label for="4.2.40"></label>
                            </div>
                        </div>
                    </div>

                    <!--                     ЗАДАНИЕ 5                     -->
                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 5:<strong><span class="value" id="5" >0%</span></strong></p>

                        <div class="wrap-task-name">
                            <p class="task-name">Простейшие уравнения</p>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Иррациональные</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.1.20" name="t5_1">
                                <label for="5.1.20"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Показательные</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.2.20" name="t5_2">
                                <label for="5.2.20"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Логарифмические</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.3.20" name="t5_3">
                                <label for="5.3.20"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Рациональные</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.4.18" name="t5_4">
                                <label for="5.4.18"></label>
                            </div>
                        </div>

                        
                        <div class="quiz-progress-block-type">
                            <p class="name">N - ной степени</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.5.15" name="t5_5">
                                <label for="5.5.15"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Тригонометрические</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.6.7" name="t5_6">
                                <label for="5.6.7"></label>
                            </div>
                        </div>
                    </div>

                    <!--                     ЗАДАНИЕ 6                     -->
                    <div class="quiz-progress-block">
                        <p class="task-number">Задание 6:
                            <span class="value" id="6">0%</span>
                        </p>

                        <div class="wrap-task-name">
                            <p class="task-name">Планиметрия</p>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Треугольник</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.1.47" name="t6_1"><label for="6.1.47"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Вписанная и описанная окружности</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.2.20" name="t6_2"><label for="6.2.20"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Параллелограмм</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.3.13" name="t6_3"><label for="6.3.13"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Трапеция</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.4.10" name="t6_4"><label for="6.4.10"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Окружность</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.5.10" name="t6_5"><label for="6.5.10"></label></div>
                        </div>

                    </div>

                    <!--                     ЗАДАНИЕ 7                    -->
                    <div class="quiz-progress-block">
                        <p class="task-number">Задание 7:
                            <span class="value" id="7">0%</span>
                        </p>
                        <div class="wrap-task-name">
                            <p class="task-name">Производные</p>
                        </div>


                            <div class="quiz-progress-block-type">
                                <p class="name">Геометрический смысл</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.1.45" name="t7_1"><label for="7.1.45"></label></div>
                            </div>

                            <div class="quiz-progress-block-type">
                                <p class="name">Исследование функций</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.2.35" name="t7_2"><label for="7.2.35"></label></div>
                            </div>

                            <div class="quiz-progress-block-type">
                                <p class="name">Физический смысл</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.3.10" name="t7_3"><label for="7.3.10"></label></div>
                            </div>
                            
                            <div class="quiz-progress-block-type">
                                <p class="name">Первообразная</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.4.10" name="t7_4"><label for="7.4.10"></label></div>
                            </div>
                        </div>


                    <!--                     ЗАДАНИЕ 8                    -->
                    <div class="quiz-progress-block quiz-progress-block-wide">
                        <p class="task-number">Задание 8:<span class="value" id="8">0%</span></p>
                        <div class="wrap-task-name">
                            <p class="task-name">Стереометрия</p>
                        </div>

                        <div class="collumn collumn-first">
                            <div class="quiz-progress-block-type">
                                <p class="name">Пирамида</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.1.22" name="t8_1"><label for="8.1.22"></label></div>
                            </div>

                            <div class="quiz-progress-block-type">
                                <p class="name">Призма</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.2.17" name="t8_2"><label for="8.2.17"></label></div>
                            </div>

                            <div class="quiz-progress-block-type">
                                <p class="name">Составной многогранник</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.3.16" name="t8_3"><label for="8.3.16"></label></div>
                            </div>

                            <div class="quiz-progress-block-type">
                                <p class="name">Комбинации тел</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.4.12" name="t8_4"><label for="8.4.12"></label></div>
                            </div>
                        </div>
                        
                        <div class="collumn collumn-second">
                            <div class="quiz-progress-block-type">
                                <p class="name">Прямоугольный параллелепипед</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.5.10" name="t8_5"><label for="8.5.10"></label></div>
                            </div>

                            <div class="quiz-progress-block-type">
                                <p class="name">Конус</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.6.10" name="t8_6"><label for="8.6.10"></label></div>
                            </div>
                            
                            <div class="quiz-progress-block-type">
                                <p class="name">Цилиндр</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.7.6" name="t8_7"><label for="8.7.6"></label></div>
                            </div>
                            
                            <div class="quiz-progress-block-type">
                                <p class="name">Куб</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.8.4" name="t8_8"><label for="8.8.4"></label></div>
                            </div>
                            
                            <div class="quiz-progress-block-type">
                                <p class="name">Шар</p>
                                <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="8.9.3" name="t8_9"><label for="8.9.3"></label></div>
                            </div> 
                        </div>                  
                    </div>

                    <!--                     ЗАДАНИЕ 9                    -->
                    <div class="quiz-progress-block">
                        <p class="task-number">Задание 9:<span class="value" id="9">0%</span></p>
                        <div class="wrap-task-name">
                            <p class="task-name">Преобразования</p>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Тригонометрия</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="9.1.30" name="t9_1"><label for="9.1.30"></label></div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Степени</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="9.2.25" name="t9_2"><label for="9.2.25"></label></div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Алгебраические<br>выражения и дроби </p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="9.3.15" name="t9_3"><label for="9.3.15"></label></div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Иррациональные выражения</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="9.4.15" name="t9_4"><label for="9.4.15"></label></div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Логарифмы</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="9.5.12" name="t9_5"><label for="9.5.12"></label></div>
                        </div>                 
                        
                        <div class="quiz-progress-block-type">
                            <p class="name">Рациональные выражения</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="9.6.3" name="t9_6"><label for="9.6.3"></label></div>
                        </div>
                        
                    </div>

                    <!--                     ЗАДАНИЕ 10                   -->
                    <div class="quiz-progress-block quiz-progress-block-wide">
                        <p class="task-number">Задание 10:<span class="value" id="10">0%</span></p>
                        <div class="wrap-task-name">
                            <p class="task-name">Задачи с прикладным содержанием</p>
                        </div>
                       <div class="collumn collumn-first">
                           <div class="quiz-progress-block-type">
                               <p class="name">Линейные уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.1.21" name="t10_1"><label for="10.1.21"></label></div>
                           </div>
                           <div class="quiz-progress-block-type">
                               <p class="name">Квадратные уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.2.21" name="t10_2"><label for="10.2.21"></label></div>
                           </div>
                           <div class="quiz-progress-block-type">
                               <p class="name">Рациональные уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.3.19" name="t10_3"><label for="10.3.19"></label></div>
                           </div>
                           <div class="quiz-progress-block-type">
                               <p class="name">Иррациональные уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.3.13" name="t10_4"><label for="10.3.13"></label></div>
                           </div>
                       </div>
                       <div class="collumn">
                           <div class="quiz-progress-block-type">
                               <p class="name">Логарифм-е уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.4.9" name="t10_5"><label for="10.4.9"></label></div>
                           </div>
                           <div class="quiz-progress-block-type">
                               <p class="name">Показательные уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.5.9" name="t10_6"><label for="10.5.9"></label></div>
                           </div>
                           <div class="quiz-progress-block-type">
                               <p class="name">Тригоном-е уравнения и неравенства</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.6.5" name="t10_7"><label for="10.6.5"></label></div>
                           </div>
                           <div class="quiz-progress-block-type">
                               <p class="name">Расчет рейтинга</p>
                               <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="10.7.3" name="t10_8"><label for="10.7.3"></label></div>
                           </div>
                       </div>
                    </div>

                    <!--                     ЗАДАНИЕ 11                   -->
                    <div class="quiz-progress-block">
                        <p class="task-number">Задание 11:<span class="value" id="11">0%</span></p>
                        <div class="wrap-task-name">
                            <p class="task-name">Текстовые задачи</p>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">На совм.  работу</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="11.1.22" name="t11_1"><label for="11.1.22"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Движение по прямой</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="11.2.22" name="t11_2"><label for="11.2.22"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Движение по воде</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="11.3.18" name="t11_3"><label for="11.3.18"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Проценты, сплавы, смеси</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="11.4.18" name="t11_4"><label for="11.4.18"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Прогресии</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="11.5.12" name="t11_5"><label for="11.5.12"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Движение по окр.</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="11.6.8" name="t11_6"><label for="11.6.8"></label></div>
                        </div>
                    </div>

                    <!--                     ЗАДАНИЕ 12                   -->
                    <div class="quiz-progress-block" style="margin-bottom: 7rem;">
                        <p class="task-number">Задание 12:<span class="value" id="12">0%</span></p>
                        <div class="wrap-task-name">
                            <p class="task-name">Исследование функций</p>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Степенные и иррациональные</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="12.1.39" name="t12_1"><label for="12.1.39"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Произведения</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="12.2.20" name="t12_2"><label for="12.2.20"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Тригонометрические</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="12.3.19" name="t12_3"><label for="12.3.19"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Логарифмические</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="12.4.8" name="t12_4"><label for="12.4.8"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Показательные</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="12.5.7" name="t12_5"><label for="12.5.7"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Частное</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="12.6.7" name="t12_6"><label for="12.6.7"></label></div>
                        </div>
                    </div>
                    
                    <div class="second-part">


                    <!--                     ЗАДАНИЕ 13                   -->
                    <div class="quiz-progress-block quiz-progress-block-slider">
                        <p class="task-number">Задание 13:<span class="value" id="13">0%</span></p>
                            <div class="wrap-task-name">
                                <p class="task-name">Уравнения</p>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Тригонометрические</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="13.1.60" name="t13_1">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Смешанного типа</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="13.2.27" name="t13_2">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Иррациональные</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="13.3.5" name="t13_3">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Логарифмические</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="13.4.3" name="t13_4">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Показательные</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="13.5.3" name="t13_5">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Рациональные</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="13.6.2" name="t13_6">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <!--                     ЗАДАНИЕ 14                   -->
                    <div class="quiz-progress-block quiz-progress-block-slider quiz-progress-block-slider-wide">
                        <p class="task-number">Задание 14:<span class="value" id="14">0%</span> </p>
                        <div class="wrap-task-name">
                            <p class="task-name">Стереометрия</p>
                        </div>
                        <div class="collumn collumn-first">
                            <div class="quiz-progress-block-type">
                                <p class="name">Сечения многогр-ов</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.1.19" name="t14_1">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Угол между плоскостями</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.2.14" name="t14_2">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Объемы многогр-ков</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.3.14" name="t14_3">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Круглые тела</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.4.14" name="t14_4">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collumn"><div class="quiz-progress-block-type">
                                <p class="name">Расстояние от точки до прямой и до плоскости</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.5.10" name="t14_5">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Расстояние между прямыми и плоскостями</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.6.10" name="t14_6">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Угол между скрещ-ся прямыми</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.7.10" name="t14_7">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Угол между прямой и плоскостью</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="14.8.9" name="t14_8">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>  </div>
                    </div>


                    <!--                     ЗАДАНИЕ 15                   -->
                    <div class="quiz-progress-block quiz-progress-block-slider">
                        <p class="task-number">Задание 15:<span class="value" id="15">0%</span>
                            <div class="wrap-task-name">
                                <p class="task-name">Неравенства</p>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Логарифмические</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="15.1.43" name="t15_1">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Показательные</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="15.2.26" name="t15_2">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Смешанные</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="15.3.17" name="t15_3">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Рациональные</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="15.4.8" name="t15_4">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">С модулем</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="15.5.4" name="t15_5">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">С радикалами</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="2" step="1" value="0" alt="0" id="15.6.2" name="t15_6">
                                    <div class="score-slider-points score-slider-points-two">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-last">2</span>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>


                    <div class="quiz-progress-block quiz-progress-block-slider">
                        <p class="task-number">Задание 16:<span class="value" id="16">0%</span></p>
                        <div class="wrap-task-name">
                            <p class="task-name">Планиметрия</p>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Многоугольники</p>
                            <div class="wrap">
                                <input type="range" class="score score-slider" min="0" max="3" step="1" value="0" alt="0" id="16.1.30" name="t16_1">
                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Окружности и треугольники </p>
                            <div class="wrap">
                                <input type="range" class="score score-slider" min="0" max="3" step="1" value="0" alt="0" id="16.2.25" name="t16_2">
                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Окружности и четырехугольники</p>
                            <div class="wrap">
                                <input type="range" class="score score-slider" min="0" max="3" step="1" value="0" alt="0" id="16.3.25" name="t16_3">
                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Окружности и их системы </p>
                            <div class="wrap">
                                <input type="range" class="score score-slider" min="0" max="3" step="1" value="0" alt="0" id="16.4.20" name="t16_4">
                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                     ЗАДАНИЕ 17                   -->
                    <div class="quiz-progress-block quiz-progress-block-slider"> 
                        <p class="task-number">Задание 17:<strong><span class="value" id="17">0%</span></strong></p>  
                            <div class="wrap-task-name">
                                <p class="task-name">Экономика и финансы</p>
                            </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Вклады и кредиты</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="3" step="1" value="0" alt="0" id="17.1.70" name="t17_1">

                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>

                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Оптимизация</p>
                            <div class="wrap">
                                <input  class="score score-slider" type="range" min="0" max="3" step="1" value="0" alt="0" id="17.2.30" name="t17_2">
                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>

                            </div>
                        </div>
                    </div>       


                    <!--                     ЗАДАНИЕ 18                   -->
                    <div class="quiz-progress-block quiz-progress-block-slider quiz-progress-block-slider-wide">
                        <p class="task-number">Задание 18:<span class="value" id="18">0%</span></p>
                            <div class="wrap-task-name">
                                <p class="task-name">Задачи с параметром</p>
                            </div>
                        
                        <div class="collumn collumn-first">
                            <div class="quiz-progress-block-type">
                                <p class="name">Уравнения с параметром</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.1.10" name="t18_1">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Системы с параметром</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.2.10" name="t18_2">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Неравенства с параметром</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.3.10" name="t18_3">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">На аналитическое решение</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.4.10" name="t18_4">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Использование монотонности, оценок</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.5.10" name="t18_5">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collumn">
                            <div class="quiz-progress-block-type">
                                <p class="name">Использование симметрий</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.6.10" name="t18_6">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Координаты (x, a)</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.7.10" name="t18_7">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Уравнение окружности</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.8.10" name="t18_8">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Функции, зависящие от параметра</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.9.10" name="t18_9">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-progress-block-type">
                                <p class="name">Расположение корней квадратного трехчлена</p>
                                <div class="wrap">
                                    <input type="range" class="score score-slider" min="0" max="4" step="1" value="0" alt="0" id="18.10.10" name="t18_10">
                                    <div class="score-slider-points score-slider-points-four">
                                        <span class="point point-first">0</span>
                                        <span class="point point-middle">1</span>
                                        <span class="point point-middle">2</span>
                                        <span class="point point-middle">3</span>
                                        <span class="point point-last">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <!--                     ЗАДАНИЕ 19                   -->
                    <div class="quiz-progress-block quiz-progress-block-slider"> 
                        <p class="task-number">Задание 19:<strong><span class="value" id="19">0%</span></strong></p>   

                        <div class="wrap-task-name">
                            <p class="task-name">Олимпиадная задача</p>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Числа и их свойства</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="4" step="1" value="0" alt="0" id="19.1.40" name="t19_1">

                                <div class="score-slider-points score-slider-points-four">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-middle">3</span>
                                    <span class="point point-last">4</span>
                                </div>

                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Сюжетные задачи</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="4" step="1" value="0" alt="0" id="19.1.25" name="t19_2">

                                <div class="score-slider-points score-slider-points-four">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-middle">3</span>
                                    <span class="point point-last">4</span>
                                </div>

                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Последовательности и прогрессии</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="4" step="1" value="0" alt="0" id="19.1.20" name="t19_3">

                                <div class="score-slider-points score-slider-points-four">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-middle">3</span>
                                    <span class="point point-last">4</span>
                                </div>

                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Числовые наборы на карточках и досках</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="4" step="1" value="0" alt="0" id="19.1.15" name="t19_4">
 
                                <div class="score-slider-points score-slider-points-four">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-middle">3</span>
                                    <span class="point point-last">4</span>
                                </div>

                            </div>
                        </div>

                    </div>
        
                
                    <button class="button" type="submit">Подтвердить</button>
                </form>

                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $('.wrap-task-name').click(function(event)
    {
        $(this).parent().find('input[type="checkbox"]').trigger('click');
        

        var range = $(this).parent().find('input[type="range"]');
        let range_val = range.val();

        if (range_val == range.attr('max')){
            range.val(0);
        } else{
            range.val(parseInt(range_val)+1);
        }
        
        range.trigger('click');
    });
</script>

</body>
</html>