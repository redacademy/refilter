<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content-container">
    
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
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->