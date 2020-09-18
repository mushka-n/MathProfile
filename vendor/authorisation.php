<?php
session_start();

if ($_SESSION['user']) {
    header('Location: ../index.php');
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Math Profile</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body style="background-color: #b6c0bb">

<!-- Форма авторизации -->
    <div class="authentification">
        <form class action="signin.php" method="POST" enctype="multipart/from-data">

            <div class="input-block">
                <label>E-mail</label>
                <input type="text" name="email" placeholder="Введите свой E-mail">
            </div>

            <div class="input-block">
                <label>Пароль</label>
                <input type="text" name="password" placeholder="Введите свой пароль">
            </div>
                                        
            <button class="button" type="submit">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="registration.php">зарегистрируйтесь</a>!
            </p>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);

                if ($_SESSION['message-good']) {
                    echo '<p class="msg msg-good"> ' . $_SESSION['message-good'] . ' </p>';
                }
                unset($_SESSION['message-good']);
            ?>
        </form>
    </div>

</body>
</html>