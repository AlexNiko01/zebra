<?php include('header.php'); ?>


    <main role="main">
        <section class="slider-parent">
            <h3 class="slider-parent__title">We work with some fantastic brands</h3>
            <div class="main-slider">
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(/img/clslider.png)"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(/img/clslider.png)"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(/img/clslider.png)"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(/img/clslider.png)"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(/img/clslider.png)"></div>
                </div>
            </div>
        </section>
        <section class="clients">
            <div class="row">
                <span class="column text-center">
                    <h5 class="clients__click-title"><span class="clients__click-sub-title">Clients</span> // Click for a testimonial <i class="fa fa-chevron-down" aria-hidden="true"></i></h5>
                </div>
            </div>

            <div class="clients__list clearfix">
                <?php for ($i = 0; $i < 36; $i++) : ?>
                    <div class="column large-2 medium-4 small-6 clients__column">
                        <div class="clients__inner">
                            <img src="img/client_logo.png" alt="" class="clients__logo">
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <section class="testimonials">
            <div class="testimonials__inner">
                <div class="row testimonials__row">
                    <div class="testimonials__slider">
                        <?php for ($i = 0; $i < 36; $i++) : ?>
                            <div class="testimonials__slide">
                                <div class="testimonials__caption">
                                    <blockquote class="testimonials__caption__content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa eaque illo
                                        laborum
                                        provident quae quas tempore. Architecto id inventore molestiae, numquam odio qui
                                        quia
                                        quis quos sequi soluta vitae.
                                    </blockquote>
                                    <cite class="testimonials__caption__author">Name Surname - Ryobi</cite>
                                </div>
                                <div class="testimonials__thumbnail">
                                    <div class="testimonials__thumbnail__holder" style="background-image: url(img/1.png)"></div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="discover">
            <a href="#" class="button">discover work</a>
        </section>
    </main>


<?php include('footer.php');
