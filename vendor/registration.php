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
    <title>Math Profile</title>
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
                <input type="text" name="email" placeholder="Введите свой e-mail">
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
                У вас уже есть аккаунт? - <a href="../index.php">авторизируйтесь</a>!
            </p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
    

</body>
</html>