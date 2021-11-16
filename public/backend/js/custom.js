(function ($) {


    // input number incrementing

    if ($(".spinner").length) {

        $(".spinner").inputSpinner();

    }


// Hide collaps on click
    jQuery('.pay-options .btn').click(function (e) {
        jQuery('.collapse').collapse('hide');
    });


    //shopping cart
    $(document).click(function () {
        var $item = $(".shopping-cart");
        if ($item.hasClass("active")) {
            $item.removeClass("active");
        }
    });


    $('#cart').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(".shopping-cart").toggleClass("active");
    });

    // Go to top
    // Show or hide the sticky footer button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // Animate the scroll to top
    $('.go-top').click(function (event) {
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);
    });

    // Main Slider
    if ($(".main-slider").length) {
        $('.main-slider').slick({
            rtl: true,
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
        });
    }
    if ($(".testimonial-slider").length) {
        $('.testimonial-slider').slick({
            rtl: true,
            arrows: false,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    }
    // Hamburger menu
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('hamburger-toggle')) {
            e.target.children[0].classList.toggle('active');
        }
    })


    // Currency Switcher

    let clToggle = document.querySelector('#cl_switcher');
    $(clToggle).on('click', function () {
        let e = $(this)
        $(e).toggleClass('visible')
        $(document).on("click", function (t) {
            !$(t.target).closest(e).length && e.hasClass("visible") && e.toggleClass("visible")
        })
    })

    // Login Modal
    $('.login-modal button').on('click', function () {
        $('.login-modal button').removeClass('active');
        $(this).addClass('active');
        if ($(this).hasClass('active')) {
            $('.btn-submit').show()
        }
        let dataVal = $(this).attr('data-name');
        $('.login-option').each(function () {
            if ($(this).attr('data-name') === dataVal) {
                $(this).show()
            } else {
                $(this).hide()
            }
        })

    })
})(jQuery);
