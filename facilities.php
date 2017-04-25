<?php
/**
 * Template Name: Facilties Template
 */
?>
  <div class="row">
    <div class="col-md-12">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php get_template_part('includes/gallery'); ?>
