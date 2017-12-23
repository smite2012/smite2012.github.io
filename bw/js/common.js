 var swiper = new Swiper('.swiper-container', {
      direction: 'vertical',
       slidesPerView: 'auto',
       spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

 $("input, textarea").jqBootstrapValidation();

	$(".menu_wrap ul li a").mPageScroll2id();

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

$(".menu_wrap ul li").on("click", function(){
	$(".menu_wrap ul li").removeClass("li_active");
	$(this).addClass("li_active");
	
});