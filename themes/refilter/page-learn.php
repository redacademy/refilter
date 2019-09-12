<?php
/**
 * The template for displaying all pages.
 *
 * @package Refilter
 */

get_header(); ?>

	<main id="primary" class="content-area">
		<section id="main" class="site-main-learn" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'learn-page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</section><!-- #main -->
	</main><!-- #primary -->

<?php get_footer(); ?>
