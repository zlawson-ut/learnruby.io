<?php

/**
 *
 * NOTICE OF LICENSE
 *
 * The licensee is free to use this software for its intended purpose.
 * Inspection and modification of the source code is permitted. Any modifications will void any warranties
 * and liabilities.
 * Redistribution is strictly prohibited.
 *
 * @license     Lincensed to McCabe Professional
 */

/* --- Add Theme Support -- */
add_theme_support('menus');
add_theme_support('post-thumbnails');



function zl_scripts() {
	wp_enqueue_script( 'production_js', get_template_directory_uri() . '/js/production.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'zl_scripts' );


function zl_styles()
{
	// wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/css/font-awesome.css');
	// wp_enqueue_style('main_css', get_template_directory_uri() . '/css/embedded.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('font_css', get_template_directory_uri() . '/css/fonts.css');
}
add_action( 'wp_enqueue_scripts', 'zl_styles' );



/**
 * Register theme menus
 */
function zl_register_theme_menus() {
	register_nav_menus(
		array(
			'desktop-menu' => ('Desktop Menu'),
			'mobile-menu' => ('Mobile Menu'),
			)
		);
}
add_action('init', 'zl_register_theme_menus');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

add_filter('show_admin_bar', '__return_false');


// Adds rel="share" to images input through wizi, for sumoshare images
add_filter('the_content', 'add_rel_share');

function add_rel_share ($content)
{	global $post;
	$pattern = "/<img(.*?)src=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
	$replacement = '<img$1rel="share" src=$2$3.$4$5$6>';
	$content = preg_replace($pattern, $replacement, $content);
	return $content;
}

function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

remove_filter('the_excerpt', 'wpautop');

/*
* Creating a function to create our CPT
*/

function advertisement_post_type() {

	$labels = array(
		'name'                => _x( 'Advertisements', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Advertisement', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Advertisements', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Advertisement', 'twentythirteen' ),
		'all_items'           => __( 'All Advertisements', 'twentythirteen' ),
		'view_item'           => __( 'View Advertisement', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Advertisement', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Advertisement', 'twentythirteen' ),
		'update_item'         => __( 'Update Advertisement', 'twentythirteen' ),
		'search_items'        => __( 'Search Advertisement', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'advertisement', 'twentythirteen' ),
		'description'         => __( 'Advertisement on each post', 'twentythirteen' ),
		'menu_icon'           => 'dashicons-megaphone',
		'labels'              => $labels,
		'supports'            => array( 'revisions','title'),
		'taxonomies'          => array( 'genres' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'advertisement', $args );

}

add_action( 'init', 'advertisement_post_type', 0 );


add_action( 'init', 'create_custom_fields', 0 );

function create_custom_fields () {
	if(function_exists("register_field_group"))
{
	register_field_group(array (

	));
}


}


if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name' => 'Newsletter Form',
		'id' => 'newsletter_form',
		'description'  => __( 'This displays the newsletter form' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
		));

	
}