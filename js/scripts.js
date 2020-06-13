$(document).ready(function(){

	/*Модульное окно - база*/
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



	/*Модульное окно - профиль*/
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
    $('.theme-switch').on('click',function(event) {

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

        var white_switch = $(this).hasClass('white-themed-switch')

        if (!white_switch){

            Whiten_Page();
        }

        else if (white_switch){

            Darken_Page();
        }

    });

});
