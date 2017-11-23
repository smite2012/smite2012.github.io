
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function slideTime(n){
 n=1
 showSlides(slideIndex += n);
 }
setInterval(slideTime, 5000);﻿

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");

	if (n > slides.length){
		slideIndex = 1
	}
	if (n < 1){
		slideIndex = slides.length
	}
	for (i=0; i < slides.length; i++){
		slides[i].style.display = "none";
	}
	for (i = 0; i <dots.length; i++){
		dots[i].className=dots[i].className.replace("active","");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className+= " active";
}

$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("activee");
	});

$(".top_mnu ul a").click(function() {
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("activee");
		$(".top_text").css("opacity", "1");
	}).append("<span>");

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





