<?php
/**
 * The template for the page designated as the static front page.
 *
 * @package BIMG Base
 */

get_header(); ?>
	
	<?php// echo do_shortcode('[bimg_slider id="" class="homepage-slider"]'); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post();
               global $post; ?>
               
               <div class="homepage-header">
              <?php echo do_shortcode('[bimg_slider id="" class="homepage-slider"]'); ?>
              <div class=" homepage-header-text">
             	<hgroup class="site-width text-white">
	            	<h1><?php echo get_post_meta( $post->ID, '_bimg_home_intro_heading', true ); ?></h1>
					<h2 class="tagline"><?php echo get_post_meta( $post->ID, '_bimg_home_intro_subheading', true ); ?></h2>
				</hgroup>
              </div>
               </div>

	        <section class="intro site-width text-grey">
		        <p><?php echo get_post_meta( $post->ID, '_bimg_home_intro_summary', true ); ?></p>
		        <hr class="separator">
		    </section>
		    
		    <section class="recent-projects">
			    <h2>Our Recent Projects</h2>
		    </section>
		    
		    <section class="featured-service">
			    <h2><?php echo get_post_meta( $post->ID, '_bimg_home_service_highlight_title', true ); ?></h2>
			    <div class="section group">
				    <div class="col span_1_of_2">
					    <img src="<?php echo get_post_meta( $post->ID, '_bimg_home_service_highlight_image', true ); ?>">
				    </div>
				    <div class="col span_1_of_2">
					    <?php echo get_post_meta( $post->ID, '_bimg_home_service_highlight_description', true ); ?>
				    </div>
			    </div>
			    <hr>
			    <div class="section group">
				    <div class="col span_2_of_3">
					    Recent Blog Posts
					</div>
				    <div class="col span_1_of_3">
					    Testimonials
					</div>
			    </div>
		    </section>
		    
		    <section class="twitter">
			    Twitter
		    </section>
		    
		    <section class="clients">
			    <h2>Our Clients</h2>
			    Client Slider
		    </section>

            <?php endwhile; // end of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
