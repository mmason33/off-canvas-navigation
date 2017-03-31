<?php
/**
 * Template Name: Our Team Template
 */
?>
<div class="container-fluid">
  <div class="row our-team-hero">
    <div class="col-lg-3 col-md-3 col-sm-3 leadership-image">
      <img src="/wp-content/uploads/2017/03/kaufman-400x400.jpg" class="img-fluid">
      <div class="visible-xs-down hidden-sm-up">
      <h3>Dr. Edward Kaufman</h3>
      <h4>Medical Director</h4>
      <a href="#">Read Bio</a>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs-down">
      <div class="leadership-bio">
      <h3>Dr. Edward Kaufman</h3>
      <h4>Medical Director</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
    </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs-down">
      <div class="leadership-bio">
      <h3>Illana Zukavich</h3>
      <h4>Clinical Director</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 leadership-image text-lg-right">
      <img src="/wp-content/uploads/2017/03/illana-400x400.jpg" class="img-fluid">
      <div class="visible-xs-down hidden-sm-up">
      <h3>Illana Zuchavich</h3>
      <h4>Clinical Director</h4>
      <a href="#">Read Bio</a>
      </div>
    </div>
</div>
</div>

<div id="our-team">


  <?php $categories = get_terms('staff_category', array(
    'hide_empty' => true
    )
  );
  foreach( $categories as $categorie) {
        $args = array(
            'post_type' => 'our_staff',
            'posts_per_page' => -1,
            'staff_category'=> $categorie->slug

        );?>

    <?php //declare query ?>
    <?php $loop = new WP_Query( $args );?>
    <div class="staff-section-title">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 text-center">
            <h2 class="white"><?php echo $categorie->description; ?></h2>
          </div>
        </div>
      </div>
    </div>
    <section class="<?php echo $categorie->slug ?> staff-wrap">
      <div class="container-fluid">
        <div class="row justify-content-center">


        <?php //start the loop ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                <?php $title = get_field('staff_title'); ?>
                <div class="col-md-6 col-xl-3 col-lg-4 text-center staff-member" data-aos="zoom-in" data-aos-once="true">
                    <div class="staff-image">
                      <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded"></a>
                        <h4 class="staff-name"><a href="<?php the_permalink(); ?>" class="staff-anchor"><?php the_title(); ?></a></h4>
                      <p class="staff-title"><a href="<?php the_permalink(); ?>" class="staff-anchor"><?php echo $title; ?></a></p>
                  </div>
                  <div class="hidden-sm-up">
                    <a href="<?php the_permalink(); ?>">Read Bio</a>
                  </div>
                </div>
        <?php endwhile;?>
          </div>
        </div>
      </section>
        <?php wp_reset_postdata();
    }?>
</div>
