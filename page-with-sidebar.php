<?php
/**
 * Template Name: Page W/Sidebar
 */
?>
<?php get_template_part('includes/half-n-half'); ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="wrap container-fluid section-float">
  <div class="content row">
    <main class="col-xl-8 col-lg-8 col-md-7">
        <?php get_template_part('templates/content', 'page'); ?>
    </main>
    <aside class="col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-5 offset-md-0 col-sm-8 offset-sm-2 sidebar-main">
      <?php do_action('get_sidebar');?>
      <?php get_template_part('templates/sidebar');?>
    </aside>
  </div><!--end content-->
</div>
<?php endwhile; ?>
