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
                        background: url('<?php the_field('get_involved_landing_image_mobile'); ?>') no-repeat center center/cover; 
                        background-size: 100% 100%;
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
			</section>
 
        
    <!-- <section class="upcoming-events">
        <h1 class="upcoming-events-title"></h1>
        <ul class="upcoming-events-list">
            <li class="upcoming-event"></li>
            <li class="upcoming-event"></li>
            <li class="upcoming-event"></li>
        </ul>
    </section> -->

    <section class="become-a-member">
        <h1 class="become-a-member-title"><?php the_field('become_a_member_title'); ?></h1>
        
        <section class="member-options">

        <section class="member-image">
            <img src="<?php the_field('become_a_member_image'); ?>" alt="member" />
        </section>

        <section class="member-description">
            <p class="member-description"><?php the_field('become_a_member_description'); ?></p>
        
            <ul>
                <h2 class="standard-class-title"><?php the_field('stardard_class_title'); ?></h2>
                <li>
                <?php
                    if( have_rows('standard_class_bullet_points') ):
                        while ( have_rows('standard_class_bullet_points') ) : the_row();
                            the_sub_field('standard_class_bullet_point');
                        endwhile;
                    else :
    
                    endif;
                    ?>
                </li>

                <h2 class="voting-class-title"><?php the_field('voting_class_title'); ?></h2>
          
                <li>
                <?php
                    if( have_rows('voting_class_bullet_points') ):
                        while ( have_rows('voting_class_bullet_points') ) : the_row();
                            the_sub_field('voting_class_bullet_point');
                        endwhile;
                    else :
                        
                    endif;
                    ?>
                </li>
            </ul>
        </section>

        <section class="support-our-cause">
            <h1 class="support-our-cause-title"><?php the_field('support_our_cause_title'); ?></h1>
            <p class="support-our-cause-description"><?php the_field('support_our_cause_description'); ?></p>
        </section>

    </section>
</section>


	</section><!-- .entry-content -->
</main><!-- #post-## -->

