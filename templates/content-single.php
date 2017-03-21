<?php while (have_posts()) : the_post(); ?>
  <div class="wrap container-fluid">
  <article <?php post_class(); ?>>
      <h1 class="single-post-title"><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-6 offset-3">
      <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
    </div>
  </div>
      <?php get_template_part('templates/entry-meta'); ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    <!-- <?php comments_template('/templates/comments.php'); ?> -->
  </article>
</div>
<?php endwhile; ?>
