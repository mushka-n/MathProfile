<?php 

/*Сессия для вывода сообщений*/
session_start();

/*Присоединение базы данных 'mathege'*/
require_once 'connect.php'; 

/*Создание переменных*/
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` 
	WHERE `email` = '$email'");

/*Проверка на совпадение паролей*/
if ($password !== $password_confirm){
	$_SESSION['message'] = 'Пароли не совпадают';
    header('Location: registration.php');


/*Проверка на заполнение формы*/
} elseif ($email === '' || $password === '' || $full_name === '') {
	$_SESSION['message'] = 'Пожалуйста,<br>заполните форму целиком';
    header('Location: registration.php');


/*Проверка на существование аккаунта*/

} elseif (mysqli_num_rows($check_user)>0) {
	$_SESSION['message'] = 'Аккаунт с таким почтовым адресом уже существует';
    header('Location: registration.php');


} else {

    /*Хэштрование пароля*/
	$password = md5($password);

	/*Отправка данных в базу*/
	mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `full_name`, `password`,`result`) VALUES (NULL, '$email', '$full_name', '$password', NULL)");
	$_SESSION['message-good'] = 'Регистрация прошла успешно!';

	/*Возвращение к индексной странице*/
	header('Location: ../index.php');
}

?>
