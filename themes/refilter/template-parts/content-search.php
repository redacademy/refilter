<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php refilter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php refilter_posted_by(); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<section class="entry-summary">
		<?php the_excerpt(); ?>
	</section><!-- .entry-summary -->
</main><!-- #post-## -->
