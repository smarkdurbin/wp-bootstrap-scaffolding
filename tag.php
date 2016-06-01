<?php get_template_part('header'); ?>
        <section>
			<div class="row">
				<div class="col-xs-12">
				    <h2>
				        <span class="text-muted">Tag:</span> <?php single_tag_title(); ?>  
				    </h2>
				    <?php get_template_part('loops/archive'); ?>
				</div>
			</div>
		</section>
<?php get_template_part('footer'); ?>