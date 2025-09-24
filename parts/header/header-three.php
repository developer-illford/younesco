       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">

        <header class="main-header main-header--three sticky-header sticky-header--normal">
            <div class="main-header__container container">
                <div class="main-header__inner">
                    <div class="main-header__logo logo-retina">
                        <a href="index.php">
                            <img src="assets/images/logo-dark.png" alt="Transwide HTML" width="149">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <div class="main-header__right">
                        <div class="main-header__right__top">
                            <div class="topbar topbar--three">
                                <div class="topbar__inner">
                                    <ul class="topbar__info list-unstyled">
                                        <li>
                                            <span class="topbar__info__icon">
                                                <i class="icon-location"></i>
                                            </span>
                                            <a href="https://www.google.com/maps">30 Commercial Road Fratton, Australia </a>
                                        </li>
                                        <li>
                                            <span class="topbar__info__icon">
                                                <i class="icon-email"></i>
                                            </span>
                                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                        </li>
                                    </ul><!-- /.topbar__info list-unstyled -->
                                    <ul class="topbar__date list-unstyled">
                                        <li>
                                            <span class="topbar__date__icon">
                                                <i class="icon-clock"></i>
                                            </span>
                                            <span>Mon to Sat: 8.00 am - 7.00 pm</span>
                                        </li>
                                    </ul><!-- /.topbar__date list-unstyled -->
                                </div><!-- /.topbar__inner -->
                            </div><!-- /.topbar -->
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
                        </div><!-- /.main-header__right__top -->
                        <div class="main-header__right__bottom">
                            <nav class="main-header__nav main-menu">
                                <?php require_once('parts/header/menu.php'); ?>
                            </nav><!-- /.main-header__nav -->
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- /.mobile-nav__toggler -->
                            <div class="main-header__right__right">
                                <div class="main-header__call">
                                    <span class="main-header__call__icon">
                                        <i class="icon-phone"></i>
                                    </span><!-- /.main-header__call__icon -->
                                    <div class="main-header__call__content">
                                        <p class="main-header__call__title">Call Anytime</p><!-- /.call__title -->
                                        <h4 class="main-header__call__number">
                                            <a href="tel:+(303)555-0105">(303) 555-0105</a>
                                        </h4><!-- /.main-header__call__number -->
                                    </div><!-- /.main-header__call__content -->
                                </div>
                                <div class="main-header__lniks">
                                    <a href="#" class="main-header__search search-toggler">
                                        <i class="icon-search" aria-hidden="true"></i>
                                        <span class="sr-only">Search</span>
                                    </a><!-- /.main-header__search -->
                                    <a href="contact.php" class="main-header__user">
                                        <i class="icon-user" aria-hidden="true"></i>
                                        <span class="sr-only">User</span>
                                    </a><!-- /.main-header__user -->
                                </div><!-- /.main-header__lniks -->
                                <a href="contact.php" class="main-header__btn transwide-btn">
                                    <span class="transwide-btn__text transwide-btn__text--1">Get a Quote</span>
                                    <span class="transwide-btn__text transwide-btn__text--2">Get a Quote</span>
                                </a><!-- /.main-header__btn -->
                            </div><!-- /.main-header__right__right -->
                        </div><!-- /.main-header__right__bottom -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.main-header__container container -->
            <div class="main-header__shape"></div><!-- /.main-header__shape -->
        </header><!-- /.main-header -->