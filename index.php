<?php

session_start();

if (!$_SESSION['user']) {
    $loginout = 'Войти';
} else {
    $loginout = 'Выход';
}

$_SESSION['test'] = ["done" => 0];
if(!isset($_SESSION["theme"])) $_SESSION["theme"] = "light";

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

    <!--jQuerry -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="css/style.css">
    
    

    <script src="js/scripts.js"></script>
</head>
<body>
    
    

    <div class="menu" id="menu">

        <div class="container">

            <div class="row">

                <span class="menu-logo menu-block"><a href="" class="menu-block-a"><img src="../imgs/icons/favicon.png" alt="" id="menu-logo"><span>Math<br>Profile</span></a></span>

                <span class="menu-user menu-block" ><?= $_SESSION['user']['full_name'] ?></span>

                <span class="menu-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a" id="loginout"><?php echo $loginout?></a></span>

            </div>
        </div>
        <div class="theme-switch" id="theme-switch"></div>
    </div>

    <!-- Профиль -->

    <div class="profile" id="profile">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="options">
                        <div class="options-progress">
                            <form class="margin if_auth" action="functional/progress.php">
                                <button class="button for_auth" type="submit">мой прогресс</button>
                            </form>
                            <!-- <form action="">
                                <button class="button for_auth" type="submit">внести изменения</button>
                            </form> -->
                        </div>
                        <div class="options-functional">
                            <form action="theory/theory.php">
                                <button class="button" type="submit">теория</button>
                            </form>
                            <form action="tests/choose_test.php">
                                <button class="button" type="submit">Практика</button>
                            </form>
                            <!-- <form action="">
                                <button class="button" id="button" type="submit">печатные материалы</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>



        

<footer>
    <div class="footer-block">
        <a href="">© 2019-2020  Мушка Никита</a>
    </div>
    <div class="footer-block">
        <a href="footer/privacy.html">Политика конфиденциальности</a>
    </div>
    <div class="footer-block">
        <a href="footer/termsofuse.html">Пользовательское соглашение</a>
    </div>
</footer>





    
</body>
</html>