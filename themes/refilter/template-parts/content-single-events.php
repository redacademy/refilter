<?php
/**
 * Template part for displaying single posts.
 *
 * @package Refilter
 */
?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->
	
<style> 
@media only screen and (min-width: 768px) {
		.full-background {
		background: linear-gradient(180deg,rgba(0,0,0,.25) 0,rgba(0,0,0,.25));	
		background: url('<?php the_field('landing_blog_post_image_desktop'); ?>') no-repeat center center/cover;
		}
		
		
		}

		@media only screen and (max-width: 767px) {
		.landing {
		background: url('<?php the_field('landing_blog_post_image_mobile'); ?>') no-repeat center center/cover;
		}	
		
		}
</style> 	

<p>TESTING</p>

<section class="mobile landing container-fluid">
			<section class="landing-wave"></section>
				<h2><?php the_field('blog_post_title'); ?></h2>
				<p><?php the_field('blog_post_description'); ?></p>
</section>		

<section class="blog-entry-content">
	<p><?php the_field('blog_post_content'); ?></p>
	<div class="overlapping-content">
		<div class="left-image">	
			<img src="<?php the_field('blog_post_content_left_image'); ?>" />
		</div>	
		<div class="right-image">
			<img src="<?php the_field('blog_post_content_right_image'); ?>" />
		</div>	 
	</div>

	<h2>Related Posts</h2>
	<div class="related-posts-wrapper">
			
<?php
// Default arguments
$args = array(
	'posts_per_page' => 2, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();  
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

// Loop through posts
foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
	
		
			<div class="related-posts-image-wrapper">
			<div class="related-posts-text">
			<h3 class="related-posts-title"><?php the_title(); ?></h3>
			<div class="read-wrapper"><h3 class="read-more">Read More </h3></div>
			</div>
			<a href="<?php the_permalink(); ?>"><img src="<?php the_field('landing_blog_post_image_desktop'); ?>" /></a>
		</div>
<?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?></div>

</section>

		
<footer class="entry-footer">
	<?php refilter_entry_footer(); ?>
</footer><!-- .entry-footer -->

</main><!-- #post-## -->
