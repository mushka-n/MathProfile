<?php

    session_start();

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
   
               <span class="menu-login-logout menu-block"><a href="../vendor/logout.php" class="menu-block-a" id='login-logout'>Выход</a></span>
   
           </div>
       </div>
       <div class="theme-switch" id="theme-switch"></div>
   </div> 


    <div class="menu-skipper"></div>

    <div class="theory">
    	<div class="container">


        <div class="theory-header theory-header-main">Задание 3</div>
        <p>Чтобы решить задание 3 по математике профильного уровня необходимо:</p>
        <ul>
        <li>умение вычислять&nbsp;площадь фигур</li>
        <li>умение вычислять градусные меры углов,</li>
        <li>вычислять периметры и т.п.</li>
        </ul>
        <p>Основные формулы:</p>
        <ul>
        <li>Длина средней линии трапеции находится по формуле&nbsp;$$ l=\frac{a+b}{2}$$</li>
        <li>Формула&nbsp;Пика&nbsp;<em>$$S={B+\frac{Г}{2}}-1$$</em>&nbsp;, где&nbsp;<em><br>S</em>&nbsp;- площадь многоугольника,&nbsp;<em><br>В</em>&nbsp;- количество узлов сетки, лежащих внутри многоугольника,&nbsp;<br><em>Г</em>&nbsp;- количество узлов сетки, лежащих на границе многоугольника .</li>
        </ul>
        <p class="theory-header">Формулы нахождения площади фигур</p>
        <p class="theory-header-semi">Параллелограмм</p>
        <img src="pics/31.png" alt="" class="theory-image">
        <p>$$S=ah_{a}$$</p>
        <p>$$S=ab\sin(y)$$</p>
        <p class="theory-header-semi">&nbsp;Треугольник</p>
        <img src="pics/32.png" alt="" class="theory-image">
        <p>$$S=\frac{1}{2}ah_{a}$$</p>
        <p>$$S=\frac{1}{2}ab\sin(y)$$</p>
        <p class="theory-header-semi">&nbsp;Трапеция</p>
        <img src="pics/33.png" alt="" class="theory-image">
        <p>$$ l=\frac{a+b}{2}$$</p>
        <p class="theory-header-semi">&nbsp;Ромб</p>
        <img src="pics/34.png" alt="" class="theory-image">
        <p>d<sub>1</sub>,d<sub>2&nbsp;</sub>&mdash; диагонали</p>
        <p>$$S=\frac{1}{2}d_{1}d_{2}$$</p>
        <p>&nbsp;</p>
        <p class="theory-header-semi">Средняя линия треугольника и трапеции</p>
        <img src="pics/35.png" alt="" class="theory-image">
        <p><em>BC&nbsp;</em>‖<em> AD</em></p>
        <p><em>MN&nbsp;-&nbsp;</em>ср. линия</p>
        <p><em>MN&nbsp;</em>‖ <em>AD</em></p>
        <p>$$MN=\frac{BC+AD}{2}$$</p>
        <img src="pics/36.png" alt="" class="theory-image">
        <p>MN<em> -</em>&nbsp;ср. линия</p>
        <p>MN ‖ AC</p>
        <p>$$MN=\frac{AD}{2}$$</p>
        <p class="theory-header-semi">Радиус вписанной окружности:</p>
        
        <p>$$r=\frac{S}{p}$$​, где S - площадь треугольника, $$p=\frac{a+b+c}{2}$$</p>
        <p class="theory-header-semi">Радиус описанной окружности:</p>
        <p>R=$$\frac{abc}{4s}$$, где S- площадь треугольника</p>
        <p class="theory-header">Примеры</p>
        <p class="theory-header-semi theory-header-semi-noborder">Многоугольники: вычисление длин и углов</p>
        <div class="example">
          <p>Найдите большую диагональ ромба.</p>
          <img src="pics/37.jpg" alt="" class="theory-image">
          <p><p class="example-solution-header">Решение:</p> собственно, все, что нужно знать &ndash; определение диагонали и понятие больше-меньше.</p>
          <img src="pics/38.jpg" alt="" class="theory-image">
          <p><em>Ответ: 4 см.</em></p>
          <p>Удивительно, что в профильной математике встречаются такие задания. И в них тоже допускают ошибки. Видимо, от неожиданности уровня сложности.</p>
          <p>Далее для разбора выбраны наиболее сложные задачи, встречавшиеся в третьем задании на экзаменах прошлых лет.</p>
        </div>
        <div class="example">
          <p><em>Найдите площадь треугольника.</em></p>
          <img src="pics/39.jpg" alt="" class="theory-image">
          <p><p class="example-solution-header">Решение:</p></p>
          <p>1) Достроим фигуру до прямоугольника. Его площадь равна 6*4=24</p>
          <img src="pics/310.jpg" alt="" class="theory-image">
          <p>2) Найдем площади &laquo;лишних&raquo; прямоугольных треугольников</p>
          <p>(4*4)/2=8 (зеленый)<br />(2*2)/2=2 (синий)<br />(6*2)/2=6 (красный)</p>
          <img src="pics/311.jpg" alt="" class="theory-image">
          <p>3) Вычтем из площади прямоугольника лишние площади треугольников: 24-8-2-6=8</p>
          <p><em>Ответ: 8.</em></p>
          <p>Эту же задачу можно решить другим способом.</p>
          <p>1) Треугольник является прямоугольным, так как его катеты расположены под углом 45 градусов к вертикальной линии.</p>
          <p>2) Катеты найдем из прямоугольных треугольников</p>
          <img src="pics/312.jpg" alt="" class="theory-image">
          <p>$$\sqrt{4^2+4^2}=4\sqrt{2}$$ (четыре корня из двух)<br />$$\sqrt(2^2+2^2)=2\sqrt{2}$$ (два корня из двух)</p>
          <p>3) Площадь искомого треугольника равна половине произведения катетов: $$\frac{4\sqrt{2}*2\sqrt{2}}{2}=\frac{4*2*2}{2}=8$$</p>
          <p><em>Ответ: 8.</em></p>
        </div>
        <div class="example">
          <p><em>Найдите площадь многоугольника</em></p>
          <img src="pics/313.jpg" alt="" class="theory-image">
          <p><p class="example-solution-header">Решение:&nbsp;</p>разобьем многоугольник на удобные фигуры и найдем их площади.</p>
          <img src="pics/314.jpg" alt="" class="theory-image">
          <p>Площадь зеленого треугольника $$1*3/2=1,5$$<br/>Площадь синего треугольника $$2*1/2=1$$<br />Площадь красного треугольника $$1*2/2=1$$<br />Площадь квадрата $$2*2=4$$<br />Площадь многоугольника равна их сумме: $$1,5+1+1+4=7,5$$</p>
          <p><em>Ответ: 7,5.</em></p>
          <p>Эту задачу можно решить и вычитанием из площади прямоугольника.</p>
          <img src="pics/315.jpg" alt="" class="theory-image">
          <p><em>Ответ: 7,5.</em></p>
        </div>
        <div class="example">
          <p><em>Найти площадь многоугольника.</em></p>
          <img src="pics/316.jpg" alt="" class="theory-image">
          <p><p class="example-solution-header">Решение:&nbsp;</p>можно найти площадь вычитанием, как и в предыдущих заданиях.</p>
          <img src="pics/317.jpg" alt="" class="theory-image">
          <p>Но быстрее можно получить результат с помощью формулы Пика. Для этого нужно сосчитать точки с целыми координатами внутри фигуры (синие) и точки с целыми координатами на контуре фигуры (красные).</p>
          <img src="pics/318.jpg" alt="" class="theory-image">
          <p>Далее к числу точек внутри многоугольника прибавить половину точек на контуре и вычесть единицу.</p>
          <img src="pics/319.jpg" alt="" class="theory-image">
          <p>$$7+9/2-1=10,5$$</p>
          <p><em>Ответ: 10,5</em></p>
          <p>Формула Пика не указана в кодификаторе, применять ее при решении заданий с развернутым ответом нельзя. Но в заданиях с кратким ответом она позволяет сэкономить время. Проверьте справедливость формулы на предыдущих примерах.</p>
        </div>
        <div class="example">
          <p><em>Найдите градусную меру угла АВС.</em></p>
          <img src="pics/315.jpg" alt="" class="theory-image">
          <p><p class="example-solution-header">Решение:&nbsp;</p>Точка А имеет нецелые координаты, однако теорема о вписанном и центральном углах позволяет легко решить задачу.</p>
          <p>Проведем радиусы в точки А и С.</p>
          <img src="pics/315.jpg" alt="" class="theory-image">
          <p>По рисунку видно, что центральный угол АОС равен 135 градусам. Вписанный угол АВС опирается на те же точки окружности А и С. Согласно теореме, он в два раза меньше центрального.</p>
          <p>135/2=67,5</p>
          <p><em>Ответ: 67,5.</em></p>
        </div>
        <div class="example">
          <p><em>Найдите тангенс угла.</em></p>
          <img src="pics/315.jpg" alt="" class="theory-image">
          <p><p class="example-solution-header">Решение:&nbsp;</p>выделим смежный острый угол.</p>
          <p>Выделим прямоугольный треугольник с целочисленными координатами вершин, содержащий этот угол. Найдем тангенс острого угла как отношение противолежащего (зеленого) катета к прилежащему (синему).</p>
          <img src="pics/315.jpg" alt="" class="theory-image">
          <p>tgA=4/1=4</p>
          <p>Тангенс смежного тупого угла противоположен по знаку.</p>
          <p><em>Ответ: -4.</em></p>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>


    	</div>
    </div>


    
</body>
</html>