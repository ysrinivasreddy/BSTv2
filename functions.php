<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/includes/options/' );
require_once dirname( __FILE__ ) . '/includes/options/options-framework.php';

// Loads options.php 
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
  

/*
All the functions are in the PHP pages in the functions/ folder.
*/ 
require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php'); 

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bstv2', get_template_directory() . '/languages' );
  
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' ); 
}
 
 
/*Custom Header*/

$themelogo =  of_get_option( 'site_logo' );
$args = array(
    'flex-width'    => true, 
    'flex-height'    => true, 
    'default-image' => $themelogo,
);
add_theme_support( 'custom-header', $args );




$default_background = of_get_option( 'site_background' ); 
	 
if ( $default_background ) {
			$default_color_code = $default_background['color'];
			$default_color = str_replace('#', '', $default_color_code);
			$default_image = $default_background['image'];
			$default_repeat = $default_background['repeat'];
			$default_position_x = $default_background['position'];
			$default_attachment = $default_background['attachment'];
		
} 
$args = array( 
	'default-color' 		=>  $default_color,
	'default-image'          => $default_image,
	'default-repeat'         => $default_repeat,
	'default-position-x'     => $default_position_x,
	'default-attachment'     => $default_attachment,
	'wp-head-callback'       => '_custom_background_cb',
);
add_theme_support( 'custom-background', $args );
 




















