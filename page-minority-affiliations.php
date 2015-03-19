<?php
/**
 * Template Name: Minority Affiliations
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post();

                global $post; 
                
                get_template_part('page', 'title');
                
                ?>
                
                
                
                <section class="codes">
			        <p><?php echo get_post_meta( $post->ID, '_bimg_about_minorities_summary', true ); ?></p>
		    	</section>
                
       	        <section class="codes">
			        <p><?php echo get_post_meta( $post->ID, '_bimg_about_minorities_description', true ); ?></p>
		    	</section>
		    
            <?php endwhile; // end of the loop. ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
