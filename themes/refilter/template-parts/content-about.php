<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="entry-content">
	
    <section class="wave"></section>
        <div class="about-title">
            <?php the_title( '<h1 class="about-entry-title">', '</h1>' ); ?>
        </div>
        <?php the_content(); ?>

        <section class="banner-text-container">
		<h3 class="who_we_are_page_question"><?php the_field('who_we_are_page_question'); ?></h3>			
		<p class="who_we_are_page_quote"><?php the_field('who_we_are_page_quote'); ?></p>	
		</section>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</article><!-- .entry-content -->
</main><!-- #post-## -->