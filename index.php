<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<div class="container-fluid">
<div class="row blog-roll">
<?php $i = 1; ?>
<?php while (have_posts()) : the_post(); ?>

	<div id="<?php echo $i; ?>" class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center" data-aos="flip-down" data-aos-once="true" style="background:url('<?php the_post_thumbnail_url(); ?>') no-repeat center center;background-size:cover;">
  		<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  	</div>
<?php $i++; ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
</div>
</div>


