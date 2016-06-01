<?php
if( is_home() ) { 
?>

<nav class="nav-pager">
  <ul class="pager">
    <li class="previous"><?php next_posts_link( 'Older posts' ); ?></li>
    <li class="next"><?php previous_posts_link( 'Newer posts' ); ?></li>
  </ul>
</nav>

<?php
 	$defaults = array(
		'before'           => '<p class="hidden">' . 'Pages:',
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink'         => '%',
		'echo'             => 1
	);
 
  wp_link_pages( $defaults );
?>
<?php
}
?>
