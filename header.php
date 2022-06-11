<?php
	/**
	 * Main Header Structure of the Page
	 * @package Donkya Theme 
	*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  	<head>
	    <meta charset="<?php bloginfo('charset'); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="ss-vector">

	    <!-- Donkya Foundation -->
	    <title><?php bloginfo( 'title' ); ?></title>

	    <?php wp_head(); ?>

  	</head>

	<body <?php body_class(); ?>>
		<!-- Preloader Starts -->
		<div id="preloader">
		    <div class="jumper">
		        <div></div>
		        <div></div>
		        <div></div>
		    </div>
		</div>  
		<!-- ***** Preloader End ***** -->

		<div id="page" class="site">
			<!-- Main Site Header: move to tp -->
		    <header class="header">
		      <nav class="navbar navbar-expand-lg">
		        <div class="container">
		          <a class="navbar-brand" href="<?php echo esc_html( site_url( '/' ) ); ?>"><h2><?php echo get_bloginfo('name'); ?></h2></a>
		          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		          </button>
		          <div class="collapse navbar-collapse" id="navbarResponsive">
		          	<?php 
		          		wp_nav_menu( array(
		          			'theme_location'  	=> 'primary-home-menu',
		          			'container' 		=> false,
		          			'depth'           	=> 3,
		          			'menu_class'      => 'nav navbar-nav ml-auto',
		          			'walker'          	=> New header_menu_walker(),
		          		) );
		          	?>

		          </div>

		        </div>
		      </nav>
			</header>

			<div class="main-container">
