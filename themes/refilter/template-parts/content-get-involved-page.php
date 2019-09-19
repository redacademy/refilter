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
 
        
    <!-- <section class="upcoming-events">
        <h1 class="upcoming-events-title"></h1>
        <ul class="upcoming-events-list">
            <li class="upcoming-event"></li>
            <li class="upcoming-event"></li>
            <li class="upcoming-event"></li>
        </ul>
    </section> -->

    <section class="become-a-member" id="become-a-member">
        
        
        <section class="member-options">
        <section class="member-description container">
        <h1 class="become-a-member-title"><?php the_field('become_a_member_title'); ?></h1>
            <section class="member-image">
                <img src="<?php the_field('become_a_member_image'); ?>" alt="member" />
            </section>
            <p class="member-description"><?php the_field('become_a_member_description'); ?></p>
            <h4 class="standard-class-title"><?php the_field('standard_class_title'); ?></h4>
            <ul>
             <?php if( have_rows('standard_class_bullet_points') ): ?>
                    
                        <?php while( have_rows('standard_class_bullet_points') ): the_row();?>
                            <li>
                                <?php the_sub_field('standard_class_bullet_point'); ?>
                            </li>
                     <?php endwhile; else:?>
                     
                     <?php endif; ?>
            </ul>
            <h4 class="voting-class-title"><?php the_field('voting_class_title'); ?></h4>
            <ul>
             <?php if( have_rows('voting_class_bullet_points') ): ?>
                    
                        <?php while( have_rows('voting_class_bullet_points') ): the_row();?>
                            <li>
                                <?php the_sub_field('voting_class_bullet_point'); ?>
                            </li>
                     <?php endwhile; else: ?>
                     <?php endif; ?>
            </ul>
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

