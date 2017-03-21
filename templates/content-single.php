<?php while (have_posts()) : the_post(); ?>
  <div class="wrap container-fluid">
    <div class="row single-post-wrap">
  <main class="col-xl-9 col-lg-8 col-md-8">
    <article <?php post_class(); ?>>
      <div class="row">
      <div class="col-md-9 offset-md-1">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
      </div>
    </div>
      <h1 class="single-post-title"><?php the_title(); ?></h1>
          <div class="blog-meta">
            <?php get_template_part('templates/entry-meta'); ?>
          </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      <!-- <?php comments_template('/templates/comments.php'); ?> -->
    </article>
  </main>
  <aside class="col-xl-3 offset-xl-0 col-lg-4 offset-lg-0 col-md-4 offset-md-0 col-sm-8 offset-sm-2 sidebar-main">
    <?php do_action('get_sidebar');?>
    <?php get_template_part('templates/blog-sidebar');?>
  </aside>
</div>
</div>

<?php endwhile; ?>
