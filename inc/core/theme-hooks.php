<?php
/**
*
* @package Donkya
* @since 1.0.2
*/

if ( ! defined( 'ABSPATH' ) ){
	exit; // Security here!
}

add_theme_support( 
	'donkya_hooks',
	array(
		'html5',
		'body',
		'head',
		'header',
		'content',
		'entry',
		'comments',
		'sidebars',
		'sidebar',
		'footer',

	)
);

function donkya_register_nav_menus() {

	add_theme_support( 'menus' );

	$locations = array(
		// main-front-header
		'primary-home-menu' => "Front site main header menu",
		// seccondary-footer-menu
		'footer' => "Footer menu"
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'donkya_register_nav_menus' );


function donkya_theme_sidebar_setup() {
	/**
	 * Creates the blog sidebar and other widgets.
	 */
	$blog_sidebar = array(
		'name'          => __( 'Blog Sidebar', 'donkya' ),
		'id'            => 'primary-sidebar',
		'description'   => 'The theme standard sidebar',
		'class'         => 'sidebar-blog',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);

	register_sidebar( $blog_sidebar );
	
}
add_action( 'widgets_init', 'donkya_theme_sidebar_setup' );

function donkya_register_functions_after() {

	add_theme_support('title-tag');

}
add_action('after_setup_theme', 'donkya_register_functions_after');