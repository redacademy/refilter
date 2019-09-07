<?php
/**
 * The template for displaying all pages.
 *
 * @package Refilter
 */

get_header(); ?>

	<main id="primary" class="about-content-area">
		<section id="main" class="about-site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<?php endwhile; // End of the loop. ?>

		</section><!-- #main -->
	</main><!-- #primary -->


=======
<?php get_footer(); ?>
