<?php
/**
 * The template for displaying the standard class form.
 *
 * @package Refilter
 */

get_header(); ?>

	<main id="primary" class="content-area">
		<section id="main" class="site-main" role="main">

        <main class="cotainer-fluid">
            <h1><?php the_field('voting_member_form_title'); ?></h1>
            <?php the_content(); ?>
        </main>

		</section><!-- #main -->
	</main><!-- #primary -->

<?php get_footer(); ?>
