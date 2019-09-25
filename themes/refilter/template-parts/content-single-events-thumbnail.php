<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>



		
		<div class="event-wallpaper" style="background: url('<?php the_field('upcoming_single_event_background_thumbnail'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0; width: 330px;">
			<div class="upcoming-date">
				<p class="bold-date"><?php the_field('event_landing_date_number'); ?></p>
				<p class="upper-month"><?php the_field('event_landing_date_month'); ?></p>
			</div>    
			<p class="event-description-1"><?php the_field('event_title'); ?></p>	
			<a class="learn-btn-events" href="<?php the_permalink(); ?>">Learn More <i class="fas fa-arrow-right"></i></a>  
		</div>





