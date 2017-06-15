<!-- <div id="<?php //echo $i; ?>" class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center" data-aos="flip-down" data-aos-once="true" style="background:url('<?php //the_post_thumbnail_url(); ?>') no-repeat center center;background-size:cover;"> -->
<!--   <a href="<?php //the_permalink(); ?>">
	<img src="<?php //the_post_thumbnail_url(); ?>" class="img-fluid blog-image"/>
  </a> -->
<article <?php post_class('blog-item'); ?>>
        <h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php get_template_part('templates/entry-meta'); ?>
      <div class="blog-summary">
        <p><?php echo get_excerpt(80); ?></p>
      </div>
</article>
<!-- </div> -->
