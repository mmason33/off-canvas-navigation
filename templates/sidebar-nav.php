<?php if ( is_page_template('page-with-sidebar-mental-health.php') || is_page(26)): ?>
  <div data-aos="fade-up" data-aos-once="true">
    <h3>Mental Health Information</h3>
    <?php wp_nav_menu( array(
            'theme_location'    => 'primary',
            'menu'              => 'Mental',
            'menu_id'           => 'mental-health-menu',
            'menu_class'        => 'mental-health'
          ));  ?>
  </div>

<?php endif; ?>
<?php if ( is_page_template('page-with-sidebar-addiction.php') || is_page(3)): ?>
  <div data-aos="fade-up" data-aos-once="true">
    <h3>Addiction Information</h3>
    <?php wp_nav_menu( array(
            'theme_location'    => 'primary',
            'menu'              => 'Addiction',
            'menu_id'           => 'addiction-menu',
            'menu_class'        => 'addiction-nav'
          ));  ?>
  </div>
<?php endif; ?>
<?php if ( is_page_template('page-with-sidebar-admissions.php') || is_page(4)): ?>
  <div data-aos="fade-up" data-aos-once="true">
    <h3>Admissions Information</h3>
    <?php wp_nav_menu( array(
            'theme_location'    => 'primary',
            'menu'              => 'Admissions',
            'menu_id'           => 'admissions-menu',
            'menu_class'        => 'admissions-nav'
          ));  ?>
  </div>
<?php endif; ?>