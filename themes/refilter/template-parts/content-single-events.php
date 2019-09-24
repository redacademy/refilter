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
	
		<section class="landing-single-event ">	
			<h1 class="landing-single-event-title"><?php the_field('event_title'); ?></h1>	
			<h3 class="landing-single-event-components"><i class="fas fa-calendar-day"></i><?php the_field('event_landing_date'); ?></h3>
			<h3 class="landing-single-event-components"><i class="fas fa-clock"></i><?php the_field('event_landing_time'); ?></h3>
			<h3 class="landing-single-event-components"><i class="fas fa-map-marker-alt"></i><?php the_field('event_landing_location');?></h3>
			<h3 class="landing-single-event-components"><i class="fas fa-users"></i><?php the_field('event_landing_joined_count'); ?></h3>				
			<div class="rsvp">
				<a class="rsvp-btn" href="#">RSVP Now<i class="fas fa-arrow-right"></i></a>
			</div>
		</section>
	
		

		<section class="single-event-content">
			<p><?php the_field('single_event_description'); ?></p>
			<div class="rsvp">
				<a class="rsvp-btn" href="#">RSVP Now<i class="fas fa-arrow-right"></i></a>
			</div>
			<?php the_field('event_location_google_maps'); ?>
			<h3><?php the_field('other_events_title'); ?></h3>
			<section class="events-loop">
				<?php
					//   $blog_posts = get_posts(array(
					//     'post_type' => 'events',
					// 	'numberposts' => 2,
					//   ));
					$args = array(  
						'post_type' => 'events',
						'posts_per_page' => 2
					);
				
					$blog_posts = new WP_Query( $args );
					while($blog_posts->have_posts()): $blog_posts->the_post();
						get_template_part('template-parts/content', 'single-events-thumbnail');
					endwhile; wp_reset_postdata();
				?>
			</section>	
		</section>	

		

	</section>

	</section><!-- .entry-content -->
</main><!-- #post-## -->


