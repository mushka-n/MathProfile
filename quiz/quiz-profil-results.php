<?php

session_start();
$id = $_SESSION['user']['id'];

/*Присоединение базы данных 'mathege'*/
include_once '../vendor/connect.php';

/*Создание переменных для базы данных*/

/*                      ЗАДАНИЕ 1                     */
if (!$_POST[t1_1]) $t1_1 = 0; else $t1_1 = $_POST[t1_1]*100;
if (!$_POST[t1_2]) $t1_2 = 0; else $t1_2 = $_POST[t1_2]*100;
if (!$_POST[t1_3]) $t1_3 = 0; else $t1_3 = $_POST[t1_3]*100;
if (!$_POST[t1_4]) $t1_4 = 0; else $t1_4 = $_POST[t1_4]*100;
$t1 = ($t1_1*30 + $t1_2*30 + $t1_3*30 + $t1_4*10)/100;

/*                      ЗАДАНИЕ 2                     */
if (!$_POST[t2_1]) $t2_1 = 0; else $t2_1 = $_POST[t2_1]*100;
if (!$_POST[t2_2]) $t2_2 = 0; else $t2_2 = $_POST[t2_2]*100;
$t2 = ($t2_1*80 + $t2_2*20)/100;

/*                      ЗАДАНИЕ 3                     */
if (!$_POST[t3_1]) $t3_1 = 0; else $t3_1 = $_POST[t3_1]*100;
if (!$_POST[t3_2]) $t3_2 = 0; else $t3_2 = $_POST[t3_2]*100;
if (!$_POST[t3_3]) $t3_3 = 0; else $t3_3 = $_POST[t3_3]*100;
$t3 = ($t3_1*50 + $t3_2*30 + $t3_3*20)/100;

/*                      ЗАДАНИЕ 4                     */
if (!$_POST[t4_1]) $t4_1 = 0; else $t4_1 = $_POST[t4_1]*100;
if (!$_POST[t4_2]) $t4_2 = 0; else $t4_2 = $_POST[t4_2]*100;
$t4 =( $t4_1*60 + $t4_2*40)/100;

/*                      ЗАДАНИЕ 5                     */
if (!$_POST[t5_1]) $t5_1 = 0; else $t5_1 = $_POST[t5_1]*100;
if (!$_POST[t5_2]) $t5_2 = 0; else $t5_2 = $_POST[t5_2]*100;
if (!$_POST[t5_3]) $t5_3 = 0; else $t5_3 = $_POST[t5_3]*100;
if (!$_POST[t5_4]) $t5_4 = 0; else $t5_4 = $_POST[t5_4]*100;
if (!$_POST[t5_5]) $t5_5 = 0; else $t5_5 = $_POST[t5_5]*100;
if (!$_POST[t5_6]) $t5_6 = 0; else $t5_6 = $_POST[t5_6]*100;
$t5 = ($t5_1*20 + $t5_2*20 + $t5_3*20 + $t5_4*18 + $t5_5*15 + $t5_6*7)/100;

/*                      ЗАДАНИЕ 6                     */
if (!$_POST[t6_1]) $t6_1 = 0; else $t6_1 = $_POST[t6_1]*100;
if (!$_POST[t6_2]) $t6_2 = 0; else $t6_2 = $_POST[t6_2]*100;
if (!$_POST[t6_3]) $t6_3 = 0; else $t6_3 = $_POST[t6_3]*100;
if (!$_POST[t6_4]) $t6_4 = 0; else $t6_4 = $_POST[t6_4]*100;
if (!$_POST[t6_5]) $t6_5 = 0; else $t6_5 = $_POST[t6_5]*100;
$t6 = ($t6_1*47 + $t6_2*20 + $t6_3*13 + $t6_4*10 + $t6_5*10)/100;

