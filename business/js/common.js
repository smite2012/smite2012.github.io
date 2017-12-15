$(function(){
	$('.menuToggle').on('click', function(){

		$('.nav_active').toggle("slide",{direction: "right"}, function(){
			if($(this).css('display') === 'none'){
				$(this).removeAttr('style');
			// $('.menuToggle').removeAttr('style');
			
			}
		});      


        $('.menu_wrapper').toggleClass('menu_wrapper_black');
        // $('.hamburger').toggleClass('is-active');

        // $(".menuToggle").toggleClass("anim");

 				});
     });  

 var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    
  });
        
        // , function(){
        // 	if($(this).css("position") == 'absolute'){
        		
        // 		// $(this).removeAttr('style');
        // 		// $(this).css("background-color","red");
        // 		// $(this).attr('style',"");
        		
        // 																						}
        // 						});
	
	
var _menu = $(".menuToggle");
_menu.click(function () {
    if (_menu[0].style.right === '15vw') {
        _menu.animate({
            'right': '80vw'
        }, 300);

    } else {
        _menu.animate({
            'right': '15vw'
        }, 300);
    }
});

// $(".menuToggle").on('click', function(){

// 	if($(".menuToggle").style("right") === '5vh'){
// 			$(".menuToggle").animate({
// 					right:'50vh'
// 				},500);
// 				} else{
// 					$(".menuToggle").animate({
// 					right:'5vh'
// 				},500);
// 				};
	 
				
// 					// $(".menuToggle").removeAttr('style');

				
// });

// $('.menuToggle').on('click', function(){
// $(".menuToggle").removeAttr('style');
// 	 });


   //      	, function(){
   // //      	if($(this).css('right') === '5vh'){
			// // 			$(this).removeAttr('style');
			// // }.hamburger--spin.is-active
			// 			if($(".hamburger--spin").hasClass("is-active")){
			// 				// $(".hamburger--spin.is-active .hamburger-inner").css('background-color','red');
			// 				$(".menuToggle").animate({left:'50vh'})
			// 			}
					
        	// $(".menuToggle").animate({left:'50vh'})
        // }
        	// );
		 //        	$('.menuToggle').animate({right: '50vh'}, function(){
			// 					if($(this).css('position') === 'absolute'){
			// 						$('.menuToggle').removeAttr('style');
			// 					};
			// });
		

// $(function(){
// 	$('.is-active').on('click', function(){
// 		 $(".menuToggle").animate({left:'50vh'});
// 		});
// 	});

$(".nav_active ul li a").mPageScroll2id();


if($(window).width() < 600){
    $(".nav_active li a").on('click', function(){
    $(".nav_active").toggle("slide",{direction: "right"});
    
    $('.hamburger').toggleClass('is-active');
    $(".menuToggle").animate({right:'5vh'});
    $('.menu_wrapper').toggleClass('menu_wrapper_black');
    });
}

var swiper = new Swiper('.swiper-container', {
      
      slidesPerView: 1,
      spaceBetween: 30,
      // autoplay: {
      //   delay: 2500,
      //   disableOnInteraction: false,
      // },
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

//mmenu extensions
// $(function() {
// 	$('#my-menu').mmenu({
// 		extensions: [ 'theme-black' , 'effect-menu-slide' ,'pagedim-black'],
// 		navbar: {
// 			title: 'My asdasd'
// 		},
// 		offCanvas: {
// 		position: 'right'
// 		}
		
// 	});

// //burger animation
// var api = $('#my-menu').data('mmenu');
// api.bind('open:finish', function() {
//    $('.hamburger').addClass('is-active');
//  }).bind('close:finish', function () {
//  	$('.hamburger').removeClass('is-active');
//  });﻿

// });
