<?php
/**
 * The template for displaying all pages.
 *
 * @package Refilter
 */

get_header(); ?>

	<main id="primary" class="home-content-area">
		<section id="main" class="site-main" role="main">

		<section class="landing container-fluid">
			<section class="landing-wave"></section>				
	        	<h2 class="landing-question"><?php the_field('who_we_are_page_question'); ?></h2>
				<h3 class="landing-quote"><?php the_field('who_we_are_page_quote'); ?></h3>
	</section>

		
		<?php while ( have_posts() ) : the_post(); ?>

		

				<?php get_template_part( 'template-parts/content', 'blog' ); ?>

			<?php endwhile; // End of the loop. ?>

		</section><!-- #main -->
	</main><!-- #primary -->


<?php get_footer(); ?>
