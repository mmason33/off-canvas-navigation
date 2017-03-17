<?php
/**
 * Template Name: Page W/Sidebar
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="wrap container-fluid">
  <div class="content row">
    <main class="col-xl-8 col-lg-8 col-md-7">
        <?php get_template_part('templates/content', 'page'); ?>
    </main>
    <aside class="col-xl-4 col-lg-4 col-md-5 sidebar-main">
      <?php do_action('get_sidebar');?>
      <?php get_template_part('templates/sidebar');?>
    </aside>
  </div><!--end content-->
</div><!--end wrap-->
<?php endwhile; ?>
