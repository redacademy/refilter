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
		</section>
	
		<div class="rsvp">
			<a class="rsvp-btn" href="#">RSVP Now<i class="fas fa-arrow-right"></i></a>
		</div>

		<section class="single-event-content container">
			<p><?php the_field('single_event_description'); ?></p>
			<?php the_field('event_location_google_maps'); ?>
			<h3><?php the_field('other_events_title'); ?></h3>
		</section>	

	</section><!-- .entry-content -->
</main><!-- #post-## -->


