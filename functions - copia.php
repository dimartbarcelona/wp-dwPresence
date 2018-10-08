
<?php
/*if ( !get_theme_mod( 'defaultIconChanged' ) )
	$GLOBALS['defaultIdIcon'] = 33;
*/

// Theme Logo
// Setting up theme logo with custom size:
function dwp_add_custom_logo() {
	add_theme_support( 'custom-logo', array(
    'width'           => 861,
    'height'          => 530,
	) );
	/* El logo que colocamos por defecto tiene el ID=33.
	Si este logo es cambiado o eliminado desde Wordpress no debemos añadirlo más.
	Para saber si ha sido cambiado o eliminado usamos set_theme_mod( 'defaultIconChanged', true ): */
	// Use function_exists() wrapper to maintain backwards compatibility with older versions of WordPress.
	
	/*if ( function_exists( 'the_custom_logo' ) ) {
		if ( !get_theme_mod('defaultIconChanged') && $GLOBALS['defaultIdIcon'] != 33 ){
			set_theme_mod( 'defaultIconChanged', true );
			set_theme_mod( 'custom_logo', 33 );
		}
	}*/

	if ( function_exists( 'the_custom_logo' ) ) {
		if ( !get_theme_mod( 'custom_logo' ) ){
			echo '<script>alert("'.'no logo1'.'")</script>';
		}
	}

}
add_action( 'after_setup_theme', 'dwp_add_custom_logo' );
// End Custom logo

// Custom header
$args = array(
	'width'         => 1440,
	'height'        => 375,
	'default-image' => get_template_directory_uri() . '/images/background-header.jpg',
);
add_theme_support( 'custom-header', $args );

// To add backwards compatibility for older versions
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
	add_theme_support( 'custom-header' );
else :
	add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;
// End Custom header