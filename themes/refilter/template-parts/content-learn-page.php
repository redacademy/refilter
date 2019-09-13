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
			</section>

            <section class="how-to-help container container-content">
					<h3 class="how-to-help-title"><?php the_field('help_title'); ?></h3>			
					<p class="how-to-help-description"><?php the_field('help_description'); ?></p>	
            </section>
            
            <section class="shuffle-quotes container">			
                <p><?php the_field('quote_1'); ?></p>
                <p><?php the_field('quote_2'); ?></p>
                <p><?php the_field('quote_3'); ?></p>
                <p><?php the_field('quote_4'); ?></p>
                <p><?php the_field('quote_5'); ?></p>
                <p><?php the_field('quote_6'); ?></p>
                <p><?php the_field('quote_7'); ?></p>
                <p><?php the_field('quote_8'); ?></p>
                <p><?php the_field('quote_9'); ?></p>
                <p><?php the_field('quote_10'); ?></p>
                <p><?php the_field('quote_11'); ?></p>
                <p><?php the_field('quote_12'); ?></p>
                <p><?php the_field('quote_13'); ?></p>
                <p><?php the_field('quote_14'); ?></p>
                <p><?php the_field('quote_15'); ?></p>
                <p><?php the_field('quote_16'); ?></p>
                <p><?php the_field('quote_17'); ?></p>
                <p><?php the_field('quote_18'); ?></p>
            </section>

            <section class="wavy-quiz container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wavy_quiz_image'); ?>') no-repeat center center/cover;">
                <p class="wavy-quiz-question"><?php the_field('wavy_quiz_question'); ?></p>
                <a class="btn green-full" href="#">Take the Quiz</a>
            </section>

            <section class="help-spread container container-content">
					<h3 class="help-spread-title"><?php the_field('spread_title'); ?></h3>			
					<p class="help-templeate-download"><?php the_field('template_download_description'); ?></p>	
            </section>

            <section class="template-download container-fluid">
                <span style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wallpaper_1'); ?>') no-repeat center center/cover;">
                    <h2 class="template-download-question"><?php the_field('wallpaper_1_question'); ?></h2>
                    <p class="template-download-description"><?php the_field('wallpaper_1_description'); ?></p>	
                    <button class="btn green-empty" type="submit">Learn More &rarr;</button>    
                </span>
                <span style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wallpaper_2'); ?>') no-repeat center center/cover;">
                    <h2 class="template-download-question"><?php the_field('wallpaper_2_question'); ?></h2>
                    <p class="template-download-description"><?php the_field('wallpaper_2_description'); ?></p>	
                    <button class="btn green-empty" type="submit">Learn More &rarr;</button>
                </span>
                
                <span style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php the_field('wallpaper_3'); ?>') no-repeat center center/cover;">
                    <h2 class="template-download-question"><?php the_field('wallpaper_3_question'); ?></h2>
                    <p class="template-download-description"><?php the_field('wallpaper_3_description'); ?></p>	
                    <button class="btn green-empty" type="submit">Learn More &rarr;</button>
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