/*                      ЗАДАНИЕ 7                     */
if (!$_POST[t7_1]) $t7_1 = 0; else $t7_1 = $_POST[t7_1]*100;
if (!$_POST[t7_2]) $t7_2 = 0; else $t7_2 = $_POST[t7_2]*100;
if (!$_POST[t7_3]) $t7_3 = 0; else $t7_3 = $_POST[t7_3]*100;
if (!$_POST[t7_4]) $t7_4 = 0; else $t7_4 = $_POST[t7_4]*100;
$t7 = ($t7_1*45 + $t7_2*35 + $t7_3*10 + $t7_4*10)/100;

/*                      ЗАДАНИЕ 8                     */
if (!$_POST[t8_1]) $t8_1 = 0; else $t8_1 = $_POST[t8_1]*100;
if (!$_POST[t8_2]) $t8_2 = 0; else $t8_2 = $_POST[t8_2]*100;
if (!$_POST[t8_3]) $t8_3 = 0; else $t8_3 = $_POST[t8_3]*100;
if (!$_POST[t8_4]) $t8_4 = 0; else $t8_4 = $_POST[t8_4]*100;
if (!$_POST[t8_5]) $t8_5 = 0; else $t8_5 = $_POST[t8_5]*100;
if (!$_POST[t8_6]) $t8_6 = 0; else $t8_6 = $_POST[t8_6]*100;
if (!$_POST[t8_7]) $t8_7 = 0; else $t8_7 = $_POST[t8_7]*100;
if (!$_POST[t8_8]) $t8_8 = 0; else $t8_8 = $_POST[t8_8]*100;
if (!$_POST[t8_9]) $t8_9 = 0; else $t8_9 = $_POST[t8_9]*100;
$t8 = ($t8_1*22 + $t8_2*17 + $t8_3*16 + $t8_4*12 + $t8_5*10 + $t8_6*10 + $t8_7*6 + $t8_8*4 + $t8_9*3)/100;

/*                      ЗАДАНИЕ 9                     */
if (!$_POST[t9_1]) $t9_1 = 0; else $t9_1 = $_POST[t9_1]*100;
if (!$_POST[t9_2]) $t9_2 = 0; else $t9_2 = $_POST[t9_2]*100;
if (!$_POST[t9_3]) $t9_3 = 0; else $t9_3 = $_POST[t9_3]*100;
if (!$_POST[t9_4]) $t9_4 = 0; else $t9_4 = $_POST[t9_4]*100;
if (!$_POST[t9_5]) $t9_5 = 0; else $t9_5 = $_POST[t9_5]*100;
if (!$_POST[t9_6]) $t9_6 = 0; else $t9_6 = $_POST[t9_6]*100;
$t9 = ($t9_1*30 + $t9_2*25 + $t9_3*15 + $t9_4*15 + $t9_5*12 + $t9_6*3)/100;

/*                      ЗАДАНИЕ 10                     	 */
if (!$_POST[t10_1]) $t10_1 = 0; else $t10_1 = $_POST[t10_1]*100;
if (!$_POST[t10_2]) $t10_2 = 0; else $t10_2 = $_POST[t10_2]*100;
if (!$_POST[t10_3]) $t10_3 = 0; else $t10_3 = $_POST[t10_3]*100;
if (!$_POST[t10_4]) $t10_4 = 0; else $t10_4 = $_POST[t10_4]*100;
if (!$_POST[t10_5]) $t10_5 = 0; else $t10_5 = $_POST[t10_5]*100;
if (!$_POST[t10_6]) $t10_6 = 0; else $t10_6 = $_POST[t10_6]*100;
if (!$_POST[t10_7]) $t10_7 = 0; else $t10_7 = $_POST[t10_7]*100;
if (!$_POST[t10_8]) $t10_8 = 0; else $t10_8 = $_POST[t10_8]*100;
$t10 = ($t10_1*21 + $t10_2*21 + $t10_3*19 + $t10_4*13 + $t10_5*9 + $t10_6*9 + $t10_7*5 + $t10_8*3)/100;

