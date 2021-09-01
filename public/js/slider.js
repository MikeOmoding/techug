$( document ).ready(function() {
    let w = window.innerWidth;

    if(w > 767){
        $('#menu-jk').scrollToFixed();
    }else{
       // $('#menu-jk').scrollToFixed();
    }

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        autoplay: true,
        dots: true,
        autoplayTimeout: 5000,
        navText:['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(".filter-button").click(function(){
        let value = $(this).attr('data-filter');

        if(value === "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }

    $(this).addClass("active");


});
