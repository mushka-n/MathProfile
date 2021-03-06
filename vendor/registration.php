<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../profile/profile.php');
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MathProfile</title>

    <!-- Favicon -->
    <link rel="icon" href="../imgs/icons/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/style.css" type="text/css" />


</head>
<body style="background-color: #b6c0bb">

    <!-- Форма регистрации -->
    <div class="authentification registration">
        <form action="signup.php" method="post" enctype="multipart/form-data">
            <div class="input-block">
                <label>ФИО</label>
                <input type="text" name="full_name" placeholder="Введите свое полное имя">
            </div>
            <div class="input-block">
                <label>E-mail</label>
                <input type="email" name="email" placeholder="Введите свой e-mail">
            </div>
            <div class="input-block">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль">
            </div>
            <div class="input-block">
                <label>Подтверждение пароля</label>
                <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            </div>
            
           
            
            <button class="button" type="submit">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a href="authorisation.php">авторизируйтесь</a>!
            </p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>


   <footer >
       <div class="footer-block"  >
           <a href="" style="color:#212121">© 2019-2020  Мушка Никита</a>
       </div>
       <div class="footer-block">
           <a href="../footer/privacy.html"  style="color:#212121">Политика конфиденциальности</a>
       </div>
       <div class="footer-block">
           <a href="../footer/termsofuse.html"  style="color:#212121">Пользовательское соглашение</a>
       </div>
   </footer>
    

</body>
</html>