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
		.background-container {
		background: linear-gradient(180deg,rgba(0,0,0,.25) 0,rgba(0,0,0,.25));	
		background: url('<?php the_field('landing_blog_post_image_desktop'); ?>') no-repeat center center/cover;
		
			}
	</style> 

	<div class="background-container">
		<?php the_field('landing_blog_post_image_desktop'); ?>

		<section class="posts landing container-fluid">
			<section class="landing-wave"></section>
				<h2><?php the_field('blog_post_title'); ?></h2>
				<p><?php the_field('blog_post_description'); ?></p>
		</section>
		
		
		<section class="blog-entry-content">
		<img src="<?php the_field('blog_post_content_left_image'); ?>" />
				<img src="<?php the_field('blog_post_content_right_image'); ?>" />

		</section>

	</div>
	
	
	<footer class="entry-footer">
		<?php refilter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</main><!-- #post-## -->
