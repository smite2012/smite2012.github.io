$(function(){
	$('.menuToggle').on('click', function(){
		$('.menu').slideToggle(300, function(){
			if($(this).css('display') === 'none'){
				$(this).removeAttr('style');
			}
		});
        $('.menu_wrapper_click').toggleClass('menu_wrapper_click_active');
        $('.burg').toggleClass('burg_active');
	});
});


if($(window).width() < 600){
    $(".menu li a").on('click', function(){
    $(".menu").css("display", "none");
    $('.menu_wrapper_click').toggleClass('menu_wrapper_click_active');
    $('.burg').toggleClass('burg_active');
    });
}




// $(".menu li a").on('click', function(){
//     $(".menu").css("display", "none");
//     $('.menu_wrapper_click').toggleClass('menu_wrapper_click_active');
//     $('.burg').toggleClass('burg_active');
// });
$(".menu li a").mPageScroll2id();

$('.video').parent().click(function () {
    if($(".video").get(0).paused){
        $(".video").get(0).play();
        $(".playpause").fadeOut();
        $(".video_text").fadeOut();
        $(".video_text2").fadeOut();
    }else{
       $(".video").get(0).pause();
        $(".playpause").fadeIn();
        $(".video_text").fadeIn();
        $(".video_text2").fadeIn();
    }
});
$('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })

var swiper = new Swiper('.swiper-container', {
    effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      slidesPerView: 1,
      spaceBetween: 30,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });