<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="blog-entry-content-container">      
                    <div class="blog-banner">
					   <a href="<?php the_permalink(); ?>"	><img src="<?php the_field('landing_blog_post_image_desktop'); ?>" /></a> 
                       <div class="blog-post-title-wrapper"><h2><?php the_field('blog_post_title'); ?></h2></div> 
                       <div class="blog-post-description-wrapper"><p><?php the_field('blog_post_description'); ?></p></div>
                       <div class="read-more-wrapper"><p> Read More  <i class="fas fa-arrow-right fa-sm"></i></p></div> 
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