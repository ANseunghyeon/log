jQuery(function($){
    "use strict";
    jQuery('.gb_navigation > ul').superfish({
        delay:       500,
        animation:   {opacity:'show',height:'show'},
        speed:       'fast'
    });
});

function elite_creative_agency_navigation_open() {
    jQuery(".side_gb_nav").addClass('show');
}
function elite_creative_agency_navigation_close() {
    jQuery(".side_gb_nav").removeClass('show');
}

jQuery(function($){
    $('.gb_toggle').click(function () {
        elite_creative_agency_keyboard_navigation_loop($('.side_gb_nav'));
    });
});

jQuery(document).ready(function($) {    
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});

jQuery('document').ready(function(){
  var owl = jQuery('#home_slider .owl-carousel');
    owl.owlCarousel({
    margin:0,
    nav: false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});


jQuery('document').ready(function(){
  var owl = jQuery('#home_team .owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});