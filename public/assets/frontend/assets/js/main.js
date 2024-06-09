(function ($) {
    'use strict';
    //==========preloder===========
    $(window).on('load',function(){
        var preLoder = $(".preloader");
        preLoder.fadeOut(1000);
    });
    //==========fixed header & scroll to top button===========
    $(window).on('scroll', function(){
        if($(window).scrollTop() > 300) {
            $('.bottom-header').addClass('animated fadeInDown fixed-header');
            // scroll to top show
            $('.scroll').fadeIn();
            $('.scroll').addClass('active');
            if ($(window).width() < 992) {
                $('.bottom-header').removeClass('animated fadeInDown fixed-header');
            }
        } else {
            $('.bottom-header').removeClass('animated fadeInDown fixed-header');
            // scroll to top show
            $('.scroll').fadeOut();
            $('.scroll').removeClass('active');
        }
    });
    $(document).ready(function(){
        //==========modal video popup slider===========
        $(".vdo-btn").modalVideo();
        //==========testimonial slider===========
        $('.comments').owlCarousel({
            loop: true,
            smartSpeed: 1000,
            margin: 30,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp',
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                768: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        });
        // odometer
        $('.odometer').appear(function(e) {
            var odo = $(".odometer");
            odo.each(function() {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    });
}(jQuery));