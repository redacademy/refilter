<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<style>
			.landing {
				background: url('<?php the_field('projects_page_landing_image_mobile'); ?>') no-repeat center center/cover;
			}   
			
			@media only screen and (min-width: 768px) {

				.landing {
					background: url('<?php the_field('projects_page_landing_image_desktop'); ?>') no-repeat center center/cover;
				}   
			} 
	</style>
	<section class="entry-content">
		

    	<section class="projects landing container-fluid">
			<h1 class="landing-title"><?php the_field('projects_title'); ?></h1>
			<h2 class="landing-question"><?php the_field('projects_question'); ?></h2>
			<h3 class="landing-quote"><?php the_field('projects_quote'); ?></h3>
			<a class="btn green-full" href="#">Learn More</a>
        </section>
            
        <section class="container container-content">
          	<h1 class="projects-title"><?php the_field('project_description_title'); ?></h1>
            <p class="proejcts-descripton"><?php the_field('projects_description'); ?></p>
		</section>
			

		
			<div class="slide-container">
            	<button class="tabs" data-tab="one">Current</button>
				<button class="tabs" data-tab="two">Past</button>
			</div>
			
			<div id="one" class="tab-container">

			<?php
             $loop = new WP_Query( array(
             'post_type' => 'projects',
			//   'posts_per_page' => 2,
			  'date_query'    => array(
				'column'  => 'post_date',
				'after'   => '- 30 days'
		     	)
		     	));
		 								?>
			   <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			   <a  class ="readmore-link"  href="<?php the_permalink(); ?>">
			   <div class="single-projects-container"
			   style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('<?php the_field('single_project_background_image'); ?>') no-repeat center center/cover"
			   >
			   
						<div class="content-container-info">
							
							
							<div class="title-post-container"><h3 class="the-tittle-post"> <?php the_title(); ?></h3></div>


							<p class="single-page-excerpt"><?php the_field('single_project_description'); ?></p>

							<h4 class="learn-more-arrow"> Learn More <i class="fas fa-arrow-right"></i> </h4>

						</div>
			  </div></a>

                 <!-- do stuff -->
              <?php endwhile; wp_reset_query(); ?>
		
            </div>

			<div id="two" class="tab-container" style="display:none">
			<?php
             $loop = new WP_Query( array(
             'post_type' => 'projects',
			//   'posts_per_page' => 2,
			  'date_query'    => array(
				'column'  => 'post_date',
				'order' => 'DESC'
		     	)
		     	));
		 								?>
			   <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			   <a  class ="readmore-link"  href="<?php the_permalink(); ?>">
			   <div class="single-projects-container"
			   style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('<?php the_field('single_project_background_image'); ?>') no-repeat  center center/cover "
			   >
			   
						<div class="content-container-info">
							
							
							<div class="title-post-container"><h3 class="the-tittle-post"> <?php the_title(); ?></h3></div>


							<p class="single-page-excerpt"><?php the_field('single_project_description'); ?></p>

							<h4 class="learn-more-arrow"> Learn More <i class="fas fa-arrow-right"></i> </h4>

						</div>
			  </div></a>

                 <!-- do stuff -->
              <?php endwhile; wp_reset_query(); ?>
			
				
		</div>

            <section class ="container container-content projects"> 
					<h1 class="project-partner-title"><?php the_field('project_partner_title'); ?> </h1>
					<p class="partner-description"> <?php the_field('projects_partner_description'); ?>  </p>    
				
				<div class="partners-container">
					<div class="partner-container">   
						<h1 class="partner-number"> <?php the_field('partner_one'); ?>  </h1>   
						<p class="partner-description"> <?php the_field('partner_one_description'); ?>  </p>   
						<a class="partner-website" href="<?php the_field('projects_partner_website_one'); ?>">www.pdl.smugmug.com</a>
					</div>

					<div class="partner-container">
						<h1 class="partner-number"> <?php the_field('partner_two'); ?>  </h1>      
						<p class="partner-description"> <?php the_field('partner_two_description'); ?>  </p>   
						<a class="partner-website" href="<?php the_field('projects_partner_website_two'); ?>"> @hillseyed</a>
					</div>

					<div class="partner-container">
						<h1 class="partner-number"> <?php the_field('partner_three'); ?>  </h1>      
						<p class="partner-description"> <?php the_field('partner_three_description'); ?>  </p>   
						<a class="partner-website" href="<?php the_field('projects_partner_website_three'); ?>">www.banancampphoto.com</a>
					</div>
				</div>	
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
</section><!-- #post-## -->

