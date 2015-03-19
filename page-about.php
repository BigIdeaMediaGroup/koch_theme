<?php
/**
 * Template Name: About Us
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post();

                global $post; 
                
                get_template_part('page', 'title');
                
                ?>
                
       	        <section class="content-width">
			        <h2><?php echo get_post_meta( $post->ID, '_bimg_about_description_title', true ); ?></h2>
			        <div class="section group">
					    <div class="col span_1_of_2">
						    <img src="<?php echo get_post_meta( $post->ID, '_bimg_about_description_image', true ); ?>">
					    </div>
					    <div class="col span_1_of_2">
						    <?php echo get_post_meta( $post->ID, '_bimg_about_description_summary', true ); ?>
					    </div>
			    	</div>
		    	</section>
		    
				<section class="content-width">
					<p>The methods may have improved but our workmanship is still the time tested, good-old-fashioned-high-quality service that we’ve had for the past <?php echo (date('Y') - 1936); ?> years.
            <?php endwhile; // end of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
