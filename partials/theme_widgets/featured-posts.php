                    <!--Featured Posts Widget-->
                    <!-- sidebar-widget -->
                    	    
                    	    <?php
                                // WP_Query arguments
                                $fp_args = array (
                                	'posts_per_page'         => '3',
                                	'ignore_sticky_posts'    => true,
                                	'tag'                    => 'featured',
                                );

                                // The Query
                                $query = new WP_Query( $fp_args );
    
                                // The Loop
                                if ( $query->have_posts() ) {
                                ?>
                                
                                <div class="sidebar-widget">
                                	<h3 class="sidebar-title">Featured Posts</h3>
                                	<div class="widget-container">

                                <?php  
                                	while ( $query->have_posts() ) {
                                		$query->the_post();
                                ?>

                                        <article class="widget-post">
                                			<div class="post-image">
                                				<a href="<?php the_permalink(); ?>">
                                				    <?php
                                                        if ( has_post_thumbnail() ) {
                                                    ?>
                                                        <!--Post Thumbnail-->
                                                        <?php the_post_thumbnail('sidebar-featured',array('class' => 'media-object bfp-image')); ?>
                                                        
                                                    <?php
                                                        }
                                                    ?>
                                				</a>
                                			</div>
                                			<div class="post-body">
                                				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                				<div class="post-meta">
                                					<span><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?></span> <span><a href="<?php get_permalink(); ?>"><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></a></span>
                                				</div>
                                			</div>
                                		</article>
    
                                	
                                <?php
                                	}
                                ?>
                                    </div>
                                </div>
                                <?php	
                                }
                                ?>

                    		

