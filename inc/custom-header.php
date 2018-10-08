<?php
/**
 * Implements a custom header.
 * See http://codex.wordpress.org/Custom_Headers

/**
 * Setup the WordPress core custom header feature.
 */
function dwpresence_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'dwpresence_custom_header_args', array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'		=> '222222',
		'width'						=> 1400,
		'height'					=> 400,
		'flex-width'				=> true,
		'flex-height'				=> true,
		'video'						=> true,
		'wp-head-callback'			=> 'dwpresence_header_style',
		//'admin-head-callback'		=> 'dwpresence_admin_header_style',
		//'admin-preview-callback'	=> 'dwpresence_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'dwpresence_custom_header_setup' );

if ( ! function_exists( 'dwpresence_header_style' ) ) :

/**
 * Styles the header text displayed on the blog.
 *
 */
function dwpresence_header_style() {
	// The custom header text color is activated when we register the custom header.
	// get_header_textcolor() : wp function. Retrieves the custom header text color in 3- or 6-digit hexadecimal form.	
	$header_text_color = get_header_textcolor();
	// HEADER_TEXTCOLOR is the value of 'default-text-color' that we pass in the arguments array when registering custom-header.
	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		#site-title,
		#site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		// For this to work we must not set the color of the files
		// of style for these elements
		else :
	?>
		#site-title a {
			color: #<?php echo $header_text_color; ?>;
		}
		#site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // spacious_header_style