<?php
/**
 * The template for displaying all single posts.
 *
 * @package Refilter
 */

get_header(); ?>

	<main id="primary" class="content-area">
		<section id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			

			
			
		<?php endwhile; // End of the loop. ?>

		</section><!-- #main -->
		
	</main><!-- #primary -->


	<?php get_footer(); ?>
