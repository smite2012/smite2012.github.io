
$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("activee");
		$(".menu").slideToggle("slow");
		$(".menu_text").toggle("slide");
	});

$(".menu ul a").mPageScroll2id();

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

var tab;
var tabContent;
var tabHeader;

window.onload=function () {
	tabContent=document.getElementsByClassName('tabContent');
	tab=document.getElementsByClassName('tab');
	tabHeader=document.getElementById('tab_header_main');
	hideTabsContent(1);
	showTabsContent(1);


	
}

function hideTabsContent(a) {
	for (var i=a; i<tabContent.length; i++){
		tabContent[i].classList.remove('show');
		tabContent[i].classList.add('hide');
		tab[i].classList.remove('whiteborder');
	}
}

document.getElementById('tabs').onclick=function (event) {
	var target=event.target;
	if (target.className=='tab'){
		for (var i=0; i<tab.length; i++){
			if(target == tab[i]){
				showTabsContent(i);
				break;
			}
		}
	}
}

function showTabsContent(b) {
	if (tabContent[b].classList.contains('hide')){
		hideTabsContent(0);
		tab[b].classList.add('whiteborder');
		tabContent[b].classList.remove('hide');
		tabContent[b].classList.add('show');
		
		
		tabHeader.textContent = tab[b].innerHTML;
		// tabHeader.css("animation:fade");


		


	}
}


function openDoor(field) {
    var y = $(field).find(".thumb");
    var x = y.attr("class");
    var a = $(field).find(".thumb2");
    var b = a.attr("class");

    if (y.hasClass("thumbOpened") || a.hasClass("thumbOpened2")) {
        y.removeClass("thumbOpened");
        a.removeClass("thumbOpened2");
    }
    else {
        $(".thumb").removeClass("thumbOpened");
        $(".thumb2").removeClass("thumbOpened2");
        y.addClass("thumbOpened");
        a.addClass("thumbOpened2");
    }
}
