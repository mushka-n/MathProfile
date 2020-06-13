<?php
session_start();

if ($_SESSION['user']['quized']) {
    header('Location: ../profileprofile.php');
}

?>

<!doctype html>
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

</head>
<body>

<!-- Опрос для начальных резултатов -->

<div class="quiz-header">
    <h1>Пожалуйста, пройдите короткий тест который поможет нам подбирать задания способствующие вашей подготовке</h1>
</div>

<div class="quiz quiz-progress quiz-progress-baza ">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header">
                <h2>Как бы вы оценили свой прогресс подготовки по каждому заданию по шкале от 1 до 100 на данный момент?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="quiz-baza-results.php" method="POST">
                    <!-- .quiz-progress-block*20>p>{Задание $:}>strong>span[class="value" id="v$"]{0}^^^+input[input type="range" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t$"] -->
                    <div class="quiz-progress-block">
                        <p>Задание 1:&nbsp&nbsp<strong><span class="value" id="v1">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t1" name="t1">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 2:&nbsp&nbsp<strong><span class="value" id="v2">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t2" name="t2">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 3:&nbsp&nbsp<strong><span class="value" id="v3">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t3" name="t3">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 4:&nbsp&nbsp<strong><span class="value" id="v4">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t4" name="t4">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 5:&nbsp&nbsp<strong><span class="value" id="v5">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t5" name="t5">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 6:&nbsp&nbsp<strong><span class="value" id="v6">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t6" name="t6">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 7:&nbsp&nbsp<strong><span class="value" id="v7"> 0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t7" name="t7">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 8:&nbsp&nbsp<strong><span class="value" id="v8">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t8" name="t8">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 9:&nbsp&nbsp<strong><span class="value" id="v9">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t9" name="t9">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 10:<strong><span class="value" id="v10">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t10" name="t10">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 11:<strong><span class="value" id="v11">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t11" name="t11">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 12:<strong><span class="value" id="v12">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t12" name="t12">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 13:<strong><span class="value" id="v13">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t13" name="t13">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 14:<strong><span class="value" id="v14">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t14" name="t14">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 15:<strong><span class="value" id="v15">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t15" name="t15">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 16:<strong><span class="value" id="v16">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t16" name="t16">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 17:<strong><span class="value" id="v17">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t17" name="t17">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 18:<strong><span class="value" id="v18">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t18" name="t18">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 19:<strong><span class="value" id="v19">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t19" name="t19">
                    </div>
                    <div class="quiz-progress-block">
                        <p>Задание 20:<strong><span class="value" id="v20">0</span></strong></p>
                        <input type="range" input="" min="0" max="100" step="5" value="0" class="quiz-progress-block-slider" id="t20" name="t20">
                    </div>

                    <button class="button" type="submit">Подтвердить</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>


    $('.quiz-progress-block-slider').click(function(e){
        for (let i=1; i<21;i++){
            var slider = document.getElementById("t"+i);
            var output = document.getElementById("v"+i);
            output.innerHTML = slider.value;
        }
    });

</script>

</body>
</html>