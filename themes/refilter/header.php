<?php
/**
 * The header for our theme.
 *
 * @package Refilter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<?php wp_head(); ?>
	<style>
		.landing {
			background: url('<?php the_field('landing_image_mobile'); ?>') no-repeat center center/cover;
		}

		.about .landing {
			background: url('<?php the_field('about_page_landing_image_mobile'); ?>') no-repeat center center/cover;
			/* background: url('<?php the_field('about_page_landing_image_mobile'); ?>') no-repeat center center/cover; */
			
		}

		@media only screen and (min-width: 768px) {
			.landing {
			background: url('<?php the_field('landing_image_desktop'); ?>') no-repeat center center/cover;
			/* background: url('<?php the_field('about_page_landing_image_desktop'); ?>') no-repeat center center/cover; */
			
			}

			.wavy-newsletter {
			background: url('<?php the_field('newsletter_image_mobile'); ?>') no-repeat center center/cover;
		}	
		}
		
		.wavy-testimonial {
			background: url('<?php the_field('wavy_testimonial_image'); ?>') no-repeat center center/cover;
		}	
		
		.wavy-newsletter {
			background: url('<?php the_field('newsletter_image_desktop'); ?>') no-repeat center center/cover;
		}		
	</style>
	</head>

	<body <?php if ( is_single() ) { body_class( array( 'full-background',  ) ); } else { body_class(); } ?>>
		<main id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<nav id="site-navigation" class="main-navigation container" role="navigation">
					<section class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://refilter.van.cp.academy.red/wp-content/uploads/2019/09/refilter-logo-2.png" /></a></h1>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					</section><!-- .site-branding -->
					<section class="nav-right">
					<section class="navbar-btn">
					<a class="btn green-full get-involved-link" href="<?php echo site_url('get-involved'); ?>">Get Involved</a>	
					</section>			
						<button class="menu-toggle navbar-hamburger" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</section>
					</nav><!-- #site-navigation -->	
				</header><!-- #masthead -->

			<main id="content" class="site-content">
