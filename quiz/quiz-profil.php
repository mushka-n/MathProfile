<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MLS-exams</title>

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

</head>
<body>

<!-- Опрос для начальных резултатов -->

<div class="quiz-header">
    <h1>Пожалуйста, пройдите короткий тест который поможет нам<br>подбирать задания способствующие вашей подготовке</h1>
</div>

<div class="quiz quiz-progress quiz-progress-profil ">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header">
                <h2>Отметьте самостоятельно, какой балл вы в среднем получаете за каждый тип заданий. <br><br>Если вы желаете сразу приступить к процессу обучения, то нажмите <a href="../profile/profile.php" style="color: #fff">сюда</a></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="quiz-profil-results.php" method="POST">

                    <!-- .quiz-progress-block>p.task-number{Задание !:}>span.value[id="!"]{0%}^+.wrap-task-name>p.task-name^+.quiz-progress-block-type>p.name+.wrap>input.score.score-checkbox[type="checkbox" value="0" id="!.$.?" name="t!_$"]+label[for="!.$.?"]
                    
                    .quiz-progress-block*3>.task-number{Задание $:}>.value[id="$"]{0%}^+p.task-name{ТЕМА ЗАДАНИЯ}+.quiz-progress-block-type*3>p.name{ТИП ЗАДАНИЯ}+.wrap>input.score.score[type="checkbox" id="ЗАДАНИЕ.$.ШАНС"]+label[for="ЗАДАНИЕ.$.ШАНС"]
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
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.1.25" name="t1_1">
                                <label for="1.1.25"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Округление</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.2.25" name="t1_2">
                                <label for="1.2.25"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Проценты</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.3.25" name="t1_3">
                                <label for="1.3.25"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Проценты и округление</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="1.4.25" name="t1_4">
                                <label for="1.4.25"></label>
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
                                <input class="score score-checkbox" type="checkbox" value="0" id="2.1.50" name="t2_1">
                                <label for="2.1.50"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Вычисление величины</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="2.2.50" name="t2_2">
                                <label for="2.2.50"></label>
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
                                <input class="score score-checkbox" type="checkbox" value="0" id="3.1.33" name="t3_1">
                                <label for="3.1.33"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Круг и его элементы</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="3.2.33" name="t3_2">
                                <label for="3.2.33"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Координатная плоскость</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="3.3.34" name="t3_3">
                                <label for="3.3.34"></label>
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
                            <p class="name">N - ной степени</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.1.18" name="t5_1">
                                <label for="5.1.18"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Рациональные</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.2.18" name="t5_2">
                                <label for="5.2.18"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Иррациональные</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.3.18" name="t5_3">
                                <label for="5.3.18"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Показательные</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.4.18" name="t5_4">
                                <label for="5.4.18"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Логарифм - е</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.5.18" name="t5_5">
                                <label for="5.5.18"></label>
                            </div>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Тригоном - е</p>
                            <div class="wrap">
                                <input class="score score-checkbox" type="checkbox" value="0" id="5.6.10" name="t5_6">
                                <label for="5.6.10"></label>
                            </div>
                        </div>
                    </div>

                     <!--                    ЗАДАНИЕ 6                     -->
                    <div class="quiz-progress-block">
                        <p class="task-number">Задание 6:
                            <span class="value" id="6">0%</span>
                        </p>

                        <div class="wrap-task-name">
                            <p class="task-name">Планиметрия</p>
                        </div>

                        <div class="quiz-progress-block-type">
                            <p class="name">Треугольник</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.1.35" name="t6_1"><label for="6.1.35"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Параллелограмм</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.2.15" name="t6_2"><label for="6.2.15"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Трапеция</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.3.15" name="t6_3"><label for="6.3.15"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Окружность</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.4.15" name="t6_4"><label for="6.4.15"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Вписанная и описанная окружности</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="6.5.20" name="t6_5"><label for="6.5.20"></label></div>
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
                            <p class="name">Физический смысл</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.1.10" name="t7_1"><label for="7.1.10"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Геометрический смысл</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.2.45" name="t7_2"><label for="7.2.45"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Исследование функций</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.3.35" name="t7_3"><label for="7.3.35"></label></div>
                        </div>
                        <div class="quiz-progress-block-type">
                            <p class="name">Первообразная</p>
                            <div class="wrap"><input type="checkbox" class="score score-checkbox" value="0" id="7.4.10" name="t7_4"><label for="7.4.10"></label></div>
                        </div>
                    </div>



                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 12:<strong><span class="value" id="12">0%</span></strong></p>

                        <div class="quiz-progress-block-type">
                            <p class="name">Lorem ipsum.</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="2" step="1" value="0" alt="0" id="12.1.100" name="t3_1">

                                <div class="score-slider-points score-slider-points-two">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-last">2</span>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 17:<strong><span class="value" id="17">0%</span></strong></p>  

                        <div class="quiz-progress-block-type">
                            <p class="name">Вклады и кредиты</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="3" step="1" value="0" alt="0" id="17.1.80">

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
                                <input  class="score score-slider" type="range" min="0" max="3" step="1" value="0" alt="0" id="17.2.20">
                                <div class="score-slider-points score-slider-points-three">
                                    <span class="point point-first">0</span>
                                    <span class="point point-middle">1</span>
                                    <span class="point point-middle">2</span>
                                    <span class="point point-last">3</span>
                                </div>

                            </div>
                        </div>
                    </div>       

                    <div class="quiz-progress-block"> 
                        <p class="task-number">Задание 19:<strong><span class="value" id="19">0%</span></strong></p>   

                        <div class="quiz-progress-block-type">
                            <p class="name">Lorem ipsum dolor sit amet.</p>
                            <div class="wrap">

                                <input  class="score score-slider" type="range" min="0" max="4" step="1" value="0" alt="0" id="19.1.100">

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

</body>
</html>