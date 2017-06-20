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
          <a href="#"><i class="fa fa-phone-square fa-2x"></i><small>Call</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><i class="fa fa-map-marker fa-2x"></i><small>Directions</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><i class="fa fa-envelope fa-2x"></i><small>Contact</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><img src="/wp-content/uploads/2017/05/jcaho-white.png" class="img-fluid"><small>JCAHO</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><img src="/wp-content/uploads/2017/05/naatp-white.png" class="img-fluid"><small>NAATP</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><img src="/wp-content/uploads/2017/05/dhhs-white.png" class="img-fluid"><small>DHHS</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><i class="fa fa-facebook fa-2x"></i><small>Facebook</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><i class="fa fa-instagram fa-2x"></i><small>Instagram</small></a>
        </div>
        <div class="col-md-2 col-lg-1 col-sm-4 col-4 text-center icon-item">
          <a href="#"><i class="fa fa-twitter fa-2x"></i><small>Twitter</small></a>
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