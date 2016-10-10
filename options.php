<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'bstv2';
} 

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'bstv2' ),
		'two' => __( 'Two', 'bstv2' ),
		'three' => __( 'Three', 'bstv2' ),
		'four' => __( 'Four', 'bstv2' ),
		'five' => __( 'Five', 'bstv2' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'bstv2' ),
		'two' => __( 'Pancake', 'bstv2' ),
		'three' => __( 'Omelette', 'bstv2' ),
		'four' => __( 'Crepe', 'bstv2' ),
		'five' => __( 'Waffle', 'bstv2' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'General', 'bstv2' ), 
		'type' => 'heading'
	);
	 

	$options[] = array(
		'name' => __( 'Logo', 'bstv2' ),
		'desc' => __( 'Recommended size 160x40 ', 'bstv2' ),
		'id' => 'site_logo',
		'type' => 'upload',
		'std' => $imagepath . 'logo-default.png'
	);
		
	$options[] = array(
		'name' =>  __( 'Background Image', 'bstv2' ),
		'desc' => __( 'use background image to apply with background color.', 'bstv2' ),
		'id' => 'site_background',
		'type' => 'background',
		'std' => array(
		'color' => '#2b3e50',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' )
	);  
   
	$options[] = array(
		'name' => __( 'Social Media Links', 'bstv2' ), 
		'type' => 'heading'
	);
		
	$options[] = array(
		'name' => __( 'Ipdate social media links over here', 'bstv2' ),
		'desc' => __( 'Keep it empty field, if you dont want to display the respective social media icon.', 'bstv2' ),
		'type' => 'info'
	);
	
	$options[] = array(
		'name' => __( 'Facebook', 'bstv2' ), 
		'id' => 'facebook_url',
		'std' => '#',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Twitter', 'bstv2' ), 
		'id' => 'twitter_url',
		'std' => '#',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Skype', 'bstv2' ), 
		'id' => 'skype_url',
		'std' => '#',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Google Plus', 'bstv2' ), 
		'id' => 'googleplus_url',
		'std' => '#',
		'type' => 'text'
	);
	
	$options[] = array(
		'name' => __( 'Linkedin', 'bstv2' ), 
		'id' => 'linkedin_url',
		'std' => '#',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'All Available Options', 'bstv2' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Input Text Mini', 'bstv2' ),
		'desc' => __( 'A mini text input field.', 'bstv2' ),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input Text', 'bstv2' ),
		'desc' => __( 'A text input field.', 'bstv2' ),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Input with Placeholder', 'bstv2' ),
		'desc' => __( 'A text input field with an HTML5 placeholder.', 'bstv2' ),
		'id' => 'example_placeholder',
		'placeholder' => 'Placeholder',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Textarea', 'bstv2' ),
		'desc' => __( 'Textarea description.', 'bstv2' ),
		'id' => 'example_textarea',
		'std' => 'Default Text',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Input Select Small', 'bstv2' ),
		'desc' => __( 'Small Select Box.', 'bstv2' ),
		'id' => 'example_select',
		'std' => 'three',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Input Select Wide', 'bstv2' ),
		'desc' => __( 'A wider select box.', 'bstv2' ),
		'id' => 'example_select_wide',
		'std' => 'two',
		'type' => 'select',
		'options' => $test_array
	);

	if ( $options_categories ) {
		$options[] = array(
			'name' => __( 'Select a Category', 'bstv2' ),
			'desc' => __( 'Passed an array of categories with cat_ID and cat_name', 'bstv2' ),
			'id' => 'example_select_categories',
			'type' => 'select',
			'options' => $options_categories
		);
	}

	if ( $options_tags ) {
		$options[] = array(
			'name' => __( 'Select a Tag', 'bstv2' ),
			'desc' => __( 'Passed an array of tags with term_id and term_name', 'bstv2' ),
			'id' => 'example_select_tags',
			'type' => 'select',
			'options' => $options_tags
		);
	}

	$options[] = array(
		'name' => __( 'Select a Page', 'bstv2' ),
		'desc' => __( 'Passed an pages with ID and post_title', 'bstv2' ),
		'id' => 'example_select_pages',
		'type' => 'select',
		'options' => $options_pages
	);

	$options[] = array(
		'name' => __( 'Input Radio (one)', 'bstv2' ),
		'desc' => __( 'Radio select with default options "one".', 'bstv2' ),
		'id' => 'example_radio',
		'std' => 'one',
		'type' => 'radio',
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Example Info', 'bstv2' ),
		'desc' => __( 'This is just some example information you can put in the panel.', 'bstv2' ),
		'type' => 'info'
	);

	$options[] = array(
		'name' => __( 'Input Checkbox', 'bstv2' ),
		'desc' => __( 'Example checkbox, defaults to true.', 'bstv2' ),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox'
	); 

	$options[] = array(
		'name' => __( 'Check to Show a Hidden Text Input', 'bstv2' ),
		'desc' => __( 'Click here and see what happens.', 'bstv2' ),
		'id' => 'example_showhidden',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Hidden Text Input', 'bstv2' ),
		'desc' => __( 'This option is hidden unless activated by a checkbox click.', 'bstv2' ),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Uploader Test', 'bstv2' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'bstv2' ),
		'id' => 'example_uploader',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => $imagepath . '1col.png',
			'2c-l-fixed' => $imagepath . '2cl.png',
			'2c-r-fixed' => $imagepath . '2cr.png'
		)
	);

	$options[] = array(
		'name' =>  __( 'Example Background', 'bstv2' ),
		'desc' => __( 'Change the background CSS.', 'bstv2' ),
		'id' => 'example_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	$options[] = array(
		'name' => __( 'Multicheck', 'bstv2' ),
		'desc' => __( 'Multicheck description.', 'bstv2' ),
		'id' => 'example_multicheck',
		'std' => $multicheck_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $multicheck_array
	);

	$options[] = array(
		'name' => __( 'Colorpicker', 'bstv2' ),
		'desc' => __( 'No color selected by default.', 'bstv2' ),
		'id' => 'example_colorpicker',
		'std' => '',
		'type' => 'color'
	);

	$options[] = array( 'name' => __( 'Typography', 'bstv2' ),
		'desc' => __( 'Example typography.', 'bstv2' ),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography'
	);

	$options[] = array(
		'name' => __( 'Custom Typography', 'bstv2' ),
		'desc' => __( 'Custom typography options.', 'bstv2' ),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options
	);

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Default Text Editor', 'bstv2' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'bstv2' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}