       <?php
        require_once('parts/app/app.php');
        // require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">

        <header class="main-header main-header--two sticky-header sticky-header--normal">
            <div class="main-header__container container">
                <div class="main-header__inner">
                    <div class="main-header__left">
                        <div class="main-header__logo logo-retina">
                            <a href="index.php">
                                <img src="assets/images/younesco-logo.jpg" alt="Transwide HTML" width="149">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <nav class="main-header__nav main-menu">
                            <?php require_once('parts/header/menu.php'); ?>
                        </nav><!-- /.main-header__nav -->
                    </div><!-- /.main-header__left -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <div class="main-header__call">
                            <span class="main-header__call__icon">
                                <i class="icon-phone"></i>
                            </span><!-- /.main-header__call__icon -->
                            <div class="main-header__call__content">
                                <p class="main-header__call__title">Call Anytime</p><!-- /.call__title -->
                                <h4 class="main-header__call__number">
                                    <a href="tel:+971506571625">+97 15065 71625</a>
                                </h4><!-- /.main-header__call__number -->
                            </div><!-- /.main-header__call__content -->
                        </div>
                        
                        <div class="main-header__button">
                            <a href="contact.php" class="main-header__btn transwide-btn">
                                <span class="transwide-btn__text transwide-btn__text--1">Get Connected</span>
                                <span class="transwide-btn__text transwide-btn__text--2">Gett Connected</span>
                            </a><!-- /.main-header__btn -->
                            <div class="social-links">
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://www.x.com">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">X</span>
                                </a>
                                <a href="https://www.pinterest.com/">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://www.instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div><!-- /.social-links -->
                        </div><!-- /.main-header__button -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.main-header__container container -->
        </header><!-- /.main-header -->