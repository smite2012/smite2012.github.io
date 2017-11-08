// preloader
$(window).on('load', function () {
	$('.preloader').delay(1000).fadeOut('slow');
})

// counter
$('.count').each(function () {
	$(this).prop('Counter',0).animate({
		Counter:$(this).text()
	},{
		duration:4000,
		easing: 'swing',
		step:function (now) {
			$(this).text(Math.ceil(now));
		}
	});
});

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