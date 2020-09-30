$(document).ready(function(){

    /*
	Модульное окно - база
	$('.popup-button-baza').on('click', function(event) {
		event.preventDefault();
		$('.popup-baza').fadeIn();
		$('.menu-baza').fadeIn();

	});

	$('.popup-baza-close-icon').on('click',function(event){
		event.preventDefault();
		$('.popup-baza').fadeOut();
		$('.menu-baza').fadeOut();
	});

	$('.popup-baza-tasks-button').on('click',function(event) {
		event.preventDefault();
		for (let i=1;i<21 ;i++){
			$('.baza_'+i).css('display','none');
		}
		var id = $(this).attr("id");
		$('.baza_'+id).fadeIn();
		$('.popup-baza').animate({ scrollTop: 2000 }, 'slow');
	});



	Модульное окно - профиль
	$('.popup-button-profil').on('click', function(event) {
		event.preventDefault();
		$('.popup-profil').fadeIn();
		$('.menu-profil').fadeIn();
	});

	$('.popup-profil-close-icon').on('click',function(event){
		event.preventDefault();
		$('.popup-profil').fadeOut();
		$('.menu-profil').fadeOut();
		
	});

	$('.popup-profil-tasks-button').on('click',function(event) {
		event.preventDefault();
		for (let i=1;i<20;i++){
			$('.profil_'+i).css('display','none');
		}
		var id = $(this).attr("id");
		$('.profil_'+id).fadeIn();
		$('.popup-profil').animate({ scrollTop: 2000 }, 'slow');
	});
    */

    


	/*Скрипт для опросника по подсчету процентов*/
	$('.score').click(function(event){

        var all = $(this).attr('id');
        
        var input = document.getElementById(all);      

        let temp='';
        let task='';
        var type='';
        var chance='';

        for (let i=0; i<all.length; i++){
            temp = temp + all[i];

            if (all[i] == '.' && task==''){
                task = parseInt(temp.slice(0,temp.length-1));
                temp = '';
            }
            
            if (all[i] == '.' && task!=''){
                type = parseInt(temp.slice(0,temp.length-1));
                temp = '';
            }

            if (i==all.length-1){
                chance = parseInt(temp);
            }
        }        

        var output = document.getElementById(task);
        var output_value = parseInt(output.innerHTML);

        if (input.type == 'checkbox')
        {
            if (input.value == 0){
                input.value = 1;
                var pr = output_value+chance;
            } 
            else {
                input.value = 0;
                var pr = output_value-chance;
            }
        }
        else
        {
            var p_value = parseInt(input.alt);
            var value = parseInt(input.value);

            var pr = chance*((value-p_value)/parseInt(input.max)) + output_value;  
            pr = parseInt(pr.toFixed());

            input.alt = value; 

            if (pr == chance+2 || pr == chance+1 ||pr == chance-2 ||pr == chance-1) pr = chance;

            if (pr>100) pr = 100;
            else if (pr<2) pr = 0;
        }

        output.innerHTML = pr+'%';        
    });
   

    /*Смена тем*/
    var btn = document.getElementById("theme-switch");
    var link = document.getElementById("theme-link");

    btn.addEventListener("click", function () { ChangeTheme(); });

    function Save(theme)
    {
        var Request = new XMLHttpRequest();
        Request.open("GET", "/vendor/themes.php?theme=" + theme, true); //У вас путь может отличаться
        Request.send();
    }

    function ChangeTheme()
    {
        let lightTheme = "../css/light.css";
        let darkTheme = "../css/dark.css";

        var currTheme = link.getAttribute("href");
        var theme = "";

        if(currTheme == lightTheme)
        {
         currTheme = darkTheme;
         theme = "dark";
        }
        else
        {    
         currTheme = lightTheme;
         theme = "light";
        }

        link.setAttribute("href", currTheme);

        Save(theme);
    }

    var loginout = document.getElementById("loginout").textContent;
    if(loginout == 'Войти'){
        $('#loginout').attr('href','../vendor/authorisation.php')
        $('.for_auth').css("opacity","0.5");
        $('.if_auth').attr('action','../vendor/authorisation.php')
    }



        
        


});
