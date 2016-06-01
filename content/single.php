					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                    	<div class="row">
	                    	<div class="col-xs-12">
	                    		<div class="blog-post-image text-center">
	                    			<?php $attachment_id = get_post_thumbnail_id( $post_id ); ?> 
	                    			<?php $attachment_page = get_attachment_link( $attachment_id ); ?>
									<a href="<?php echo $attachment_page; ?>">
										<!--Post Thumbnail-->
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
									<ul class="post-meta-list list-unstyled list-inline text-muted">
										<li>
											<?php echo get_the_author_link(); ?>
										</li>
										<li>
											<?php the_time('F j, Y'); ?>
										</li>
										<li>
											<?php echo get_comments_number(); ?>
										</li>
									</ul>
									<div class="post-content">
										<?php the_content(); ?>
									</div>
									<div class="post-taxonomy">
										<p class="text-muted"> 
											<?php the_tags('Tagged: ', ',' , ''); ?>
										</p>
										<p class="text-muted">
											Categorized: <?php the_category( ", " ); ?>
										</p>
									</div>
		                    	</div>
		                    </div>
						</div>
						<div class="row">
	                    	<div class="col-xs-12">
		                    			<div class="blog-post-comments">
				                    <?php
				                    // If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}
									?>
				                </div>
							</div>
						</div>
					</article>