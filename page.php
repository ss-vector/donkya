<?php get_header(); ?>

<div class="page-wrapper">
	<div id="primary" class="container">
		<main id="page" class="site-main row mt-5">

			<div class="col-xl-12 content-wrapper">

				<?php
					if(have_posts()) {
						while(have_posts()) : the_post();
				?>
				<div class="page-title">
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="container-md">
					<div class="page-body">
						<?php the_content(); ?>
						<?php endwhile;	}
						?>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<?php get_footer(); ?>