/*                      ЗАДАНИЕ 11                    	 */
if (!$_POST[t11_1]) $t11_1 = 0; else $t11_1 = $_POST[t11_1]*100;
if (!$_POST[t11_2]) $t11_2 = 0; else $t11_2 = $_POST[t11_2]*100;
if (!$_POST[t11_3]) $t11_3 = 0; else $t11_3 = $_POST[t11_3]*100;
if (!$_POST[t11_4]) $t11_4 = 0; else $t11_4 = $_POST[t11_4]*100;
if (!$_POST[t11_5]) $t11_5 = 0; else $t11_5 = $_POST[t11_5]*100;
if (!$_POST[t11_6]) $t11_6 = 0; else $t11_6 = $_POST[t11_6]*100;
$t11 = ($t11_1*22 + $t11_2*22 + $t11_3*18 + $t11_4*18 + $t11_5*12 + $t11_6*8)/100;

/*                      ЗАДАНИЕ 12                    	 */
if (!$_POST[t12_1]) $t12_1 = 0; else $t12_1 = $_POST[t12_1]*100;
if (!$_POST[t12_2]) $t12_2 = 0; else $t12_2 = $_POST[t12_2]*100;
if (!$_POST[t12_3]) $t12_3 = 0; else $t12_3 = $_POST[t12_3]*100;
if (!$_POST[t12_4]) $t12_4 = 0; else $t12_4 = $_POST[t12_4]*100;
if (!$_POST[t12_5]) $t12_5 = 0; else $t12_5 = $_POST[t12_5]*100;
if (!$_POST[t12_6]) $t12_6 = 0; else $t12_6 = $_POST[t12_6]*100;
$t12 = ($t12_1*39 + $t12_2*20 + $t12_3*19 + $t12_4*8 + $t12_5*7 + $t12_6*7)/100;

/*                      ЗАДАНИЕ 13                    	 */
$t13_1 = $_POST[t13_1]*50;
$t13_2 = $_POST[t13_2]*50;
$t13_3 = $_POST[t13_3]*50;
$t13_4 = $_POST[t13_4]*50;
$t13_5 = $_POST[t13_5]*50;
$t13_6 = $_POST[t13_6]*50;
$t13 = ($t13_1*60 + $t13_2*27 + $t13_3*5 + $t13_4*3 + $t13_5*3 + $t13_6*2)/100;

/*                      ЗАДАНИЕ 14                    	 */
$t14_1 = $_POST[t14_1]*50;
$t14_2 = $_POST[t14_2]*50;
$t14_3 = $_POST[t14_3]*50;
$t14_4 = $_POST[t14_4]*50;
$t14_5 = $_POST[t14_5]*50;
$t14_6 = $_POST[t14_6]*50;
$t14_7 = $_POST[t14_7]*50;
$t14_8 = $_POST[t14_8]*50;
$t14 = ($t14_1*19 + $t14_2*14 + $t14_3*14 + $t14_4*14 + $t14_5*10 + $t14_6*10 + $t14_7*10 + $t14_8*9)/100;

/*                      ЗАДАНИЕ 15                    	 */
$t15_1 = $_POST[t15_1]*50;
$t15_2 = $_POST[t15_2]*50;
$t15_3 = $_POST[t15_3]*50;
$t15_4 = $_POST[t15_4]*50;
$t15_5 = $_POST[t15_5]*50;
$t15_6 = $_POST[t15_6]*50;
$t15 = ($t15_1*43 + $t15_2*26 + $t15_3*17 + $t15_4*8 + $t15_5*4 + $t15_6*2)/100;

/*                      ЗАДАНИЕ 16                    	 */
$t16_1 = $_POST[t16_1]*33; if ($t16_1 == 99) $t16_1 = 100;
$t16_2 = $_POST[t16_2]*33; if ($t16_2 == 99) $t16_2 = 100;
$t16_3 = $_POST[t16_3]*33; if ($t16_3 == 99) $t16_3 = 100;
$t16_4 = $_POST[t16_4]*33; if ($t16_4 == 99) $t16_4 = 100;
$t16 = ($t16_1*30 + $t16_2*25 + $t16_3*25 + $t16_4*20)/100;

/*                      ЗАДАНИЕ 17                    	 */
$t17_1 = $_POST[t17_1]*33; if ($t17_1 == 99) $t17_1 = 100;
$t17_2 = $_POST[t17_2]*33; if ($t17_2 == 99) $t17_1 = 100;
$t17 = ($t17_1*70 + $t17_2*30)/100;

