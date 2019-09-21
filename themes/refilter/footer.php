<?php
/**
 * The template for displaying the footer.
 *
 * @package Refilter
 */

?>

			</section><!-- #content -->

			<footer id="colophon" class="site-footer container" role="contentinfo">	
			
			<section class="footer-contact">
					<p><?php the_field('footer_contact'); ?>
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-instagram"></i></span>
					</p>
				</section>
					
				<section class="footer-copyright">
					<p>&copy; <?php the_field('footer_copyright'); ?></p>
					<p><?php the_field('footer_non_profit'); ?></p>
				</section>			
				</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</main><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
