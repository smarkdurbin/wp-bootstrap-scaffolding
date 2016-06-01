                    <!--Categories Widget-->
                    <!-- sidebar-widget -->
                    <div class="sidebar-widget">
                    	<h3 class="sidebar-title">Categories</h3>
                    	<div class="widget-container">

                    		
                    		<?php 
                                $q_args = array(
                            	'show_option_all'    => '',
                            	'orderby'            => 'name',
                            	'order'              => 'ASC',
                            	'style'              => 'list',
                            	'use_desc_for_title' => 1,
                            	'child_of'           => 0,
                            	'feed'               => '',
                            	'feed_type'          => '',
                            	'feed_image'         => '',
                            	'exclude'            => '',
                            	'exclude_tree'       => '',
                            	'include'            => '',
                            	'hierarchical'       => 0,
                            	'title_li'           => '',
                            	'show_option_none'   => '',
                            	'number'             => null,
                            	'depth'              => 0,
                            	'current_category'   => 0,
                            	'pad_counts'         => 0,
                            	'taxonomy'           => 'category',
                            	'walker'             => null,
                            	'hide_empty' => FALSE,                 
                                'show_count'=> 0,             
                                'echo' => 0
                                );
                                  $links = wp_list_categories($q_args);
                                //   $links = str_replace('</a> (', '</a> <span class="pull-right badge post-count">', $links);
                                //   $links = str_replace(')', '</span>', $links);
                                echo '<ul class="unstyled">' . $links . '</ul>' ;
                                
                            ?>

                    		
                    		
                    		
                    		
                    	</div>
                    </div>