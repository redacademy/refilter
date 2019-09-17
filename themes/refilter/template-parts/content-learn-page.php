<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content">

    <section class="landing container-fluid">
			<section class="landing-wave"></section>				
				<h1 class="landing-title"><?php the_field('learn_landing_title'); ?></h1>
				<h2 class="landing-question"><?php the_field('learn_landing_question'); ?></h2>
                <h3 class="landing-quote"><?php the_field('learn_landing_quote'); ?></h3>
                <button class="learn-btn" type="submit">Learn More <i class="fas fa-arrow-right"></i></button>
			</section>

            <section class="how-to-help container container-content">
					<h1 class="how-to-help-title"><?php the_field('help_title'); ?></h2>			
					<p class="how-to-help-description"><?php the_field('help_description'); ?></p>	
            </section>
            
            <section class="shuffle-quotes-grid container container-fluid">			
                <?php if( have_rows('quotes') ): ?>
                    <ul class="quotes-grid">
                        <?php while( have_rows('quotes') ): the_row();?>
                            <li class="single-quote" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_sub_field('single_quote_image_background'); ?>') no-repeat center center/cover;">
                                <?php the_sub_field('single_quote'); ?>
                            </li>
                        <?php endwhile; ?>
                        <button class="reshuffle-btn" type="submit"><i class="fas fa-random"></i>Reshuffle Cards</button>
                    </ul>
                <?php endif; ?>
            </section>

            <section class="wavy-quiz container-fluid" style="background: url('<?php the_field('wavy_quiz_image_mobile'); ?>') no-repeat center center/cover; background-size: 100% 100%">
                <h3 class="wavy-quiz-question"><?php the_field('wavy_quiz_question'); ?></h3>
                <button class="learn-btn" type="submit">Take the Quiz <i class="fas fa-arrow-right"></i></button>
            </section>

            <section class="help-spread container container-content">
					<h3 class="help-spread-title"><?php the_field('spread_title'); ?></h3>			
					<p class="help-template-download"><?php the_field('template_download_description'); ?></p>	
            </section>

            <section class="template-download container-fluid">
                <span class="wallpaper" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wallpaper_1'); ?>') no-repeat center center/cover;">
                    <a class="download-btn" href="#"><i class="fas fa-file-download"></i></a>    
                    <h2 class="template-download-question"><?php the_field('wallpaper_1_question'); ?></h2>
                    <p class="template-download-description"><?php the_field('wallpaper_1_description'); ?></p>	
                    <a class="learn-btn"href="#">Learn More <i class="fas fa-arrow-right"></i></a>    
                </span>
                <span class="wallpaper" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wallpaper_2'); ?>') no-repeat center center/cover;">
                    <a class="download-btn" href="#"><i class="fas fa-file-download"></i></a>    
                    <h2 class="template-download-question"><?php the_field('wallpaper_2_question'); ?></h2>
                    <p class="template-download-description"><?php the_field('wallpaper_2_description'); ?></p>	
                    <a class="learn-btn" href="#">Learn More <i class="fas fa-arrow-right"></i></a>
                </span>
                
                <span class="wallpaper" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wallpaper_3'); ?>') no-repeat center center/cover;">
                    <a class="download-btn" href="#"><i class="fas fa-file-download"></i></a>    
                    <h2 class="template-download-question"><?php the_field('wallpaper_3_question'); ?></h2>
                    <p class="template-download-description"><?php the_field('wallpaper_3_description'); ?></p>	
                    <a class="learn-btn" href="#">Learn More <i class="fas fa-arrow-right"></i></a>
                </span>
            </section>

            <section class="wavy-newsletter container-fluid">
				<h1 class="wavy-newsletter-title"><?php the_field('newsletter_title'); ?></h1>										
				<form class="wavy-newsletter-form">
                    <input class="wavy-newsletter-name" type="text" placeholder="<?php the_field('newsletter_name'); ?>" />
                    <input class="wavy-newsletter-email" type="text" placeholder="<?php the_field('newsletter_email'); ?>" />													
                    <button class="btn green-empty" type="submit">Join Mailing List</button>
			    </form>
		    </section>
	</section><!-- .entry-content -->
</main><!-- #post-## -->