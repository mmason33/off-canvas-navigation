<?php
/**
 * Template Name: Home Page
 */
?>
  <?php get_template_part('includes/half-n-half'); ?>
<div id="page" class="container-fluid wrap section-float">
   <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php do_action('get_builder'); ?>
    <?php  get_template_part('includes/builder'); ?>
  <?php endwhile; ?>
</div>
<?php get_template_part('templates/ins-cta'); ?>
<?php get_template_part('templates/credits'); ?>
