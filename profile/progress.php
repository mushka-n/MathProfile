<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}

require_once '../vendor/connect.php';

/*$progress = mysqli_query($connect,"SELECT * FROM `users` WHERE `id` ==  ") or die("Ошибка " . mysqli_error($link));*/ 
if($result)

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
</head>
<body>



    <div class="menu">
        <div class="container">
            <div class="row">
                <span class="menu-logo menu-block"><a href="profile.php"><img src="../imgs/icons/favicon.png" alt=""><span>MLS<br>EXAMS</span></a></span>
                <span class="menu-user menu-block" ><?= $_SESSION['user']['full_name'] ?></span>
                <span class="menu-logout menu-block"><a href="../vendor/logout.php" style="color: #fff">Выход</a></span>
            </div>
        </div>
    </div>

    <!-- Профиль -->

    <div class="progress">
        <div class="container">
            <div class="row">
                
                <div class="col-12 section-header menu-skipper" >
                    <h2>Общий прогресс подготовки:</h2>
                    <h3>123</h3>
                </div>
            
            </div>

            <div class="row">


                <div class="col-6 progress-block">
                    <p class="result">Задание 1: 0%</p>
                    <p class="sub-result">Вычисления<span class="sub-result-value">0</span>%</p>
                    <p class="sub-result">Округление с<br>недостатком<span class="sub-result-value">0</span>%</p>
                    <p class="sub-result">Округление с<br>избытком<span class="sub-result-value">0</span>%</p>
                    <p class="sub-result">Проценты<span class="sub-result-value">0</span>%</p>
                    <p class="sub-result">Проценты и округление<span class="sub-result-value">0</span>%</p>
                </div>


                </div>
            </div>
        </div>
    </div>


    
</body>
</html>