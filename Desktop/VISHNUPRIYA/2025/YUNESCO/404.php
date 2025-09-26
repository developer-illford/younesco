<?php $head_title = "404 Error || Transwide || Professional Transportation & Logistics PHP Template" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-one.php'); ?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);"></div><!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">404 Error</h2>
                    <ul class="transwide-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>404 Error</span></li>
                    </ul><!-- /.transwide-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="error-404 section-space">
            <div class="container">
                <div class="error-404__content">
                    <img src="assets/images/shapes/error-404-1-1.png" alt="error 404" class="error-404__image">
                    <h3 class="error-404__title wow fadeInUp" data-wow-duration="1500ms">Oops! Page not Found</h3><!-- /.error-404__title -->
                    <p class="error-404__text wow fadeInUp" data-wow-duration="1500ms">The page you are looking for is not exist.</p><!-- /.error-404__text -->
                    <form action="#" class="error-404__search wow fadeInUp" data-wow-duration="1500ms">
                        <input type="text" id="error-search" placeholder="Type Here" />
                        <button type="submit" aria-label="search submit" class="error-404__search__btn">
                            <i class="icon-search"></i>
                        </button>
                    </form><!-- /.error-404__search -->
                    <div class="error-404__btns wow fadeInUp" data-wow-duration="1500ms">
                        <a href="index.php" class="error-404__btn transwide-btn">
                            <span class="transwide-btn__text transwide-btn__text--1">Back to Home</span>
                            <span class="transwide-btn__text transwide-btn__text--2">Back to Home</span>
                        </a><!-- /.transwide-btn -->
                    </div><!-- /.error-404__btn -->
                </div><!-- /.error-404__content -->
            </div><!-- /.container -->
        </section><!-- /.error-404 section-space -->

<?php require_once('parts/footer/footer-one.php'); ?>