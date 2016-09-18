<?php
/*
 *	Fifty3
 *	Custom functions (for enhanced theme goodness)
 */


// Add support for menus
register_nav_menus( array(
	'main-nav' 	=> 'Main Menu'
) );


//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// Allow Upload of SVGs
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Enqueue all required JS files
function theme_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'final-js', get_template_directory_uri() . '/js/final.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


//Enqueue all required CSS/LESS files
function theme_styles() {
	wp_enqueue_style( 'master', get_template_directory_uri() . '/css/style.css', array(), '0.0.1' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
