    <script src="assets/vendors/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    if(window.location.hash) {
        const el = document.querySelector(window.location.hash);
        if(el) {
            // Smooth scroll fallback
            setTimeout(() => {
                el.scrollIntoView({ behavior: "smooth" });
            }, 300); // delay to allow all JS/CSS to load
        }
    }
});
</script>


    <!-- template js -->
    <script src="assets/js/transwide.js"></script>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <script src="assets/vendors/transwide-toolbar/js/js.cookie.min.js"></script>
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <script src="assets/vendors/transwide-toolbar/js/jQuery.style.switcher.min.js"></script>
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <script src="assets/vendors/transwide-toolbar/js/lang.js"></script>
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <?php }?>
    <?php if(isset($rtl)&&!empty($rtl)) {?>
    <script src="assets/vendors/transwide-toolbar/js/transwide-toolbar.js"></script>
    <?php }?>