<?php get_template_part('header'); ?>
        <section>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				    <h2 class="text-center page-title">
				        <span class="text-muted">Archive:</span> <?php echo single_month_title(); ?>
				    </h2>
				    <?php get_template_part('loops/attachment'); ?>
				</div>
			</div>
		</section>
<?php get_template_part('footer'); ?>