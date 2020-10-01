<?php
    session_start();

    if (!$_SESSION['user']) {
        $loginout = 'Войти';
    } else {
        $loginout = 'Выход';
    }


    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
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

    <!--jQuerry -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

   <link rel="stylesheet" type="text/css" href="../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
   <link rel="stylesheet" href="../css/style.css">
    
    <!-- Скрипты -->
    <script src="../js/scripts.js"> </script>
</head>
<body>
    
   <div class="menu" id="menu">
   
       <div class="container">
   
           <div class="row">
   
               <span class="menu-logo menu-block"><a href="../index.php" class="menu-block-a"><img src="../imgs/icons/favicon.png" alt="" id="menu-logo"><span>Math<br>Profile</span></a></span>
   
               <span class="menu-user menu-block" ><?= $_SESSION['user']['full_name'] ?></span>
   
               <span class="menu-login-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a" id='loginout'><?php echo $loginout ?></a></span>
   
           </div>
       </div>
       <div class="theme-switch" id="theme-switch"></div>
   </div> 


    <div class="menu-skipper"></div>

    <div class="choose-test">

      <div class="choose-test-block">
            <div class="choose-test-header">Случайный вариант</div>
            <div class="choose-test-discr"><p>Стандартный тест из 19 случайных заданий</p></div>
            
           <form action="rand_test.php">
               <button class="button">Перейти к выполнению</button>
           </form>
           <!-- <div class="choose-test-recom choose-test-recom-green">Рекомендовано для любых пользователей</div> -->
        </div>

        <div class="choose-test-block">
            <div class="choose-test-header">Персональный вариант</div>
            <div class="choose-test-recom choose-test-recom-green">Рекомендовано для любых пользователей</div>
            <div class="choose-test-discr"><p>Алгоритм подбирает 19 заданий того подтипа и сложности, что соответствуют Вашему прогрессу</p></div>
            
           <form action="pr_test.php" class="if_auth">
               <button class="button for_auth ">Перейти к выполнению</button>
           </form>
           
        </div>

        
    </div>

    <div class="choose-test">


      <div class="choose-test-block">
            <div class="choose-test-header">Дзен</div>
            <div class="choose-test-recom choose-test-recom-green">Рекомендовано для любых пользователей</div>
            <div class="choose-test-discr"><p>Никаких таймеров, никаких отметок - решайте задания в удобном Вам темпе и не думайте о своей статистике - в режиме "Дзен" ей навредить невозможно</p></div>
            
           <form action="dzen.php">
               <button class="button">Перейти к выполнению</button>
           </form>
           <!-- <div class="choose-test-recom choose-test-recom-green">Рекомендовано для любых пользователей</div> -->
        </div>

      <div class="choose-test-block">
            <div class="choose-test-header">Блиц</div>
            <div class="choose-test-recom choose-test-recom-yellow">Рекомендовано для подготовленных пользователей</div>
            <div class="choose-test-discr"><p>Бесконечная череда случайных заданий из первой части, на решение каждого из которых дается лишь 45 секунд</p></div>
            
           <form action="blitz.php">
               <button class="button">Перейти к выполнению</button>
           </form>
           <!-- <div class="choose-test-recom choose-test-recom-green">Рекомендовано для любых пользователей</div> -->
        </div>



        
    </div>



    <footer>
        <div class="footer-block">
            <a href="">© 2019-2020  Мушка Никита</a>
        </div>
        <div class="footer-block">
            <a href="../footer/privacy.html">Политика конфиденциальности</a>
        </div>
        <div class="footer-block">
            <a href="../footer/termsofuse.html">Пользовательское соглашение</a>
        </div>
    </footer>

<script>


    if ('<?php echo $loginout?>' == 'Войти'){
        $('#loginout').attr('href','../vendor/authorisation.php')
        $('.for_auth').css("opacity","0.5");
        $('.if_auth').attr('action','../vendor/authorisation.php')
    }


</script>

    
</body>
</html>