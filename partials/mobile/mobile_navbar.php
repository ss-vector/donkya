<?php 

?>

<div class="container-fluid">
	<div>
		<h3>Pages Menu</h3>
		<?php
			wp_nav_menu( array(
				'theme_location'	=> 'featured-mobile-menu',
				'container'			=> false,
				'menu_class'		=> 'nav navbar-nav ml-auto'
			));

		?>
	</div>

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