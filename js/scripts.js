;
(function ($) {

    $(document).ready(function () {
        new WOW().init();
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

            });
        }
        //home-tiles pop-up
        body.on('click', '.tiles__item', function () {
            $('.pop-up').addClass('pp-active');
        });
        body.on('click', '.pop-up', function (e) {
            if (!$(e.target).closest('.pop-up__inner').length > 0) {
                $(this).removeClass('pp-active');

            }
        });
        body.on('click', '.pop-up__close', function (e) {
            $('.pop-up').removeClass('pp-active')
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
        $('.about-slider').slick({
            arrows: true,
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,
                    }
                },
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
            $('.clients__column').on('click', function () {
                $('.testimonials').addClass('shown');
                testimonial_slider.slick('slickGoTo', $(this).index());
            });
        }
        // search form
        $('.main-menu__link--search').on('click', function (e) {

            e.preventDefault();
            $('.header__search-form').slideToggle();

        });
    });
    $(window).resize(function () {
        $('.navigation').removeAttr('style');
    })
})(jQuery);