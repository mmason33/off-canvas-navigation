<?php
/**
 * Template Name: Page W/Sidebar
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="wrap container-fluid">
  <div class="content row">
    <main class="main col-xs-12">
        <?php get_template_part('templates/content', 'page'); ?>
    </main>
    <aside class="sidebar">
      <?php do_action('get_sidebar');?>
      <?php get_template_part('templates/sidebar');?>
    </aside>
  </div><!--end content-->
</div><!--end wrap-->
<?php endwhile; ?>
