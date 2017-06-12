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
      if (!is_page_template('page-with-sidebar-addiction.php') && !is_page_template('page-with-sidebar-admissions.php') && !is_page_template('page-with-sidebar-mental-health.php') && !is_page(29) && !is_page_template('contact.php')):
        get_template_part('includes/half-n-half');
      endif;
    ?>
    <?php if (!is_home() && !is_page_template('contact.php')): ?>
          <div id="page" class="container-fluid wrap section-float">
            <?php include Wrapper\template_path(); ?>
            <?php do_action('get_builder'); ?>
            <?php  get_template_part('includes/builder'); ?>
          </div>
    <?php else: ?>
          <?php include Wrapper\template_path(); ?>
          <?php do_action('get_builder'); ?>
          <?php  get_template_part('includes/builder'); ?>
    <?php endif; ?>
    <?php if (!is_home() && !is_page_template('contact.php')): ?>
    <?php get_template_part('templates/ins-cta'); ?>
    <?php endif; ?>
    <?php do_action('get_footer'); ?>
    <?php get_template_part('templates/footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
