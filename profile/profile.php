<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MLS-exams</title>

    <!-- Favicon -->
    <link rel="icon" href="../imgs/icons/favicon.png" type="image/x-icon">

    <!--Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--jQuerry -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    

    <div class="menu" id="menu">

        <div class="container">

            <div class="row">

                <span class="menu-logo menu-block"><a href="profile.php" class="menu-block-a"><img src="../imgs/icons/favicon.png" alt="" id="menu-logo"><span>MLS<br>EXAMS</span></a></span>

                <span class="menu-user menu-block" ><?= $_SESSION['user']['full_name'] ?></span>

                <span class="menu-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a">Выход</a></span>

            </div>
        </div>
        <div class="theme-switch" id="theme-switch"></div>
    </div>

    <!-- Профиль -->

    <div class="profile" id="profile">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="options">
                        <div class="options-progress">
                            <form class="margin" action="progress.php">
                                <button class="button" type="submit">мой прогресс</button>
                            </form>
                            <form action="">
                                <button class="button" type="submit">внести изменения</button>
                            </form>
                        </div>
                        <div class="options-functional">
                            <form action="">
                                <button class="button" type="submit">теория и практика</button>
                            </form>
                            <form action="">
                                <button class="button" type="submit">составить тест</button>
                            </form>
                            <form action="">
                                <button class="button" id="button" type="submit">печатные материалы</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="zefirka">
            <div class="a_ya_tebya_bolshe zefirka-block">
                <img src="../imgs/zephyrka/a_ya_bolshe.gif" alt="">
            </div>
            <div class="moya_zefirka zefirka-block">
                <img src="../imgs/zephyrka/moya_zefirka.gif" alt="">
            </div>
            
        </div>
    </div>



    <script>

        function Whiten_Page() {

            $(document.getElementById('menu')).addClass("white-themed-menu");
            $(document.getElementById('menu-logo')).addClass("white-themed-menu-logo");
            let as = (document.getElementsByClassName('menu-block-a'));
            for (let i = 0; i < as.length; i++)$(as[i]).addClass("white-themed-menu-block-a");
            $(document.getElementById('theme-switch')).addClass("white-themed-switch");           

            $(document.getElementById('profile')).addClass("white-themed-profile");

            let buttons = (document.getElementsByClassName('button'));
            for (let i = 0; i < buttons.length; i++){
                $(buttons[i]).addClass("white-themed-button");
            }
        }

        function Darken_Page(){

            $(document.getElementById('theme-switch')).removeClass("white-themed-switch");

            let as = (document.getElementsByClassName('menu-block-a'));

            for (let i = 0; i < as.length; i++){
                $(as[i]).removeClass("white-themed-menu-block-a");
            }

            $(document.getElementById('menu')).removeClass("white-themed-menu");

            $(document.getElementById('menu-logo')).removeClass("white-themed-menu-logo");

            $(document.getElementById('profile')).removeClass("white-themed-profile");

            let buttons = (document.getElementsByClassName('button'));

            for (let i = 0; i < buttons.length; i++){
                $(buttons[i]).removeClass("white-themed-button");
            }
        }


        $('.theme-switch').on('click',function(event) {

            var white_switch = $(this).hasClass('white-themed-switch')

            if (!white_switch){

                Whiten_Page();
            }

            else if (white_switch){

                Darken_Page();
            }

        });

    </script>

    <script>
        var phrase1 = 0;
        var phrase2 = 0;

        document.onkeydown = function(event){

            if (event.code == 'KeyK' && phrase2 == 0) phrase2 = 1;
            if (event.code == 'Period' && phrase2 == 1) phrase2 = 2; 
            if (event.code == 'Comma' && phrase2 == 2) phrase2 = 3;
            if (event.code == 'KeyK' && phrase2 == 3) phrase2 = 4;
            if (event.code == 'Period' && phrase2 == 4) phrase2 = 5;
            if (event.code == 'Space' && phrase2 == 5) phrase2 = 6;
            if (event.code == 'KeyN' && phrase2 == 6) phrase2 = 7;
            if (event.code == 'KeyT' && phrase2 == 7) phrase2 = 8;
            if (event.code == 'Comma' && phrase2 == 8) phrase2 = 9;
            if (event.code == 'KeyZ' && phrase2 == 9) {
                phrase2 = 0;

                var email = "<?php echo $_SESSION['user']['email']; ?>";
                if (email == 'liza.savina.01@inbox.ru'){
                    
                    $(".a_ya_tebya_bolshe").fadeIn();
                }
            }

            if (event.code == 'Comma' && phrase1 == 0) phrase1 = 1;
            if (event.code == 'KeyJ' && phrase1 == 1) phrase1 = 2; 
            if (event.code == 'KeyK' && phrase1 == 2) phrase1 = 3;
            if (event.code == 'KeyM' && phrase1 == 3) phrase1 = 4;
            if (event.code == 'KeyI' && phrase1 == 4) phrase1 = 5;
            if (event.code == 'KeyT' && phrase1 == 5) phrase1 = 6;
            if (event.code == 'Space' && phrase1 == 6) phrase1 = 7;
            if (event.code == 'Semicolon' && phrase1 == 7) phrase1 = 8;
            if (event.code == 'KeyB' && phrase1 == 8) phrase1 = 9;
            if (event.code == 'KeyP' && phrase1 == 9) phrase1 = 10;
            if (event.code == 'KeyY' && phrase1 == 10) phrase1 = 11;
            if (event.code == 'KeyB' && phrase1 == 11 ){
                phrase1 = 0;

                var email = "<?php echo $_SESSION['user']['email']; ?>";
                if (email == 'liza.savina.01@inbox.ru'){
                    console.log(email);
                    $(".moya_zefirka").animate({ width: "toggle"}, 600);
            }
        }}
    </script>


    
</body>
</html>