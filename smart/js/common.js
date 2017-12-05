$(document).ready(function(){

  $(".owl-carousel").owlCarousel({
  	// loop : true,
  	// center : true,
  	nav : true,
  	navText : ["<i class='fa fa-arrow-left' aria-hidden='true'></i>" , "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
		dots : true,
		dotsEach : true,
		dotData : true,
		autoPlay : true,
		animateIn : true,
		animateOut : true,
		items : 2,
		stagePadding : 0,
		responsive : {
 			0 : {
          items : 1,
        
      },
      // breakpoint from 480 up
      576 : {
          items : 2,             
      },
		}
  	});
});

$("input, select, textarea").jqBootstrapValidation();

$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("active");
		$(".main_menu_wrapper").slideToggle();
	});

$(".main_text_wrapper").animated("fadeInUp", "fadeOutDown");
$(".email_wrapper").animated("fadeInUp", "fadeOutDown");
// $(".wp_header").animated("fadeInUp", "fadeOutDown");
// $(".swp_text").animated("fadeInUp", "fadeOutDown");
// $(".tck_text").animated("fadeInUp", "fadeOutDown");
// $(".cls_text").animated("fadeInUp", "fadeOutDown");


// $(".wp_process_wrap").animated("fadeInLeft", "fadeOutLeft");
// $(".wp_process_wrap2").animated("fadeInLeft", "fadeOutLeft");
// $(".wp_process_wrap3").animated("fadeInRight", "fadeOutRight");
// $(".wp_process_wrap4").animated("fadeInRight", "fadeOutRight");

// $(".fw_img_flipInY").animated("flipInY", "fadeOutDown");
// $(".fw_img_rotataeIn").animated("rotateIn", "fadeOutDown");


$(".left").animated("fadeInLeft", "fadeOutDown");
$(".right").animated("fadeInRight", "fadeOutDown");

$(".popup").magnificPopup({type:"image"});
	$(".popup_content").magnificPopup({
		type:"inline",
		midClick: true
	});

	$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".podrt_descr").attr("id", "work_" + i);
	});

$(".main_menu nav ul a").mPageScroll2id();

