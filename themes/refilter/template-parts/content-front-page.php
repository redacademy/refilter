<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content">

		<section class="landing container-fluid">
				<h1 class="landing-title"><?php the_field('landing_title'); ?></h1>
				<h2 class="landing-question"><?php the_field('landing_question'); ?></h2>
				<h3 class="landing-quote"><?php the_field('landing_quote'); ?></h3>
				<a class="btn green-full" href="#">Learn More</a>
			</section>

				<section class="our-purpose container container-content">
					<h3 class="purpose-title"><?php the_field('purpose_title'); ?></h3>			
					<p class="purpose-description"><?php the_field('purpose_description'); ?></p>	
				</section>

				<section class="what-we-do container">
					<h3 class="what-we-do-title"><?php the_field('what_we_do_title'); ?></h3>			
					<section class="overlapping-content">
					<section class="overlapping-text">
					<p class="what-we-do-description"><?php the_field('what_we_do_description'); ?></p>	
					<p class="what-we-do-description"><?php the_field('what_we_do_description_2'); ?></p>				
					<a class="btn green-empty" href="#">Learn More</a>					
				</section>	

					<section class="overlapping-image">
					<img class="what-we-do-image" src="<?php the_field('what_we_do_image'); ?>;" />
					</section>	
				</section>
				</section>


		<section class="wavy-testimonial container-fluid">
		<p class="wavy-testimonial-description"><?php the_field('wavy_testimonial_description'); ?></p>
			<p class="wavy-testimonial-author"><?php the_field('wavy_testimonial_author'); ?>
			<span class="wavy-testimonial-member"><?php the_field('wavy_testimonial_member'); ?></span>	
			</p>	
			<p class="wavy-testimonial-event"><?php the_field('wavy_testimonial_event'); ?></p>	
		</section>
		
		<section class="contribute container container-content">
			<h1 class="contribute-title"><?php the_field('contribute_title'); ?></h1>
			<p class="contribute-description"><?php the_field('contribute_description'); ?></p>

			<ul class="contribute-types">
				<li class="contribute-recycling">
					<h3 class="contribute-recycling-title"><?php the_field('contribute_recycling_title'); ?></h3>
					<p class="contribute-recycling-description"><?php the_field('contribute_recycling_description'); ?></p>
					<a class="btn green-empty" href="#">Learn More</a>
				</li>
				<li class="contribute-events">
					<h3 class="contribute-events-title"><?php the_field('contribute_events_title'); ?></h3>
					<p class="contribute-events-description"><?php the_field('contribute_events_description'); ?></p>
					<a class="btn green-empty" href="#">See Our Events</a>				
				</li>
				<li class="contribute-donation">
					<h3 class="contribute-donation-title"><?php the_field('contribute_donation_title'); ?></h3>
					<p class="contribute-donation-description"><?php the_field('contribute_donation_description'); ?></p>
					<a class="btn green-empty" href="#">Donate Now</a>				
				</li>
				<li class="contribute-word">
					<h3 class="contribute-word-title"><?php the_field('contribute_word_title'); ?></h3>
					<p class="contribute-word-description"><?php the_field('contribute_word_description'); ?></p>
					<a class="btn green-empty" href="#">Download Our Templates</a>			
				</li>	
			</ul>
		</section>

			<section class="butt-count container">
			<h1 class="butt-count-title"><?php the_field('butt_count_title'); ?></h1>

				<section class="butt-count-content">
				
				<section class="butt-count-left">
				<h2 class="butt-count-number"><?php the_field('butts_collected_number'); ?></h2>						
				<h2 class="butt-count-text"><?php the_field('butts_collected_text'); ?></h2>						
				</section>

				<section class="butt-count-right">				
				<h2 class="waste-count-number"><?php the_field('waste_collected_number'); ?></h2>						
				<h2 class="waste-count-text"><?php the_field('waste_collected_text'); ?></h2>								
				</section>	
			</section>
			</section>


			<section class="instagram-feed container">
				<h1 class="instagram-feed-title"><?php the_field('instagram_feed_title'); ?></h1>
				<?php the_content(); ?>
			</section>

			<section class="wavy-newsletter container-fluid">
				<h1 class="wavy-newsletter-title"><?php the_field('newsletter_title'); ?></h1>										
				<form class="wavy-newsletter-form">
				<input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('newsletter_name'); ?>" />
				<input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('newsletter_email'); ?>" />													
				<button class="btn green-empty" type="submit">Join Mailing List</button>
			</form>
		</section>
	</section><!-- .entry-content -->
</main><!-- #post-## -->

