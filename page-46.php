<?php get_header(); ?>

	<div class="demo">
		<h1> Sinergy Seeds</h1>
		<p>Page for our natural seed projects.</p>
	</div>
	<!-- Investigate content structure here-->
	<div class="blog-wrapper col-xl-9 col-md-12">
		<?php 
			if( have_posts() ):
				while( have_posts() ): the_post(); ?>
					<div class="perma-post-list blog-item">
						<div class="post-header">
							<div class="posted-on">
								<?php printf(esc_html__('Publicado el %s', 'donkya_text_domain'), "<strong>" . get_the_date() . "</strong>"); ?>
							</div>
							<?php the_title( sprintf( '<a href="%s"><h2 class="blog-entry-title">', esc_url( get_permalink() ) ), '</h2></a>' ); ?>
							<span><?php printf(esc_html__('Por %s', 'donkya_text_domain'), "<strong>" . get_the_author() . "</strong>"); ?></span>
							<span><?php the_category( ' ' ); ?></span>
						</div>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php
				endwhile; ?>

			<?php
			endif;
		?>
	</div>

<?php get_footer(); ?>