<?php include('header.php'); ?>

<?php
function get_rand_class() {
    $animate_classes = array('fadeInUp', 'bounceOutDown', 'fadeUpBig', 'flipInX');
    return $animate_classes[rand(0, count($animate_classes) -1)];
}
?>

    <main class="page-template-journal">
        <section class="slider-parent">

            <div class="main-slider">
                <div class="main-slider__slide">
                    <h3 class="slider-parent__title">
                        # ZEBRALIFE</h3>
                    <div class="main-slider__img" style="background-image: url(img/_MG_0356.jpg)">

                    </div>
                </div>
                <div class="main-slider__slide">
                    <h3 class="slider-parent__title">
                        # WEAREZEBRA</h3>
                    <div class="main-slider__img" style="background-image: url(img/_MG_0356.jpg)">

                    </div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(img/_MG_0356.jpg)">

                    </div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(img/_MG_0356.jpg)">

                    </div>
                </div>
                <div class="main-slider__slide">
                    <div class="main-slider__img" style="background-image: url(img/_MG_0356.jpg)">

                    </div>
                </div>
            </div>
        </section>
        <section class="articles">
            <div class="row">
                <div class="column text-center">
                    <h5 class="clients__click-title"><span class="clients__click-sub-title">CULTURE</span> // Zebra's
                        latest
                        news <i class="fa fa-chevron-down" aria-hidden="true"></i></h5>
                </div>
            </div>
            <div class="grid">
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?> see-post-content" data-id="post_1">
                    <a class="tiles__img" style="background-image: url('img/j1.png')"></a>
                </div>
                <div class="col-26 tiles__column  tiles__item wow <?php echo get_rand_class()  ?>">
                    <a href='twitter' class="article">
                        <p class="article__item">Zebra Studios #inhouse
                            #photostudio #oxfordcircus
                            #london @ Little Portland Street
                            W1 https://t.co/iword8nxPa</p>
                        <p class="article__name">ZEBRA WORLDWIDE</p>
                        <p class="article__nick-name">@ZebraWorldwide</p>
                    </a>
                </div>
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?>" data-id="post_2">
                    <a href="instagram" class="tiles__img" style="background-image: url('img/j2.png')"></a>
                </div>
            </div>
            <div class="grid">
                <div class="col-26 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">

                    <div class="tiles__img" style="background-image: url('img/j3.png')"></div>

                </div>
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?> see-post-content">

                    <div class="tiles__img" style="background-image: url('img/j4.png')"></div>


                </div>
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="article article-large">
                        <p class="article__item">One of the best opening titles to a documentary ever - thanks
                            @WallsOfFour
                            @FutureShockDoc @2000AD</p>
                        <p class="article__name">ZEBRA WORLDWIDE</p>
                        <p class="article__nick-name">@ZebraWorldwide</p>
                    </div>

                </div>
            </div>
            <div class="grid">
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="tiles__img" style="background-image: url('img/j5.png')"></div>
                </div>
                <div class="col-26 tiles__column  tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="article">
                        <p class="article__item">Stripey Horse goes on the road with Wolf Alice | LBBOnline</p>
                        <p class="article__name">ZEBRA WORLDWIDE</p>
                        <p class="article__nick-name">@ZebraWorldwide</p>
                    </div>
                </div>
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">

                    <div class="tiles__img" style="background-image: url('img/j6.png')"></div>

                </div>
            </div>
            <div class="grid">
                <div class="col-25 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="tiles__img" style="background-image: url('img/j7.png')"></div>
                </div>
                <div class="col-25 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="tiles__img" style="background-image: url('img/j8.png')"></div>
                </div>
                <div class="col-25 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="article">
                        <p class="article__item">Dive into the world of ‘Supercars’ with Rapper & Musician Example |
                            LBBOnline”</p>
                        <p class="article__name">ZEBRA WORLDWIDE</p>
                        <p class="article__nick-name">@ZebraWorldwide</p>
                    </div>
                </div>
                <div class="col-25 tiles__column  tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="article">
                        <p class="article__item">Spotted on Archer street #soho #TheDrums bus #AWEurope
                            #wannajumponboard</p>
                        <p class="article__name">ZEBRA WORLDWIDE</p>
                        <p class="article__nick-name">@ZebraWorldwide</p>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?> ">
                    <div class="tiles__img" style="background-image: url('img/j9.png')"></div>
                </div>
                <div class="col-37 tiles__column tiles__item wow <?php echo get_rand_class()  ?> see-post-content">
                    <div class="tiles__img" style="background-image: url('img/j10.png')"></div>
                </div>
                <div class="col-26 tiles__column tiles__item wow <?php echo get_rand_class()  ?>">
                    <div class="tiles__img" style="background-image: url('img/j11.png')"></div>
                </div>
            </div>
        </section>
        <section class="in-touch">
            <div class="text-center">
                <a href="#" class="button">GET IN TOUCH</a>
            </div>
        </section>
    </main>
    <div class="publication-pop-up">
        <div class="publication-pop-up__inner">
            <div class="publication-slider">
                <?php for ($i = 0; $i < 11; $i++) : ?>
                    <div class="publication-slider__slide" id="post_<?php echo $i ?>">
                        <div class="row publication" id="publication">
                            <div class="column large-6 medium-12 small-12">
                                <div class="publication__soc-n"></div>
                                <h3 class="publication__location">LONDON</h3>
                                <h4 class="publication__name">STRIPEY HORSE PRODUCE FIRST PROJECT FOR ALL 4</h4>
                                <p><span class="publication__date">April 6th 2016 </span>//<span
                                        class="publication__author"> Nicola Martin</span>
                                </p>
                                <div class="publication__text">
                                    <p> All 4, Channel 4's digital platform, has launched its new series Make Me a
                                        Famous
                                        Face which follows the stories of four daring individuals who through a
                                        series
                                        of
                                        plastic surgery procedures have reached celebrity-like perfection.</p>

                                    <p>The series, produced by Zebra Worldwide's production company Stripey Horse,
                                        draws
                                        its inspiration from the passions that turn into obsessions; individuals who
                                        end
                                        up
                                        building and changing their whole lives around what they love to the extent
                                        that
                                        from an outsiders' point of view, and even friends and family, it appears
                                        extreme.
                                    </p>

                                    <p>Filming for the series took place across the UK and followed a handful of
                                        personalities determined to look like their idols. </p>

                                    <p>From Liverpool's answer to Pamela Anderson to the 'Human Ken Doll', the
                                        combined
                                        four featured profiles have spent hundreds of thousands of pounds on plastic
                                        surgery
                                        as they follow in the footsteps of their celebrity idols. The series
                                        includes
                                        Jordan
                                        James Parke who, obsessed with Kim Kardashian, has spent over £110,000 to
                                        look
                                        like
                                        her. </p>

                                    <p>Nicola Martin of Stripey Horse said:
                                        <em>This is our first project working with All 4 and it's been fantastic. I
                                            think
                                            they
                                            saw our fascination with the different expressions of obsessions and
                                            fully
                                            supported
                                            how we wanted to tell their stories. Stripey also have few other things
                                            in
                                            development and we're excited about our growing relationship with All
                                            4.</em>
                                    <p>

                                    <p>Make Me a Famous Face is available to watch now on All 4 at:
                                        www.channel4.com/programmes/make-me-a-famous-face
                                    <p>
                                </div>
                            </div>
                            <div class="column large-6 medium-12 small-12">
                                <div class="publication__pictures">
                                    <img class="publication__img" src='img/ps1.png'>
                                    <img class="publication__img" src='img/ps2.png'>
                                </div>

                            </div>
                        </div>

                    </div>
                <?php endfor; ?>
            </div>
            <button class="publication-pop-up__close">x</button>
        </div>
    </div>
<?php include('footer.php'); 
