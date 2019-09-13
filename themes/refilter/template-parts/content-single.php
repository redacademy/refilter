<?php
/**
 * Template part for displaying single posts.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php refilter_posted_on(); ?> / <?php refilter_comment_count(); ?> / <?php refilter_posted_by(); ?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		

		<?php 

$fields = get_fields();
$image = get_field('image'); // assigns the image field to the variable of $image


if( $fields ): ?>
    <ul>
		<?php foreach( $fields as $name => $value
		
		): ?>
		<?php the_content(); ?>
            <li><?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>



<?php 
$image = get_field('image'); // assigns the image field to the variable of $image
if( !empty($image) ){ ?> <!-- if the $image variable isn't empty, display the following: -->

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> <!--displays the URL for the image variable and also the alt tag which is entered in the WordPress media library-->

<?php }; ?> <!--ends the if statement -->

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php refilter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</main><!-- #post-## -->
