  <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
  <div class="row tiles">
    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-once="true">
      <a href="#">
      <div class="sidebar-tile" style="background: url('/wp-content/uploads/2017/03/people-woman-coffee-meeting-1.jpg') no-repeat center center;background-size:cover;">
        <h3>Our Story</h3>
        <div class="tile-overlay"></div>
      </div>
    </a>
    </div>
    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-once="true">
      <a href="#">
      <div class="sidebar-tile" style="background: url('/wp-content/uploads/2017/03/pexels-photo-10604-1.jpg') no-repeat center center;background-size:cover;">
        <h3>Legacy of Leadership</h3>
        <div class="tile-overlay"></div>
      </div>
    </a>
    </div>
<?php if ( is_page_template('page-with-sidebar-mental-health.php') || is_page(20141)): ?>
<div class="col-md-12 align-self-center" data-aos="fade-up" data-aos-once="true">
  <?php wp_nav_menu( array(
          'theme_location'    => 'primary',
          'menu'              => 'Mental',
          'menu_id'           => 'mental-health-menu',
          'menu_class'        => 'mental-health'
        ));  ?>
</div>
<?php endif; ?>
<?php if ( is_page_template('page-with-sidebar-addiction.php') || is_page(20139)): ?>
<div class="col-md-12 align-self-center" data-aos="fade-up" data-aos-once="true">
  <?php wp_nav_menu( array(
          'theme_location'    => 'primary',
          'menu'              => 'Addiction',
          'menu_id'           => 'addiction-menu',
          'menu_class'        => 'addiction-nav'
        ));  ?>
</div>
<?php endif; ?>

  </div>
