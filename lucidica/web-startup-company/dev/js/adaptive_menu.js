$(function(){
  $('.menuToggle').on('click', function(){
    $('.burg').toggleClass('burg_active');
    $('.main_screen__header-menu').addClass('mobile_menu_wrap');
    $('.menu').addClass('mobile_menu'); 
    $('.menu_li').toggleClass('animation_in');

    if ($('.menu_li').hasClass('animation_out')) {
      $('.menu_li').removeClass('animation_out');
  
    }else{
       $('.menu_li').addClass('animation_out');
       window.setTimeout(function() {
          $('.menu').removeClass('mobile_menu');
          $('.main_screen__header-menu').removeClass('mobile_menu_wrap');
      }, 1000);
    }
  });
});
/* Progress bar section animation */
jQuery(function() {
    var progressbarContainer = jQuery('.progressbar');
    if (progressbarContainer.length > 0) {
        var progressbarBar = jQuery('.progressbar__bar');
        var progressbarBarFill = jQuery('.progressbar__bar-fill');
        var progressbarDescription = jQuery('.progressbar__description ul li');
        var progressbarIcons = jQuery('.progressbar__icons');
    }
    jQuery(progressbarContainer).on('click','.progressbar__icon', function (e) {
        //remove .selected from the icons
        jQuery(progressbarIcons).children('div').each(function () {jQuery(this).removeClass('selected')});
        //get index of clicked icon and add .selected to it
        var indexClicked = jQuery(progressbarIcons).find(this).addClass('selected').index();
        //change progress bar width
        jQuery(progressbarBarFill).css('width',(jQuery(progressbarBar).width() / 6) * indexClicked);
        //apply styles to li elements to match clicked icon
        jQuery(progressbarDescription).each(function (i) {
            jQuery(this).removeClass('visible current');
            if (i < indexClicked) {
                jQuery(this).addClass('visible');
            } else if (i === indexClicked) {
                jQuery(this).addClass('visible current');
            }
        });
    });
});
jQuery(document).ready(function () {
    var $ = jQuery;
    var currentPrice = 0;
    var newPrice = 0;
    var switchers = $('.web-calculator input[type="checkbox"], .web-calculator input[type="radio"]');
    var pagesCount = $('.web-calculator__pages-count input');
    var totalEl = $('.estimate-price span');

    var timer;
    console.log(switchers);
    $('.web-calculator').on('change', function (e) {
        var selectorsPrice = 0;
        $(switchers).each(function () {
            selectorsPrice += this.checked ? $(this).data('price') : 0;
        });
        var pagesPrice = pagesCount[0].value * $(pagesCount).data('price') - $(pagesCount).data('price');
        newPrice = selectorsPrice + pagesPrice;
        clearTimeout(timer);
        timer = setTimeout(changePrice, 500);
    });

    function changePrice() {
        var counter = setInterval(change, 3);

        function change() {
            if (currentPrice < newPrice) {
                currentPrice = currentPrice + 2;
                $(totalEl).html(currentPrice);
            } else if (currentPrice > newPrice) {
                currentPrice = currentPrice - 2;
                $(totalEl).html(currentPrice);
            } else {
                clearInterval(counter);
            }
        }

        console.log('change price');
        console.log(currentPrice);
        console.log(newPrice);
        // while (currentPrice !== newPrice) {
        // }
    }

    $('.web-calculator').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serializeObject();
        data.action = 'website_builder';
        console.log(data);;
        $.post(myajax.url, data)
            .done(function (result) {
                if (result === '1') {
                    console.log($(e.target).find('.submit button'));
                    console.log(e);
                    $(e.target).find('.submit button').attr('disabled', true);
                }
            })
    });
    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
});

Jonathan123.