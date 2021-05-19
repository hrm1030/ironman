$(document).ready(function () {
    var owl = $("#browser_slider");
    owl.owlCarousel({
        items : 6,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 6
            }
        }
    });
    $('.bro_next').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.bro_prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
    $('.partners_slider').owlCarousel({
        items : 4,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 2
            },
            1000:{
                items: 4
            }
        }
    });

    $('.par_next').click(function() {
        $('.partners_slider').trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.par_prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $('.partners_slider').trigger('prev.owl.carousel', [300]);
    })

    $('.review-carousel').owlCarousel({
        items : 4,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 2
            },
            1000:{
                items: 4
            }
        }
    });
    $('.review_slider').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 2
            },
            1000:{
                items: 3
            }
        }
    });
    $('.re_next').click(function() {
        $('.review_slider').trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.re_prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $('.review_slider').trigger('prev.owl.carousel', [300]);
    })
});