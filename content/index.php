                    <article class="blog-post">
                    	<div class="row">
							<div class="col-xs-12">
								<div class="blog-post-image">
									<a href="<?php the_permalink(); ?>">
					                    <!--Post Thumbnail-->
					                    <?php get_template_part('partials/thumbnail'); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="blog-post-body">
									<h2><a href="<?php the_permalink(); ?>">
									    <?php the_title(); ?>
									</a></h2>
									<ul class="post-meta-list list-inline text-muted">
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
									<div class="post-excerpt">
										<?php the_excerpt(); ?>
									</div>
									<div class="read-more"><a href="<?php the_permalink(); ?>" class="btn btn-default">Continue Reading</a></div>
								</div>
							</div>
						</div>
					</article>