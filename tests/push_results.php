<?php 

session_start();

require_once '../vendor/connect.php';
require_once 'marks.php';
require_once 'chanses.php';


if (!$_SESSION['user']) {
    header('Location: ../index.php');
} else {
    $id = $_SESSION['user']['id'];
}

$result;
$pr_fins=[];

for ($i=1; $i<20; $i++){

	// определяем сложность задания
	$task_diff = (int)($_POST['diffs'][$i-1])-1;
	// 0 - g   1 - y   2 - r

	$task_type = (((int)($_POST['types'][$i-1]))+1);

	// определяем тип задания
	$task_dot_type = $i .'.'.(((int)($_POST['types'][$i-1]))+1);
	
	// получаем существующую статистику по заданию
	$task_wh =  mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `$i`  WHERE `id` = '$id'"));
	$task_pr = (int)($task_wh[$task_dot_type]);

	// преобразовываем в соответствии с результатами
	if 		($i <=12)			$task_pr +=   $part1[(int)($_POST['poa'][$i-1])][$task_diff];
	else if ($i>=13 && $i<=15)  $task_pr += $part2_2[(int)($_POST['pta'.$i])][$task_diff];
	else if ($i>=16 && $i<=17) 	$task_pr += $part2_3[(int)($_POST['pta'.$i])][$task_diff];
	else 						$task_pr += $part2_4[(int)($_POST['pta'.$i])][$task_diff];

	//определяем границы
	if 		($task_pr<0) 	$task_pr=0;
	else if ($task_pr>100)	$task_pr=100;

	//вычисляем новый прогресс по целому заданию и вносим в массив для дальнейших вычислений
	$task_pr_fin = 0;
	for ($j=1; $j<count($task_wh)-1; $j++)
	{
		// учитываем новый полученный
		if ($j != $task_type){
			$task_pr_fin += $task_wh[$i.'.'.$j]*$ch[$i-1][$j-1]/100;
		} else {
			$task_pr_fin += $task_pr*$ch[$i-1][$j-1]/100;
		}
	}

	//вносим в массив для дальнейших вычислений
	$pr_fins[$i] = $task_pr_fin;

	// вносим в базу
	mysqli_query($connect, "  UPDATE  `$i` 
							  SET 	  `$task_dot_type`= '$task_pr',
							  		  `$i`= '$task_pr_fin'
							  WHERE   `id`= '$id'"				);
}

	// считаем общий прогресс ученика и вносим в базу
	for ($i=1;  $i<=12; $i++)  $result+= $pr_fins[$i];
	for ($i=13; $i<=15; $i++) $result+= $pr_fins[$i]*2;
	for ($i=16; $i<=17; $i++) $result+= $pr_fins[$i]*3;
	for ($i=18; $i<=19; $i++) $result+= $pr_fins[$i]*4;
	$result = round($result/32);

	mysqli_query($connect, "  UPDATE  `users` 
							  SET 	  `result`= '$result'
							  WHERE   `id`= '$id'"				);

// отправляем юзера на индексную сраницу
header('Location: ../index.php');




 ?>