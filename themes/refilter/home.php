<?php
/**
 * The template for displaying all pages.
 *
 * @package Refilter
 */

get_header(); ?>



	<main id="primary" class="home-content-area">

	<style> 
        @media only screen and (min-width: 768px) {
            .landing {
		background: url('<?php the_field('blog_landing_image_desktop', get_option('page_for_posts')); ?>') no-repeat center center/cover;
		background-size: 100% 100%;
		}
		
		.wavy-newsletter {
			background: url('<?php the_field('newsletter_image_desktop', get_option('page_for_posts')); ?>') no-repeat center center/cover;
		}		
		
		}

		@media only screen and (max-width: 767px) {
		.landing {
		background: url('<?php the_field('blog_landing_image_mobile', get_option('page_for_posts')); ?>') no-repeat center center/cover;
		background-size: 100% 100%;
		}
		
		.wavy-newsletter {
			background: url('<?php the_field('newsletter_image_mobile', get_option('page_for_posts')); ?>') no-repeat center center/cover;
		}	
		
		}
	</style>

		<section id="main" class="site-main" role="main">

		<section class="blog landing container-fluid">
			<h1 class="landing-title"><?php the_field('blog_page_title', get_option('page_for_posts')); ?></h1>		
			<h3 class="landing-quote"><?php the_field('blog_page_description', get_option('page_for_posts')); ?></h3>
		</section>

		<div class="content-space"></div>
		
		<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'blog' ); ?>

			<?php endwhile; // End of the loop. ?>

		</section><!-- #main -->

		<section class="wavy-newsletter container-fluid">
				<h1 class="wavy-newsletter-title"><?php the_field('newsletter_title', get_option('page_for_posts')); ?></h1>										
				<form class="wavy-newsletter-form">
				<input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('newsletter_name', get_option('page_for_posts')); ?>" />
				<input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('newsletter_email', get_option('page_for_posts')); ?>" />													
				<button class="btn green-empty" type="submit">Join Mailing List</button>
			</form>
		</section>
	</main><!-- #primary -->


<?php get_footer(); ?>
