<?php

	function donkya_theme_customizer_function($wp_customize) {
		$wp_customize->add_panel('dk_landing_panel', array(
			'title' 		=> 'Landing Panel',
			'priority' 		=> 10,
			'capability' 	=> 'edit_theme_options',
		));

		$wp_customize->add_section('dk_landing_page_home', array(
			'title'	=> 'Home Section',
			'description' => __('Home section customizer'),
			'panel'	=> 'dk_landing_panel',
		));
		$wp_customize->add_setting('dk_landing_small_header', array(
			'default' => __('Green Projects'),
		));
		$wp_customize->add_control('dk_landing_small_header', array(
			'label'		=> 'Small heading',
			'section'	=> 'dk_landing_page_home',
			'priority'	=> 2,
		));
	}
	add_action( 'customize_register', 'donkya_theme_customizer_function' );
