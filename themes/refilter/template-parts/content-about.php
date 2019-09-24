<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */
?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<style> 
        @media only screen and (min-width: 768px) {
        .landing {
        background: url('<?php the_field('about_page_landing_image_desktop'); ?>') no-repeat center center/cover;
        background-size: 100% 100%;
		}	
		
		}

		@media only screen and (max-width: 767px) {
		.landing {
        background: url('<?php the_field('about_page_landing_image_mobile'); ?>') no-repeat center center/cover;
        background-size: 100% 100%;
		}	
		
		}
</style>


	<article class="entry-content">
    <section class="wave"></section>
        <div class="about-title">
        </div>
        <?php the_content(); ?>

        <section class="about landing container-fluid">
            <section class="landing-wave"></section>
                <h1 class="landing-title"><?php the_field('who_we_are_page_title'); ?></h1>		
	        	<h2 class="landing-question"><?php the_field('who_we_are_page_question'); ?></h2>
				<h3 class="landing-quote"><?php the_field('who_we_are_page_quote'); ?></h3>
				<a class="btn green-full" href="#">Learn More</a>
        </section>
            <h2 class="mission-title"><?php the_field('mission_title'); ?></h2>
        <section class="mission container container-content">
            <div class="mission-1-wrapper">	
                <div class="icon-1-image-wrapper">
                    <?php 
                        $image_icon1 = get_field('mission_statement_icon_1'); // assigns the image field to the variable of $image
                        if( !empty($image_icon1) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                        <img src="<?php echo $image_icon1['url']; ?>" alt="<?php echo $image_icon1['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                    <?php }; ?> <!--ends the if statement -->
                </div>
                <h2 class="mission-statment-1"><?php the_field('mission_statement_1'); ?></h2>
                <p class="mission-description-1"><?php the_field('mission_description_1'); ?></p>
            </div>
            <div class="mission-2-wrapper">	    
                <div class="icon-2-image-wrapper">
                    <?php 
                        $image_icon2 = get_field('mission_statement_icon_2'); // assigns the image field to the variable of $image
                        if( !empty($image_icon2) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                        <img src="<?php echo $image_icon2['url']; ?>" alt="<?php echo $image_icon2['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                    <?php }; ?> <!--ends the if statement -->
                </div>
                    <h2 class="mission-statment-2"><?php the_field('mission_statement_2'); ?></h2>
                    <p class="mission-description-2"><?php the_field('mission_description_2'); ?></p>
                </div>          
        </section>

        <h2 class="who-we-are-header"><?php the_field('who_we_are_header'); ?></h2>

        <section class="who-we-are-container">
            <?php if(get_field('members')): ?>
            <?php while(the_repeater_field('members')): ?>
            <div class="staff-member-profile-wrapper">
                <div class="staff-member-image-wrapper">                  
                    <img src="<?php the_sub_field('staff_member_picture'); ?>" alt="<?php the_sub_field('alt'); ?>" />
                </div>
            <div class="social-media-icon-container">
                <div class="ln-icon-wrapper"><i class="fab fa-linkedin-in fa-3x"></i></div>
                <div class="ig-icon-wrapper"><i class="fab fa-instagram fa-3x"></i></div>
                <div class="fb-icon-wrapper"><i class="fab fa-facebook-square fa-3x"></i></div>
            </div>
            <div class="down-arrow-1" id="down-arrow-1"><i class="fas fa-chevron-down"></i></div>
            <div class="up-arrow" style="display:none;"><i class="fas fa-chevron-up"></i></div>
        </div>
        <div class="staff-member-text-wrapper">       
            <h2 class="staff-member-name"><?php the_sub_field('staff_member_name'); ?></h2>
            <h3 class="staff-member-title"><?php the_sub_field('staff_member_title'); ?></h3>
        <!-- displays the following content only on mobile arrow click -->         
            <div class="staff-member-mobile-description" style="display:none;"><?php the_sub_field('staff_member_description'); ?></div>
            <div class="mobile-fun-fact-header" style="display:none;"><h3>Planet Practice</h3></div> 
            <div class="staff-member-mobile-fun-fact" style="display:none;"><?php the_sub_field('staff_member_fun_fact'); ?></div>
        <!-- end mobile content --> 
        <p class="staff-member-description"><?php the_sub_field('staff_member_description'); ?></p>
        <div class="staff-member-fun-fact-container">
            <div class="staff-member-fun-fact-icon-wrapper">
                <img src="<?php the_sub_field('staff_member_fun_fact_icon'); ?>" alt="<?php the_sub_field('alt'); ?>" />
            </div>   
                <p class="staff-member-fun-fact"><?php the_sub_field('staff_member_fun_fact'); ?></p>
            </div>
        </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>

        <section class="wavy-newsletter container-fluid">
				<h1 class="wavy-newsletter-title"><?php the_field('newsletter_title'); ?></h1>										
				<form class="wavy-newsletter-form">
				<input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('newsletter_name'); ?>" />
				<input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('newsletter_email'); ?>" />													
				<button class="btn green-empty" type="submit">Join Mailing List</button>
			</form>
		</section>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</article><!-- .entry-content -->
</main><!-- #post-## -->