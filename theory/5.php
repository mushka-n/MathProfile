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

        <div class="theory-header theory-header-main">Задание 5</div>
        <p>Для успешного решения этого задания необходимо знать:</p>
        <ul>
        <li>Формулы сокращенного умножения</li>
        <li>Свойства показателей степени</li>
        <li>Свойства корней</li>
        <li>Основное логарифмическое тождество и свойства логарифмов</li>
        <li>Основное тригонометрическое тождество и следствия из него: формулы тангенса, котангенса; синуса и косинуса суммы разности двух аргументов, формулы синуса и косинуса двойного аргумента</li>
        <li>Знаки тригонометрических функций</li>
        <li>Четность и нечетность тригонометрических функций</li>
        <li>Периодичность тригонометрических функций</li>
        <li>Значения тригонометрических функций</li>
        <li>Формулы приведения</li>
        </ul> 


        <p class="theory-header-semi">Формулы сокращенного умножения</p>
        <img src="pics/51.jpg" alt="" class="theory-image-huge">


        <p class="theory-header-semi">Свойства показателей степени</p>
        <ul class="withborders">
        <li>$$a^{m}*a^{n}=a^{m+n}$$<br>(При умножении<span></span>степеней с одинаковыми основаниями основание оставляют прежним, а показатели степеней складывают).</li>
        <li>$$\frac{a^{m}}{a^{n}}=a^{m-n}$$<br>(При делении степеней с одинаковыми основаниями основание оставляют прежним, а из показателя степени делимого вычитают показатель степени делителя).</li>
        <li>$$(a^{m})^{n}=a^{mn}$$<br>(При возведении степени в степень основание оставляют прежним, а показатели перемножают).</li>
        <li>$$(ab)^{n}=a^{n}b^{n}$$<br>(При возведении в степень произведения возводят в эту степень каждый множитель и результаты перемножают).</li>
        <li>$$(\frac{a}{b})^{n}=\frac{a^{n}}{b^{n}}$$<br>(При возведении в степень частного возводят в эту степень и делимое, и делитель, результаты делят).<p></p>
        <p>Кроме того, $$a^{0}=1$$(где a &ne; 0)</p>
        <p>Если n &mdash; натуральное число, то $$a^{-n}=\frac{1}{a^{n}}$$</p>
        <p>в частности,$$a^{-1}=\frac{1}{a}$$;&nbsp;&nbsp; $$(\frac{a}{b})^{-n}=(\frac{b}{a})^{n}$$;&nbsp;&nbsp; $$(\frac{a}{b})^{-1}=\frac{b}{a}$$</p>
        <p>Для a&gt;0 $$a^{\frac{m}{n}}=\sqrt[n]{a^{m}}$$<span></span></p>
        <p>В частности,$$a^{\frac{1}{2}}=\sqrt{a}$$</p></li>
        <li>при $$r>0, 0^{r}=0$$</li>
        <li>Свойства степеней с натуральным и целым показателем верны и для степеней с рациональными и иррациональными показателями, но накладывается дополнительное условие: основания степеней в этом случае должны быть положительными.</li>
        <li class=withborders-last>По определению, для любого a $$1^{a}=1$$</li>
        </ul>


        <p class="theory-header-semi">Свойства корней</p>
        <p>Будем считать, что все рассматриваемые числа неотрицательны, а числа, стоящие в знаменателе, не равны нулю.<br /><br /></p>
        <ul class="withborders">
        <li>Свойство 1.$$(\sqrt[n]{a})^{n}=a$$</li>
        <li>Свойство 2.$$\sqrt[n]{ab}=\sqrt[n]{a}*\sqrt[n]{b}$$;&nbsp;&nbsp; $$\sqrt[n]{\frac{a}{b}}=\frac{\sqrt[n]{a}}{\sqrt[n]{b}}, b>0$$;&nbsp;&nbsp; $$\sqrt[n]{a^{k}}=(\sqrt[n]{a})^{k}$$</li>
        <li>Свойство 3.$$\sqrt[n]{\sqrt[k]{a}}=\sqrt[nk]{a}$$;&nbsp;&nbsp; $$\sqrt[n]{a^{m}}=\sqrt[nk]{a^{mk}}$$</li>
        <li>Свойство 4.&nbsp; Если $$a>b$$, то $$\sqrt[n]{a}>\sqrt[n]{b}$$</li>
        <li class=withborders-last>Свойство 5.&nbsp; Пусть $$m>n$$. Если $$a>1$$, то $$\sqrt[m]{a}<\sqrt[n]{a}$$. Если $$0< a<1$$, то $$\sqrt[m]{a}>\sqrt[n]{a}$$</li>
        
        </ul>

        <p><span class="strong">Замечание.</span class="strong"> Некоторые формулы с небольшими изменениями можно переписать и для отрицательных чисел. При этом под знаком радикала может появится модуль числа.<br />Например, если числа<em> а </em>и<em> b </em>одного знака, свойство 2 запишется так:
          $$\sqrt[n]{ab}=\sqrt[n]{|a|}*\sqrt[n]{|b|}$$;&nbsp;&nbsp; $$\sqrt[n]{\frac{a}{b}}=\frac{\sqrt[n]{|a|}}{\sqrt[n]{|b|}}$$
        </p>


        <p class="theory-header-semi">Основное логарифмическое тождество и свойства логарифмов</p>
        <p>Рассмотрим два произвольных действительных числа a и b, удовлетворяющих условиям$$a>0, a\not=1, b>0$$</p>
        <p class="definition"><span class="italic strong">Определение:</span>&nbsp; Логарифмом числа b по основанию a называют такую степень, в которую надо возвести число a, чтобы получить число b.</p>
        <p> Для логарифма числа b по основанию a используется обозначение: $$\log_{a}{b}$$</p>
        <p></p>
        <p> Таким образом, для всех действительных чисел a и b, удовлетворяющих условиям, справедливо равенство $$a^{\log_{a}{b}}=b$$, которое часто называют основным логарифмическим тождеством.</p>
        <p class="strong" style="text-align: center;">Свойства логарифмов:</p>
        <ul class="withborders">
          <li>$$a^{\log_{a}{b}}=b$$ &ndash; основное логарифмическое тождество</li>
          <li>$$\log_{a}{a}=1,a>0,a\not=1$$</li>
          <li>$$\log_{a}{1}=0,a>0,a\not=1$$ <p>Логарифм единицы по любому положительному, отличному от 1, основанию равен нулю. Это возможно потому, что из любого действительного числа можно получить 1 только возведя его в нулевую степень.</p></li>
        
        <li>$$\log_{a}{bc}=\log_{a}{b}+\log_{a}{c}$$ &ndash; логарифм произведения <p>Логарифм произведения равен сумме логарифмов сомножителей.</p></li>
        
        <li>$$\log_{a}{\frac{b}{c}}=\log_{a}{b}-\log_{a}{c}$$ &ndash; логарифм частного <p>Логарифм частного (дроби) равен разности логарифмов сомножителей.</p></li>

        
        <li>$$\log_{a}{b^{p}}=p\log_{a}{b}$$ &ndash; логарифм степени <p>Логарифм степени равен произведению показателя степени на логарифм ее основания.</p></li>
        
        <li>$$\log_{a^{k}}{b}=\frac{1}{k}\log_{a}{b}$$</li>
        <li>$$\log_{a}{b}=\frac{1}{\log_{b}{a}}$$</li>
        <li class=withborders-last>$$\log_{a}{b}=\frac{\log_{c}{b}}{\log_{c}{a}}$$ - переход к новому основанию.</li>
        </ul>


        <p class="theory-header-semi">Формулы тригонометрии</p>
        <img src="pics/52.jpg" alt="" class="theory-image-huge">


        <p class="theory-header-semi">Знаки тригонометрических функций</p>
        <img src="pics/53.jpg" alt="" class="theory-image-huge">


        <p class="theory-header-semi">Четность и нечетность тригонометрических функций</p>
        <img src="pics/54.png" alt="" class="theory-image-huge theory-image-huge-semi">
        <p style="text-align: center; opacity: 0.7; font-style: italic;">Единичная окружность</p>
        <p  style="text-align: center;">Точки 𝐴 и 𝐶 получены поворотом точки (1;0) на углы α и −α соответственно.</p>

        <p>Абсциссы этих точек совпадают, а ординаты различаются только знаками, т. е. $$\sin(-\alpha)=-\sin(\alpha)$$ и $$\cos(-\alpha)$$ = $$\cos(\alpha)$$ Следовательно, функция $$y=\sin{x}$$ является нечётной функцией, а $$y=\cos{x}$$ чётной функцией.</p>

        <p>Так как функция $$y=\tan{x}=\frac{\sin{x}}{\cos{x}}$$, то будет верно равенство $$\tan{-x}=-\tan{x}$$, т.е. функция $$y=\tan{x}$$ - нечётная функция.</p>

        <p>Так как функция $$y=\cot{x}=\frac{\cos{x}}{\sin{x}}$$, то будет верно равенство $$\cot{-x}=-\cot{x}$$, т.е. функция $$y=\cot{x}$$ нечётная функция.</p>



        <p class="theory-header-semi">Периодичность тригонометрических функций</p>
        <p class="definition"><span class="italic strong">Определение:</span>Функция $$𝑦=𝑓(𝑥)$$ называется периодической, если существует такое число $$𝑇\neq0$$, что для любого $$𝑥$$ из области определения этой функции выполняется равенство $$f(x-T)=f(x)=f(x+T)$$.</p>
        <p> </p>
        <p class="definition">Число $$T$$ называется периодом функции  $$𝑓(𝑥)$$.</p>
        <p>Из этого определения следует, что если 𝑥 принадлежит области определения функции $$𝑓(𝑥)$$, то числа $$x-𝑇;\quad𝑥+𝑇;\quad𝑥+𝑇_{n},n\inℤ$$ также принадлежат области определения этой периодической функции, и $$𝑓(𝑥+𝑇_{n})=𝑓(𝑥),𝑛\inℤ$$. </p>
        <p> </p>
        <p>Вращая точку 𝐴 вокруг центра единичной окружности в положительном или отрицательном направлении, замечаем, что она вернётся к исходному положению, только угол поворота будет на $$2\pi$$ больше или меньше, но координаты точки 𝐴 останутся теми же, т. е. </p>
        <p>$$\sin{\alpha}=\sin{\alpha+2\pi};\quad\cos{\alpha}=\cos{\alpha+2\pi}$$</p>
        <p>Значит, число $$2\pi$$ является наименьшим положительным периодом для функций $$𝑦=\sin{𝑥}$$ и $$𝑦=\cos{𝑥}$$</p>
        <p>Число $$\pi$$ является наименьшим положительным периодом для функции $$y=\tan{x},\quad y=cot{x}$$ так как значение тангенса, котангенса угла поворота будет повторяться через $$\pi$$ радиан.</p>


        <p class="theory-header-semi">Значения тригонометрических функций</p>
        <img src="pics/55.jpg" alt="" class="theory-image-huge">


        <p class="theory-header-semi">Формулы приведения</p>
        <img src="pics/56.jpg" alt="" class="theory-image-huge">

    	</div>
    </div>


    
</body>
</html>