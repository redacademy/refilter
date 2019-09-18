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
			<section class="landing-wave"></section>				
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
            <button class="tab-one" onclick="openTab('One')">London</button>
			<button class="tab-two" onclick="openTab('Two')">assdasd</button>
			
            </div>
			<div id="One" class="tab-container" style="display:none">

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
               <?php while ( $loop->have_posts() ) : $loop->the_post(); the_title(); ?>
                <a href="<?php the_permalink(); ?>">permalink</a>

                 <!-- do stuff -->
              <?php endwhile; wp_reset_query(); ?>


		
            </div>

			<div id="Two" class="tab-container" style="display:none">
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
<?php while ( $loop->have_posts() ) : $loop->the_post(); the_title(); ?>

<!-- do stuff -->
<?php endwhile; wp_reset_query(); ?>

			

				
			</div>

            <section class ="container-content"> 
			<h1 class="project-partner-title"><?php the_field('project_partner_title'); ?> </h1>
			<p class="partner-description"> <?php the_field('projects_partner_description'); ?>  </p>    
			<div class="partners-container">
				<div class="partner-container">   
					<h1 class="partner-one"> <?php the_field('partner_one'); ?>  </h1>   
					<p class="partner-description"> <?php the_field('partner_one_description'); ?>  </p>   
					<a class="partner-website" href="<?php the_field('projects_partner_website_one'); ?>" >www.pdl.smugmug.com</a>

				</div>

				<div class="partner-container">
			     	<h1 class="partner-two"> <?php the_field('partner_two'); ?>  </h1>      
					<p class="partner-description"> <?php the_field('partner_two_description'); ?>  </p>   
					<a class="partner-website" href="<?php the_field('projects_partner_website_two'); ?>" > @hillseyed</a>

				</div>
				<div class="partner-container">
			     	<h1 class="partner-two"> <?php the_field('partner_three'); ?>  </h1>      
					<p class="partner-description"> <?php the_field('partner_three_description'); ?>  </p>   
					<a class="partner-website" href="<?php the_field('projects_partner_website_three'); ?>" >www.banancampphoto.com</a>

				</div>
			</div>
			</section>




			

	</section><!-- .entry-content -->
</main><!-- #post-## -->

