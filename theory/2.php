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

    <!-- MathJax -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

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

    <div class="theory">
    	<div class="container">

        <div class="theory-header theory-header-main">Задание 2</div>

        <p>Является, по мнению многих, наипростейшим заданием во всем экзамене. Для успешного выполнения все что вам потребуется - понимание графика и умение с таковым работать. Теории на данное задание как таковой нет, формул тоже. Все ограничивается математикой средней школы, а основные ошибки допускаются из-за невнимательности. Главное при выполнении задания №2 - не недооценивать его простоту и с ответственностью относиться к чтению графика.</p>


        <p class="theory-header">Примеры</p>

        <div class="example">
          <img src="pics/20.jpg" alt="" class="theory-image-example">
          <p>На графике дана зависимость высоты тела над поверхностью земли от времени. По оси абсцисс отложено время в минутах, по оси ординат – высота в метрах. Определите высоту, на которой находилось тело через 7 минут после начала движения.</p>
          <div class="example-solution-header">Решение:</div>
          <p>1) На горизонтальной оси находим точку, соответствующую 7-ми минутам.</p>
          <img src="pics/21.jpg" alt="" class="theory-image">
          <p>2) От найденной точки вверх проводим вертикальную прямую. Находим точку пересечения прямой с графиком.</p>
          <img src="pics/22.jpg" alt="" class="theory-image">
          <p>3) Проводим горизонтальную прямую к оси ординат.</p>
          <p>4) Находим точку пересечения прямой с осью ординат.</p>
          <img src="pics/23.jpg" alt="" class="theory-image">
          <p>5) Полученная точка находится посередине между отметками 15м и 20м. Найдем ее значение (15+20):2=17,5</p>
          <div class="example-answer">Ответ: 17.5</div>
        </div>


                <div class="example">
          <img src="pics/24.jpg" alt="" class="theory-image-example">
          <p>В помещении имеется кондиционер с датчиком температуры воздуха. Зависимость температуры воздуха в помещении с кондиционером от времени показана на графике. Температура указана в градусах Цельсия. Кондиционер включается, когда температура воздуха превышает максимально допустимое значение, и выключается, когда воздух охлаждается до необходимой температуры.  Определите по графику, сколько минут был отключен кондиционер.</p>
          <div class="example-solution-header">Решение:</div>
          <p>1) Когда кондиционер отключен, температура воздуха повышается. График возрастает.</p>

          <p>2) Находим на графике возрастающий участок.</p>

          <img src="pics/25.jpg" alt="" class="theory-image">
          <p>3) Из крайних точек этого отрезка проводим вертикальные прямые на горизонтальную ось и находим моменты включения (6 минут) и выключения (9 минут) кондиционера.</p>
          
          <img src="pics/26.jpg" alt="" class="theory-image">
          <p>4) Находим время работы кондиционера: 9-6=3 минуты.</p>
          <div class="example-answer">Ответ: 3</div>
        </div>

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
    
</body>
</html>