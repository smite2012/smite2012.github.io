//mmenu extensions
$(function() {
	$('#my-menu').mmenu({
		extensions: [ 'theme-black' , 'effect-menu-slide' ,'pagedim-black'],
		navbar: {
			title: 'My asdasd'
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

// Размещение меню справа
// offCanvas: {
// 	position: 'right'
// }

