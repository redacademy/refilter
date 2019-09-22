
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
	<p><?php the_field('single_project_excerpt'); ?></p>
	<p><?php the_field('single_project_content'); ?></p>
	

	<h2>Related Posts</h2>
	<div class="related-posts-wrapper">
			
	</div>
</section>

		
	<footer class="entry-footer">
	<?php refilter_entry_footer(); ?>
</footer><!-- .entry-footer -->

</main><!-- #post-## -->
