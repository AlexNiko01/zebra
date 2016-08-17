<?php include( 'header.php' ); ?>


    <main role="main">
        <section class="slider-parent">
            <h3 class="slider-parent__title">Helping brands & agencies to create brilliant content</h3>
            <div class="main-slider">
                <div class="main-slider__slide">
                    <div class="main-slider__img"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img"></div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img"></div>
                </div>
            </div>
        </section>

        <section class="offices">
            <div class="row">
                <div class="column">
                    <?php for ( $i = 0; $i < 4; $i ++ ) : ?>
                        <article class="single-office">
                            <div class="row">
                                <div class="column large-7 medium-7 small-12 single-office__gallery">
                                    <div class="single-office__gallery__small">
                                        <div class="single-office__gallery__item"
                                             style="background-image: url(img/1.png)"></div>
                                        <div class="single-office__gallery__item"
                                             style="background-image: url(img/1.png)"></div>
                                    </div>
                                    <div class="single-office__gallery__large">
                                        <div class="single-office__gallery__item"
                                             style="background-image: url(img/1.png)"></div>
                                    </div>
                                </div>
                                <div class="column large-5 medium-5 small-12 end single-office__description">
                                    <h3>London</h3>
                                    <h4>Head Office</h4>
                                    <ul>
                                        <li class="address">
                                            <address>
                                                <p>Zebra Worldwide</p>
                                                <p>6 Little Portland Street</p>
                                                <p>London</p>
                                                <p>WIW 7JE</p>
                                            </address>
                                        </li>
                                        <li class="phone">
                                            <a href="tel:4405603846737">+44 (0)560 384 6737</a>
                                        </li>
                                        <li class="email">
                                            <a href="mailto:london-info@zera-worldwide.com">london-info@zera-worldwide.com</a>
                                        </li>
                                    </ul>
                                    <div class="single-office__more">
                                        <a href="#" class="btn show-more" data-office-id="office-<?php echo $i ?>">More
                                            about our London Studio</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
        <div class="offices-detailed">
            <div class="offices-detailed__container">
                <?php for ( $i = 0; $i < 4; $i ++ ) : ?>
                    <div class="single-office so-detailed" id="office-<?php echo $i ?>">
                        <h2 class="so-detailed__title">London Studio <span class="close-detailed">X</span></h2>
                        <div class="so-detailed__container">
                            <h3>Photo Studio</h3>
                            <h4>6 Little Portland Street, London, W1W 7JE</h4>

                            <div class="row">
                                <div class="column large-5 medium-5 small-12 so-detailed__content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto
                                        cumque, delectus ducimus earum enim, eos esse illum molestias neque nostrum
                                        quaerat repellendus similique temporibus ut veniam voluptatem voluptatum?
                                        Ad?
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto
                                        cumque, delectus ducimus earum enim Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusamus architecto cumque, delectus ducimus earum enim
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto
                                        cumque, delectus ducimus earum enim
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto
                                        cumque, delectus ducimus earum enim, eos esse illum molestias neque nostrum
                                        quaerat
                                    </p>
                                    <div class="so-detailed__contact-info">

                                    </div>
                                </div>
                                <div class="column large-7 medium-7 small-12 so-detailed__gallery">
                                    <?php for ( $i = 0; $i < 6; $i ++ ) : ?>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </main>


<?php include( 'footer.php' );
