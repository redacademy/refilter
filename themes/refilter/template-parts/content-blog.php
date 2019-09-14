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
    
    <section class="landing container-fluid">
			<section class="landing-wave"></section>				
	        	<h2 class="landing-question"><?php the_field('who_we_are_page_question'); ?></h2>
				<h3 class="landing-quote"><?php the_field('who_we_are_page_quote'); ?></h3>
	</section>

	<section class="blog-entry-content-container">
                        <?php
                    if( have_rows('blog_posts') ):
                        while ( have_rows('blog_posts') ) : the_row(); ?>
                       
                    <div class="blog-banner"><img src="<?php the_sub_field('blog_post_1_banner'); ?>" />
                       <div class="blog-post-title-wrapper"><h2><?php the_sub_field('blog_post_1_title'); ?></h2></div> 
                       <div class="blog-post-description-wrapper"><p><?php the_sub_field('blog_post_1_description'); ?></p></div>
                       <div class="read-more-wrapper"><p> Read More   -> </p></div> 
                    </div>  

                    <?php endwhile;
                    else :
                    endif;
                    ?>
    </section>



		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->