<?php get_template_part('header'); ?>
        <section>
			<div class="row">
				<div class="col-xs-12">
				    <h1>
				        <?php printf( '<span class="text-muted">Search Results for:</span> %s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
				    </h1>
				    <?php get_template_part('loops/archive'); ?>
				</div>
			</div>
		</section>
<?php get_template_part('footer'); ?>