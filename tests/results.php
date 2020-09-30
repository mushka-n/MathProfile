<?php 

	session_start();

    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    } else {
        $id=$_SESSION['user']['id'];
        $_SESSION['user']['completed_test'] = 1;
    }


    if (isset($_SESSION['test'])){
        $_SESSION['test'] = ["done" => 1];
    } else {
         header('Location: ../index.php');
    }  


    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
    }
	

     
     /*Присоединение базы данных 'mathege'*/
     require_once '../vendor/connect.php'; 

	 require_once 'answers.php'; 

	
	$diffs = []; //cложнсть
	$types = []; //тип
	$nums  = []; //номер

	$right_answers=[];


	if(!$_POST){
		for ($i=0; $i<12;$i++){

		}
	}


	for ($i = 0; $i<19;$i++){

		$diffs[$i] = (int)($_POST['t' . ($i+1)][0]);
		$types[$i] = (int)($_POST['t' . ($i+1)][-3]);
		$nums[$i]  = (int) substr( $_POST[ 't'.($i+1) ] ,4);

		$right_answers[$i] = $answers [$diffs[$i]-1] [$i] [$types[$i]] [$nums[$i]-1];
	}

	$user_answers = [];
	for ($i = 0; $i<12; $i++){
		$user_answers[$i] = $_POST['a'.($i+1)];
	}


	//print_r($_POST);

	

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
    
                <span class="menu-login-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a" id='login-logout'>Выход</a></span>
    
            </div>
        </div>
        <div class="theme-switch" id="theme-switch"></div>
    </div> 


     <div class="menu-skipper"></div>

     <div class="personal-test results">
         <div class="contaner">
            <div class="results-header">
                Вы можете отметить сами то кол-во баллов, которое получили за выполнение второй части.<br>
                <p class="flag-header">Для того, чтобы задания части "B" части не учитывались, не забудьте отметить флажок рядом с кнопкой "Завершить тестирование"</p>
            </div>
             <div class="personal-test-tasks">
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb1" > <p>Задание 1 </p><img src="" alt="1" class="task"  id="task_1" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb2" > <p>Задание 2 </p><img src="" alt="2" class="task"  id="task_2" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb3" > <p>Задание 3 </p><img src="" alt="3" class="task"  id="task_3" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb4" > <p>Задание 4 </p><img src="" alt="4" class="task"  id="task_4" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb5" > <p>Задание 5 </p><img src="" alt="5" class="task"  id="task_5" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb6" > <p>Задание 6 </p><img src="" alt="6" class="task"  id="task_6" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb7" > <p>Задание 7 </p><img src="" alt="7" class="task"  id="task_7" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb8" > <p>Задание 8 </p><img src="" alt="8" class="task"  id="task_8" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb9" > <p>Задание 9 </p><img src="" alt="9" class="task"  id="task_9" ></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb10"> <p>Задание 10</p><img src="" alt="10" class="task" id="task_10"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb11"> <p>Задание 11</p><img src="" alt="11" class="task" id="task_11"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part" id="ptb12"> <p>Задание 12</p><img src="" alt="12" class="task" id="task_12"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb13"> <p>Задание 13</p><img src="" alt="13" class="task" id="task_13"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb14"> <p>Задание 14</p><img src="" alt="14" class="task" id="task_14"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb15"> <p>Задание 15</p><img src="" alt="15" class="task" id="task_15"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb16"> <p>Задание 16</p><img src="" alt="16" class="task" id="task_16"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb17"> <p>Задание 17</p><img src="" alt="17" class="task" id="task_17"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb18"> <p>Задание 18</p><img src="" alt="18" class="task" id="task_18"></div></div>
                 <div class="wrap"><div class="personal-test-block second-part"	id="ptb19"> <p>Задание 19</p><img src="" alt="19" class="task" id="task_19"></div></div>
             </div>

             
             <div class="huge">
                 
                 <img src="" alt="" class="huge-task">

                 <div class="huge-answers" id="ha1">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[0]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[0]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha2">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[1]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[1]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha3">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[2]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[2]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha4">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[3]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[3]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha5">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[4]?></div>
                 	<div class="huge-answers-block huge-answers-user">Ваш ответ:<br><?php echo $user_answers[4]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha6">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[5]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[5]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha7">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[6]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[6]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha8">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[7]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[7]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha9"> 
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[8]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[8]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha10">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[9]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[9]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha11">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[10]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[10]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>
                 <div class="huge-answers" id="ha12">
                 	<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[11]?></div>
                 	<div class="huge-answers-block huge-answers-user"> Ваш ответ:<br><?php echo $user_answers[11]?></div>
                 	<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 </div>

                 <form action="push_results.php" method="POST">
                 	<div class="huge-answers" id="ha13">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[12]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input class="part2-slider" type="range" min="0" max="2" step="1" value="0" name="pta13"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 	</div>
                 	<div class="huge-answers" id="ha14">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[13]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input type="range" class="part2-slider" min="0" max="2" step="1" value="0" name="pta14"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 	</div>
                 	<div class="huge-answers" id="ha15">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[14]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input type="range" class="part2-slider" min="0" max="2" step="1" value="0" name="pta15"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 	</div>
                 	<div class="huge-answers" id="ha16">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[15]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input type="range" class="part2-slider" min="0" max="3" step="1" value="0" name="pta16"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 	</div>
                 	<div class="huge-answers" id="ha17">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[16]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input type="range" class="part2-slider" min="0" max="3" step="1" value="0" name="pta17"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 	</div>
                 	<div class="huge-answers" id="ha18">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[17]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input type="range" class="part2-slider" min="0" max="4" step="1" value="0" name="pta18"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 	</div>
                 	<div class="huge-answers" id="ha19">
                 		<div class="huge-answers-block huge-answers-right">Ответ:<br><?php echo $right_answers[18]?></div>
                 		<div class="huge-answers-block huge-answers-user huge-answers-user-part2">Вы получили:<br><input type="range" class="part2-slider" min="0" max="4" step="1" value="0" name="pta19"><br><span class="part2-count">0 баллов</span></div>
                 		<div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                 		
                 	</div>

                 	<input id="part1" type="text" name="poa"   style="display: none;">
                 	<input id="diffs" type="text" name="diffs" style="display: none;">
                    <input id="types" type="text" name="types" style="display: none;">

                    <div class="huge-solution"><img src="" alt="" class="huge-solution-img"></div>

                 	<button class="button" type="submit">Завершить тестирование</button>
                    <div class="flag"><input type="checkbox" name="flag" id="flag"><label for="flag"></label><p> - Не оценивать вторую часть</p></div>

                 </form>

             </div>

         </div>
     </div>





