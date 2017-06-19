<?php get_template_part('templates/sidebar-nav'); ?>

<?php if (!is_page(20)): ?>

<?php //echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>

<!-- <button type="button" class="sidebar-btn" data-toggle="modal" data-target="#contactModal" data-aos="fade-up" data-aos-once="true"><h5>Contact Us</h5></button>
 -->

<?php else: ?>

  <div class="row tiles">
    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-once="true">
      <a href="#">
      <div class="sidebar-tile" style="background: url('/wp-content/uploads/2017/04/people-woman-coffee-meeting-1.jpg') no-repeat center center;background-size:cover;">
        <h3>Our Story</h3>
        <div class="tile-overlay"></div>
      </div>
    </a>
    </div>
  </div>

<?php endif; ?>

<?php get_template_part('templates/sidebar-tiles'); ?>
