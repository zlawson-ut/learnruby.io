<?php 
// Requires ACF PRO v5
// https://bitbucket.org/zachary_lawson/advanced-custom-fields-pro

// Usage:
// the_field('field_name', 'option');
// get_field('field_name', 'option');
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    // 'icon_url' => get_site_url() . '/favicons/favicon-16x16.png',
    'redirect'    => false
  ));
  
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5813945c34f95',
  'title' => 'Theme Settings',
  'fields' => array (
    array (
      'key' => 'field_581395c0d3497',
      'label' => 'General',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
    array (
      'key' => 'field_581394c10b54f',
      'label' => 'Email',
      'name' => 'email',
      'type' => 'email',
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
      'prepend' => '',
      'append' => '',
    ),
    array (
      'key' => 'field_581395292db2f',
      'label' => 'Social',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
    array (
      'key' => 'field_581395632db30',
      'label' => 'Twitter URL',
      'name' => 'twitter_url',
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
      'placeholder' => 'https://twitter.com/',
    ),
    // array (
    //   'key' => 'field_581395633db30',
    //   'label' => 'Pinterest URL',
    //   'name' => 'pinterest_url',
    //   'type' => 'url',
    //   'instructions' => '',
    //   'required' => 0,
    //   'conditional_logic' => 0,
    //   'wrapper' => array (
    //     'width' => '',
    //     'class' => '',
    //     'id' => '',
    //   ),
    //   'default_value' => '',
    //   'placeholder' => 'https://pinterest.com/',
    // ),
    // array (
    //   'key' => 'field_581395872db31',
    //   'label' => 'Facebook URL',
    //   'name' => 'facebook_url',
    //   'type' => 'url',
    //   'instructions' => '',
    //   'required' => 0,
    //   'conditional_logic' => 0,
    //   'wrapper' => array (
    //     'width' => '',
    //     'class' => '',
    //     'id' => '',
    //   ),
    //   'default_value' => '',
    //   'placeholder' => 'https://www.facebook.com/',
    // ),
    // array (
    //   'key' => 'field_581395a42db32',
    //   'label' => 'Instagram URL',
    //   'name' => 'instagram_url',
    //   'type' => 'url',
    //   'instructions' => '',
    //   'required' => 0,
    //   'conditional_logic' => 0,
    //   'wrapper' => array (
    //     'width' => '',
    //     'class' => '',
    //     'id' => '',
    //   ),
    //   'default_value' => '',
    //   'placeholder' => 'https://www.instagram.com/',
    // ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'theme-general-settings',
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


// returns the <a> element containing the sprite element for the matching social link
// $name is a string of the social network's name, ex: 'facebook' or 'twitter'
function get_social_link($name){
  if(get_field($name.'_url', 'option')){
    $output = '';
    $output .= '<a class="social-link--'.$name.'" href="'.get_field($name.'_url', 'option').'" target="_blank">';
    $output .= '<svg class="ico"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-'.$name.'"></use></svg>';
    $output .= '</a>';
    return $output;
  } else {
    return false;
  }
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    if (get_field('hide_admin_bar')) {
      show_admin_bar(false);
    }
}