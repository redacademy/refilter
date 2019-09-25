<?php
/**
 * Template part for displaying page content in page-standard-class.php.
 *
 * @package Refilter
 */

?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
	
	<section class="container-fluid membership">
        <h1><?php the_field('standard_member_form_title'); ?></h1>
        <?php the_content(); ?>
	</section>

</section><!-- .entry-content -->
</main><!-- #post-## -->

