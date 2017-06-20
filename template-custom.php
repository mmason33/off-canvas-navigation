<?php
/**
 * Template Name: Custom Template
 */
?>
<?php get_template_part('includes/half-n-half'); ?>
<div id="page" class="container-fluid wrap section-float">
   <?php while (have_posts()) : the_post(); ?>
    <?php do_action('get_builder'); ?>
    <?php  get_template_part('includes/builder'); ?>
  <?php endwhile; ?>
</div>
<?php get_template_part('templates/ins-cta'); ?>