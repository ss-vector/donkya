<?php 
/**
 *  Donkya Single Post
 * 
*/
get_header(); ?>
<div class="single-page-wrapper">
	<div id="primary" class="container">
		<main id="main" class="site-main">
			<?php 
				if( have_posts() ):
					while( have_posts() ): the_post(); ?>
						<article class="single_post_layout">
							<div class="blog-title">
								<?php the_title( '<h2>', '</h2>'); ?>
								<span><?php the_category( ' ' ); ?></span>
							</div>
							
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php
					endwhile;
				endif;
			?>
		</main>
	</div>
</div>

<?php get_footer(); ?>