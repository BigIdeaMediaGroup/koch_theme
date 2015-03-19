<?php
/**
 * Template: About Us
 *
 * @package BIMG Base
 */

get_header(); ?>

	<?php echo do_shortcode('[bimg_slider post_type="slide" category="Home Page Slider" id="" class=""]'); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post();

                global $post; ?>
                
       	        <section class="intro">
			        <p><?php echo get_post_meta( $post->ID, '_bimg_home_intro_summary', true ); ?></p>
			        <hr>
		    	</section>
		    
            <?php endwhile; // end of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
