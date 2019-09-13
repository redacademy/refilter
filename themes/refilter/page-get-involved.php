<?php
/**
 * The template for displaying all pages.
 *
 * @package Refilter
 */

get_header(); ?>

	<main id="primary" class="content-area">
		<section id="main" class="site-main" role="main">
			
			<?php get_template_part( 'template-parts/content', 'get-involved-page' ); ?>
		</section><!-- #main -->
	</main><!-- #primary -->

<?php get_footer(); ?>
