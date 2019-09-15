<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    
    
	<section class="blog-entry-content-container">
                       
                       
                    <div class="blog-banner"><img src="<?php the_field('landing_blog_post_image_desktop'); ?>" />
                       <div class="blog-post-title-wrapper"><h2><?php the_field('blog_post_title'); ?></h2></div> 
                       <div class="blog-post-description-wrapper"><p><?php the_field('blog_post_description'); ?></p></div>
                       <div class="read-more-wrapper"><p> Read More   -> </p></div> 
                    </div>  
                





    </section>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->