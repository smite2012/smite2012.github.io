 var swiper = new Swiper('.swiper-container', {
      effect: 'flip',
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

$(function(){
	$('.menu_toggle').on('click', function(){
		$('.ul').slideToggle(300, function(){
			if($(this).css('display') === 'none'){
				$(this).removeAttr('style');
			}
		});
        $('.menu_wrapper_click').toggleClass('menu_wrapper_click_active');
        $('.burg').toggleClass('burg_active');
	});
});

// preloader
$(window).on('load', function () {
    $('.preloader').delay(1000).fadeOut('slow');
})

// back to top button
var $btnTop = $(".btn-top")
$(window).on("scroll", function(){
    if ($(window).scrollTop() >= 20){
        $btnTop.fadeIn();
    }else{
        $btnTop.fadeOut();
    }
});
// back to top button click
$btnTop.on("click", function(){
    $("html,body").animate({scrollTop:0},900)
});

