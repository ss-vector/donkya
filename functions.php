<?php 

/**
 * Main theme functions	
 * 
 * @package Permatech 
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define constants  
 */

define( 'DONKYA_THEME_VERSION', '1.0.3' );
define( 'DONKYA_THEME_SETTING', 'donkya-settings' );
define( 'DONKYA_THEME_DIR', trailingslashit( get_template_directory() ) );


require_once DONKYA_THEME_DIR . '/inc/template/walker.php';
require_once DONKYA_THEME_DIR . '/inc/core/theme-hooks.php';
require_once DONKYA_THEME_DIR . '/pot/customizer.php';

function donkya_primary_theme_setup() {

		wp_register_style( 'perma_style', get_template_directory_uri() . '/assets/css/permatech.css', false, '1.0.0', 'all' );
		wp_register_style( 'donkya_style', get_template_directory_uri() . '/assets/css/styles.css', false, '1.0.2', 'all' );

		wp_enqueue_style( 'perma_style' );
		wp_enqueue_style( 'donkya_style' );
}
add_action( 'wp_enqueue_scripts', 'donkya_primary_theme_setup', 5 );

function donkya_vendor_scripts_setup() {

		wp_register_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.css', false, '5.0.2', 'all'  );
		wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', false, '4.3.0', 'all' );
		wp_register_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.css', false, '2.3.4', 'all'  );

		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'fontawesome' );
		wp_enqueue_style( 'owl_carousel' );

		// Scripts
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'appjs', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true );
		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '5.0.2', true );
		wp_enqueue_script( 'responsive_slides_js', get_template_directory_uri() . '/vendor/responsive-slides/responsiveslides.min.js', array( 'jquery' ), '1.11.2', true );

		wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/assets/js/owl.js', array(), '2.3.4', true );
		wp_enqueue_script( 'rslides_init_js', get_template_directory_uri() . '/assets/js/rslides.js', array(), '1.0.0', true );		
		wp_enqueue_script( 'accordions_js', get_template_directory_uri() . '/assets/js/accordions.js', array( 'jquery' ), '1.11.2', true );

}
add_action( 'wp_enqueue_scripts', 'donkya_vendor_scripts_setup', 20 );

/* Maintenance Mode On
function wp_maintenance_mode() {
	if (!current_user_can('edit_themes') || !is_user_logged_in()) {
		wp_die('<h1>Under Maintenance</h1><br />Website under 	planned maintenance. Please check back later.');
	}
}
add_action('get_header', 'wp_maintenance_mode');

*/

/* HTML5 */

