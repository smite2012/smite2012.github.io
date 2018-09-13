var main_screen__header = document.getElementsByClassName('main-screen__header');
var menu = document.getElementsByClassName('menu');
var menu_a = document.getElementsByClassName('menu_a');
var burg = document.getElementsByClassName('ham');
// var btn_top = document.getElementsByClassName('btn-top');
var main_screen__dark_background = document.getElementsByClassName('main_screen__dark-background');





$(window).resize(function() {
  if ( $(window).width() <= 768 && !$(main_screen__header).hasClass('mobile_menu')) {
     $(menu).attr('style','display: none');
  }else if($(window).width() > 768){
    $(menu).attr('style','display: flex');
  }
  else{
    $(menu).attr('style','display: block');
  }
});

function adaptiveMenu() {
  var is_animated = false;
  $(burg).on('click', function(){
    if (!is_animated) {
      is_animated = true;
      $(main_screen__header).toggleClass('mobile_menu');
      if($(main_screen__header).hasClass('mobile_menu')){
        $(menu).fadeIn( 500, function() {  
          is_animated = false;  
        });
        $(menu).bind("touchmove",function(e){
            e.preventDefault();
        });    
      }else{
        $(menu).fadeOut( 500, function() {
          is_animated = false;
        });
      }
    }else{
      return;
    }   
 });

    $(menu_a).on('click', function(){
      if ( $(window).width() <= 768){
        console.log("menu a clicked");
        $(main_screen__header).toggleClass('mobile_menu');

        $(menu).fadeOut( 500, function() {
        });
      }
    });
  if($(window).width() <= 768){
    $(menu).attr('style','display: none');
  }

}

function mobileHeader() {

  var main_screen__header = document.getElementsByClassName('main-screen__header');

  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();  
    if (scroll >= 20) {      
        $(main_screen__header).addClass("darkHeaderFullScreen");                    
    }else{
        $(main_screen__header).removeClass("darkHeaderFullScreen");      
    }   
  });
}
 

// function scrollSVGToSection() {
//   var svg = document.getElementsByClassName('scroll-down-arrow');
//   var offset = parseInt($('#About').offset().top);
//   var bheight = $(window).height();
//   var percent = 0.15;
//   var hpercent = bheight * percent;

//   $(svg).on('click', function(){
//     $('html,body').animate({scrollTop: offset - hpercent}, 1000);

//   });
// }

// $("menu menu_li a").mPageScroll2id();

function scrollToSection() {
    const header = $('#header').height();
    $("a[href^='#']").on('click', (el) => {
      const top = $(el.target.hash).offset().top;
      $('html, body').animate({
          scrollTop: top - header
      }, 1000);
    })
}

