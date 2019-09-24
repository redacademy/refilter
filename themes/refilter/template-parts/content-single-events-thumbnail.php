<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>


<section class="upcoming-events-content">

	<section class="upcoming-events container">
		<div class="upcoming-events-title container">
				<h3><?php the_field('upcoming_events_title'); ?></h3>
		</div>

		<div class="event-wallpaper" style="background: url('<?php the_field('upcoming_single_event_background_thumbnail'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0;">
			<div class="upcoming-date">
				<p class="bold-date"><?php the_field('event_landing_date_number'); ?></p>
				<p class="upper-month"><?php the_field('event_landing_date_month'); ?></p>
			</div>    
			<p class="event-description-1"><?php the_field('event_title'); ?></p>	
			<a class="learn-btn-events"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
		</div>

	</section>

</section>




