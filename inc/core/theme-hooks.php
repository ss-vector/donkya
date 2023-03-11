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

		'primary-home-menu' => "Front site main header menu",		
		'footer' => "Footer menu",
		'featured-mobile-menu' => "Mobile navbar menu"
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'donkya_register_nav_menus' );

# logo Donkya Custom Logo Setup

function donkya_custom_logo_setup() {

	$defaults = array(
		'height' 		=> 100,
		'width' 		=> 400,
		'flex-height'	=> true,
		'flex-width' 	=> true,
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'donkya_custom_logo_setup' );

function donkya_theme_sidebar_setup() {

	// Creates the blog sidebar and other widgets.
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