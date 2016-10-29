<?php
/*
 *	Fifty3
 *	Custom functions (for enhanced theme goodness)
 */

define('ABOUT_PAGE_ID', 7);

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


// Enable Featured Images
add_theme_support( 'post-thumbnails' );


// Allow Upload of SVGs
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/*
* Creating a function to create our CPT
*/

function custom_post_type() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Work', 'Post Type General Name', 'fifty3' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'fifty3' ),
		'menu_name'           => __( 'Work', 'fifty3' ),
		'parent_item_colon'   => __( 'Parent Project', 'fifty3' ),
		'all_items'           => __( 'All Work', 'fifty3' ),
		'view_item'           => __( 'View Project', 'fifty3' ),
		'add_new_item'        => __( 'Add New Project', 'fifty3' ),
		'add_new'             => __( 'Add New', 'fifty3' ),
		'edit_item'           => __( 'Edit Project', 'fifty3' ),
		'update_item'         => __( 'Update Project', 'fifty3' ),
		'search_items'        => __( 'Search Project', 'fifty3' ),
		'not_found'           => __( 'Not Found', 'fifty3' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fifty3' ),
	);

	$args = array(
		'label'               => __( 'Work', 'fifty3' ),
		'description'         => __( 'Project examples', 'fifty3' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions' ), 
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => 'dashicons-format-gallery',
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'work', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 );


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


function action_wpcf7_mail_sent( $contact_form ) {
	mail('ryan@gospotcheck.com', 'After mail sent', 'Yay, the action hook worked!');
};

// add the action
add_action( 'wpcf7_mail_sent', 'action_wpcf7_mail_sent', 10, 1 );


// AJAX submissions
include_once( TEMPLATEPATH . '/includes/ajax.php' );