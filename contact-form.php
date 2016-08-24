<?php include('header.php'); ?>
    <main class="single-form">

                <div class="row">
                    <div class="career__titles column border-bottom">
                        <h3 class="career__title">CONTACT US</h3>
                        <h4 class="career__sub-title">FOR FURTHER INFORMATION</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="column small-12 medium-12 large-6">
                        <p>To talk to us about any of our services or products, please
                            get in touch with your local office, or use the general
                            enquiry form to the right.</p>
                        <div class="contact">
                            <h4 class="contact__title">
                                BUSINESS ENQUIRIES
                            </h4>
                            <a href="mailto:dan.h@zebra-worldwide.com" class="contact__email">
                                dan.h@zebra-worldwide.com
                            </a>
                        </div>
                        <div class="contact">
                            <h4 class="contact__title">
                                JOB OPPORTUNITIES
                            </h4>
                            <a href="mailto:careers@zebra-worldwide.com" class="contact__email">
                                careers@zebra-worldwide.com
                            </a>
                        </div>
                        <div class="contact">
                            <h4 class="contact__title">
                                LONDON (HEAD OFFICE)
                            </h4>
                            <a href="tel:4405603846737" class="contact__tel">
                                +44 (0)560 384 6737
                            </a>
                            <a href="mailto:london-info@zebra-worldwide.com" class="contact__email">
                                london-info@zebra-worldwide.com
                            </a>
                        </div>
                        <div class="contact">
                            <h4 class="contact__title">
                                CAPE TOWN
                            </h4>
                            <a href="tel:270877422640" class="contact__tel">
                                +27 (0)87 742 2640
                            </a>
                            <a href="mailto:capetown-info@zebra-worldwide.com" class="contact__email">
                                capetown-info@zebra-worldwide.com
                            </a>
                        </div>
                        <div class="contact">
                            <h4 class="contact__title">
                                SYDNEY
                            </h4>
                            <a href="tel:610477623550" class="contact__tel">
                                +61 (0)477 623 550
                            </a>
                            <a href="mailto:syney-info@zebra-worldwide.com" class="contact__email">
                                syney-info@zebra-worldwide.com
                            </a>
                        </div>
                        <div class="contact">
                            <h4 class="contact__title">
                                KIEV
                            </h4>
                            <a href="tel:+380443324990" class="contact__tel">
                                +38 (0)44 332 49 90
                            </a>
                            <a href="mailto:kiev-info@zebra-worldwide.com" class="contact__email">
                                kiev-info@zebra-worldwide.com
                            </a>
                        </div>
                    </div>
                    <div class="column small-12 medium-12 large-6">
                        <div class="main-contact-form">
                            <form method="post" action="index.php">
                                <label>
                                    <input name="name" type="text" placeholder="Name*">
                                </label>

                                <label>
                                    <input name="email" type="email" placeholder="Email*">
                                </label>
                                <div class="row small-collpse main-contact-form__attachment">
                                    <div class="column small-8">
                                        <div class="main-contact-form__attachment-input">Attachment</div>
                                    </div>
                                    <div class="column small-4">
                                        <label class="main-contact-form__file">Upload
                                            <input name="attachment" type="file">
                                        </label>
                                    </div>
                                </div>

                                <label>
                                    <input name="text" type="text" placeholder="Subject">
                                </label>
                                <label>
                                    <textarea name="message" placeholder="Type Here"></textarea>
                                </label>
                                <input id="submit" name="submit" type="submit" value="Submit">

                            </form>
                        </div>

                    </div>
                </div>


    </main>
<?php include('footer.php'); ?>