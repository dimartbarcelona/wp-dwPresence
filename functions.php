<?php
/**
 * Defining some constants, loading all the required files and Adding some core functionality.
 */

/**
 * All setup functionalities.
 *
 * @since 1.0
 */

function dwpresence_setup() {

/* Active this option for test start_content. */
// update_option( 'fresh_site', '1' );

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dwpresence' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'dwpresence' ),
			'social' => __( 'Social Links Menu', 'dwpresence' ),
		)
	);	

    // Adds the support for the Custom Logo introduced in WordPress 4.5
    add_theme_support( 'custom-logo',
   		array(
   			'height' => '100',
   			'width' => '150',
   			'flex-width' => true,
   			'flex-height' => true,
   		)
   	);

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dwpresence_custom_background_args', array(
		'default-color' => 'eaeaea'
	) ) );



	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		// Specify the core-defined pages to create.
		'posts'       => array(
			'home' => array(
				'post_type' => 'page', 
				'post_title' => _x( 'Home', 'Theme starter content' ),
				'post_content' => _x( 'Welcome to your site! This is your homepage, which is what most visitors will see when they come to your site for the first time.', 'Theme starter content' ),
			),
			'about',
			'blog',
			'contact'
		),
		// Create the custom image attachments for site logo.
		'attachments' => array(
			'image-logo' => array(
				'post_title' => 'DWPresence logo image',
				'file'       => 'images/default-logo.pnp', // URL relative to the template directory.
			),
		)
	);
	//$starter_content = apply_filters( 'spacious_starter_content', $starter_content );
	/* 
	 * Testing this feature with your theme or plugin does not require a fresh install every time – 
	 you can set the fresh_site (wp_options table) option to 1 using the tool of your choice, such as wp-cli or phpMyAdmin.
	*/

	add_theme_support( 'starter-content', $starter_content );
}

add_action( 'after_setup_theme', 'dwpresence_setup' );

/**
 * Define Directory Location Constants
 */
define( 'DWPRESENCE_PARENT_DIR', get_template_directory() );
define( 'DWPRESENCE_CHILD_DIR', get_stylesheet_directory() );

define( 'DWPRESENCE_INCLUDES_DIR', DWPRESENCE_PARENT_DIR. '/inc' );


 /**
 * Define URL Location Constants
 */



 /** Load functions */
require_once( DWPRESENCE_INCLUDES_DIR . '/custom-header.php' );
require_once( DWPRESENCE_INCLUDES_DIR . '/functions.php' );
require_once( DWPRESENCE_INCLUDES_DIR . '/customizer.php' );

/* ----- init ----- */
function add_dwpresence_scripts() {
	wp_enqueue_script('navigator-script', get_bloginfo('stylesheet_directory') . '/js/navigator.js', array('jquery') );           
}    

add_action	('init', 'add_dwpresence_scripts');