<?php 
	$diffs = json_encode($diffs,JSON_NUMERIC_CHECK);
	$types = json_encode($types,JSON_NUMERIC_CHECK);
	$nums = json_encode($nums,JSON_NUMERIC_CHECK);

	$right_answers = json_encode($right_answers,JSON_NUMERIC_CHECK);
	$user_answers = json_encode($user_answers,JSON_NUMERIC_CHECK);
?>

    

<script>

    $(document).ready(function(){

	 $('.part2-slider').click(function (event){
	 	let task = parseInt($(this).attr("name").slice(-2));
		if 		($(this).val() == 0) {
			$(this).siblings('.part2-count').html('0 баллов'); 
            $(this).siblings('.part2-count').html('0 баллов');
			$(this).parent().css("border-color","#EB4F3C");
			$('#ptb'+task).css("background-color","#EB4F3C");
		}
		else if ($(this).val() == 1) {
			$(this).siblings('.part2-count').html('1 балл');
			$(this).parent().css("border-color","#f7a431");
			$('#ptb'+task).css("background-color","#f7a431");
		}
		else  $(this).siblings('.part2-count').html($(this).val() + ' балла');

		if ($(this).val() == 2 && $(this).attr("max") == "2") {
			$(this).parent().css("border-color","#54C99B");
			$('#ptb'+task).css("background-color","#54C99B");
		}
		else if ($(this).val() == 2 && $(this).attr("max") != "2"){
			$(this).parent().css("border-color","#f7a431");
			$('#ptb'+task).css("background-color","#f7a431");
		}
		else if ($(this).val() > 2){
			$(this).parent().css("border-color","#54C99B");
			$('#ptb'+task).css("background-color","#54C99B");
		}
		
	 });


     ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 	var diffs = JSON.parse(<?php echo json_encode($diffs)?>);
 	var types = JSON.parse(<?php echo json_encode($types)?>);
 	var nums  = JSON.parse(<?php echo json_encode($nums) ?>);

 	var answers = JSON.parse(<?php echo json_encode($right_answers)?>);
 	var user_answers = JSON.parse(<?php echo json_encode($user_answers)?>);

 	paths = [];


    for (let i=0;i<19;i++){
        $('#diffs').val($('#diffs').val()+diffs[i]);
        $('#types').val($('#types').val()+types[i]);
    }

 	for (let i=0; i<19;i++){
 	    if (diffs[i] == 1){
 	        paths[i] =  '../tasks/' + (i+1) + '_' + (types[i]+1) + '_1_' + nums[i];           
 	        
 	    } else if (diffs[i] == 2){
 	        paths[i] = '../tasks/' + (i+1) + '_' + (types[i]+1) + '_2_' + nums[i];

 	    } else {
 	        paths[i] =    '../tasks/' + (i+1) + '_' + (types[i]+1) + '_3_' + nums[i];
 	    }

        $('#task_'+(i+1)).attr("src", (paths[i]+'.png'));
 	}


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // раскрытие huge - блока
    $('.personal-test-block').click(function (event){

        for (let i =1; i<20;i++){
            $('#ha' + i).css('display','none');
            $('.huge-solution-img').css('display','none');
            $('.huge-solution-img').css('border','none');
        }

        if (!$(this).hasClass('inactive')){
            let path = $(this).children('.task').attr('src');
            let task_num = parseInt($(this).children('.task').attr('alt'));

            $('.huge-task').attr('src',paths[task_num-1]+'.png');
            $('.huge-task').css('display','block');
            $('.huge-task').css('border','10px solid #fff');

            //$('.huge').css('display','block');

            $('#ha' + task_num).css('display','table');

            $('.huge-solution-img').attr('src',paths[task_num-1]+'_s.png')
        } else {
            $('.huge-task').css('display','none');
        }

        
     });


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 	let part1val = '';
 	for (let i =0; i<12; i++){
 		
 		if (user_answers[i] == answers[i] || user_answers[i]!=''){
 			$('#ptb'+(i+1)).css('background-color',"#54C99B");
 			$('#ha'+(i+1)).children('.huge-answers-user').css('background-color',"#54C99B");
 			part1val += '1';
 		} else {
 			$('#ptb'+(i+1)).css('background-color',"#EB4F3C");
 			$('#ha'+(i+1)).children('.huge-answers-user').css('border-color',"#EB4F3C");
 			part1val += '0';
 		}
 	}
 	$('#part1').val(part1val);


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
    // раскрытие solution
	$('.huge-answers-show-solution').click(function (event){
        if ($('.huge-solution-img').css('display') == 'block'){
            $('.huge-solution-img').css('display','none');
            $('.huge-solution-img').css('border','none');
        } else {
		    $('.huge-solution-img').css('display','block');
            $('.huge-solution-img').css('border','10px solid #fff');
        }
	});	

    $('#flag').click(function (event){
        if($(this).prop("checked")){
            for (let i=13;i<20;i++){
                $('.huge-solution-img').css('display','none');
                $('.huge-solution-img').css('border','none');
                $('.huge-answers').css('display','none');
                $('.huge-task').css('display','none');
                $('.huge-task').css('border','none');
                $('#ptb'+i).css('opacity','0.5');
                $('#ptb'+i).addClass('inactive')
            }
        } else {
            for (let i=13;i<20;i++){
                $('#ptb'+i).css('opacity','1')
                $('#ptb'+i).removeClass('inactive')
            }
        }
        
    }); 


});

</script>


     
</body>
</html>