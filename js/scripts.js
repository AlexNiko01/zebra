;
(function ($) {

    $(document).ready(function () {
        if ($(window).width() > 1024) {
            new WOW().init();
        }
        //header menu responsive
        var body = $('body');
        body.on('click', '.menu-icon', function () {
            $('.navigation').slideToggle();
        });
        //home slider
        $('.main-slider').slick({
                arrows: false,
                dots: true,
                autoplay: true,
                autoplaySpeed: 4000,
            }
        );


        // works home page slider


        var works_slider = $('.works-slider');
        if (works_slider.length > 0) {
            works_slider.slick({
                arrows: true,
                dots: false,
                slidesToShow: 1,
                fade: true,
                cssEase: 'linear'

            });
        }
        //journal pop-up
        var publication_slider = $('.publication-slider');
        if (publication_slider.length > 0) {
            publication_slider.slick({
                dots: false,
                arrows: true,
                infinite: false,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
            $('.see-post-content').on('click', function (e) {
                e.preventDefault();
                if ($(window).width() > 640) {
                    var id = $(this).data('id');
                    $('.publication-pop-up').addClass('pp-active');
                    publication_slider.slick('slickGoTo', $('#' + id).index());
                }
            });
        }

        //home-tiles and journal pop-up
        body.on('click', '.tiles-item-pop-up, .call-pop-up', function (e) {
            if ($(window).width() > 640) {
                e.preventDefault();
                $('.pop-up').addClass('pp-active');
                var id = $(this).data('id');
                if (id && works_slider.length > 0) {
                    works_slider.slick('slickGoTo', $('#' + id).index());
                }
                if (id && publication_slider.length > 0) {
                    publication_slider.slick('slickGoTo', $('#' + id).index());
                }
            }
        });

        // hide pop-up on click
        body.on('click', '.pop-up, .publication-pop-up, .testimonials', function (e) {
            if (!$(e.target).closest('.pop-up__inner, .publication-pop-up__inner, .testimonials__inner').length > 0) {
                $(this).removeClass('pp-active');
                $(this).removeClass('shown');

            }
        });
        body.on('click', '.pop-up__close,.publication-pop-up__close', function (e) {
            $('.pop-up, .publication-pop-up').removeClass('pp-active');
            $('.testimonials.shown').removeClass('shown')
        });


        //video play
        var iframe = $('#player1')[0];
        var player = $f(iframe);

        $('.intro-video__prev').on('click', function () {
            $(iframe).fadeIn();
            player.api('play');
            $('.intro-video__close').show();
        });
        $('.intro-video__close').on('click', function () {
            player.api('pause');
            $(iframe).fadeOut();
            $(this).hide();
            return false;
        });


        //about page members slider
        var aboutSlider = $('.about-slider');
        // aboutSlider.on('init', function () {
        //     $('.slick-next').hover(function () {
        //         console.log('enot');
        //         aboutSlider.slick('slickSetOption', 'autoplay', true);
        //         aboutSlider.slick('slickSetOption', 'autoplaySpeed', 0);
        //         aboutSlider.slick('slickSetOption', 'speed', 1000);
        //         aboutSlider.slick('slickSetOption', 'pauseOnHover', false);
        //     }, function () {
        //         console.log('outenot');
        //         aboutSlider.slick('slickSetOption', 'autoplay', false);
        //     });
        // });
        aboutSlider.slick({
            arrows: true,
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 2000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        //Clients page slider
        var testimonial_slider = $('.testimonials__slider');
        if (testimonial_slider.length > 0) {
            testimonial_slider.slick({
                dots: false,
                arrows: true,
                infinite: false,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });

            $('.see-testimonial').on('click', function (e) {
                if ($(window).width() > 640) {
                    e.preventDefault();
                    $('.testimonials').addClass('shown');
                    var id = $(this).data('id');
                    if (id && testimonial_slider.length > 0) {
                        testimonial_slider.slick('slickGoTo', $('#' + id).index());
                    }
                }
            });
        }


        body.on('click', '#see-contacts, #see-contact-form', function (e) {
            if ($(window).width() > 640) {
                e.preventDefault();
                $('.pop-up').addClass('pp-active');
            }
        });


        // search form
        $('.main-menu__link--search').on('click', function (e) {

            e.preventDefault();
            $('.header__search-form').slideToggle();

        });

        //view more
        $('.position-description__view-more').click(function (e) {
            e.preventDefault();
            var self = $(this);
            var descr = $(this).prev('.position-description__full');
            if (self.hasClass('opened')) {
                self.html('view more...').removeClass('opened');
                descr.slideUp();

            } else {
                self.html('view less').addClass('opened');
                descr.slideDown();

            }
        });


        $('input[type=file]').on('change', function () {
            var val = $(this).val();
            var info_container = $('.main-contact-form__attachment-input');
            if (info_container.length > 0) {
                if (!info_container.data('placeholder')) {
                    info_container.data('placeholder', info_container.text());
                }
                if (val.length > 0) {
                    var file_parts = val.split('\\');
                    info_container.text(file_parts[file_parts.length - 1]);
                } else {
                    info_container.text(info_container.data('placeholder'));
                }
            }
        });


        var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
        if (isSafari) {
            body.addClass('safari')
        }
        console.log(isSafari);

    });
    $(window).resize(function () {
        $('.navigation').removeAttr('style');
    })
})(jQuery);