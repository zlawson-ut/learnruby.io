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
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.min.css');
	wp_enqueue_style('font_css', get_template_directory_uri() . '/css/fonts.min.css');
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

add_action( 'init', 'create_custom_fields', 0 );

function create_custom_fields () {
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array (
			'key' => 'group_5861f016a5864',
			'title' => 'Post',
			'fields' => array (
				array (
					'key' => 'field_5861f021c51ca',
					'label' => 'Sub Title',
					'name' => 'sub_title',
					'type' => 'text',
					'instructions' => 'This field prepends the page title and is not displayed on the archive pages.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'Learn Ruby Basics:<br>',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5862f648b1b6f',
					'label' => 'Iframe URL',
					'name' => 'iframe_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_5862a74d7d27e',
					'label' => 'Next Post',
					'name' => 'next_post',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'post',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'object',
					'ui' => 1,
				),
				array (
					'key' => 'field_586454e9507fe',
					'label' => 'Intro',
					'name' => 'intro',
					'type' => 'textarea',
					'instructions' => 'This section appears at the top of a post and appears on a archive page.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
		));

		acf_add_local_field_group(array (
			'key' => 'group_58658e8703e6d',
			'title' => 'Social Images',
			'fields' => array (
				array (
					'key' => 'field_58658e8d68045',
					'label' => 'Twitter Image',
					'name' => 'twitter_image_url',
					'type' => 'image',
					'instructions' => '440x220',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_58659af7fadc7',
					'label' => 'Facebook Image',
					'name' => 'facebook_image_url',
					'type' => 'image',
					'instructions' => '1200 x 630',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
		));

		endif;
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

add_editor_style( get_template_directory_uri() . '/css/wp_custom_fonts.css' );

require_once( get_template_directory() . '/partials/theme-options.php' );

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {
    	$category = get_the_category();
    	$category = $category[0]->name;
        $title = 'Course: ' . $category;
       // $title = single_cat_title( '', false );

    }

    return $title;

});

add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );

/**
 * Create custom image sizes
 */
function zl_max_srcset_image_width() {
  return 1380;
}

add_filter( 'max_srcset_image_width', 'zl_max_srcset_image_width', 10 , 2 );

function zl_image_setup() {
  add_image_size( 'sm_img', 360 );
  add_image_size( 'md_img', 720 );
  add_image_size( 'lg_img', 1024 );
  add_image_size( 'xlg_img', 1380 );
}
add_action( 'after_setup_theme', 'zl_image_setup' );

function zl_image_sizes( $sizes ) {
  $sizes = array_merge( $sizes, array(
    'sm_img' => __( 'Smaller' ),
    'md_img' => __( 'Mediumer' ),
    'lg_img' => __( 'Larger' ),
    'xlg_img' => __( 'Xlarger' ),
    ) );

  return $sizes;
}

add_filter( 'image_size_names_choose', 'zl_image_sizes' );

function zl_remove_default_image_sizes( $sizes) {
  unset( $sizes['medium']);
  unset( $sizes['large']);

  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'zl_remove_default_image_sizes');

/**
 * Output img with the correct sizes and srcsets
 */

function responsive_image($image_id, $image_size, $sizes){

  // check the image ID is not blank
  if($image_id != '') {

    // set the default src image size
    $image_src = wp_get_attachment_image_url( $image_id, $image_size );

    // set the srcset with various image sizes
    $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

    // generate the markup for the responsive image
    return 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="' . $sizes . '"';
  }
}