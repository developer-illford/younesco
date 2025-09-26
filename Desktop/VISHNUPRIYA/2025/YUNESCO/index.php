<?php $head_title =""  ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
  $home_two_color= true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header.php'); ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    if(window.location.hash) {
        const el = document.querySelector(window.location.hash);
        if(el) {
            el.scrollIntoView({ behavior: "smooth" });
        }
    }
});
</script>


<?php
require_once('parts/home2/topbar.php');
require_once('parts/home2/main-slider.php');
require_once('parts/home2/about-two.php');
require_once('parts/home2/services-two.php');
require_once('parts/home2/video-one.php');
require_once('parts/home2/projects-two.php');
require_once('parts/home2/testimonials-two.php');
require_once('parts/home2/funfact-one.php');
require_once('parts/home2/team-one.php');
require_once('parts/home2/quote-request-two.php');
require_once('parts/home2/blog-two.php');
require_once('parts/home2/cta-one.php');
require_once('parts/whatsapp.php');

?>
<?php require_once('parts/footer/footer.php'); ?>