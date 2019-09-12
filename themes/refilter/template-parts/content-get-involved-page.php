<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content">
    
    <section class="landing container-fluid">
			<h1 class="landing-title"><?php the_field('landing_title'); ?></h1>
			<p class="landing-description"><?php the_field('landing_description'); ?></p>
        </section>
        
    <section class="upcoming-events">
        <h1 class="upcoming-events-title"></h1>
        <ul class="upcoming-events-list">
            <li class="upcoming-event"></li>
            <li class="upcoming-event"></li>
            <li class="upcoming-event"></li>
        </ul>
    </section>


	</section><!-- .entry-content -->
</main><!-- #post-## -->

