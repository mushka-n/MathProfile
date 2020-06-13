<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile/profile.php');
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>MLS-exams</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Форма авторизации -->
    <div class="authentification">
        <form class action="vendor/signin.php" method="POST" enctype="multipart/from-data">

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
                У вас нет аккаунта? - <a href="vendor/registration.php">зарегистрируйтесь</a>!
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