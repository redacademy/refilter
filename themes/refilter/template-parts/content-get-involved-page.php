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
    </section>
    <div class="upcoming-events-title container">
				<h3 class="events-title"><?php the_field('upcoming_events_title'); ?></h3>
        </div>   
	<section class="upcoming-events">        
    <?php
		$args = array(  
			'post_type' => 'events',
			'posts_per_page' => 3
		);
	 
		$blog_posts = new WP_Query( $args );
		while($blog_posts->have_posts()): $blog_posts->the_post();
			get_template_part('template-parts/content', 'single-events-thumbnail');
		endwhile; wp_reset_postdata();
    ?>
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

                    <a class="join-btn" href="<?php echo site_url('standard-class'); ?>">Join As Standard Class<i class="fas fa-arrow-right"></i></a>
                    
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
                    <a class="join-btn" href="<?php echo site_url('voting-class'); ?>">Join As Voting Class <i class="fas fa-arrow-right"></i></a>
            </section>    
        </section>

    </section>

    <section class="support-our-cause container">
        <h3 class="support-our-cause-title"><?php the_field('support_our_cause_title'); ?></h3>
        <p class="support-our-cause-description"><?php the_field('support_our_cause_description'); ?></p>
        <a class="btn green-empty" href="http://<?php the_field('paypal-link'); ?>">Learn About Our Mission</a>
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

