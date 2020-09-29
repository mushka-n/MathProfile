<?php
    session_start();

    
    /*Присоединение базы данных 'mathege'*/
    require_once '../vendor/connect.php'; 

    if (!$_SESSION['user']) {
        header('Location: ../index.php');   
    } else {
        $id=$_SESSION['user']['id'];
    }


    if ($_SESSION['test']["done"] == 1){
       header('Location: ../index.php');
    } else {
        $_SESSION['test'] = ["done" => 0];
    }


    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
    } 


    $pr1 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `1`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr2 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `2`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr3 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `3`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr4 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `4`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr5 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `5`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr6 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `6`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr7 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `7`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr8 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `8`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr9 =  json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `9`  WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr10 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `10` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr11 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `11` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr12 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `12` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr13 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `13` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr14 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `14` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr15 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `15` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr16 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `16` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr17 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `17` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr18 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `18` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);
    $pr19 = json_encode(mysqli_fetch_row(mysqli_query($connect,"SELECT * FROM `19` WHERE `id` = '$id'")),JSON_NUMERIC_CHECK);


    $tasks_nums = [  [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []  ];
    $tasks_names = scandir('../tasks');
    
    // заходим в папку 'tasks' и смотрим сколько у нас практ. заданий по каждому типу отдельно
    for ($i=2; $i<count($tasks_names);$i+=2){
        if ($tasks_names[$i][1] == '_'){
            $task_num = $tasks_names[$i][0];
            $task_type = $tasks_names[$i][2];
        } else {
            $task_num = $tasks_names[$i][0].$tasks_names[$i][1];
            $task_type = $tasks_names[$i][3]; if ($task_names == '1' && $tasks_names[$i][4] == '0') $task_type = '10';
        }
        $tasks_nums[(int)$task_num-1][(int)$task_type-1]++;
    }


    $tasks_nums = json_encode($tasks_nums,JSON_NUMERIC_CHECK);

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

    <div class="personal-test">
        <div class="contaner">
            <div class="personal-test-tasks">
                <div class="wrap"><div class="personal-test-block">            <p>Задание 1 </p><img src="" alt="1"  class="task" id="task_1"  ><span>Ответ:</span><div class="answer"  id="answer_1" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 2 </p><img src="" alt="2"  class="task" id="task_2"  ><span>Ответ:</span><div class="answer"  id="answer_2" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 3 </p><img src="" alt="3"  class="task" id="task_3"  ><span>Ответ:</span><div class="answer"  id="answer_3" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 4 </p><img src="" alt="4"  class="task" id="task_4"  ><span>Ответ:</span><div class="answer"  id="answer_4" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 5 </p><img src="" alt="5"  class="task" id="task_5"  ><span>Ответ:</span><div class="answer"  id="answer_5" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 6 </p><img src="" alt="6"  class="task" id="task_6"  ><span>Ответ:</span><div class="answer"  id="answer_6" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 7 </p><img src="" alt="7"  class="task" id="task_7"  ><span>Ответ:</span><div class="answer"  id="answer_7" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 8 </p><img src="" alt="8"  class="task" id="task_8"  ><span>Ответ:</span><div class="answer"  id="answer_8" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 9 </p><img src="" alt="9"  class="task" id="task_9"  ><span>Ответ:</span><div class="answer"  id="answer_9" >-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 10</p><img src="" alt="10" class="task" id="task_10" ><span>Ответ:</span><div class="answer"  id="answer_10">-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 11</p><img src="" alt="11" class="task" id="task_11" ><span>Ответ:</span><div class="answer"  id="answer_11">-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block">            <p>Задание 12</p><img src="" alt="12" class="task" id="task_12" ><span>Ответ:</span><div class="answer"  id="answer_12">-/-</div></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 13</p><img src="" alt="13" class="task" id="task_13" ></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 14</p><img src="" alt="14" class="task" id="task_14" ></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 15</p><img src="" alt="15" class="task" id="task_15" ></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 16</p><img src="" alt="16" class="task" id="task_16" ></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 17</p><img src="" alt="17" class="task" id="task_17" ></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 18</p><img src="" alt="18" class="task" id="task_18" ></div></div>
                <div class="wrap"><div class="personal-test-block second-part"><p>Задание 19</p><img src="" alt="19" class="task" id="task_19" ></div></div>
            </div>


            
            <div class="huge">
                
                <img src="" alt="" class="huge-task">

                <form action="results.php" method="POST" autocomplete="off">

                    <div class="huge-block" id="huge_block_1">
                        <input type="text" class="huge-answer" id="huge_answer_1" placeholder="Ваш ответ" name="a1"><label for="huge_answer_1"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_2">
                        <input type="text" class="huge-answer" id="huge_answer_2" placeholder="Ваш ответ" name="a2"><label for="huge_answer_2"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_3">
                        <input type="text" class="huge-answer" id="huge_answer_3" placeholder="Ваш ответ" name="a3"><label for="huge_answer_3"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_4">
                        <input type="text" class="huge-answer" id="huge_answer_4" placeholder="Ваш ответ" name="a4"><label for="huge_answer_4"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_5">
                        <input type="text" class="huge-answer" id="huge_answer_5" placeholder="Ваш ответ" name="a5"><label for="huge_answer_5"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_6">
                        <input type="text" class="huge-answer" id="huge_answer_6" placeholder="Ваш ответ" name="a6"><label for="huge_answer_6"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_7">
                        <input type="text" class="huge-answer" id="huge_answer_7" placeholder="Ваш ответ" name="a7"><label for="huge_answer_7"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_8">
                        <input type="text" class="huge-answer" id="huge_answer_8" placeholder="Ваш ответ" name="a8"><label for="huge_answer_8"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_9">
                        <input type="text" class="huge-answer" id="huge_answer_9" placeholder="Ваш ответ" name="a9"><label for="huge_answer_9"  class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_10">
                        <input type="text" class="huge-answer" id="huge_answer_10" placeholder="Ваш ответ" name="a10"><label for="huge_answer_10" class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_11">
                        <input type="text" class="huge-answer" id="huge_answer_11" placeholder="Ваш ответ" name="a11"><label for="huge_answer_11" class="huge-answer-label">Ваш ответ</label>
                    </div>
                    <div class="huge-block" id="huge_block_12">
                        <input type="input" class="huge-answer" placeholder="Ваш ответ" name="a12" id="huge_answer_12"> <label for="huge_answer_12" class="huge-answer-label required">Ваш ответ</label>
                    </div>

                    <input type="text" name="t1"  id="t1"  value="" style="display:none">
                    <input type="text" name="t2"  id="t2"  value="" style="display:none">
                    <input type="text" name="t3"  id="t3"  value="" style="display:none">
                    <input type="text" name="t4"  id="t4"  value="" style="display:none">
                    <input type="text" name="t5"  id="t5"  value="" style="display:none">
                    <input type="text" name="t6"  id="t6"  value="" style="display:none">
                    <input type="text" name="t7"  id="t7"  value="" style="display:none">
                    <input type="text" name="t8"  id="t8"  value="" style="display:none">
                    <input type="text" name="t9"  id="t9"  value="" style="display:none">
                    <input type="text" name="t10" id="t10" value="" style="display:none">
                    <input type="text" name="t11" id="t11" value="" style="display:none">
                    <input type="text" name="t12" id="t12" value="" style="display:none">
                    <input type="text" name="t13" id="t13" value="" style="display:none">
                    <input type="text" name="t14" id="t14" value="" style="display:none">
                    <input type="text" name="t15" id="t15" value="" style="display:none">
                    <input type="text" name="t16" id="t16" value="" style="display:none">
                    <input type="text" name="t17" id="t17" value="" style="display:none">
                    <input type="text" name="t18" id="t18" value="" style="display:none">
                    <input type="text" name="t19" id="t19" value="" style="display:none">

                    
                    

                    <div class="popup-finish-test popup">

                        <div class="popup-inner">
                            
                            

                            <div class="container">
                                <div class="row">
                                    <div class="popup-header">
                                        <div class="popup-close">
                                            <span class="popup-close-icon">&times;</span>
                                        </div>
                                        <h2>Внимание!</h2>
                                        <h4>Вы уверены, что хотите закончить решение варианта? Вернуться и изменить ответы вследствие будет неовзможно</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="button" type="submit" id="finish_test_2" disabled="true">Сдать вариант</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </form>

                <button class="button" id="finish_test">Сдать вариант</button>

            </div>
        </div>
    </div>




<script>
    $(document).ready(function(){

        /*Преобразование значений с сервера, определение нужного задания*/
        pr=[
            JSON.parse(<?php echo json_encode($pr1)?>),
            JSON.parse(<?php echo json_encode($pr2)?>),
            JSON.parse(<?php echo json_encode($pr3)?>),
            JSON.parse(<?php echo json_encode($pr4)?>),
            JSON.parse(<?php echo json_encode($pr5)?>),
            JSON.parse(<?php echo json_encode($pr6)?>),
            JSON.parse(<?php echo json_encode($pr7)?>),
            JSON.parse(<?php echo json_encode($pr8)?>),
            JSON.parse(<?php echo json_encode($pr9)?>),
            JSON.parse(<?php echo json_encode($pr10)?>),
            JSON.parse(<?php echo json_encode($pr11)?>),
            JSON.parse(<?php echo json_encode($pr12)?>),
            JSON.parse(<?php echo json_encode($pr13)?>),
            JSON.parse(<?php echo json_encode($pr14)?>),
            JSON.parse(<?php echo json_encode($pr15)?>),
            JSON.parse(<?php echo json_encode($pr16)?>),
            JSON.parse(<?php echo json_encode($pr17)?>),
            JSON.parse(<?php echo json_encode($pr18)?>),
            JSON.parse(<?php echo json_encode($pr19)?>)
        ];

        let tasks_nums = JSON.parse(<?php echo json_encode($tasks_nums)?>);

        ch = [
            /*1 */  [30,30,30,10],
            /*2 */  [80,20],
            /*3 */  [50,30,20],
            /*4 */  [60,40],
            /*5 */  [20,20,20,18,15,7],
            /*6 */  [47,20,13,10,10],
            /*7 */  [45,35,10,10],
            /*8 */  [22,17,16,12,10,10,6,4,3],
            /*9 */  [30,25,15,15,12,3],
            /*10*/  [21,21,19,13,9,9,5,3],
            /*11*/  [22,22,18,18,12,8],
            /*12*/  [39,20,19,8,8,7],
            /*13*/  [60,27,5,3,3,2],
            /*14*/  [19,14,14,14,10,10,10,9],
            /*15*/  [43,26,17,8,4,2],
            /*16*/  [30,25,25,20],
            /*17*/  [70,30],
            /*18*/  [10,10,10,10,10,10,10,10,10,10],
            /*19*/  [40,25,20,15]
        ];

        let types=[]; let rygs=[]; let paths=[];

        console.log(tasks_nums);

        for (let n=0; n<19; n++)
        {
            var i=0; var type = 0; var ryg = 0;
            /*Пока разница в прогрессе между текущим и следующим потипом 
            больше чем между их шансом выпадения
            Или если прогресс по текущему больше 90*/
            while ( (pr[n][i+2]-pr[n][i+3]) > (ch[n][i]-ch[n][i+1]) || pr[n][i+2]>90) 
            {
                /* Смотрим на следующий подтип*/
                type = i+1;
                if (i == ch[n].length-1) { type=0; break; }
                i++;
            }
            types[n] = type+1;
            rygs[n] = pr[n][type+2];
        }    

        function randint(min, max) { return Math.floor( Math.random() * (max - min + 1)) + min; }
        nums=[];

        // создание пути до задания и присваивание его нужному блоку
        for (let i=0; i<19;i++){
            nums[i] = randint(1,tasks_nums[i][types[i]-1]/3);
            if       (rygs[i]<=30)                 { paths[i] = '../tasks/' + (i+1) + '_' + types[i] + '_1_' + nums[i] + '.png'; }
            else if  ( rygs[i]>30 && rygs[i] <80)  { paths[i] = '../tasks/' + (i+1) + '_' + types[i] + '_2_' + nums[i] + '.png'; }
            else                                   { paths[i] = '../tasks/' + (i+1) + '_' + types[i] + '_3_' + nums[i] + '.png'; }
            $('#task_'+(i+1)).attr("src", paths[i]);
        }


        // сложность , тип , номер
        for (let i=0; i<19;i++){
            if       (rygs[i]<=30)                { document.getElementById('t'+(i+1)).setAttribute('value','1 ' + (types[i] -1) + ' ' + nums[i]); }
            else if  (rygs[i]>30 && rygs[i] <80)  { document.getElementById('t'+(i+1)).setAttribute('value','2 ' + (types[i] -1) + ' ' + nums[i]); }
            else                                  { document.getElementById('t'+(i+1)).setAttribute('value','3 ' + (types[i] -1) + ' ' + nums[i]); }
        }


        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        /*открытие блока с заданием и полем ввода*/
        $('.personal-test-block').click(function (event){
            for (let i =1; i<13;i++){
                $('#huge_block_' + i).css('display','none');
                var answer = document.getElementById('answer_'+ i);
                if($('#huge_answer_' + i).val() != '') {
                    answer.textContent = $('#huge_answer_' + i).val();
                }
            }

            let path = $(this).children('.task').attr('src');
            let task_num = parseInt($(this).children('.task').attr('alt'));

            document.onkeydown = function(event){
                if (event.code == 'Enter'){
                    var answer = document.getElementById('answer_'+ task_num);
                    answer.textContent = $('#huge_answer_' + task_num).val();
                    if($('#huge_answer_' + i).val() != '') {
                        $('.huge').css('display','none');
                    }
                }
            }

            $('.huge-task').attr('src',path);
            $('.huge-task').css('border','10px solid #fff');
            $('.huge-task').css('display','block');
            $('.huge').css('display','block');
            $('#huge_block_' + task_num).css('display','block');
        });


        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        /*модульное окно с предупреждением и вкл/откл кнопки enter*/
         $('#finish_test').click(function (event){

            $('.popup-finish-test').fadeIn();
            document.getElementById("finish_test_2").disabled = false;

        });

         $('.popup-close-icon').click(function (event){
            $('.popup-finish-test').fadeOut();
             document.getElementById("finish_test_2").disabled = true;
         });


    });
</script>

    
</body>
</html>