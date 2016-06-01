<?php // custom functions.php template @ digwp.com

if ( ! isset( $content_width ) ) $content_width = 900;

// include bootstrap navwalker
require_once('inc/helpers/wp_bootstrap_navwalker.php');

// Enables post and comment RSS feed links to head
add_theme_support('automatic-feed-links');

add_theme_support( "title-tag" );
add_theme_support( "custom-header", $args );
add_theme_support( "custom-background", $args );
add_editor_style();

// declare thumbnail sizes
add_image_size('xs', 750, 500, true); // Page XS
add_image_size('sm', 960, 640, true); // Page SM
add_image_size('md', 1200, 600, true); // Page MD
add_image_size('lg', 1500, 750, true); // Page LG
add_image_size('xl', 2000, 1000, true); // Page XL
add_image_size('full', true); // Page FULL


add_theme_support( 'post-thumbnails' ); 

// Register Navigation
function register_menus()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'navbar-left' => 'Navbar Left', // Main Navigation
        'navbar-right' => 'Navbar Right', // Main Right Navigation
        'footer-links' => 'Footer Links', // Social Media Links
    ));
}
add_action('init', 'register_menus'); // Add Menus

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
     
function enqueue_styles() {
	
	/** REGISTER css/bootstrap.min.css **/
    wp_register_style( 'bootstrap-style', THEME_DIR . '/css/bootstrap/bootstrap.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'bootstrap-style' );
     
    /** REGISTER css/font-awesome.css **/
    wp_register_style( 'font-awesome-style', THEME_DIR . '/css/font-awesome-4.4.0/css/font-awesome.min.css', array(), '1', 'all' );
    wp_enqueue_style( 'font-awesome-style' ); 
     
    
    /** REGISTER css/theme.css **/
    wp_register_style( 'theme-style', THEME_DIR . '/css/theme.css', array(), '1', 'all' );
    wp_enqueue_style( 'theme-style' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
     
// ENQUEUE SCRIPTS
     
function enqueue_scripts() {
	
	// smart jquery inclusion
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '1.3.2');
		wp_enqueue_script('jquery');
	}
     
    /** REGISTER HTML5 Shim **/
    wp_register_script( 'html5-shim', 'https://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
    // wp_enqueue_script( 'html5-shim' );
    
    /** REGISTER bootstrap.min.js **/
    wp_register_script( 'bootstrap-script', THEME_DIR . '/js/bootstrap.min.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'bootstrap-script' );
    
    /** REGISTER scripts.js **/
    wp_register_script( 'custom-script', THEME_DIR . '/js/scripts.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'custom-script' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

// add_filter('prepend_attachment', 'ag_prepend_attachment');
function ag_prepend_attachment($p) {
   return '<p>'.wp_get_attachment_link(0, 'large', true).'</p>';
}

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');

// custom excerpt length
function custom_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more'); 
*/

// no more jumping for read more link
function no_more_jumping($post) {
	return '&nbsp;<a href="'.get_permalink($post->ID).'" class="read-more hidden">'.'Continue Reading'.'</a>';
}
// add_filter('excerpt_more', 'no_more_jumping');

// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.site_url().'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}

// category id in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

// display posts 3 at a time for main loop
function three_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 3 );
    }
}
add_action( 'pre_get_posts', 'three_posts_on_homepage' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function renda_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog right sidebar',
		'id'            => 'blog_right',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'renda_widgets_init' );

// use latest menu social icons
add_filter( 'storm_social_icons_use_latest', '__return_true' );

//isblog function
// https://gist.github.com/wesbos/1189639
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

show_admin_bar( false );

// html5 comments support
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );


// https://tommcfarlin.com/filter-wp-title/
function mayer_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	} // end if
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	} // end if
	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( 'Page %s', max( $paged, $page ) ) . " $sep $title";
	} // end if
	return $title;
} // end mayer_wp_title
add_filter( 'wp_title', 'mayer_wp_title', 10, 2 );

?>