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

});