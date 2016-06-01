<?php get_template_part('header'); ?>
        <section>
			<div class="row">
				<div class="col-md-8">
				    <?php get_template_part('loops/index'); ?>
				</div>
				<div class="col-md-4">
					<?php get_template_part('partials/sidebar'); ?>
				</div>
			</div>
		</section>
<?php get_template_part('footer'); ?>