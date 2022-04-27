<?php get_header(); ?>

<div class="page-wrapper">
	<div id="primary" class="container">
		<main id="page" class="site-main">
			<?php
				if(have_posts()) {
					while(have_posts()) : the_post();
			?>
			<div class="page-title">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="page-body">
				<p><?php the_content(); ?></p>

				<?php endwhile;	}
				?>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>