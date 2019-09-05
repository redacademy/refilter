<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="entry-content">
	<?php the_post_thumbnail('', ['class' => 'wavy-banner']) ?>
	<section class="wave"></section>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</article><!-- .entry-content -->
</main><!-- #post-## -->
