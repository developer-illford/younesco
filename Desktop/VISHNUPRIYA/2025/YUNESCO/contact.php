<?php $head_title = "Contact Us || Transwide || Professional Transportation & Logistics PHP Template" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header.php'); ?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/contact-banner.png);"></div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Contact Us</h2>
                    <ul class="transwide-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul><!-- /.transwide-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-page section-space-top">
            <div class="container">
                <div class="sec-title sec-title--center wow fadeInUp" data-wow-duration="1500ms">
                    <div class="sec-title__top">
                        <h6 class="sec-title__tagline">Contact with us</h6><!-- /.sec-title__tagline -->
                        <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="Contact with us" class="sec-title__shape">
                    </div><!-- /.sec-title__top -->
                    <h3 class="sec-title__title">Feel Free to Write <br> Us Anytime</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-50">
                    <div class="col-lg-6">
                        <div class="contact-page__image">
                            <img src="assets/images/office-reception.jpg" alt="contact" class="wow fadeInUp" data-wow-duration="1500ms">
                        </div><!-- /.contact-page__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="contact-page__content">
                            <ul class="contact-page__info list-unstyled">
                                <li>
                                    <span class="contact-page__info__icon">
                                        <i class="icon-phone-2"></i>
                                    </span><!-- /.contact-page__info__icon -->
                                    <div class="contact-page__info__content">
                                        <h4 class="contact-page__info__title">Call for Details?</h4>
                                        <a href="tel:+971506571625" class="contact-page__info__link">+97 15065 71625</a>
                                    </div><!-- /.contact-page__info__content -->
                                </li>
                                <li>
                                    <span class="contact-page__info__icon">
                                        <i class="icon-email"></i>
                                    </span><!-- /.contact-page__info__icon -->
                                    <div class="contact-page__info__content">
                                        <h4 class="contact-page__info__title">Send Email</h4>
                                        <a href="mailto:youscomk@eim.ae" class="contact-page__info__link">youscomk@eim.ae</a>
                                    </div><!-- /.contact-page__info__content -->
                                </li>
                                <li>
                                    <span class="contact-page__info__icon">
                                        <i class="icon-location"></i>
                                    </span><!-- /.contact-page__info__icon -->
                                    <div class="contact-page__info__content">
                                        <h4 class="contact-page__info__title">Visit Anytime</h4>
                                        <a href="https://www.google.com/maps" class="contact-page__info__link">Adel Mohamed Ali Jasim Almarzouqi, Bur Dubai Algoze First</a>
                                    </div><!-- /.contact-page__info__content -->
                                </li>
                            </ul><!-- /.contact-page__info -->
                            <div class="contact-page__form">
                                <h3 class="contact-page__form__title wow fadeInUp" data-wow-duration="1500ms">Get In Touch with Us and Enjoy <br> Top- Notch Support</h3>
                                <form action="assets/inc/sendemail.php" class="contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" method="POST">
                                    <div class="form-one__group">
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <textarea name="message" placeholder="Write Message . . ."></textarea>
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control contact-page__form__button form-one__control--full">
                                            <button type="submit" class="transwide-btn">
                                                <span class="transwide-btn__text transwide-btn__text--1">Send Message</span>
                                                <span class="transwide-btn__text transwide-btn__text--2">Send Message</span>
                                            </button><!-- /.transwide-btn -->
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->
                                </form><!-- /.form-one -->
                                <div class="result"></div><!-- /.result -->
                            </div><!-- /.contact-page__form -->
                        </div><!-- /.contact-page__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-50 -->
            </div><!-- /.container -->
        </section><!-- /.contact-page section-space-top -->

        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.9549960617596!2d55.2421523!3d25.170997399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6909a59fcd11%3A0xeb1619cfe274726e!2sPrincess%20cars!5e0!3m2!1sen!2sin!4v1758704853196!5m2!1sen!2sin" class="map__contact" allowfullscreen></iframe>
                </div><!-- /.google-map -->
            </div><!-- /.container-fluid -->
        </section><!-- /.contact-map -->

        

<?php require_once('parts/footer/footer.php');
require_once('parts/whatsapp.php'); ?>
