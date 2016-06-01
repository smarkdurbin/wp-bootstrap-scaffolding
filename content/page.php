					<article class="blog-post">
                    	<div class="row">
	                    	<div class="col-md-12">
	                    		<div class="blog-post-image">
									<a href="<?php the_permalink(); ?>">
										<?php get_template_part('partials/thumbnail'); ?>
									</a>
								</div>
	                    	</div>
	                    </div>
						<div class="row">
	                    	<div class="col-xs-12">
		                    	<div class="blog-post-body">
		                    		<h2>
									    <?php the_title(); ?>
									</h2>
									<?php the_content(); ?>
		                    	</div>
		                    </div>
						</div>
					</article>