<?php

    session_start();

    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
    } 

    if (!$_SESSION['user']) {
        $loginout = 'Войти';
    } else {
        $loginout = 'Выход';
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

    <div class="choose-theory">

        <form action="1.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 1</button></form>
        <form action="2.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 2</button></form>
        <form action="3.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 3</button></form>
        <form action="4.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 4</button></form>
        <form action="5.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 5</button></form>
        <form action="6.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 6</button></form>
        <form action="7.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 7</button></form>
        <form action="8.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 8</button></form>
        <form action="9.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 9</button></form>
        <form action="10.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 10</button></form>
        <form action="11.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 11</button></form>
        <form action="12.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 12</button></form>
        <form action="13.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 13</button></form>
        <form action="14.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 14</button></form>
        <form action="15.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 15</button></form>
        <form action="16.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 16</button></form>
        <form action="17.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 17</button></form>
        <form action="18.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 18</button></form>
        <form action="19.php" class="choose-theory-block"><button type="submit" class="choose-theory-header">Задание 19</button></form>
    </div>



<script>
    $(document).ready(function(){

    });
</script>

    
</body>
</html>