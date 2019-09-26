<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Refilter
 */

get_header(); ?>


			<main class="error-404 not-found">
		<section id="main" class="site-main" role="main">
			
			
			<main class="content">
					<h1 class="page-title"><?php echo esc_html( 'These are not the butts you are looking for!' ); ?></h1>
					<p>Looks like this page is missing. If you have unaswered questions, please <a class="contact-us" href="<?php echo site_url('about'); ?>">contact us</a>.</p>
					<a class="btn green-full" href="<?php echo home_url(); ?>">Return Home</a>
				</main><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

<?php get_footer(); ?>
