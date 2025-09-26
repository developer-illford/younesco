<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $head_title; ?></title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" href="assets/images/favicon.jpg">
    <link rel="apple-touch-icon" href="assets/images/favicon.jpg">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/6c53136549.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/transwide-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <?php if(isset($home)&&!empty($home)) {?>
    <link rel="stylesheet" href="assets/css/transwide.css" />
    <?php }?>
    <?php if(isset($home_two_color)&&!empty($home_two_color)) {?>
    <link rel="stylesheet" href="assets/css/color.css">
    <?php }?>
    <?php if(isset($home_three_color)&&!empty($home_three_color)) {?>
    <link rel="stylesheet" href="assets/css/color-2.css">
    <?php }?>
    <?php if(isset($home_four_color)&&!empty($home_four_color)) {?>
    <link rel="stylesheet" href="assets/css/color-3.css">
    <?php }?>
    <?php if(isset($home_dark)&&!empty($home_dark)) {?>
    <link rel="stylesheet" href="assets/css/transwide-dark.css" />
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <link rel="stylesheet" href="assets/css/transwide-rtl.css" />
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <link rel="stylesheet" href="assets/css/transwide-custom-rtl.css" />
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <link rel="stylesheet" href="assets/vendors/transwide-toolbar/css/transwide-toolbar.css">
    <?php }?>
</head>
<body
    <?php if (isset($body_class) && !empty($body_class)) { ?>
    class="<?php echo $body_class; ?>"
    <?php } ?>
    <?php if (isset($body_bg_image) && !empty($body_bg_image)) { ?>
    data-tm-bg-img="<?php echo $body_bg_image; ?>"
    <?php } ?>>