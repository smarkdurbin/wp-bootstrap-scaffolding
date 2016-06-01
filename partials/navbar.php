	<nav class="navbar navbar-inverse navbar-static-top">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
	                <?php
	                    bloginfo('name');
	                ?>
	            </a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	        	<?php get_template_part('searchform-navbar'); ?>
	        	<?php 
                    wp_nav_menu( array( 
                            'menu'=> 'navbar',
                            'theme_location' => 'navbar-left',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-left',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    );
	             ?>
	             <?php 
                    wp_nav_menu( array( 
                            'menu'=> 'navbar',
                            'theme_location' => 'navbar-right',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-right hidden-xs',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    );
	             ?>
	        </div>
	        <!--/.nav-collapse -->
	    </div>
	</nav>