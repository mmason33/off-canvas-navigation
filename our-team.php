<?php
/**
 * Template Name: Our Team Template
 */
?>
<div class="container-fluid">
  <div class="row our-team-hero">
    <div class="col-md-3 leadership-image">
      <img src="/wp-content/uploads/2017/03/kaufman-400x400.jpg" class="img-fluid float-left">
    </div>
    <div class="col-md-9">
      <div class="leadership-bio">
        <h3>Dr. Edward Kaufman</h3>
        <h4>Medical Director</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </div>
</div>

<div id="our-team" class="container">


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
    <section class="<?php echo $categorie->slug ?>">
      <div class="row justify-cotent-center">


        <?php //start the loop ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                <div class="col-md-3 text-center">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded">
                      <h5><?php the_title(); ?></h5>
                  <p><?php echo $categorie->slug; ?></p>
                </div>
        <?php endwhile;?>
        </div>
      </section>
        <?php wp_reset_postdata();
    }?>
</div>
