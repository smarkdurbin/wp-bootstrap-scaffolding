                    <article class="blog-post">
						<div class="blog-post-body">
							<h3 class=""><a href="<?php the_permalink(); ?>">
							    <?php the_title(); ?>
							</a></h3>
							<ul class="blog-post-meta-list list-inline text-muted">
								<li>
									<?php echo get_the_author_link(); ?>
								</li>
								<li>
									<?php the_time('F j, Y'); ?>
								</li>
								<li>
									<?php the_category( ", " ); ?>
								</li>
							</ul>
						</div>
					</article>