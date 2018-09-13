$(document).ready(() => {

    var btnTop = document.getElementsByClassName('btn-top');
    // var btnTopSVG = document.getElementsByClassName('btn-top-svg');

    $('.preloader').fadeOut('slow');
    
    $(btnTop).attr('style','display: none');

    // back to top button   
    $(window).on("scroll", function(){
        if ($(window).scrollTop() >= 20){
            $(btnTop).fadeIn('slow');
            // $(btnTopSVG).fadeIn('slow');
        }else{
            $(btnTop).fadeOut('slow');
            // $(btnTopSVG).fadeOut('slow');
        }
    });

    // back to top button click
    $(btnTop).on("click", function(){
        $("html,body").animate({scrollTop:0},900)
    });

    const os = new OnScreen({
        tolerance: 100,
        debounce: 100
    });
    os.on('enter', '.animate', function(element) {
        $(element).addClass('animated');
    });

    $('.our-work__carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });

    adaptiveMenu();
    mobileHeader();
    scrollToSection();
    // scrollSVGToSection();
});