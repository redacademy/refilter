<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Refilter
 */

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-content-learn">

    <section class="landing container-fluid">
                <style>
                    .landing{
                        background: url('<?php the_field('landing_image_mobile'); ?>') no-repeat center center/cover; 
                        background-size: 100% 100%;
                    }
                    @media only screen and (min-width: 768px) {
                    .landing {
                    background: url('<?php the_field('landing_image_desktop'); ?>') no-repeat center center/cover;
                    background-size: 100% 100%;
                    }
		            }
                </style>			
				<h1 class="landing-title"><?php the_field('learn_landing_title'); ?></h1>
				<h2 class="landing-question"><?php the_field('learn_landing_question'); ?></h2>
                <h3 class="landing-quote"><?php the_field('learn_landing_quote'); ?></h3>
                <a class="learn-btn" href="get-involved">Learn More <i class="fas fa-arrow-right fa-sm"></i></a> 
			</section>  

            <section class="how-to-help container container-content">
					<h1 class="how-to-help-title"><?php the_field('help_title'); ?></h2>			
					<p class="how-to-help-description"><?php the_field('help_description'); ?></p>	
            </section>
            
            <section class="shuffle-quotes-grid">			
            <?php if(have_rows('quotes')) :
                 $i = 0;    
                    ?>
                    <ul class="quotes-grid" id="quotes-grid">
                        <?php while( have_rows('quotes')) : the_row();
                            $i++;
                            if( $i > 9 )
                            {
                                break;
                            }
                    
                            ?>
                            <li class="single-quote"style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('<?php the_sub_field('single_quote_image_background'); ?>') no-repeat center center/cover;">   
                            <?php the_sub_field('single_quote'); ?>
                            </li>              
                        <?php endwhile; ?>
                    </ul>  
                <?php else: ?>
                    <p>Quotes to be shown soon.</p>
                <?php endif; ?>
                    </ul>
                    <button id="reshuffle-btn" class="reshuffle-btn"><i class="fas fa-random"></i>Reshuffle Cards</button>
            </section>

            <section class="wavy-quiz container-fluid">
                <style>
                    .wavy-quiz{
                        background: url('<?php the_field('wavy_quiz_image_mobile'); ?>') no-repeat center center/cover; 
                        background-size: 100% 100%;
                    }
                    @media only screen and (min-width: 768px) {
                    .wavy-quiz {
                    background: url('<?php the_field('wavy_quiz_image_desktop'); ?>') no-repeat center center/cover;
                    background-size: 120% 100%;
                    background-color: transparent;
                    }
		            }
                </style>
                <h3 class="wavy-quiz-question"><?php the_field('wavy_quiz_question'); ?></h3>
                <a class="learn-btn" href="http://<?php the_field('wavy_quiz_link'); ?>">Take the Quiz <i class="fas fa-arrow-right"></i></a>
            </section>

            <section class="help-spread container container-content">
					<h2 class="help-spread-title"><?php the_field('spread_title'); ?></h2>			
					<p class="help-template-download"><?php the_field('template_download_description'); ?></p>	
            </section>

            <section class="template-download container-fluid">
                <span class="wallpaper" style="background: url('<?php the_field('wallpaper_1'); ?>') no-repeat center center/cover; background-position-y: 90%;">
                <a class="download-btn" href="<?php the_field('wallpaper_1'); ?>" download><i class="fas fa-file-download"></i></a>                        
                </span>
                    <span class="wallpaper" style="background: url('<?php the_field('wallpaper_2'); ?>') no-repeat center center/cover; background-position-y: 90%;">
                    <a class="download-btn" href="<?php the_field('wallpaper_2'); ?>" download><i class="fas fa-file-download"></i></a>    
                </span>
                
                <span class="wallpaper" style="background: url('<?php the_field('wallpaper_3'); ?>') no-repeat center center/cover; background-position-y: 90%;">
                <a class="download-btn" href="<?php the_field('wallpaper_3'); ?>" download><i class="fas fa-file-download"></i></a>                        
                </span>
            </section>

            <section class="wavy-newsletter container-fluid">
            <style>
                    .wavy-newsletter{
                        background: url('<?php the_field('newsletter_image'); ?>') no-repeat center center/cover; 
                        background-size: 100% 100%;
                    }
                    @media only screen and (min-width: 768px) {
                    .wavy-newsletter {
                    background: url('<?php the_field('newsletter_image_desktop'); ?>') no-repeat center center/cover;
                    background-size: 120% 100%;
                    background-color: transparent;
                    }
		            }
                </style>
                <h1 class="wavy-newsletter-title"><?php the_field('newsletter_title'); ?></h1>									
				<?php echo do_shortcode('[gravityform id=3 ajax=true tabindex=49]'); ?>
		</section>
	</section><!-- .entry-content -->
</main><!-- #post-## -->