/*                      ЗАДАНИЕ 18                    	 */
$t18_1 = $_POST[t18_1]*25;
$t18_2 = $_POST[t18_2]*25;
$t18_3 = $_POST[t18_3]*25;
$t18_4 = $_POST[t18_4]*25;
$t18_5 = $_POST[t18_5]*25;
$t18_6 = $_POST[t18_6]*25;
$t18_7 = $_POST[t18_7]*25;
$t18_8 = $_POST[t18_8]*25;
$t18_9 = $_POST[t18_9]*25;
$t18_10 = $_POST[t18_10]*25;
$t18 = ($t18_1*10 + $t18_2*10 + $t18_3*10 + $t18_4*10 + $t18_5*10 + $t18_6*10 + $t18_7*10 + $t18_8*10 + $t18_9*10 + $t18_10*10)/100;

/*                      ЗАДАНИЕ 19                    	 */
$t19_1 = $_POST[t19_1]*25;
$t19_2 = $_POST[t19_2]*25;
$t19_3 = $_POST[t19_3]*25;
$t19_4 = $_POST[t19_4]*25;
$t19 = ($t19_1*40 + $t19_2*25 + $t19_3*20 + $t19_4*15)/100;

/* ----------------------------------------------------------------------------------------
----------------------------------------------------  */


/*Подсчет ожидаемого балла по таблице егэ*/
$result = round(($t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10
+$t11+$t12+$t13*2+$t14*2+$t15*2+$t16*3+$t17*3+$t18*4+$t19*4)/32);

/*    if ($result ==  1 ) $result = 5;
elseif ($result ==  2 ) $result = 9;
elseif ($result ==  3 ) $result = 14;
elseif ($result ==  4 ) $result = 18;
elseif ($result ==  5 ) $result = 23;
elseif ($result ==  6 ) $result = 27;
elseif ($result ==  7 ) $result = 33;
elseif ($result ==  8 ) $result = 39;
elseif ($result ==  9 ) $result = 45;
elseif ($result ==  10 ) $result = 50;
elseif ($result ==  11 ) $result = 56;
elseif ($result ==  12 ) $result = 62;
elseif ($result > 12 AND $result < 29) $result = ($result-13)*2 + 68;
elseif ($result ==  29 ) $result = 99;
elseif ($result > 29 ) $result = 100;*/


/*$check_user = mysqli_query($connect, "SELECT * FROM 
	`users` WHERE `id` = '$id' ");

if (mysqli_num_rows($check_user)===0){
}*/

