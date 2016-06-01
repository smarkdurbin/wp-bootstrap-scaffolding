<?php get_template_part('header'); ?>

        <section>
			<div class="row">
				<div class="col-xs-12">
				    <h2>
				        <span class="text-muted">Category:</span> <?php echo single_cat_title(); ?>
				    </h2>
				    <?php get_template_part('loops/archive'); ?>
				</div>
			</div>
		</section>
		

<?php get_template_part('footer'); ?>