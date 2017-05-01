<?php
/**
 * Template Name: Our Team Template
 */
?>
<div class="container-fluid">
  <div class="row our-team-hero">
    <div class="col-lg-3 col-md-3 col-sm-3 leadership-image">
      <img src="/wp-content/uploads/2017/04/kaufman-400x400.jpg" class="img-fluid">
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
      <p>Dr. Kaufman brings a wealth of knowledge to our staff and has been practicing psychiatry in the behavioral health field for over 40 years. He blends his knowledge of psychology, family systems and psychopharmacology to address a wide array of disorders and meet our client’s individual needs. His commitment to helping those struggling with co-occurring disorders reinforces Northbound’s vision for providing quality care in an environment that’s conducive to recovery. He received his medical training from Jefferson University, USC and Columbia University, College of Physicians and Surgeons. He has previously served as the president of the American Academy of Addiction Psychiatry, the editor of American Journal of Drug and Alcohol Abuse and the Director of Psychiatric Services at the University of California, Irvine. Dr. Kaufman has authored 3 books, edited 5 more and contributed over 200 articles on addiction, mental health disorders and family therapy.</p>
    </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs-down">
      <div class="leadership-bio">
      <h3>Illana Zivkovich</h3>
      <h4>Clinical Director</h4>
      <p>Ilana Zivkovich joined Northbound in January 2015. An experienced clinician, executive, and clinical development officer, Ilana celebrates and emboldens Northbound’s renowned focus on fostering a flourishing and healthy organizational culture. Trained in positive psychology, Ilana believes in the strengths and potential of every client and team member she has the opportunity to work with. She utilizes her signature strengths of curiosity, love, and honesty to help others identify and build upon their unique set of strengths to live within the upper reaches of their potential. In recovery herself since the age of 16, Ilana is grateful for the opportunity to help young and emerging adults develop a fulfilling lifestyle of recovery. In her role as Northbound’s Chief Clinical Officer Ilana oversees the clinical service development and delivery, and does her part to ensure that Northbound’s ethos of transparency, authenticity, and collaborative leadership are able to flourish. Prior to joining Northbound Ilana held a variety of leadership roles within the addiction field, most recently serving as the Executive Director for Promises Austin. Ilana holds a Master of Science in Social Work from the University of Texas at Austin, and is a Licensed Clinical Social Worker (LCSW), Licensed Chemical Dependency Counselor (LCDC), and a Certified Daring Way Facilitator Consultant (CDWF-C). Additional areas of clinical specialization include shame resiliency, dual diagnosis, family of origin and family dynamic issues, and positive psychology.</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 leadership-image text-lg-right">
      <img src="/wp-content/uploads/2017/04/illana-400x400.jpg" class="img-fluid">
      <div class="visible-xs-down hidden-sm-up">
      <h3>Illana Zivkovich</h3>
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
