<?php
/**
 * Template Name: Legacy of Leadership
 */
?>

<?php get_template_part('includes/half-n-half'); ?>
  <div id="page" class="container-fluid wrap section-float"> 
    <div class="container-fluid">

    <?php $args = array( 'post_type' => 'leadership', 'posts_per_page' => -1 ); ?>

      <?php //declare query ?>

      <?php $loop = new WP_Query( $args );?>

          <?php $i = 1; //initialize a counter?>

          <?php //start the loop ?>

          <?php while ( $loop->have_posts() ) : $loop->the_post();?>

            <?php $title = get_field('staff_title'); ?>

            <?php //logic to offset sections every other instance ?>

            <?php if ( $i === 1 || $i === 3 || $i === 5 || $i === 7 || $i === 9): ?>

              <div class="row leadership-grid">

                  <div class="col-lg-3 col-md-4 leadership-image">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded">
                      <div class="visible-xs-down hidden-sm-up">
                        <h3><?php the_title(); ?></h3>
                        <h4><?php echo $title; ?></h4>
                        <a href="<?php the_permalink(); ?>">Read Bio</a>
                      </div>
                  </div>

                  <div class="col-lg-9 col-md-8 hidden-xs-down">
                    <div class="leadership-bio">
                      <h3><?php the_title(); ?></h3>
                      <h4><?php echo $title; ?></h4>
                      <?php the_content(); ?>
                    </div>
                  </div>

              </div>

            <?php else: ?>

              <div class="row leadership-grid">

                      <div class="col-lg-9 col-md-8 hidden-xs-down">
                        <div class="leadership-bio">
                          <h3><?php the_title(); ?></h3>
                          <h4><?php echo $title; ?></h4>
                          <?php the_content(); ?>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 leadership-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded">
                          <div class="visible-xs-down hidden-sm-up">
                            <h3><?php the_title(); ?></h3>
                            <h4><?php echo $title; ?></h4>
                           <a href="<?php the_permalink(); ?>">Read Bio</a>
                          </div>
                      </div>

              </div>



            <?php endif; ?>

          <?php $i++; //add 1 each iteration?>

          <?php endwhile;?>

          <?php wp_reset_postdata();?>

    </div><!--end container-fluid-->
</div><!--end wrap section-float-->

<?php get_template_part('templates/ins-cta'); ?>