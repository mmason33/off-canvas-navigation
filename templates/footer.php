<?php if (!is_page_template('contact.php')): ?>
<footer class="content-info">
  <div class="container-fluid wrap">
    <div class="row justify-content-center">
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-8 text-center">
        <img src="/wp-content/uploads/2017/04/nts-white-text-960x379.png" class="img-fluid">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h4 class="white">"Our mission is to assist our clients in achieving one year of continuous sobriety"</h4>
        <hr>
      </div>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="tel:8663110003"><i class="fa fa-phone-square fa-2x"></i><small>Call</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://www.google.com/maps/place/4343+Von+Karman+Ave+%23200,+Newport+Beach,+CA+92660/@33.6647704,-117.8647203,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcde596ca5fb65:0xfe61ff9b5c4c66ff!8m2!3d33.6647256!4d-117.8622952" target="_blank"><i class="fa fa-map-marker fa-2x"></i><small>Directions</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="/contact-us"><i class="fa fa-envelope fa-2x"></i><small>Contact</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://www.jointcommission.org/" target="_blank"><img src="/wp-content/uploads/2017/05/jcaho-white.png" class="img-fluid"><small>JCAHO</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://www.naatp.org/" target="_blank"><img src="/wp-content/uploads/2017/05/naatp-white.png" class="img-fluid"><small>NAATP</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://www.hhs.gov/" target="_blank"><img src="/wp-content/uploads/2017/05/dhhs-white.png" class="img-fluid"><small>DHHS</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://www.facebook.com/Northboundtreatmentservices/" target="_blank"><i class="fa fa-facebook fa-2x"></i><small>Facebook</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://www.instagram.com/livingsober/" target="_blank"><i class="fa fa-instagram fa-2x"></i><small>Instagram</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="https://twitter.com/livingsober_nts?lang=en" target="_blank"><i class="fa fa-twitter fa-2x"></i><small>Twitter</small></a>
        </div>
      </div>
  </div>
</footer>
<?php endif; ?>

<?php if ( is_page_template('page-with-sidebar.php') || is_page_template('page-with-sidebar-mental-health.php') || is_page_template('page-with-sidebar-admissions.php') || is_page_template('page-with-sidebar-addiction.php') ||is_page_template('template-custom.php') || is_page_template('our-team.php') || is_page_template('leadership.php') || is_page_template('facilities.php')): ?>

  <?php get_template_part('templates/sidebar-modal'); ?>

<?php endif; ?>
<?php if (is_page('home')): ?>

  <?php get_template_part('templates/modal'); ?>

<?php endif; ?>