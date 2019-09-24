<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<style>
		.landing-single-event{
			background: url('<?php the_field('single_event_background_image_mobile'); ?>') no-repeat center center/cover; 
			background-size: 100% 100%;
		}
		@media only screen and (min-width: 768px) {
		.landing-single-event {
		background: url('<?php the_field('single_event_background_image_desktop'); ?>') no-repeat center center/cover;
		background-size: 100% 100%;
		}
		}
	</style>

	<section class="entry-content-event">
	
		<section class="landing-single-event container-fluid ">	
			<h1 class="landing-single-event-title"><?php the_field('event_title'); ?></h1>	
			<h3 class="landing-single-event-components"><i class="fas fa-calendar-day"></i><?php the_field('event_landing_date'); ?></h3>
			<h3 class="landing-single-event-components"><i class="fas fa-clock"></i><?php the_field('event_landing_time'); ?></h3>
			<h3 class="landing-single-event-components"><i class="fas fa-map-marker-alt"></i><?php the_field('event_landing_location');?></h3>
			<h3 class="landing-single-event-components"><i class="fas fa-users"></i><?php the_field('event_landing_joined_count'); ?></h3>				
			<div class="rsvp">
				<a class="rsvp-btn" href="#">RSVP Now<i class="fas fa-arrow-right"></i></a>
			</div>
		</section>
	
		

		<section class="single-event-content container">
			<p><?php the_field('single_event_description'); ?></p>
			<div class="rsvp">
				<a class="rsvp-btn" href="#">RSVP Now<i class="fas fa-arrow-right"></i></a>
			</div>
			<?php the_field('event_location_google_maps'); ?>
			<h3><?php the_field('other_events_title'); ?></h3>
		</section>	

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
		foreach( $wpex_query->posts as $events ) : setup_postdata( $events ); ?>
			
				
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

	</section><!-- .entry-content -->
</main><!-- #post-## -->


