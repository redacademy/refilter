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

			<h2> hekanksfkaksjas</h2>
		
            </div>

			<div id="Two" class="tab-container" style="display:none">
			<h2>lasfalmmmmmmvv</h2>
			

				
			</div>

            <section class ="container-content"> 
			<h1 class="project-partner-title"><?php the_field('project_partner_title'); ?> </h1>
			<p class="partner-description"> <?php the_field('projects_partner_description'); ?>  </p>    
			<div class="partners-container">
				<div class="partner-container">   
					<h2 class="partner-one"> <?php the_field('partner_one'); ?>  </h2>   
					<h3 class="partner-description"> <?php the_field('partner_one_description'); ?>  </h3>   
					<a class="partner-website" href="<?php the_field('projects_partner_website_one'); ?>" >www.pdl.smugmug.com</a>

				</div>

				<div class="partner-container">
			     	<h2 class="partner-two"> <?php the_field('partner_two'); ?>  </h2>      
					<h3 class="partner-description"> <?php the_field('partner_two_description'); ?>  </h3>   
					<a class="partner-website" href="<?php the_field('projects_partner_website_two'); ?>" > @hillseyed</a>

				</div>
				<div class="partner-container">
			     	<h2 class="partner-two"> <?php the_field('partner_three'); ?>  </h2>      
					<h3 class="partner-description"> <?php the_field('partner_three_description'); ?>  </h3>   
					<a class="partner-website" href="<?php the_field('projects_partner_website_three'); ?>" >www.banancampphoto.com</a>

				</div>
			</div>
			</section>




			

	</section><!-- .entry-content -->
</main><!-- #post-## -->

