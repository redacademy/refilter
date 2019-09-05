<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content">
		<?php the_content(); ?>
		</div>
	</section><!-- .entry-content -->
</main><!-- #post-## -->

