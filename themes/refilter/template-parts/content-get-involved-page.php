<?php
/**
 * Template part for displaying page content in page-get-involved.php.
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
                        height: 800px;
                        }
                        }
                    </style>			
                    <h1 class="landing-title"><?php the_field('get_involved_landing_title'); ?></h1>
                    <h3 class="landing-description"><?php the_field('get_involved_landing_description'); ?></h3>
                    <a href="#become-a-member"><i class="fas fa-sort-down"></i></a> 
                </section>

    <section class="upcoming-events-content">

        <section class="upcoming-events container">
        <div class="upcoming-events-title container">
                <h3><?php the_field('upcoming_events_title'); ?></h3>
            </div>
            <span class="event-wallpaper" style="background: url('<?php the_field('upcoming_events_background_image_1'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0;">
                <div class="upcoming-date">
                    <p class="bold-date"><?php the_field('upcoming_events_date_number_1'); ?></p>
                    <p class="upper-month"><?php the_field('upcoming_events_month_1'); ?></p>
                </div>    
                <p class="event-description-1"><?php the_field('upcoming_events_description_1'); ?></p>	
                <a class="learn-btn-events"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
            </span>
            <span class="event-wallpaper" style="background: url('<?php the_field('upcoming_events_background_image_2'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0">
            <div class="upcoming-date">
                    <p class="bold-date"><?php the_field('upcoming_events_date_number_2'); ?></p>
                    <p class="upper-month"><?php the_field('upcoming_events_month_2'); ?></p>
                </div>  
                <p class="event-description"><?php the_field('upcoming_events_description_2'); ?></p>	
                <a class="learn-btn-events"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
            </span>
            <span class="event-wallpaper" style="background: url('<?php the_field('upcoming_events_background_image_3'); ?>') no-repeat center center/cover; background-size: 100% 50%; background-position-y: top; background-color: #94c8c0">
            <div class="upcoming-date">
                    <p class="bold-date"><?php the_field('upcoming_events_date_number_3'); ?></p>
                    <p class="upper-month"><?php the_field('upcoming_events_month_3'); ?></p>
                </div>  
                <p class="event-description"><?php the_field('upcoming_events_description_3'); ?></p>	
                <a class="learn-btn-events"href="#">Learn More <i class="fas fa-arrow-right"></i></a>  
            </span>
        </section>
    </section>

    <section class="become-a-member container" id="become-a-member">

    <h3 class="become-a-member-title"><?php the_field('become_a_member_title'); ?></h3>

        <section class="member-description">

            <section class="left-half">
                    <img src="<?php the_field('become_a_member_image'); ?>" alt="member" />
            </section>
            
            <section class="right-half">
                    <p class="member-description-p"><?php the_field('become_a_member_description'); ?></p>
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
        </section>

    </section>

    <section class="support-our-cause container">
        <h3 class="support-our-cause-title"><?php the_field('support_our_cause_title'); ?></h3>
        <p class="support-our-cause-description"><?php the_field('support_our_cause_description'); ?></p>
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
				<?php echo do_shortcode('[gravityform id=3 ajax=true tabindex=49]'); ?>
		</section>
</section>
	</section><!-- .entry-content -->
</main><!-- #post-## -->

