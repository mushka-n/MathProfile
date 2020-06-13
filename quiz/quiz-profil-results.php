<?php

session_start();

print_r($_POST);

/*Присоединение базы данных 'mathege'*/
include_once '../vendor/connect.php';

$id = $_SESSION['user']['id'];

if (!$_POST[t1_1]) $t1_1 = 0;
if (!$_POST[t1_2]) $t1_2 = 0;
if (!$_POST[t1_3]) $t1_3 = 0;
if (!$_POST[t1_4]) $t1_4 = 0;

if (!$_POST[t2_1]) $t2_1 = 0;
if (!$_POST[t2_2]) $t2_2 = 0;

print_r($t1_2);
print_r($t1_4);
print_r($t2_2);

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

$check_user = mysqli_query($connect, "SELECT * FROM `progress-profil`
	WHERE `id` = '$id' ");

$result = $t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10+$t11+$t12+$t13+$t14+$t15+$t16+$t17+$t18+$t19;


    if ($result ===  1 ) $result = 5;
elseif ($result ===  2 ) $result = 9;
elseif ($result ===  3 ) $result = 14;
elseif ($result ===  4 ) $result = 18;
elseif ($result ===  5 ) $result = 23;
elseif ($result ===  6 ) $result = 27;
elseif ($result ===  7 ) $result = 33;
elseif ($result ===  8 ) $result = 39;
elseif ($result ===  9 ) $result = 45;
elseif ($result ===  10 ) $result = 50;
elseif ($result ===  11 ) $result = 56;
elseif ($result ===  12 ) $result = 62;
elseif ($result > 12 AND $result < 29) $result = ($result-13)*2 + 68;
elseif ($result ===  29 ) $result = 99;
elseif ($result > 29 ) $result = 100;


if (mysqli_num_rows($check_user)===0){

	mysqli_query($connect, "INSERT INTO `progress-profil` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `result`) VALUES ('$id', '$t1', '$t2', '$t3','$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$t10', '$t11', '$t12', '$t13', '$t14', '$t15', '$t16', '$t17', '$t18', '$t19','$result')");

}

header ("Location: ../profile/profile.php");

?>