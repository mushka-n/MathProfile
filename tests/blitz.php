<?php
    session_start();

    
    /*Присоединение базы данных 'mathege'*/
    require_once '../vendor/connect.php'; 

    require_once 'answers.php'; 

    if (!$_SESSION['user']) {
    } else {
        $loginout = 'Выход';
        $id=$_SESSION['user']['id'];
    }


    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
    } 



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
    $answers= json_encode($answers,JSON_NUMERIC_CHECK);

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
   
               <span class="menu-login-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a" id='loginout'><?php echo $loginout ?></a></span>
   
           </div>
       </div>
       <div class="theme-switch" id="theme-switch"></div>
   </div> 


    <div class="menu-skipper"></div>

    <div class="personal-test blitz">
        <div class="contaner">



            
            <div class="huge">
                
                <img src="" alt="" class="huge-task">


                <div class="huge-block">
                    <input type="text" class="huge-answer" id="user_answer" placeholder="Ваш ответ" name="a10"><label for="huge_answer_10" class="huge-answer-label">Ваш ответ</label>
                </div>


                <button class="button" id="check_answer">Сдать задание (<span id="countdown">45</span>)</button>


                <div class="results">
                    <div class="huge-answers" id="results">
                        <div class="huge-answers-block huge-answers-right" >Ответ:<br><span id="r_answer"></span></div>
                        <div class="huge-answers-block huge-answers-user">Ваш ответ:<br><span id="u_answer"></span></div>
                        <div class="huge-answers-block huge-answers-show-solution">Показать<br>решение</div>
                    </div>

                    <div class="huge-solution">
                        <img src="" alt="" class="huge-solution-img">
                    </div>
                </div>

                


                


                <div class="popup-finish-test popup">

                    <div class="popup-inner">
                        
                        
                    </div>
                </div>    


                    

                <button class="button" id="next_task">Следующее задание</button>
                



                


            </div>


        </div>
    </div>


    <form action="push_blitz" method="POST" class="blitz-finish">
        <input type="text" name="blitz"  id="results"  value="" style="display:none">
        <button class="button">Сохранить результаты и выйти</button>
    </form>

    <footer>
        <div class="footer-block">
            <a href="">© 2019-2020  Мушка Никита</a>
        </div>
        <div class="footer-block">
            <a href="../footer/privacy.html">Политика конфиденциальности</a>
        </div>
        <div class="footer-block">
            <a href="../footer/termsofuse.html">Пользовательское соглашение</a>
        </div>
    </footer>

<script src="chanses.js"> </script>
<script>
    $(document).ready(function(){

        let answers = JSON.parse(<?php echo json_encode($answers)?>);
        console.log(answers);

        let tasks_nums = JSON.parse(<?php echo json_encode($tasks_nums)?>);
        console.log(tasks_nums);

        var alltnum=0
        for (let i=0; i<19;i++){
            for (let j=0; j<tasks_nums[i].length;j++){
                alltnum+=tasks_nums[i][j]
            }
        }

        function randint(min, max) { return Math.floor( Math.random() * (max - min + 1)) + min; }


        function check_path(path,paths){
            
             for (let i=0; i<paths.length;i++){
                if (path==paths[i]){
                    return 1;
                }
                 //console.log(path,' - ',paths[i]);
             }
             return 0;
        }

        function create_path(ch,tasks_nums){
            task = randint(1,12);
            type = randint(1,ch[task-1].length);
            path = '../tasks/'+ task+'_' +type+'_' +randint(1,3)+'_' +randint(1,(tasks_nums[task-1][type-1])/3)+'.png';

            return path;
        }

       let timer = setInterval(() => 
            {
                var curr_time = document.getElementById('countdown')
                new_time = parseInt(curr_time.textContent)-1;
                curr_time.textContent = new_time;
                if (new_time == 0){
                    $('#next_task').trigger( "click" );
                }
            }
            , 1000
       );


        path = create_path(ch,tasks_nums);
        paths = [path];
        $('.huge-task').attr('src',path);

        $('#next_task').click(function(event){
            $('#check_answer').css('display','block');
            $('#results').css('display','none');
            $('#user_answer').val('');
            cd = document.getElementById('countdown');
            cd.textContent = 45;

            while (check_path(path,paths)){
                path=create_path(ch,tasks_nums);
            }

            n=paths.length
            paths[n]=path
            $('.huge-task').attr('src',path);


            $('.huge-solution-img').css('display','none');
            $('.huge-solution-img').css('border','none');
            
        });


        $('#check_answer').click(function(event){

            cd = document.getElementById('countdown');
            cd.textContent = 99999999999999;

            $('#check_answer').css('display','none');
            splitpath=path.split(/(\d)/);
            

            if (splitpath[2]==""){
                splitpath[1] = splitpath[1]+splitpath[3];
                answer=answers[splitpath[7]-1][splitpath[1]-1][splitpath[5]-1][splitpath[9]-1];
            } else {
                answer=answers[splitpath[5]-1][splitpath[1]-1][splitpath[3]-1][splitpath[7]-1];
            }

            
            

            var r_answer = document.getElementById("r_answer");
            r_answer.textContent = answer;

            var u_answer=document.getElementById("u_answer");
            u_answer.textContent = $('#user_answer').val();

            $('#results').css('display','block');
            $('.huge-solution-img').attr('src',path.slice(0,-4)+'_s.png')

            if ( $('#user_answer').val() == answer){
                $('.huge-answers-user').css('border-color',"#54C99B");
            } else {
                $('.huge-answers-user').css('border-color',"#EB4F3C");
            }
            
        });

        
        
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
/*
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
*/

    $('img').each(function(){
        if ($(this).hasClass('huge-solution-img')){
            $(this).error(function(){ $(this).attr('src', '../tasks/0_0_0_0_s.png'); });
        } else {
            $(this).error(function(){ $(this).attr('src', '../tasks/0_0_0_0.png'); });
        }
    });


    


    });
</script>

    
</body>
</html>