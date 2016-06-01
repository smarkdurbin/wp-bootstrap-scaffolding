<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
?>
		<?php get_template_part('content/page'); ?>
<?php
		//
	} // end while
?>	
	
<?php
} // end if
?>