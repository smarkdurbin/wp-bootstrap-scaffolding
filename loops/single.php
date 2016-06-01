<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
?>
		<?php get_template_part('content/single'); ?>
<?php
		//
	} // end while
?>	
	<?php get_template_part('partials/pager'); ?>
<?php
} // end if
?>


