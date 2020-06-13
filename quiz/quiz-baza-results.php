<?php
session_start();

print_r($_POST);

/*Присоединение базы данных 'mathege'*/
include_once '../vendor/connect.php' ;

$id = $_SESSION['user']['id'];
$t1 = $_POST[t1];
$t2 = $_POST[t2];
$t3 = $_POST[t3];
$t4 = $_POST[t4];
$t5 = $_POST[t5];
$t6 = $_POST[t6];
$t7 = $_POST[t7];
$t8 = $_POST[t8];
$t9 = $_POST[t9];
$t10 = $_POST[t10];
$t11 = $_POST[t11];
$t12 = $_POST[t12];
$t13 = $_POST[t13];
$t14 = $_POST[t14];
$t15 = $_POST[t15];
$t16 = $_POST[t16];
$t17 = $_POST[t17];
$t18 = $_POST[t18];
$t19 = $_POST[t19];
$t20 = $_POST[t20];

$result = $t1/100+$t2/100+$t3/100+$t4/100+$t5/100+$t6/100+$t7/100+$t8/100+$t9/100+$t10/100+$t11/100+$t12/100+$t13/100+$t14/100+$t15/100+$t16/100+$t17/100+$t18/100+$t19/100+$t20/100;

$check_user = mysqli_query($connect, "SELECT * FROM `progress-baza`
	WHERE `id` = '$id' ");

if (mysqli_num_rows($check_user)===0){

	mysqli_query($connect, "INSERT INTO `progress-baza` (`id`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `t11`, `t12`, `t13`, `t14`, `t15`, `t16`, `t17`, `t18`, `t19`, `t20`, `result`) VALUES ('$id', '$t1', '$t2', '$t3','$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$t10', '$t11', '$t12', '$t13', '$t14', '$t15', '$t16', '$t17', '$t18', '$t19', '$t20','$result')");

}

header ("Location: ../profile/profile.php");

?>