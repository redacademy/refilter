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
            
            <section class="container-content">
            <h1 class="projects-title"><?php the_field('project_description_title'); ?></h1>
            <p class="proejcts-descripton"><?php the_field('projects_description'); ?></p>
			</section>
			

		
			<div class="slide-container">
            <button class="tab-one" onclick="openTab('One')">London</button>
            <button class="tab-two" style ="background-color:red"onclick="openTab('Two')">assdasd</button>
            </div>
			<div id="One" class="tab-one-container" style="display:none">
		
            </div>

			<div id="Two" class="tab-two-container" style="display:none">
			

				
			</div>

            <section class ="container-content"> 
			<h1 class="project-partner-title"><?php the_field('project_partner_title'); ?> </h1>
			<div class="partners-container">
				
			<h2 class="partner-one"> <?php the_field('partner_one'); ?>  </h2>   
			<h2 class="partner-two"> <?php the_field('partner_two'); ?>  </h2>   
			<h2 class="partner-three"> <?php the_field('partner_three'); ?>  </h2>   
			</div>
			</section>
			

	</section><!-- .entry-content -->
</main><!-- #post-## -->

