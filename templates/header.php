<section id="nav-top">
	<div class="nav-wrap">
	<ul>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Articles</a></li>
	</ul>
	</div>
</section>
<header class="header" id="nav-header">
		<div class="nav-wrap">
			<h1 id="nav-brand"><a href="#">Northbound</a></h1>
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
