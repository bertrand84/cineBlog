$( document ).ready(function() {
    "use strict";
    console.log("hello");
    //CAROUSEL//
    $('#carousel').owlCarousel({
        singleItem: true,
        autoPlay: 3000,
        slideSpeed: 400,
        navigation: true,
        stopOnHover : true,
        itemsCustom: [[0,1],[768,3], [992,4]],
        navigationText : ['<i class="fa fa-arrow-circle-left" aria-hidden="true"></i>','<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>'],
    });
    //FIN CAROUSEL//


    //SIDEBAR//
    var sidebarjs = new SidebarJS();


    $('div.message').delay(5000).slideUp('slow');
    //FIN SIDEBAR//


    //DATE PICKER//

    

    $('.calendar').dcalendarpicker({
        // default: mm/dd/yyyy

        format: 'yyyy-mm-dd'
    });

    //FIN DATE PICKER//

    //VALIDATION FORMULAIRE//

   
    //VERFICATION MAIL//

    $('input#email').blur(function(){

        var regexMail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

        var inputMail = $('input#email').val();

        if(regexMail.test(inputMail)){
            $(this).css('border', '2px solid blue');
            $(this).siblings('.error-mail').slideUp('fast');
        }

        else{
            $(this).css('border', '2px solid red');
            $(this).siblings('.error-mail').slideDown('fast');
        }

    });

    //FIN VERFICATION MAIL//

    //VERFICATION PASSWORD//

    $('input#password').keyup(function(){

        var regexPassword = /^((?=.*\d)(?=.*[a-z])(?=.*[@#_&^*£§,;./:!"'|\(\)\\?+\=\-\_$%]).{8,})$/;

        var inputPassword = $('input#password').val();

        if(regexPassword.test(inputPassword)){
            $(this).css('border','2px solid blue');
            $(this).siblings('.error-password').slideUp('fast');
        }

        else{
            $(this).css('border','2px solid red');
            $(this).siblings('.error-password').slideDown('fast');
        }
    });

    //FIN VERFICATION PASSWORD//


});