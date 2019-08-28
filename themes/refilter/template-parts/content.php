<?php
/**
 * Template part for displaying posts.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php refilter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php refilter_posted_by(); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php the_excerpt(); ?>
	</section><!-- .entry-content -->
</main><!-- #post-## -->
