<?php
session_start();

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

</head>
<body>

<!-- Опрос для начальных резултатов -->

<div class="quiz-header">
    <h1>Пожалуйста, пройдите короткий тест который поможет нам<br>подбирать задания способствующие  вашей подготовке</h1>
</div>

<div class="quiz quiz-subject">
    <div class="container">
        <div class="row">
            <div class="col-12 section-header">
                <h2>Математику какой направленноси вы хотите сдавать на ЕГЭ?</h2>
            </div>
        </div>
        <div class="row">
            <form class="col-lg-6 col-12" action="quiz-baza.php">
                <div  type='submit'><button class="button">База</button></div>
            </form>
            <form class="col-lg-6 col-12" action="quiz-profil.php">
                <div  type='submit'><button class="button">Профиль</button></div>
            </form>
        </div>
    </div>
</div>

</body>
</html>