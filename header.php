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
		        <div class="container-fluid">
		      		<nav class="navbar navbar-expand-lg">

			        	<div class="header-logo">
			          		<?php 
			          			if ( function_exists( 'the_custom_logo' )) {
			          				the_custom_logo();
			          			}
			          	 	?>
			          	 </div>
			          	<div class="permatech__mobile wp_is_mobile">
				          	<div class="permatech__mobile_toggler" data-toggle-selector=".permatech__mobile_content, .permatech__mobile_overlay, body">
				          		<span></span>
				          		<span></span>
				          		<span></span>
				          	</div>
				          	<div class="permatech__mobile_overlay" data-toggle-selector=".permatech__mobile_toggler, .permatech__mobile_content, body"></div>
				          	<div class="permatech__mobile_content">
				          		<div class="permatech__mobile_content__inner">
				          			<?php get_template_part( 'partials/mobile/mobile_navbar' ); ?>
				          		</div>
				          	</div>
			          	</div>

				        <div class="header_main_menu wp_is_not_mobile">
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
		      	</div>
			</header>

			<div class="main-container">
