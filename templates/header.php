<!-- REVISIT THIS NAV-TOP PART COMMENTED OUT ON 3/30 -->
<!-- <section id="nav-top">
	<div class="nav-wrap">
	<ul>
		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
	</ul>
	</div>
</section> -->
<header class="header" id="nav-header">
		<div class="nav-wrap">
			<h1 id="nav-brand"><a href="<?php echo get_site_url(); ?>">Northbound</a></h1>
      			<nav id="off-canvas-nav" class="primary-navigation">
                      <a id="nav-icon" href="#" class=""><span></span></a>
            <?php
                 wp_nav_menu( array(
                     'menu'              => 'Main Menu',
                     'theme_location'    => 'primary',
                     'menu_id'           => 'primary-menu',
                     'menu_class'        => 'menu dropdown',
                     'depth'             => 3
                 ));
             ?>
      	    </nav><!-- #off-canvas-nav -->

      		</div><!-- .wrap -->
      	</header>
				<div class="overlay"></div>
