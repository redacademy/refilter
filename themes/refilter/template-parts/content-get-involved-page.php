<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content-get-involved">
        <section class="landing container-fluid">
                <section class="landing-wave"></section>
                    <style>
                        .landing{
                            background: url('<?php the_field('get_involved_landing_image_mobile'); ?>')  no-repeat center center/cover;                                                                                                                                                                                     
                            background-size: 100% 100%;
                            margin-top: -80px;
                        }
                        @media only screen and (min-width: 768px) {
                        .landing {
                        background: url('<?php the_field('get_involved_landing_image_desktop'); ?>') no-repeat center center/cover;
                        background-size: 100% 100%;
                        }
                        }
                    </style>			
                    <h1 class="landing-title"><?php the_field('get_involved_landing_title'); ?></h1>
                    <h3 class="landing-description"><?php the_field('get_involved_landing_description'); ?></h3>
                    <a href="#become-a-member"><i class="fas fa-sort-down"></i></a> 
                </section>
    
        

  <!--   <section class="upcoming-events container">
        <h3 class="upcoming-events-title"><?php the_field('upcoming_events_title'); ?></h3>
        <?php if( have_rows('events') ): ?>
        <ul class="upcoming-events-list">
            <?php while( have_rows('events') ): the_row();?>
                <li class="upcoming-event-content" style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('<?php the_sub_field('upcoming_events_background_image'); ?>') no-repeat center center/cover;">
                    <?php the_sub_field("<p>",'upcoming_events_date',"</p>"); ?>
                    <?php the_sub_field('upcoming_events_description'); ?>
                    <a class="learn-btn"href="#">Learn More <i class="fas fa-arrow-right"></i></a>
                </li>
            <?php endwhile; ?>  
            <?php endif; ?>
        </ul>  
    </section> -->

    <section class="upcoming-events container">
        <h3 class="upcoming-events-title"><?php the_field('upcoming_events_title'); ?></h3>
        <span class="event-wallpaper" style="background: url('<?php the_field('upcoming_events_background_image_1'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0;">
            <p class="upcoming-date"><?php the_field('upcoming_events_date_1'); ?></p>    
            <p class="template-download"><?php the_field('upcoming_events_description_1'); ?></p>	
            <a class="learn-btn"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
        </span>
        <span class="event-wallpaper" style="background: url('<?php the_field('upcoming_events_background_image_2'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0">
            <p class="upcoming-date"><?php the_field('upcoming_events_date_2'); ?></p>    
            <p class="template-download"><?php the_field('upcoming_events_description_2'); ?></p>	
            <a class="learn-btn"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
        </span>
        <span class="event-wallpaper" style="background: url('<?php the_field('upcoming_events_background_image_3'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0">
            <p class="upcoming-date"><?php the_field('upcoming_events_date_3'); ?></p>    
            <p class="template-download"><?php the_field('upcoming_events_description_3'); ?></p>	
            <a class="learn-btn"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
        </span>
    </section>

    <section class="become-a-member" id="become-a-member">

        <section class="member-description container">
            <h3 class="become-a-member-title"><?php the_field('become_a_member_title'); ?></h3>
                <section class="member-image">
                    <img src="<?php the_field('become_a_member_image'); ?>" alt="member" />
                </section>
                
                <p class="member-description"><?php the_field('become_a_member_description'); ?></p>
                <h4 class="standard-class-title"><?php the_field('standard_class_title'); ?></h4>
                
                <ul class="standard-class">
                <?php if( have_rows('standard_class_bullet_points') ): ?>
                        
                            <?php while( have_rows('standard_class_bullet_points') ): the_row();?>
                                <li>
                                    <?php the_sub_field('standard_class_bullet_point'); ?>
                                </li>
                        <?php endwhile; else:?>
                        <?php endif; ?>
                </ul>

                <a class="join-btn" href="#">Join As Standard Class<i class="fas fa-arrow-right"></i></a>
                
                <h4 class="voting-class-title"><?php the_field('voting_class_title'); ?></h4>
                
                <ul class="voting-class">
                <?php if( have_rows('voting_class_bullet_points') ): ?>
                        
                            <?php while( have_rows('voting_class_bullet_points') ): the_row();?>
                                <li>
                                    <?php the_sub_field('voting_class_bullet_point'); ?>
                                </li>
                        <?php endwhile; else: ?>
                        <?php endif; ?>  
                </ul>

                <a class="join-btn" href="#">Join As Voting Class <i class="fas fa-arrow-right"></i></a>
        </section>

        <section class="support-our-cause container">
            <h3 class="support-our-cause-title"><?php the_field('support_our_cause_title'); ?></h3>
            <p class="support-our-cause-description"><?php the_field('support_our_cause_description'); ?></p>
        </section>

    </section>

    <section class="wavy-newsletter container-fluid">
            <style>
                    .wavy-newsletter{
                        background: url('<?php the_field('newsletter_image_mobile'); ?>') no-repeat center center/cover; 
                        background-size: 100% 100%;
                    }
                    @media only screen and (min-width: 768px) {
                    .wavy-newsletter {
                    background: url('<?php the_field('newsletter_image_desktop'); ?>') no-repeat center center/cover;
                    background-size: 120% 100%;
                    background-color: transparent;
                    }
		            }
                </style>
                <h1 class="wavy-newsletter-title"><?php the_field('newsletter_title'); ?></h1>										
				<form class="wavy-newsletter-form">
				<input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('newsletter_name'); ?>" />
				<input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('newsletter_email'); ?>" />													
				<button class="btn green-empty" type="submit">Join Mailing List</button>
			</form>
		</section>
</section>
	</section><!-- .entry-content -->
</main><!-- #post-## -->

