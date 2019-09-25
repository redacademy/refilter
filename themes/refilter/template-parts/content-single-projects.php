
<?php
/**
 * Template part for displaying single posts.
 *
 * @package Refilter
 */
?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->
	
<style> 
@media only screen and (min-width: 768px) {
		.full-background {
		background: linear-gradient(180deg,rgba(0,0,0,.25) 0,rgba(0,0,0,.25));	
		background: url('<?php the_field('single_project_background_image'); ?>') no-repeat center center/cover;
		}
		
		
		}

		@media only screen and (max-width: 767px) {
		.landing {
		background: url('<?php the_field('single_project_background_image'); ?>') no-repeat center center/cover;
		}	
		
		}
</style> 


<section class="mobile landing container-fluid">
		<h1> <?php the_title(); ?></h1>
			<section class="landing-wave"></section>
				<h2><?php the_field('single_project_description'); ?></h2>
				
</section>		

<section class="blog-entry-content">
	<p class="paragraph-single-projects"> <?php the_field('single_project_excerpt'); ?></p>
	<p class="paragraph-single-projects"> <?php the_field('single_project_content'); ?></p>
	

	<h2>Related Posts</h2>
	<div class="related-posts-wrapper">
		

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
			   <div class="projects-container-single-one"
			   style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('<?php the_field('single_project_background_image'); ?>') no-repeat center center/cover"
			   >
			   
						<div class="container-info-single ">
							
							
							<div class="post-container-single"><h3 class="the-tittle-post"> <?php the_title(); ?></h3></div>


							<h4 class="learn-more-arrow-single"> Learn More <i class="fas fa-arrow-right"></i> </h4>





							

						</div>
			  </div></a>

                 <!-- do stuff -->
              <?php endwhile; wp_reset_query(); ?>
		
			
	</div>
</section>

		
	<footer class="entry-footer">
	<?php refilter_entry_footer(); ?>
</footer><!-- .entry-footer -->

</main><!-- #post-## -->
