<?php

    session_start();

    if (!$_SESSION['user']) {
        $loginout = 'Войти';
    } else {
        $loginout = 'Выход';
    }

    if(!isset($_SESSION["theme"])){
        $_SESSION["theme"] = "light";
    } 

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

    <!-- MathJax -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

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

    <div class="theory">
    	<div class="container">
    		<div class="theory-header theory-header-main">Задание 1</div>
    		<p>Первое задание в варианте ЕГЭ по математике профильного уровня &ndash; одно из самых легких. И тем не менее даже отличники часто ошибаются, решая такие задачи. Почему? &ndash; Потому что не прочитали условие или допустили арифметическую ошибку. Внимательно читайте условие и проверяйте решение. И не спешите. Необходимые для его выполнения знания ученик должен усвоить уже к 5-6 классу. А именно:</p>
    		<ul>
    		<li>арифметические действия;</li>
    		<li>десятичные дроби;</li>
    		<li>округление десятичных дробей;</li>
    		<li>перевод одних единиц измерения в другие;</li>
    		<li>проценты;</li>
    		<li>пропорции;</li>
    		<li>построение математической модели задачи;</li>
    		<li>интерпретация результата решения задачи;</li>
    		<li>учет реальных ограничений в интерпретации результата.</li>
    		</ul>
    		<p>В основном встречаются задания пяти типов:</p>
    		<ul>
    		<li>Вычисления</li>
    		<li>Округление с недостатком</li>
    		<li>Округление с избытком</li>
    		<li>Проценты просмотреть</li>
    		<li>Проценты и округление</li>
    		</ul>
    		<p>Труднее всего выпускники справляются с заданиями, где нужно посчитать время или перевести единицы из одних в другие.&nbsp;<strong>Важно помнить</strong>, что время считается не в десятичной системе (в сутках 24 часа, а в часе 60 минут). При решении первого задания иногда требуются дополнительные знания, например, понятие о часовом времени. Однако все вполне решаемо.</p>
    		<div class="theory-header">Примеры</div>
    		<div class="theory-header theory-header-semi">Вычисления</div>
    		<div class="example">
    			<p class="example-text">Килограмм орехов стоит 75 рублей. Маша купила 4 кг 400 г орехов. Сколько рублей сдачи она должна получить с 350 рублей?</p>
    			<p class="example-solution-header">Решение</p>
    			<p class="example-solution">Найдем стоимость покупки: 4 кг 400 г орехов стоит 4,4&nbsp;&middot;&nbsp;75&nbsp;=&nbsp;330 рублей. Значит, с 350 рублей Маша получит сдачи 350&nbsp;&minus;&nbsp;330&nbsp;=&nbsp;20 рублей.</p>
    			<p class="example-answer" class="example-answer">Ответ: 20</p>
    		</div>
    		<div class="example">
    			<p>Поезд Казань-Москва отправляется в 21:35, а прибывает в 10:35 на следующий день (время московское). Сколько часов поезд находится в пути?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>В день отправления поезд едет (24 &minus; 21) &middot; 60 &minus; 35 = 3 &middot; 60 &minus; 35 = 145 минут, а на следующий день до момента прибытия он едет 10 &middot; 60 + 35 = 635 минут. Всего в пути поезд проведет 145 + 635 = 780 минут. Разделим 780 на 60:</p>
    			<p>Значит, поезд находится в пути 13 часов.</p>
    			<p class="example-answer">Ответ: 13</p>
    		</div>
    		<p class="theory-header theory-header-semi">Округление с недостатком</p>
    		<div class="example">
    			<p>В обменном пункте 1 гривна стоит 3 рубля 70 копеек. Отдыхающие обменяли рубли на гривны и купили 3 кг помидоров по цене 4 гривны за 1 кг. Во сколько рублей обошлась им эта покупка? class="example-answer" Ответ округлите до целого числа.</p>
    			<p class="example-solution-header">Решение</p>
    			<p>За 3 кг помидоров отдыхающие заплатили 4 &middot; 3 = 12 гривен. Значит, в рублях они заплатили: 12 &middot; 3,7 = 44,4 рубля. Округляем до целого числа, получаем 44.</p>
    			<p class="example-answer">Ответ: 44</p>
    		</div>
    		<div class="example">
    			<p>Сырок стоит 7 рублей 20 копеек. Какое наибольшее число сырков можно купить на 60 рублей?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>Разделим 60 на 7,2:</p>
    			<p>Значит, на 60 рублей можно купить 8 сырков.</p>
    			<p class="example-answer">Ответ: 8</p>
    		</div>
    		<p class="theory-header theory-header-semi">Округление с избытком</p>
    		<div class="example">
    			<p>Больному прописано лекарство, которое нужно пить по 0,5 г 3 раза в день в течение 21 дня. В одной упаковке 10 таблеток лекарства по 0,5 г. Какого наименьшего количества упаковок хватит на весь курс лечения?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>Больному нужно выпить 0,5 &middot; 3 &middot; 21 = 31,5 г лекарства. В одной упаковке содержится 0,5 &middot; 10 = 5 г лекарства. Разделим 31,5 на 5:</p>
    			<p>Значит, на курс лечения шести упаковок не хватит, требуется 7 упаковок.</p>
    			<p class="example-answer">Ответ: 7</p>
    		</div>
    		<div class="example">
    			<p>Для ремонта квартиры требуется 63 рулона обоев. Сколько пачек обойного клея нужно купить, если одна пачка клея рассчитана на 6 рулонов?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>Разделим 63 на 6, получим 10,5. Следовательно, понадобится 11 пачек клея.</p>
    			<p class="example-answer">Ответ: 11</p>
    		</div>
    		<p class="theory-header theory-header-semi">Проценты</p>
    		<div class="example">
    			<p>Железнодорожный билет для взрослого стоит 720 рублей. Стоимость билета для школьника составляет 50% от стоимости билета для взрослого. Группа состоит из 15 школьников и 2 взрослых. Сколько рублей стоят билеты на всю группу?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>Билет для ребенка стоит 720 &middot; 0,5 = 360 руб. Стоимость билетов на 15 школьников и двух взрослых составляет 360 &middot; 15 + 720 &middot; 2 = 5400 + 1440 = 6840 руб.</p>
    			<p class="example-answer">Ответ: 6840</p>
    		</div>
    		<div class="example">
    			<p>В школе 800 учеников, из них 30% &mdash; ученики начальной школы. Среди учеников средней и старшей школы 20% изучают немецкий язык. Сколько учеников в школе изучают немецкий язык, если в начальной школе немецкий язык не изучается?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>Учеников начальной школы 800 &middot; 0,3 = 240, а учеников средней и старшей школы &mdash; 800 &minus; 240 = 560. Значит, немецкий язык в школе изучают 560 &middot; 0,2 = 112 учеников.</p>
    			<p class="example-answer">Ответ: 112</p>
    		</div>
    		<p class="theory-header theory-header-semi">Проценты и округление</p>
    		<div class="example">
    			<p>Флакон шампуня стоит 160 рублей. Какое наибольшее число флаконов можно купить на 1000 рублей во время распродажи, когда скидка составляет 25%?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>Во время распродажи шампунь станет стоить 160 &minus; 0,25 &middot; 160 = 120 рублей. Разделим 1000 на 120:</p>
    			<p>Значит, можно будет купить 8 флаконов шампуня.</p>
    			<p class="example-answer">Ответ: 8</p>
    		</div>
    		<div class="example">
    			<p>Шариковая ручка стоит 40 рублей. Какое наибольшее число таких ручек можно будет купить на 900 рублей после повышения цены на 10%?</p>
    			<p class="example-solution-header">Решение</p>
    			<p>После повышения цены ручка станет стоить 40 + 0,1 &middot; 40 = 44 рубля. Разделим 900 на 44:</p>
    			<p>Значит, можно будет купить 20 ручек.</p>
    			<p class="example-answer">Ответ: 20</p>
    		</div>
    	</div>
    </div>

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
    
</body>
</html>