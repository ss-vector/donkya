<?php get_header(); ?>
<div class="page-wrapper">
	<div id="site-content" class="container">
		<main id="main" class="contents mt-5">

			<div class="container">
				<div class="row">

					<div class="blog-wrapper col-xl-9 col-md-12">
						<?php 
							if( have_posts() ):
								while( have_posts() ): the_post(); ?>
									<div class="perma-post-list blog-item">
										<div class="post-header">
											<div class="posted-on">
												<?php printf(esc_html__('Publicado el %s', 'copycats'), "<strong>" . get_the_date() . "</strong>"); ?>
											</div>
											<?php the_title( sprintf( '<a href="%s"><h2 class="blog-entry-title">', esc_url( get_permalink() ) ), '</h2></a>' ); ?>
											<span><?php printf(esc_html__('Por %s', 'copycats'), "<strong>" . get_the_author() . "</strong>"); ?></span>
											<span><?php the_category( ' ' ); ?></span>
										</div>
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink() ?>" class="read-more">
	    									<?php esc_html_e('Ver', 'copycats'); ?>
										</a>
									</div>
								<?php
								endwhile; ?>
								<div class="example">
									<?php next_posts_link( 'Anterior' ); ?>
								</div>
								<div class="example">
									<?php previous_posts_link( 'Siguiente' ); ?>
								</div>

							<?php
							endif;
						?>
					</div>
				</div>
			</div>

		</main>
	</div>
</div>

<?php get_footer(); ?>