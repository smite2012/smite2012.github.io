// preloader
$(window).on('load', function () {
	$('.preloader').delay(1000).fadeOut('slow');
})

//mmenu extensions
$(function() {
	$('#my-menu').mmenu({
		extensions: [ 'theme-black' , 'effect-menu-slide' ,'pagedim-black'],
		navbar: {
			title: '<span>Leo images</span>'
			
		},
		offCanvas: {
 		position: 'right'
 		}
	});

//burger animation
var api = $('#my-menu').data('mmenu');
api.bind('open:finish', function() {
   $('.hamburger').addClass('is-active');
 }).bind('close:finish', function () {
 	$('.hamburger').removeClass('is-active');
 });﻿

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
// Размещение меню справа
// offCanvas: {
// 	position: 'right'
// }
// modal
$('#myModal').on('hidden.bs.modal', function (e) {
  // do something...
})


