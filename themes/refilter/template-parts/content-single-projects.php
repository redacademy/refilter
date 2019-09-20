<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content " style="background: url('<?php the_field('single_project_background_image'); ?>') no-repeat center center; background-size:cover; height:100vh;">



<p class="partner-description"> <?php the_field('single_project_excerpt'); ?>  </p>   



	</section><!-- .entry-content -->
</main><!-- #post-## -->

