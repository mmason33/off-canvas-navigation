<header class="site-header" id="top">
		<div class="wrap">

			<h1 id="logo"><a href="#">Northbound</a></h1>
      			<nav id="site-navigation" class="main-navigation">
                      <a id="menu-icon" href="#" class=""><span></span></a>
            <?php
                 wp_nav_menu( array(
                     'menu'              => 'Main Menu',
                     'theme_location'    => 'primary',
                     'menu_id'           => 'primary-menu',
                     'menu_class'        => 'menu dropdown',
                     'depth'             => 3
                 ));
             ?>
      	    </nav><!-- #site-navigation -->

      		</div><!-- .wrap -->
      	</header>
        <div class="menu-overlay"></div>
