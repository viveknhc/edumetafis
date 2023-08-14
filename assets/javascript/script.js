// aos

AOS.init();

// course carousel

jQuery("#courseIndexCarousel").owlCarousel({
    // autoplay: true,
    rewind: true, /* use rewind if you don't want loop */
    margin: 20,
    /*  center:true,   make center the div*/
    // stagePadding: 50,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 2
        },

        1024: {
            items: 3
        },

        1366: {
            items: 3
        }
    }
});


// course carousel
$(document).ready(function () {
    $("#testimonial-carousel").owlCarousel({
        loop: true,
        // autoplay:true,
        margin: 10,
        nav: true,
        navText: [
            '<i class="fa fa-thin fa-arrow-left fa-2x"></i>',
            '<i class="fa fa-thin fa-arrow-right fa-2x"></i>'
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 2,
                nav: false,
            },
            1000: {
                items: 2
            }
        }
    });
});