mysqli_query($connect, "INSERT INTO `1`(`id`,`1`,`1.1`,`1.2`,`1.3`,`1.4`)
                                VALUES ('$id','$t1','$t1_1','$t1_2','$t1_3','$t1_4')");

mysqli_query($connect, "INSERT INTO `2`(`id`,`2`,`2.1`,`2.2`)
                                VALUES ('$id','$t2','$t2_1','$t2_2')");

mysqli_query($connect, "INSERT INTO `3`(`id`,`3`,`3.1`,`3.2`,`3.3`)
                                VALUES ('$id','$t3','$t3_1','$t3_2','$t3_3')");

mysqli_query($connect, "INSERT INTO `4`(`id`,`4`,`4.1`,`4.2`)
                                VALUES ('$id','$t4','$t4_1','$t4_2')");

mysqli_query($connect, "INSERT INTO `5`(`id`,`5`,`5.1`,`5.2`,`5.3`,`5.4`,`5.5`,`5.6`)
                                VALUES ('$id','$t5','$t5_1','$t5_2','$t5_3','$t5_4','$t5_5','$t5_6')");

mysqli_query($connect, "INSERT INTO `6`(`id`,`6`,`6.1`,`6.2`,`6.3`,`6.4`)
                                VALUES ('$id','$t6','$t6_1','$t6_2','$t6_3','$t6_4')");

mysqli_query($connect, "INSERT INTO `7`(`id`,`7`,`7.1`,`7.2`,`7.3`,`7.4`)
                                VALUES ('$id','$t7','$t7_1','$t7_2','$t7_3','$t7_4')");

mysqli_query($connect, "INSERT INTO `8`(`id`,`8`,`8.1`,`8.2`,`8.3`,`8.4`,`8.5`,`8.6`,`8.7`,`8.8`,`8.9`)
                                VALUES ('$id','$t8','$t8_1','$t8_2','$t8_3','$t8_4','$t8_5','$t8_6','$t8_7','$t8_8','$t8_9')");

mysqli_query($connect, "INSERT INTO `9`(`id`,`9`,`9.1`,`9.2`,`9.3`,`9.4`,`9.5`,`9.6`)
                                VALUES ('$id','$t9','$t9_1','$t9_2','$t9_3','$t9_4','$t9_5','$t9_6')");

mysqli_query($connect, "INSERT INTO `10`(`id`,`10`,`10.1`,`10.2`,`10.3`,`10.4`,`10.5`,`10.6`,`10.7`,`10.8`)
                                VALUES ('$id','$t10','$t10_1','$t10_2','$t10_3','$t10_4','$t10_5','$t10_6','$t10_7','$t10_8')");

mysqli_query($connect, "INSERT INTO `11`(`id`,`11`,`11.1`,`11.2`,`11.3`,`11.4`,`11.5`,`11.6`)
                                VALUES ('$id','$t11','$t11_1','$t11_2','$t11_3','$t11_4','$t11_5','$t11_6')");

mysqli_query($connect, "INSERT INTO `12`(`id`,`12`,`12.1`,`12.2`,`12.3`,`12.4`,`12.5`,`12.6`)
                                VALUES ('$id','$t12','$t12_1','$t12_2','$t12_3','$t12_4','$t12_5','$t12_6')");

mysqli_query($connect, "INSERT INTO `13`(`id`,`13`,`13.1`,`13.2`,`13.3`,`13.4`,`13.5`,`13.6`)
                                VALUES ('$id','$t13','$t13_1','$t13_2','$t13_3','$t13_4','$t13_5','$t13_6')");

mysqli_query($connect, "INSERT INTO `14`(`id`,`14`,`14.1`,`14.2`,`14.3`,`14.4`,`14.5`,`14.6`,`14.7`,`14.8`)
                                VALUES ('$id','$t14','$t14_1','$t14_2','$t14_3','$t14_4','$t14_5','$t14_6','$t14_7','$t14_8')");

mysqli_query($connect, "INSERT INTO `15`(`id`,`15`,`15.1`,`15.2`,`15.3`,`15.4`,`15.5`,`15.6`)
                                VALUES ('$id','$t15','$t15_1','$t15_2','$t15_3','$t15_4','$t15_5','$t15_6')");

mysqli_query($connect, "INSERT INTO `16`(`id`,`16`,`16.1`,`16.2`,`16.3`,`16.4`)
                                VALUES ('$id','$t16','$t16_1','$t16_2','$t16_3','$t16_4')");

mysqli_query($connect, "INSERT INTO `17`(`id`,`17`,`17.1`,`17.2`)
                                VALUES ('$id','$t17','$t17_1','$t17_2')");

mysqli_query($connect, "INSERT INTO `18`(`id`,`18`,`18.1`,`18.2`,`18.3`,`18.4`,`18.5`,`18.6`,`18.7`,`18.8`,`18.9`,`18.10`)
                                VALUES ('$id','$t18','$t18_1','$t18_2','$t18_3','$t18_4','$t18_5','$t18_6','$t18_7','$t18_8','$t18_9','$t18_10')");

mysqli_query($connect, "INSERT INTO `19`(`id`,`19`,`19.1`,`19.2`,`19.3`,`19.4`)
                                VALUES ('$id','$t19','$t19_1','$t19_2','$t19_3','$t19_4')");

mysqli_query($connect, "UPDATE `users` SET `result`= '$result' WHERE `id`= '$id'");

header ("Location: ../index.php");
?>