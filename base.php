<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('body-offcanvas'); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
      if (is_page(29)):
        get_template_part('includes/hero-section');
      endif;
      if (!is_page_template('page-with-sidebar-addiction.php') && !is_page_template('page-with-sidebar-admissions.php') && !is_page_template('page-with-sidebar-mental-health.php')):
        get_template_part('includes/half-n-half');
      endif;
    ?>
    <div class="container-fluid wrap section-float">
    <?php include Wrapper\template_path(); ?>
    </div>
    <div  data-aos="slide-down">
    <div class="container-fluid wrap section-float insurance-cta">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="white">Most insurances accepted</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <img class="img-fluid" src="/wp-content/uploads/2017/04/ins-background-12.png">
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="container-fluid wrap section-float contact-us-cta">
      <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="white">Schedule a consultation today</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <a href="/contact" class="consultation-white">Get In Touch</a>
                </div>
              </div>
            </div>
          </div>
      </div><!--container-->
    </div>
  </div>

    <?php
      // do_action('get_builder');
      // get_template_part('includes/builder');
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
      ?>
  </body>
</html>
