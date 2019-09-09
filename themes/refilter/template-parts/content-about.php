<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="entry-content">
	
    <section class="wave"></section>
        <div class="about-title">
            <?php the_title( '<h1 class="about-entry-title">', '</h1>' ); ?>
        </div>
        <?php the_content(); ?>

        <section class="landing container-fluid">
			<section class="landing-wave"></section>				
	        	<h2 class="landing-question"><?php the_field('who_we_are_page_question'); ?></h2>
				<h3 class="landing-quote"><?php the_field('who_we_are_page_quote'); ?></h3>
				<a class="btn green-full" href="#">Learn More</a>
		    </section>

        <section class="mission-container">
		    <h2 class="mission-title"><?php the_field('mission_title'); ?></h3>			
            <div class="icon-1-image-wrapper">
                <?php 
                    $image_icon1 = get_field('mission_statement_icon_1'); // assigns the image field to the variable of $image
                    if( !empty($image_icon1) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                    <img src="<?php echo $image_icon1['url']; ?>" alt="<?php echo $image_icon1['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                <?php }; ?> <!--ends the if statement -->
            </div>
            <h2 class="mission-statment-1"><?php the_field('mission_statement_1'); ?></h2>
            <p class="mission-description-1"><?php the_field('mission_description_1'); ?></p>
            <div class="icon-2-image-wrapper">
                <?php 
                    $image_icon2 = get_field('mission_statement_icon_2'); // assigns the image field to the variable of $image
                    if( !empty($image_icon2) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                    <img src="<?php echo $image_icon2['url']; ?>" alt="<?php echo $image_icon2['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                <?php }; ?> <!--ends the if statement -->
            </div>         
            <h2 class="mission-statment-2"><?php the_field('mission_statement_2'); ?></h2>
            <p class="mission-description-2"><?php the_field('mission_description_2'); ?></p>          
        </section>
        
        <section class="who-we-are-container">
            <h2 class="who-we-are-header"><?php the_field('who_we_are_header'); ?></h2>
            <div class="staff-member-1-image-wrapper">
                <?php 
                    $image_member1 = get_field('staff_member_1_picture'); // assigns the image field to the variable of $image
                    if( !empty($image_member1) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                    <img src="<?php echo $image_member1['url']; ?>" alt="<?php echo $image_member1['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                <?php }; ?> <!--ends the if statement -->
            </div>    
            <h2 class="staff-member-name-1"><?php the_field('staff_member_1_name'); ?></h2>
            <h3 class="staff-member-title-1"><?php the_field('staff_member_1_title'); ?></h3>
            <div class="social-media-icon-container">
                <div class="ln-icon-wrapper"><i class="fab fa-linkedin-in fa-3x"></i></div>
                <div class="ig-icon-wrapper"><i class="fab fa-instagram fa-3x"></i></div>
                <div class="fb-icon-wrapper"><i class="fab fa-facebook-square fa-3x"></i></div>
            </div>                
            <div class="staff-member-2-image-wrapper">
                <?php 
                    $image_member2 = get_field('staff_member_2_picture'); // assigns the image field to the variable of $image
                    if( !empty($image_member2) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                    <img src="<?php echo $image_member2['url']; ?>" alt="<?php echo $image_member2['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                <?php }; ?> <!--ends the if statement -->
            </div>    
            <h2 class="staff-member-name-2"><?php the_field('staff_member_2_name'); ?></h2>
            <h3 class="staff-member-title-2"><?php the_field('staff_member_2_title'); ?></h3>
            <div class="social-media-icon-container">
                <div class="ln-icon-wrapper"><i class="fab fa-linkedin-in fa-3x"></i></div>
                <div class="ig-icon-wrapper"><i class="fab fa-instagram fa-3x"></i></div>
                <div class="fb-icon-wrapper"><i class="fab fa-facebook-square fa-3x"></i></div>
            </div>    
            <div class="staff-member-3-image-wrapper">
                <?php 
                    $image_member3 = get_field('staff_member_3_picture'); // assigns the image field to the variable of $image
                    if( !empty($image_member3) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                    <img src="<?php echo $image_member3['url']; ?>" alt="<?php echo $image_member3['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                <?php }; ?> <!--ends the if statement -->
            </div>    
            <h2 class="staff-member-name-3"><?php the_field('staff_member_3_name'); ?></h2>
            <h3 class="staff-member-title-3"><?php the_field('staff_member_3_title'); ?></h3>
            <div class="social-media-icon-container">
                <div class="ln-icon-wrapper"><i class="fab fa-linkedin-in fa-3x"></i></div>
                <div class="ig-icon-wrapper"><i class="fab fa-instagram fa-3x"></i></div>
                <div class="fb-icon-wrapper"><i class="fab fa-facebook-square fa-3x"></i></div>
            </div>    
            <div class="staff-member-4-image-wrapper">
                <?php 
                    $image_member4 = get_field('staff_member_4_picture'); // assigns the image field to the variable of $image
                    if( !empty($image_member4) ){ ?> <!-- if the $image variable isn't empty, display the following: -->
                    <img src="<?php echo $image_member4['url']; ?>" alt="<?php echo $image_member4['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->
                <?php }; ?> <!--ends the if statement -->
            </div>    
            <h2 class="staff-member-name-4"><?php the_field('staff_member_4_name'); ?></h2>
            <h3 class="staff-member-title-4"><?php the_field('staff_member_4_title'); ?></h3>
            <div class="social-media-icon-container">
                <div class="ln-icon-wrapper"><i class="fab fa-linkedin-in fa-3x"></i></div>
                <div class="ig-icon-wrapper"><i class="fab fa-instagram fa-3x"></i></div>
                <div class="fb-icon-wrapper"><i class="fab fa-facebook-square fa-3x"></i></div>
            </div>    
        </section>

        <form class="wavy-newsletter container-fluid">
				<h1 class="wavy-newsletter-title"><?php the_field('newsletter_title'); ?></h1>										
				<input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('newsletter_name'); ?>" />
				<input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('newsletter_email'); ?>" />													
				<button class="btn green-empty" type="submit">Join Mailing List</button>
		</form>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</article><!-- .entry-content -->
</main><!-- #post-## -->