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
		.desktop-background-container {
		background: linear-gradient(180deg,rgba(0,0,0,.25) 0,rgba(0,0,0,.25));	
		background: url('<?php the_field('landing_blog_post_image_desktop'); ?>') no-repeat center center/cover;
		}
		.mobile { display: none;
		} 
		.mobile-blog-entry-content  { display: none;} 
		}

		@media only screen and (max-width: 767px) {
		.landing {
		background: url('<?php the_field('landing_blog_post_image_mobile'); ?>') no-repeat center center/cover;
		}	
		.desktop-background-container { display: none;}
		}
</style> 	


<div class="desktop-background-container">
	<section class="desktop landing container-fluid">
		<h2><?php the_field('blog_post_title'); ?></h2>
		<p><?php the_field('blog_post_description'); ?></p>
	</section>			
	
	<section class="desktop-blog-entry-content-wrapper"> 
		<p><?php the_field('blog_post_content'); ?></p>
		<div class="overlapping-content-desktop">
			<div class="left-image">	
				<img src="<?php the_field('blog_post_content_left_image'); ?>" />
			</div>
			<div class="right-image">
				<img src="<?php the_field('blog_post_content_right_image'); ?>" />
			</div>
		</div>
	</section>

</div>		

<section class="mobile landing container-fluid">
			<section class="landing-wave"></section>
				<h2><?php the_field('blog_post_title'); ?></h2>
				<p><?php the_field('blog_post_description'); ?></p>
</section>		

<section class="mobile-blog-entry-content">
		<p><?php the_field('blog_post_content'); ?></p>
	<div class="overlapping-content-mobile">
		<div class="left-image">	
			<img src="<?php the_field('blog_post_content_left_image'); ?>" />
		</div>	
		<div class="right-image">
			<img src="<?php the_field('blog_post_content_right_image'); ?>" />
		</div>	 
	</div>	
	
</section>
		
		
<footer class="entry-footer">
	<?php refilter_entry_footer(); ?>
</footer><!-- .entry-footer -->
</main><!-- #post-## -->
