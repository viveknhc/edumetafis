// aos

// AOS.init();


// banner

$(document).ready(function () {
    $('.banner-slider').owlCarousel({
        loop: true,
        // margin:10,
        // nav:true,
        // dots:true,
        // autoplay: true,
        autoplayTimeout: 30000,
        autoplayHoverPause: false,
        items: 2.5,
        // navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1,
                dots: true
            },
            1300: {
                items: 1
            },
            1500: {
                items: 1
            }
        }
    })
});


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


// testimonial carousel
$(document).ready(function () {
    $("#testimonial-carousel").owlCarousel({
        loop: true,
        autoplay:true,
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



