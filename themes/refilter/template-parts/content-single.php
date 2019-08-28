<?php
/**
 * Template part for displaying single posts.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php refilter_posted_on(); ?> / <?php refilter_comment_count(); ?> / <?php refilter_posted_by(); ?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php refilter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</main><!-- #post-## -->
