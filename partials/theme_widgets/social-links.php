                    <!--Social Links Widget-->
                    <!-- sidebar-widget -->
                    <div class="sidebar-widget">
                    	<h3 class="sidebar-title">Socials</h3>
                    	<div class="widget-container">
                    		<div class="widget-socials">
                    			<?php
                                echo strip_tags(wp_nav_menu(
                                        array('theme_location' => 'social-links',
                                            'container_class' => 'user_menu',//custom container class
                                            'echo' => false,
                                            'items_wrap' => '%3$s')
                                ), '<a><span><i><div>');
                                ?>
                    			
                    		</div>
                    	</div>
                    </div>