$(document).ready(function() {

// Animation filter for portfolio
$("#portfolio_grid").mixItUp();


// Active li in portfolio
$(".s_portfolio li").click(function() {
$(".s_portfolio li").removeClass("active");
$(this).addClass("active");
});

// Img(human) popup
$(".popup").magnificPopup({type:"image"});

//Gallery images popup (add class to a(<a href="#work_0" class="popup_content">Посмотреть</a>))
$(".popup_content").magnificPopup({
		type:"inline",
		midClick: true
	});

// Animation for all .section_header
$(".section_header").animated("fadeInUp", "fadeOutDown");

// Animation for about
$(".animation_1").animated("flipInY", "fadeOutDown");
$(".animation_2").animated("fadeInLeft", "fadeOutDown");
$(".animation_3").animated("fadeInRight", "fadeOutDown");

// Animation for about resume items
$(".left .resume_item").animated("fadeInLeft", "fadeOutDown");
$(".right .resume_item").animated("fadeInRight", "fadeOutDown");

	// Height of header
	function heightDetect() {
		$(".main_head").css("height", $(window).height());
	};
 	heightDetect();
 	$(window).resize(function () {
 		 heightDetect();
 	});
});

$(window).load(function() {
	// preloader 
	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

}); 

// Menu
$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});

// hrefs and ids for gallery(portfolio)
$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".podrt_descr").attr("id", "work_" + i);
	});


// Fade out menu 
$(".top_mnu ul a").click(function() {
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top_text").css("opacity", "1");
	}).append("<span>");

// Menu animation
	$(".toggle_mnu").click(function() {
		if ($(".top_mnu").is(":visible")) {
			$(".top_text").css("opacity", "1");
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top_text").css("opacity", ".1");
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li a").addClass("fadeInUp animated");
		};
	});

// Bootstrap validation
$("input, select, textarea").jqBootstrapValidation();

// Page scroll
$(".top_mnu ul a").mPageScroll2id();

//Animation for Alexandr Prokopskiy and web...
$(window).load(function() {
	$(".top_text h1").animated("fadeInDown", "fadeOutUp");
	$(".top_text p").animated("fadeInUp", "fadeOutDown");
}); 
$(".section_header").animated("fadeInUp", "fadeOutDown");


