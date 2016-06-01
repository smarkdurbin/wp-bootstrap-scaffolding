<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
?>
		<?php get_template_part('content/index'); ?>
<?php
		//
	} // end while
?>	
	<?php get_template_part('partials/pagination'); ?>
<?php
} // end if
?>